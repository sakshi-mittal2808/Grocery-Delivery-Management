from flask import Flask, render_template, request, jsonify
from pymongo import MongoClient
from recommendation_engine import recommendation_engine
from bson import ObjectId

app = Flask(__name__, template_folder='views')

# Connect to MongoDB
client = MongoClient("mongodb://localhost:27017/")
db = client['grocery4u']
products_collection = db['products']
users_collection = db['users']

@app.route('/cart')
def cart():
    # In a real application, you would get the user ID from the session
    # For now, we'll just get the cart items directly from the request
    user = users_collection.find_one({'email': request.args.get('email')})
    if not user or not user.get('cart'):
        return render_template('cart.ejs', user={'cart': []}, bill=0, recommended=[])

    # Get cart items
    cart_items = [item['productId'] for item in user['cart']]
    cart_products = list(products_collection.find({'_id': {'$in': cart_items}}))
    
    # Calculate bill
    bill = sum(int(p['price']) * next(
        (item['quantity'] for item in user['cart'] if item['productId'] == p['_id']), 1
    ) for p in cart_products)

    # Get recommendations
    recommended = recommendation_engine.get_recommendations(cart_items)
    
    return render_template('cart.ejs', user={'cart': cart_products}, bill=bill, recommended=recommended)

@app.route('/', methods=['GET'])
def index():
    # Rendering shop page without any category-based recommendations
    return render_template('shop.ejs', recommended=[])

@app.route('/recommend', methods=['POST'])
def recommend():
    data = request.json
    cart_items = data.get('cart', [])
    
    # Convert string IDs to ObjectId
    cart_items = [ObjectId(id) for id in cart_items]
    
    # Get recommendations
    recommendations = recommendation_engine.get_recommendations(cart_items)
    
    # Convert ObjectId to string for JSON serialization
    for rec in recommendations:
        rec['_id'] = str(rec['_id'])
    
    return jsonify(recommendations)

if __name__ == '__main__':
    print("🚀 Starting Flask App...")
    print("💡 Recommendation engine initialized and ready!")
    app.run(debug=True)

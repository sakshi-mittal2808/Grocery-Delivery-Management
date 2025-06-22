import numpy as np
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity
from pymongo import MongoClient
import pandas as pd
from collections import defaultdict

class RecommendationEngine:
    def __init__(self):
        # Connect to MongoDB
        self.client = MongoClient("mongodb://localhost:27017/")
        self.db = self.client['grocery4u']
        self.products_collection = self.db['products']
        
        # Initialize TF-IDF vectorizer
        self.tfidf = TfidfVectorizer(stop_words='english')
        
        # Cache for product vectors
        self.product_vectors = None
        self.product_ids = None
        self.update_product_vectors()

    def update_product_vectors(self):
        """Update the product vectors based on current database state"""
        # Get all products
        products = list(self.products_collection.find())
        
        # Create content strings for each product
        content_strings = []
        self.product_ids = []
        
        for product in products:
            # Combine category and tags into a single string
            content = f"{product.get('category', '')} "
            tags = product.get('tags', [])
            if isinstance(tags, list):
                content += ' '.join(tags)
            content_strings.append(content.lower())
            self.product_ids.append(str(product['_id']))
            
        # Create TF-IDF matrix
        self.product_vectors = self.tfidf.fit_transform(content_strings)

    def get_recommendations(self, cart_items, top_n=6):
        """
        Get product recommendations based on items in cart
        Args:
            cart_items: List of product IDs in the cart
            top_n: Number of recommendations to return
        Returns:
            List of recommended product documents
        """
        if not cart_items:
            return self._get_popular_products(top_n)

        # Get cart items' vectors
        cart_indices = [self.product_ids.index(str(item_id)) for item_id in cart_items 
                       if str(item_id) in self.product_ids]
        
        if not cart_indices:
            return self._get_popular_products(top_n)

        # Calculate average cart vector
        cart_vectors = self.product_vectors[cart_indices]
        avg_cart_vector = cart_vectors.mean(axis=0)

        # Calculate similarities
        similarities = cosine_similarity(avg_cart_vector, self.product_vectors)
        similar_indices = similarities.argsort()[0][::-1]

        # Filter out items already in cart
        recommended_indices = [idx for idx in similar_indices 
                             if str(self.product_ids[idx]) not in [str(id) for id in cart_items]]

        # Get top N recommendations
        top_indices = recommended_indices[:top_n]
        recommended_ids = [self.product_ids[idx] for idx in top_indices]

        # Fetch product details from database
        recommendations = list(self.products_collection.find({
            '_id': {'$in': [ObjectId(pid) for pid in recommended_ids]}
        }))

        # Sort recommendations by the order of similarity
        recommendations.sort(key=lambda x: recommended_ids.index(str(x['_id'])))
        
        return recommendations

    def _get_popular_products(self, n=6):
        """Get most popular products when no cart items exist"""
        # In a real application, you would implement this based on
        # order history, ratings, etc. For now, return random products
        return list(self.products_collection.aggregate([
            {'$sample': {'size': n}}
        ]))

    def update_product_tags(self, product_id, tags):
        """Update product tags and refresh vectors"""
        self.products_collection.update_one(
            {'_id': product_id},
            {'$set': {'tags': tags}}
        )
        self.update_product_vectors()

# Create a singleton instance
recommendation_engine = RecommendationEngine() 
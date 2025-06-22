const express = require("express");
const app = express();
const cookieParser = require("cookie-parser");
const path = require("path");
const expressSession = require("express-session");
const flash = require("connect-flash");

// Load environment variables first
require("dotenv").config();

// Verify required environment variables
const requiredEnvVars = ['STRIPE_PUBLIC_KEY', 'STRIPE_SECRET_KEY'];
const missingEnvVars = requiredEnvVars.filter(envVar => !process.env[envVar]);
if (missingEnvVars.length > 0) {
    console.error('Missing required environment variables:', missingEnvVars);
    process.exit(1);
}

// Import database connection
const db = require("./config/mongoose-connection");

// Import routes
const indexRouter = require("./routes/indexRouter");
const ownersRouter = require("./routes/ownersRouter");
const usersRouter = require("./routes/usersRouter");
const productsRouter = require("./routes/productsRouter");
const paymentRoutes = require('./routes/payments');
const wishlistRoutes = require('./routes/wishlist');
const orderRoutes = require('./routes/orderRoutes');
const cartRoutes = require('./routes/cart');
const paymentsRouter = require("./routes/payments");

// Set NODE_ENV to development by default
process.env.NODE_ENV = process.env.NODE_ENV || 'development';

// View engine setup
app.set("view engine", "ejs");
app.set("views", path.join(__dirname, "views"));

// Middleware
app.use(express.json());
app.use(express.urlencoded({ extended: true }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, "public")));

// Session configuration
app.use(
    expressSession({
        resave: false,
        saveUninitialized: false,
        secret: process.env.EXPRESS_SESSION_SECRET || 'your_session_secret',
        cookie: {
            maxAge: 1000 * 60 * 60 * 24 * 7, // 1 week
            secure: process.env.NODE_ENV === 'production'
        }
    })
);

// Flash messages
app.use(flash());

// Make certain variables available to all views
app.use((req, res, next) => {
    res.locals.stripePublicKey = process.env.STRIPE_PUBLIC_KEY;
    next();
});

// Mount routes
app.use("/", indexRouter);
app.use("/payments", paymentRoutes);
app.use("/wishlist", wishlistRoutes);
app.use("/orders", orderRoutes);
app.use("/cart", cartRoutes);

app.use("/owners", ownersRouter);
app.use("/users", usersRouter);
app.use("/products", productsRouter);
app.use("/payments", paymentsRouter);

// Error handling
app.use((err, req, res, next) => {
    console.error('Error:', err);
    
    // Get cart count if user is logged in
    let cartCount = 0;
    if (req.user && req.user.cart) {
        cartCount = req.user.cart.reduce((total, item) => total + item.quantity, 0);
    }

    // Determine if this is a payment-related error
    const isPaymentError = err.message && (
        err.message.toLowerCase().includes('payment') || 
        err.message.toLowerCase().includes('stripe')
    );

    res.status(err.status || 500).render('error', {
        title: isPaymentError ? 'Payment Error' : 'Error',
        message: isPaymentError 
            ? 'There was a problem processing your payment. Please try again.' 
            : (err.message || 'Something went wrong'),
        error: process.env.NODE_ENV === 'development' ? err : {},
        cartCount: cartCount
    });
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log(`Server is running at http://localhost:${PORT}`);
    
    // Only show environment and configuration info in development
    if (process.env.NODE_ENV === 'development') {
    console.log('Environment:', process.env.NODE_ENV);
    
        // Validate Stripe configuration silently
    if (!process.env.STRIPE_PUBLISHABLE_KEY || !process.env.STRIPE_SECRET_KEY) {
            console.log('Note: Stripe keys not configured. Payment features will be limited.');
        }
    }
});

module.exports = app;

DIRECTORY
coffee-shop/
│
├── src/
│   ├── config.php        # DB connection + global settings
│   ├── functions.php     # Helper functions (validation, etc.)
│   ├── header.php        # Common header (nav, CSS/JS links)
│   ├── footer.php        # Common footer (scripts, closing tags)
│   ├── styles.css        # Styles (or move to assets/css/)
│
│   ├── home.php          # Homepage (landing)
│   ├── menu.php          # Coffee menu (from database)
│   ├── about.php         # About the shop
│   ├── contact.php       # Contact form (with email or DB storage)
│
│   ├── register.php      # User registration
│   ├── login.php         # User login
│   ├── dashboard.php     # User dashboard (after login)
│   ├── logout.php        # End session
│
│   ├── cart.php          # Shopping cart page
│   ├── checkout.php      # Checkout / order form
│   ├── orders.php        # View orders (user side or admin)
│
│   ├── admin/            # 🔒 Admin panel
│   │   ├── index.php     # Admin login
│   │   ├── dashboard.php # Admin dashboard
│   │   ├── products.php  # Manage coffee products
│   │   ├── orders.php    # Manage customer orders
│   │   ├── users.php     # Manage registered users
│
├── database.sql          # SQL schema (tables: users, products, orders, etc.)
├── assets/               # CSS, JS, images
│   ├── css/
│   ├── js/
│   └── images/
└── .htaccess             # (optional) clean URLs
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



🗄️ Database (database.sql)

You’ll likely need at least these tables:

users (id, name, email, password, role)

products (id, name, price, description, image)

orders (id, user_id, total_price, status, created_at)

order_items (id, order_id, product_id, qty, price)

![alt text](image.png)

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Website ng mga bisacolano</title>
      <link rel="stylesheet" href="/src/styles.css">
      <link rel="icon" type="image/png" href="../images/favicon-16x16.png">
      <link
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
            rel="stylesheet"
        />
</head>
<body>
        <header>
            <nav class="navbar">
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="/HTML/HomePage.html" class="nav-link">Home.</a>
                    </li>
                    <li class="nav-item">
                        <a href="/HTML/AboutUs.html" class="nav-link"
                            >About Us.</a
                        >
                    </li>
                    <li class="nav-item">
                        <a href="/HTML/Menu.html" class="nav-link">Menu.</a>
                    </li>
                    <li class="nav-item">
                        <a href="/HTML/Gallery.html" class="nav-link"
                            >Gallery.</a
                        >
                    </li>
                </ul>
                <a href="../HTML/HomePage.html">
                    <div class="nav-logo">
                        <h1 class="logo1">DAILY</h1>
                        <h1 class="logo2">CHILL</h1>
                    </div>
                </a>
                <ul class="nav-menu-right">
                    <li class="nav-item">
                        <a href="/HTML/Form.html" class="nav-link"
                            ><i class="bi bi-person-circle"></i>Sign-Up.</a
                        >
                    </li>
                    <li class="nav-item">
                        <span
                            class="nav-link"
                            id="cartIcon"
                            style="cursor: pointer"
                        >
                            <i class="bi bi-cart-fill"></i>Cart. (<span
                                class="cart-count"
                                >0</span
                            >)
                        </span>
                    </li>
                </ul>
            </nav>
        </header>

        <main>
            <!-- Hero Section -->
            <section class="hero-section">
                <div class="hero-video-wrapper">
                    <video class="hero-video" autoplay muted loop>
                        <source src="/Videos/bgedit.mp4" type="video/mp4" />
                    </video>
                </div>
                <div class="section-content">
                    <div class="hero-details">
                        <h1 class="title">Grind then Unwind.</h1>
                        <p class="description">
                            Your go-to spot for coffee and a cozy
                            atmosphere.
                        </p>
                        <a href="/HTML/Menu.html" class="unified-button">
                            <span>Shop Now!</span>
                        </a>
                    </div>
                </div>
            </section>

            <!-- About Us Section -->

            <section class="new-section">
                <div class="section-container">
                    <div class="section-item">
                        <img
                            class="icon1"
                            src="/Images/Logo-Icons/1.png"
                            alt="Icon 1"
                        />
                        <h3>Fresh & Local in Every Sip</h3>
                        <p>
                            At Daily Chill, we craft our drinks with locally
                            sourced ingredients and premium beans, blending
                            quality and community in every cup.
                        </p>
                    </div>
                    <div class="section-item">
                        <img
                            class="icon2"
                            src="/Images/Logo-Icons/2.png"
                            alt="Icon 2"
                        />
                        <h3>Your everyday escape.</h3>
                        <p>
                            Daily Chill is where great coffee meets great
                            company, bringing a cozy café experience to
                            everyone—students, night shift workers, and
                            travelers alike.
                        </p>
                    </div>
                    <div class="section-item">
                        <img
                            class="icon3"
                            src="/Images/Logo-Icons/3.png"
                            alt="Icon 3"
                        />
                        <h3>Coffee with a View.</h3>
                        <p>
                            We blend handcrafted drinks with breathtaking
                            overlooks—because great moments deserve an equally
                            great backdrop.
                        </p>
                    </div>
                </div>
            </section>

            <section class="about-hp-section">
                <div class="about-hp-video-wrapper">
                    <video class="about-hp-video" autoplay muted loop>
                        <source src="/Videos/vid1.mp4" type="video/mp4" />
                    </video>
                </div>
                <div class="about-hp-details">
                    <div class="about-hp-title-large">About Us</div>
                    <p class="about-hp-description">
                        At Daily Chill, we've created a space that truly
                        welcomes everyone. Whether you're a night shift worker
                        needing an after-hours energy boost, a student looking
                        for the perfect study spot with affordable meal combos,
                        or a traveler taking in Antipolo's beautiful mountain
                        views, we've got you covered.
                    </p>
                    <div class="social-and-button-container">
                        <div class="social-link-list">
                            <a
                                href="https://www.facebook.com/dailychillpagrai"
                                target="_blank"
                                class="social-link"
                            >
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a
                                href="https://www.instagram.com/dailychillpagrai"
                                target="_blank"
                                class="social-link"
                            >
                                <i class="bi bi-instagram"></i>
                            </a>
                        </div>

                        <a href="/HTML/AboutUs.html">
                            <button class="unified-button">
                                <span>Our Story</span>
                            </button>
                        </a>
                    </div>
                </div>
            </section>

            <!--Popular Menu Section-->
            <section class="popular-menu-section">
                <div class="swiper mySwiper">
                    <div class="popular-infos">
                        <div class="popular-title">Popular Choices</div>
                        <div class="popular-description">
                            <p>Can't decide? Start with these bestsellers!</p>
                            <p>Our regulars swear by these delicious picks.</p>
                        </div>
                    </div>

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="menu-card">
                                <img
                                    src="/Images/Coffee/Matcha Coffee Fusion.jpg"
                                    alt="Matcha Coffee Fusion"
                                    class="menu-img"
                                />
                                <div class="menu-info">
                                    <h3>Matcha Coffee Fusion</h3>
                                    <p>
                                        "Vibrant matcha and espresso in one cup.
                                        A fresh twist for adventurous coffee
                                        drinkers."
                                    </p>
                                    <div class="menu-price">₱125.00</div>
                                    <hr />
                                    <a href="/HTML/Menu.html">
                                        <button class="unified-button">
                                            <span>BUY NOW</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="menu-card">
                                <img
                                    src="/Images/Coffee/French Vanilla.jpg"
                                    alt="French Vanilla"
                                    class="menu-img"
                                />
                                <div class="menu-info">
                                    <h3>French Vanilla</h3>
                                    <p>
                                        "A classic favorite with a creamy
                                        vanilla twist for a smooth, sweet
                                        finish."
                                    </p>
                                    <div class="menu-price">₱100.00</div>
                                    <hr />
                                    <a href="/HTML/Menu.html">
                                        <button class="unified-button">
                                            <span>BUY NOW</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="menu-card">
                                <img
                                    src="/Images/Coffee/Dark Chocolate Seasalt.jpg"
                                    alt="Dark Chocolate Seasalt"
                                    class="menu-img"
                                />
                                <div class="menu-info">
                                    <h3>Dark Chocolate Seasalt</h3>
                                    <p>
                                        "Rich dark chocolate with a hint of sea
                                        salt for a bold, decadent treat."
                                    </p>
                                    <div class="menu-price">₱125.00</div>
                                    <hr />
                                    <a href="/HTML/Menu.html">
                                        <button class="unified-button">
                                            <span>BUY NOW</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="menu-card">
                                <img
                                    src="/Images/Coffee/Caffe Mocha.jpg"
                                    alt="Caffe Mocha"
                                    class="menu-img"
                                />
                                <div class="menu-info">
                                    <h3>Caffe Mocha</h3>
                                    <p>
                                        "Rich chocolate and bold espresso in
                                        harmonious blend, made for chocolate
                                        lovers."
                                    </p>
                                    <div class="menu-price">₱90.00</div>
                                    <hr />
                                    <a href="/HTML/Menu.html">
                                        <button class="unified-button">
                                            <span>BUY NOW</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="menu-card">
                                <img
                                    src="/Images/Coffee/Vanilla Salty Cream.jpg"
                                    alt="Vanilla Salty Cream"
                                    class="menu-img"
                                />
                                <div class="menu-info">
                                    <h3>Vanilla Salty Cream</h3>
                                    <p>
                                        "Sweet vanilla coffee with salty cream.
                                        The perfect balance of cozy and
                                        crave-worthy."
                                    </p>
                                    <div class="menu-price">₱120.00</div>
                                    <hr />
                                    <a href="/HTML/Menu.html">
                                        <button class="unified-button">
                                            <span>BUY NOW</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="menu-card">
                                <img
                                    src="/Images/Coffee/Taro Cream.jpg"
                                    alt="Taro Cream"
                                    class="menu-img"
                                />
                                <div class="menu-info">
                                    <h3>Taro Cream</h3>
                                    <p>
                                        "Creamy taro meets smooth coffee. A a
                                        uniquely comforting earthy escape in
                                        every sip."
                                    </p>
                                    <div class="menu-price">₱125.00</div>
                                    <hr />
                                    <a href="/HTML/Menu.html">
                                        <button class="unified-button">
                                            <span>BUY NOW</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-buttons">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <!-- Testimonial Section -->
            <section class="testimonial-section">
                <div class="testimonial-infos">
                    <div class="testimonial-header">What Our Customers Say</div>
                    <div class="testimonial-desc">
                        <p>Feedbacks from our Daily Chill community.</p>
                        <p>See why people love to grind and unwind with us!</p>
                    </div>
                </div>
                <div class="marquee enable-animation marquee--hover-pause">
                    <div class="marquee__content">
                        <div class="testimonial-card">
                            <img
                                src="/Images/Gallery/6.jpg"
                                alt="User 1"
                                class="testimonial-img"
                            />
                            <div class="testimonial-feedback">
                                "Great coffee and cozy place!"
                            </div>
                            <div class="testimonial-name">– Santos</div>
                            <div class="testimonial-rating">★★★★★</div>
                        </div>
                        <div class="testimonial-card">
                            <img
                                src="/Images/Gallery/5.jpg"
                                alt="User 2"
                                class="testimonial-img"
                            />
                            <div class="testimonial-feedback">
                                "Perfect for late-night study sessions."
                            </div>
                            <div class="testimonial-name">– Dela Cruz</div>
                            <div class="testimonial-rating">★★★★☆</div>
                        </div>
                        <div class="testimonial-card">
                            <img
                                src="/Images/Gallery/4.jpg"
                                alt="User 3"
                                class="testimonial-img"
                            />
                            <div class="testimonial-feedback">
                                "Love the mountain views!"
                            </div>
                            <div class="testimonial-name">– Reyes</div>
                            <div class="testimonial-rating">★★★★★</div>
                        </div>
                        <div class="testimonial-card">
                            <img
                                src="/Images/Gallery/1.jpg"
                                alt="User 4"
                                class="testimonial-img"
                            />
                            <div class="testimonial-feedback">
                                "Super friendly staff and fast service!"
                            </div>
                            <div class="testimonial-name">– Bautista</div>
                            <div class="testimonial-rating">★★★★★</div>
                        </div>
                        <div class="testimonial-card">
                            <img
                                src="/Images/Gallery/2.jpg"
                                alt="User 5"
                                class="testimonial-img"
                            />
                            <div class="testimonial-feedback">
                                "Affordable meals and great coffee."
                            </div>
                            <div class="testimonial-name">– Garcia</div>
                            <div class="testimonial-rating">★★★★☆</div>
                        </div>
                        <div class="testimonial-card">
                            <img
                                src="/Images/Gallery/3.jpg"
                                alt="User 6"
                                class="testimonial-img"
                            />
                            <div class="testimonial-feedback">
                                "0ur favorite spot in Antipolo!"
                            </div>
                            <div class="testimonial-name">– Mendoza</div>
                            <div class="testimonial-rating">★★★★★</div>
                        </div>
                    </div>
                    <div class="marquee__content">
                        <div class="testimonial-card">
                            <img
                                src="/Images/Gallery/6.jpg"
                                alt="User 1"
                                class="testimonial-img"
                            />
                            <div class="testimonial-feedback">
                                "Great coffee and cozy place!"
                            </div>
                            <div class="testimonial-name">– Santos</div>
                            <div class="testimonial-rating">★★★★★</div>
                        </div>
                        <div class="testimonial-card">
                            <img
                                src="/Images/Gallery/5.jpg"
                                alt="User 2"
                                class="testimonial-img"
                            />
                            <div class="testimonial-feedback">
                                "Perfect for late-night study sessions."
                            </div>
                            <div class="testimonial-name">– Dela Cruz</div>
                            <div class="testimonial-rating">★★★★☆</div>
                        </div>
                        <div class="testimonial-card">
                            <img
                                src="/Images/Gallery/4.jpg"
                                alt="User 3"
                                class="testimonial-img"
                            />
                            <div class="testimonial-feedback">
                                "Love the mountain views!"
                            </div>
                            <div class="testimonial-name">– Reyes</div>
                            <div class="testimonial-rating">★★★★★</div>
                        </div>
                        <div class="testimonial-card">
                            <img
                                src="/Images/Gallery/1.jpg"
                                alt="User 4"
                                class="testimonial-img"
                            />
                            <div class="testimonial-feedback">
                                "Super friendly staff and fast service!"
                            </div>
                            <div class="testimonial-name">– Bautista</div>
                            <div class="testimonial-rating">★★★★★</div>
                        </div>
                        <div class="testimonial-card">
                            <img
                                src="/Images/Gallery/2.jpg"
                                alt="User 5"
                                class="testimonial-img"
                            />
                            <div class="testimonial-feedback">
                                "Affordable meals and great coffee."
                            </div>
                            <div class="testimonial-name">– Garcia</div>
                            <div class="testimonial-rating">★★★★☆</div>
                        </div>
                        <div class="testimonial-card">
                            <img
                                src="/Images/Gallery/3.jpg"
                                alt="User 6"
                                class="testimonial-img"
                            />
                            <div class="testimonial-feedback">
                                "My favorite spot in Antipolo!"
                            </div>
                            <div class="testimonial-name">– Mendoza</div>
                            <div class="testimonial-rating">★★★★★</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer Section -->
            <footer class="footer-section">
                <div class="footer-content">
                    <div class="footer-links">
                        <div class="footer-column">
                            <h3>About Us</h3>
                            <ul>
                                <li>
                                    <a href="../HTML/AboutUs.html#why-choose"
                                        >Why Choose Daily Chill?</a
                                    >
                                </li>
                                <li>
                                    <a href="../HTML/AboutUs.html#history"
                                        >History & Background</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="../HTML/AboutUs.html#business-overview"
                                        >Business Overview & FAQs</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div class="footer-column">
                            <h3>Order Online</h3>
                            <ul>
                                <li>
                                    <a href="../HTML/HomePage.html">Daily Chill</a>
                                </li>
                                <li>
                                    <a
                                        href="https://web.lalamove.com/login"
                                        target="_blank"
                                        >Delivery</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div class="footer-column">
                            <h3>Follow Us</h3>
                            <p>Stay connected with us on social media!</p>
                            <ul class="footer-social">
                                <li>
                                    <a
                                        href="https://www.facebook.com/dailychillpagrai"
                                        target="_blank"
                                        ><i class="bi bi-facebook"></i
                                    ></a>
                                </li>
                                <li>
                                    <a
                                        href="https://www.instagram.com/dailychillpagrai"
                                        target="_blank"
                                        ><i class="bi bi-instagram"></i
                                    ></a>
                                </li>
                            </ul>
                        </div>

                        <div class="footer-column">
                            <h3>Location</h3>
                            <p>Unit 2 Pagrai hills, Antipolo</p>
                            <a
                                href="https://maps.app.goo.gl/fGuoNSEX9DuBesLh8"
                                target="_blank"
                                >View on Google Maps</a
                            >
                            <p>Phone: +63 948 0613 972</p>
                            <p>Email: dailychillpagrai@gmail.com</p>
                        </div>
                    </div>
                    <hr />
                    <div class="footer-bottom">
                        <ul>
                            <li>
                                <a href="../HTML/PrivacyPolicy.html"
                                    >Privacy Policy</a
                                >
                            </li>
                            <li>
                                <a href="../HTML/TermsOfUse.html"
                                    >Terms of Use</a
                                >
                            </li>
                            <li><a href="../HTML/SiteMap.html">Site Map</a></li>
                        </ul>
                        <p>
                            © 2019 Daily Chill Coffee Company. All rights
                            reserved.
                        </p>
                    </div>
                </div>
            </footer>
        </main>

        <div class="cart-modal" id="cartModal">
            <div class="cart-modal-content">
                <span class="close-modal" id="closeCartModal">&times;</span>
                <h2>Your Cart</h2>
                <ul class="cart-list" id="cartList"></ul>
                <div class="cart-total" id="cartTotal"></div>
                <button
                    class="unified-button"
                    id="checkoutBtn"
                    style="
                        width: 220px;
                        display: block;
                        margin: 20px auto 0 auto;
                    "
                >
                    <span>Checkout</span>
                </button>
            </div>
        </div>
    </body>
</html>

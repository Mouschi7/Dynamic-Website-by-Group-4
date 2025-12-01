<header>
    <nav id="navbar" class="navbar">
        <div class="nav-container">
            <div class="nav-left">
                <a href="landingpage.php">Home.</a>

                <div class="dropdown">
                    <a href="#" class="dropdown-toggle">Info.</a>
                    <div class="dropdown-menu">
                        <a href="aboutus.php">About Us</a>
                        <a href="history.php">History</a>
                        <a href="background.php">Background</a>
                    </div>
                </div>

                <div class="dropdown">
                    <a href="menu.php" class="dropdown-toggle">Menu.</a>
                    <div class="dropdown-menu">
                        <a href="menu.php?cat=rice-meals">Rice Meals</a>
                        <a href="menu.php?cat=drinks">Drinks</a>
                        <a href="menu.php?cat=fried-rice">Fried Rice</a>
                        <a href="menu.php?cat=tofu-square">Tofu Square</a>
                        <a href="menu.php?cat=combo-meals">Combo Meals</a>
                        <a href="menu.php?cat=extras">Extras</a>
                    </div>
                </div>
            </div>

            <div class="nav-logo">
                <a href="landingpage.php">
                    <h1 class="logo-creative">Kusina ni Kape'Tan.</h1>
                </a>
            </div>

            <div class="nav-right">
                <!-- Cart toggle uses the same font as other nav links (no icons) -->
                <button id="cartToggle" class="cart-toggle">Cart <span id="cartCount" class="cart-count">0</span></button>
                <a href="auth.php" title="Account">Sign-Up.</a>
            </div>
        </div>
    </nav>
</header>

<!-- CART SIDEBAR (global) -->
<aside id="cartSidebar" class="cart-sidebar" role="dialog" tabindex="-1">
    <div class="cart-inner">
        <header class="cart-header">
            <div class="cart-title-wrap">
                <h3 class="cart-title">Your Cart <sup id="cartCountHeader">0</sup></h3>
            </div>
            <button id="closeCart" class="close-cart">CLOSE</button>
        </header>

        <div class="cart-list" id="cartItems">
            <!-- items inserted here by JS -->
        </div>

        <div class="cart-foot">
            <div class="cart-total">Total: <span id="cartTotal">₱0.00</span></div>
            <div class="cart-actions">
                <button id="checkoutBtn" class="btn-primary">Checkout</button>
            </div>
        </div>
    </div>
</aside>

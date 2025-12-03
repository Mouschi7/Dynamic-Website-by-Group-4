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

        <div style="padding:0 18px;">
            <div class="cart-list" id="cartItems">
                <!-- items inserted here by JS -->
            </div>

            <div id="cartSummary" style="display:none;padding:12px 0;border-top:1px solid rgba(0,0,0,0.06);"></div>

            <div class="cart-options" style="padding:12px 0;border-top:1px solid rgba(0,0,0,0.04);">
            <div style="margin-bottom:10px;">
                    <label style="font-weight:600;">Payment</label>
                    <select id="paymentSelect">
                        <option value="cash">Cash</option>
                        <option value="gcash">GCash</option>
                    </select>
            </div>

            <div>
                    <label style="font-weight:600;">Delivery</label>
                    <select id="deliverySelect">
                        <option value="pickup">Pickup</option>
                        <option value="delivery">Delivery</option>
                    </select>
                    <div id="deliveryAddressWrap" style="display:none;">
                        <input id="deliveryAddress" placeholder="Delivery address" />
                    </div>
            </div>
        </div>

        <div class="cart-foot">
                <div style="display:flex;justify-content:space-between;align-items:center;margin-top:12px">
                    <div style="font-weight:700">Total: <span id="cartTotal">₱0.00</span></div>
                    <div>
                        <button id="checkoutBtn" class="btn">Checkout</button>
                        <button id="confirmCheckout" class="btn" style="display:none;margin-left:8px">Confirm</button>
                    </div>
                </div>
        </div>
    </div>
</aside>

<!-- Checkout overlay removed: checkout summary now renders inside the cart sidebar -->

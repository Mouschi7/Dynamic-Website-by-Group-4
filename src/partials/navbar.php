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

        <div class="cart-options" style="padding:12px 18px;border-top:1px solid rgba(0,0,0,0.04);">
            <div style="margin-bottom:10px;">
                <label style="display:block;margin-bottom:6px;font-weight:600;font-size:0.95rem;">Payment Method</label>
                <select id="paymentSelect" name="payment" style="width:100%;padding:8px;border-radius:6px;border:1px solid rgba(0,0,0,0.1);background:white;">
                    <option value="cash" selected>Cash on Delivery</option>
                    <option value="gcash">GCASH</option>
                    <option value="card">Credit/Debit Card</option>
                </select>
            </div>

            <div>
                <label style="display:block;margin-bottom:6px;font-weight:600;font-size:0.95rem;">Delivery Option</label>
                <select id="deliverySelect" name="delivery" style="width:100%;padding:8px;border-radius:6px;border:1px solid rgba(0,0,0,0.1);background:white;">
                    <option value="pickup" selected>Pickup</option>
                    <option value="delivery">Delivery</option>
                </select>
                <div id="deliveryAddressWrap" style="display:none;margin-top:8px;">
                    <input id="deliveryAddress" type="text" placeholder="Enter delivery address" style="width:100%;padding:8px;border-radius:6px;border:1px solid rgba(0,0,0,0.1);" />
                </div>
            </div>
        </div>

        <div class="cart-foot">
            <div class="cart-total">Total: <span id="cartTotal">₱0.00</span></div>
            <div class="cart-actions">
                <button id="checkoutBtn" class="btn-primary">Checkout</button>
            </div>
        </div>
    </div>
</aside>

<!-- CHECKOUT SUMMARY OVERLAY -->
<div class="modal-overlay" id="checkoutOverlay" style="display:none;">
    <div class="modal-box" style="width:520px;text-align:left;">
        <button class="close-modal" id="closeCheckout">&times;</button>
        <h3>Checkout Summary</h3>
        <div id="checkoutSummary" style="max-height:360px;overflow:auto;margin:12px 0;padding-right:8px;"></div>
        <div style="margin-top:12px;">
            <button id="confirmCheckout" class="btn-primary">Confirm Order</button>
        </div>
    </div>
</div>

<?php include("../src/partials/announcementbar.php"); ?>
<?php include("../src/partials/navbar.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu | Kusina ni Kape'Tan</title>
    <link rel="stylesheet" href="index.css">
    <script defer src="./script.js"></script>
</head>
<body class="menu">

<!-- HERO SECTION -->
<section class="menu-hero">
    <div class="menu-hero-content">
        <h1>Our Menu</h1>
        <p>Crafted with passion. Served with love.</p>
    </div>
</section>

<div class="menu-wrapper">

    
    <div class="menu-categories">
        <button class="active" data-target="drinks">Drinks</button>
        <button data-target="rice-meals">Rice Meals</button>
        <button data-target="combo-meals">Combo Meals</button>
        <button data-target="extras">Extras</button>
        <button data-target="fried-rice">Fried Rice</button>
        <button data-target="tofu-squares">Tofu Squares</button>
    </div>

    <main class="menu-content">

        <section id="drinks" class="menu-section">
            <h2 class="menu-section-title">Drinks</h2>
            <div class="menu-grid">

                <div class="menu-card">
                    <img src="assets/images/CokeLarge.png" alt="Classic Coke">
                    <div class="menu-info">
                        <h3>Classic Coke</h3>
                        <p>The Classic Coca-Cola.</p>
                        <span class="price">₱15</span>
                        <button class="modal-btn" data-item="Classic Coke" data-price="15" data-type="drink" data-img-small="assets/images/CokeSmall.png" data-img-medium="assets/images/CokeMedium.png" data-img-large="assets/images/CokeLarge.png" data-ingredients="Carbonated Water, Sugar, Caffeine">Order</button>
                    </div>
                </div>

                <div class="menu-card">
                    <img src="assets/images/LargeRoyal.png" alt="Royal">
                    <div class="menu-info">
                        <h3>Royal</h3>
                        <p>The Refreshing Royal.</p>
                        <span class="price">₱15</span>
                        <button class="modal-btn" data-item="Royal" data-price="15" data-type="drink" data-img-large="assets/images/LargeRoyal.png" data-ingredients="Carbonated Water, High Fructose Corn Syrup">Order</button>
                    </div>
                </div>

                <div class="menu-card">
                    <img src="assets/images/LargeSprite.png" alt="Sprite">
                    <div class="menu-info">
                        <h3>Sprite</h3>
                        <p>The Sprite.</p>
                        <span class="price">₱15</span>
                        <button class="modal-btn" data-item="Sprite" data-price="15" data-type="drink" data-img-large="assets/images/LargeSprite.png" data-ingredients="Carbonated Water, Sugar, Citric Acid">Order</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="rice-meals" class="menu-section">
            <h2 class="menu-section-title">Rice Meals</h2>
            <div class="menu-grid">

                    <div class="menu-card" data-name="Chicken Chops" data-price="120">
                    <div class="menu-img"><img src="assets/images/ChickenChops.png" alt="Chicken Chops"></div>
                    <div class="menu-info">
                        <h3>Chicken Chops</h3>
                        <p>Perfectly seared Chicken Chops with herbs.</p>
                        <span class="price">₱650</span>
                        <button class="modal-btn" data-item="Chicken Chops" data-price="120" data-type="rice-meal">Order</button>
                    </div>
                </div>

                    <div class="menu-card" data-name="Chicken Chops" data-price="120">
                    <div class="menu-img"><img src="assets/images/ChickenChops.png" alt="Chicken Chops"></div>
                    <div class="menu-info">
                        <h3>Chicken Chops</h3>
                        <p>Perfectly seared Chicken Chops with herbs.</p>
                        <span class="price">₱650</span>
                        <button class="modal-btn" data-item="Chicken Chops" data-price="120" data-type="rice-meal">Order</button>
                    </div>
                </div>

                    <div class="menu-card" data-name="Chicken Chops" data-price="120">
                    <div class="menu-img"><img src="assets/images/ChickenChops.png" alt="Chicken Chops"></div>
                    <div class="menu-info">
                        <h3>Chicken Chops</h3>
                        <p>Perfectly seared Chicken Chops with herbs.</p>
                        <span class="price">₱650</span>
                        <button class="modal-btn" data-item="Chicken Chops" data-price="120" data-type="rice-meal">Order</button>
                    </div>
                </div>

                    <div class="menu-card" data-name="Chicken Chops" data-price="120">
                    <div class="menu-img"><img src="assets/images/ChickenChops.png" alt="Chicken Chops"></div>
                    <div class="menu-info">
                        <h3>Chicken Chops</h3>
                        <p>Perfectly seared Chicken Chops with herbs.</p>
                        <span class="price">₱650</span>
                        <button class="modal-btn" data-item="Chicken Chops" data-price="120" data-type="rice-meal">Order</button>
                    </div>
                </div>

                <div class="menu-card" data-name="Chicken Chops" data-price="120">
                    <div class="menu-img"><img src="assets/images/ChickenChops.png" alt="Chicken Chops"></div>
                    <div class="menu-info">
                        <h3>Chicken Chops</h3>
                        <p>Perfectly seared Chicken Chops with herbs.</p>
                        <span class="price">₱650</span>
                        <button class="modal-btn" data-item="Chicken Chops" data-price="120" data-type="rice-meal">Order</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="combo-meals" class="menu-section">
            <h2 class="menu-section-title">Combo Meals</h2>
            <div class="menu-grid">

                    <div class="menu-card" data-name="Family Combo" data-price="1200">
                    <div class="menu-img"><img src="assets/images/sample3.jpg" alt="Family Combo"></div>
                    <div class="menu-info">
                        <h3>Family Combo</h3>
                        <p>Sharing combo for 4 with sides.</p>
                        <span class="price">₱1200</span>
                        <button class="modal-btn" data-item="Family Combo" data-price="1200" data-type="combo">Order</button>
                    </div>
                </div>

                    <div class="menu-card" data-name="Family Combo" data-price="1200">
                    <div class="menu-img"><img src="assets/images/sample3.jpg" alt="Family Combo"></div>
                    <div class="menu-info">
                        <h3>Family Combo</h3>
                        <p>Sharing combo for 4 with sides.</p>
                        <span class="price">₱1200</span>
                        <button class="modal-btn" data-item="Family Combo" data-price="1200" data-type="combo">Order</button>
                    </div>
                </div>

                    <div class="menu-card" data-name="Family Combo" data-price="1200">
                    <div class="menu-img"><img src="assets/images/sample3.jpg" alt="Family Combo"></div>
                    <div class="menu-info">
                        <h3>Family Combo</h3>
                        <p>Sharing combo for 4 with sides.</p>
                        <span class="price">₱1200</span>
                        <button class="modal-btn" data-item="Family Combo" data-price="1200" data-type="combo">Order</button>
                    </div>
                </div>
                    
                    <div class="menu-card" data-name="Family Combo" data-price="1200">
                    <div class="menu-img"><img src="assets/images/sample3.jpg" alt="Family Combo"></div>
                    <div class="menu-info">
                        <h3>Family Combo</h3>
                        <p>Sharing combo for 4 with sides.</p>
                        <span class="price">₱1200</span>
                        <button class="modal-btn" data-item="Family Combo" data-price="1200" data-type="combo">Order</button>
                    </div>
                </div>

                <div class="menu-card" data-name="Family Combo" data-price="1200">
                    <div class="menu-img"><img src="../assets/images/sample3.jpg" alt="Family Combo"></div>
                    <div class="menu-info">
                        <h3>Family Combo</h3>
                        <p>Sharing combo for 4 with sides.</p>
                        <span class="price">₱1200</span>
                        <button class="modal-btn" data-item="Family Combo" data-price="1200" data-type="combo">Order</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="extras" class="menu-section">
            <h2 class="menu-section-title">Extras</h2>
            <div class="menu-grid">

                    <div class="menu-card" data-name="Crispy Fries" data-price="120">
                    <div class="menu-img"><img src="assets/images/sample4.jpg" alt="Crispy Fries"></div>
                    <div class="menu-info">
                        <h3>Crispy Fries</h3>
                        <p>Golden fries, lightly salted.</p>
                        <span class="price">₱120</span>
                        <button class="modal-btn" data-item="Crispy Fries" data-price="120" data-type="extras">Order</button>
                    </div>
                </div>

                    <div class="menu-card" data-name="Crispy Fries" data-price="120">
                    <div class="menu-img"><img src="assets/images/sample4.jpg" alt="Crispy Fries"></div>
                    <div class="menu-info">
                        <h3>Crispy Fries</h3>
                        <p>Golden fries, lightly salted.</p>
                        <span class="price">₱120</span>
                        <button class="modal-btn" data-item="Crispy Fries" data-price="120" data-type="extras">Order</button>
                    </div>
                </div>

                    <div class="menu-card" data-name="Crispy Fries" data-price="120">
                    <div class="menu-img"><img src="assets/images/sample4.jpg" alt="Crispy Fries"></div>
                    <div class="menu-info">
                        <h3>Crispy Fries</h3>
                        <p>Golden fries, lightly salted.</p>
                        <span class="price">₱120</span>
                        <button class="modal-btn" data-item="Crispy Fries" data-price="120" data-type="extras">Order</button>
                    </div>
                </div>

                <div class="menu-card" data-name="Crispy Fries" data-price="120">
                    <div class="menu-img"><img src="../assets/images/sample4.jpg" alt="Crispy Fries"></div>
                    <div class="menu-info">
                        <h3>Crispy Fries</h3>
                        <p>Golden fries, lightly salted.</p>
                        <span class="price">₱120</span>
                        <button class="modal-btn" data-item="Crispy Fries" data-price="120" data-type="extras">Order</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="fried-rice" class="menu-section">
            <h2 class="menu-section-title">Fried Rice</h2>
            <div class="menu-grid">
                <div class="menu-card" data-name="Garlic Fried Rice" data-price="75">
                    <div class="menu-img"><img src="assets/images/sample5.jpg" alt="Garlic Fried Rice"></div>
                    <div class="menu-info">
                        <h3>Garlic Fried Rice</h3>
                        <p>Fragrant garlic fried rice.</p>
                        <span class="price">₱75</span>
                        <button class="modal-btn" data-item="Garlic Fried Rice" data-price="75" data-type="fried-rice">Order</button>
                    </div>
                </div>

                <div class="menu-card" data-name="Garlic Fried Rice" data-price="75">
                    <div class="menu-img"><img src="assets/images/sample5.jpg" alt="Garlic Fried Rice"></div>
                    <div class="menu-info">
                        <h3>Garlic Fried Rice</h3>
                        <p>Fragrant garlic fried rice.</p>
                        <span class="price">₱75</span>
                        <button class="modal-btn" data-item="Garlic Fried Rice" data-price="75" data-type="fried-rice">Order</button>
                    </div>
                </div>

                <div class="menu-card" data-name="Garlic Fried Rice" data-price="75">
                    <div class="menu-img"><img src="assets/images/sample5.jpg" alt="Garlic Fried Rice"></div>
                    <div class="menu-info">
                        <h3>Garlic Fried Rice</h3>
                        <p>Fragrant garlic fried rice.</p>
                        <span class="price">₱75</span>
                        <button class="modal-btn" data-item="Garlic Fried Rice" data-price="75" data-type="fried-rice">Order</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="tofu-squares" class="menu-section">
            <h2 class="menu-section-title">Tofu Squares</h2>
            <div class="menu-grid">
                <div class="menu-card" data-name="Crispy Tofu Squares" data-price="140">
                    <div class="menu-img"><img src="assets/images/Tofu12.png" alt="Tofu Squares"></div>
                    <div class="menu-info">
                        <h3>Crispy Tofu Squares</h3>
                        <p>Double-fried tofu squares with dip.</p>
                        <span class="price">₱140</span>
                        <button class="modal-btn" data-item="Crispy Tofu Squares" data-price="140" data-type="tofu" data-ingredients="Tofu, Cornstarch, Oil, Soy Sauce, Garlic">Order</button>
                    </div>
                </div>

                <div class="menu-card" data-name="Crispy Tofu Squares" data-price="140">
                    <div class="menu-img"><img src="assets/images/Tofu9.png" alt="Tofu Squares"></div>
                    <div class="menu-info">
                        <h3>Crispy Tofu Squares</h3>
                        <p>Double-fried tofu squares with dip.</p>
                        <span class="price">₱140</span>
                        <button class="modal-btn" data-item="Crispy Tofu Squares" data-price="140" data-type="tofu" data-ingredients="Tofu, Cornstarch, Oil, Soy Sauce, Garlic">Order</button>
                    </div>
                </div>

                <div class="menu-card" data-name="Crispy Tofu Squares" data-price="140">
                    <div class="menu-img"><img src="assets/images/Tofu12.png" alt="Tofu Squares"></div>
                    <div class="menu-info">
                        <h3>Crispy Tofu Squares</h3>
                        <p>Double-fried tofu squares with dip.</p>
                        <span class="price">₱140</span>
                        <button class="modal-btn" data-item="Crispy Tofu Squares" data-price="140" data-type="tofu" data-ingredients="Tofu, Cornstarch, Oil, Soy Sauce, Garlic">Order</button>
                    </div>
                </div>

            </div>
        </section>

    </main>
</div>

<div class="modal-overlay" id="modalOverlay">
    <div class="modal-box" tabindex="-1">
        <button class="close-modal" id="closeModal">&times;</button>
        <div class="modal-top">
            <img id="modalItemImage" src="" alt="" style="width:120px;height:120px;object-fit:cover;border-radius:8px;margin-bottom:10px;"/>
            <h2 id="modalItemName"></h2>
            <p class="modal-price">₱<span id="modalItemPrice"></span></p>
        </div>

        <div id="sizeRow" class="size-options" style="display:none;margin:10px 0;">
            <button data-size="small" class="size-btn">Small</button>
            <button data-size="medium" class="size-btn">Medium</button>
            <button data-size="large" class="size-btn active">Large</button>
        </div>

        <div id="modalIngredients" style="text-align:left;font-size:0.95rem;color:var(--text-light);opacity:0.85;margin-bottom:10px;"></div>

        <div class="quantity-area">
            <button id="minusQty">-</button>
            <span id="qtyDisplay">1</span>
            <button id="addQty">+</button>
        </div>

        <button class="add-cart-btn" id="addToCartBtn">Add to Cart</button>
    </div>
</div>
      <?php include("../src/partials/footer.php"); ?>
</body>
</html>

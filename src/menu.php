<?php include("../src/partials/announcementbar.php"); ?>
<?php include("../src/partials/navbar.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    <title>Menu | KNK</title>

    <script>
        // Smooth Scroll when navbar dropdown links are clicked
        document.addEventListener("DOMContentLoaded", () => {
            const params = new URLSearchParams(window.location.search);
            const section = params.get("cat");
            if (section) {
                const target = document.getElementById(section);
                if (target) {
                    setTimeout(() => {
                        target.scrollIntoView({ behavior: "smooth", block: "start" });
                    }, 300);
                }
            }
        });
    </script>
</head>

<body>

    <!-- MENU HERO -->
    <section class="menu-hero">
        <h1>Our Menu</h1>
        <p>Fresh, flavorful meals made daily.</p>
    </section>

    <!-- CATEGORY BUTTONS -->
    <section class="menu-categories">
        <button data-target="rice-meals" class="active">Rice Meals</button>
        <button data-target="drinks">Drinks</button>
        <button data-target="fried-rice">Fried Rice</button>
        <button data-target="tofu-square">Tofu Square</button>
        <button data-target="combo-meals">Combo Meals</button>
        <button data-target="extras">Extras</button>
    </section>

    <script>
        // Button Scroll Behavior
        document.querySelectorAll(".menu-categories button").forEach(btn => {
            btn.addEventListener("click", () => {
                document.querySelector(".menu-categories .active")?.classList.remove("active");
                btn.classList.add("active");

                const id = btn.getAttribute("data-target");
                const section = document.getElementById(id);
                if (section) {
                    section.scrollIntoView({ behavior: "smooth", block: "start" });
                }
            });
        });
    </script>

    <!-- ============================
         MENU SECTIONS WITH IDs
    ============================ -->

    <!-- RICE MEALS -->
    <section id="rice-meals" class="menu-section">
        <h2 class="menu-section-title">Rice Meals</h2>

        <div class="menu-grid">
            <div class="menu-card">
                <div class="menu-img">
                    <img src="../src/assets/images/sample3.jpg" alt="Chicken Rice Meal" />
                </div>
                <div class="menu-info">
                    <h3>Chicken Rice Meal</h3>
                    <p>Served with house special gravy.</p>
                    <span class="price">₱129</span>
                </div>
            </div>
        </div>
    </section>

    <!-- DRINKS -->
    <section id="drinks" class="menu-section">
        <h2 class="menu-section-title">Drinks</h2>

        <div class="menu-grid">
            <div class="menu-card">
                <div class="menu-img">
                    <img src="../src/assets/images/sample3.jpg" alt="Ice Tea" />
                </div>
                <div class="menu-info">
                    <h3>Iced Tea</h3>
                    <p>Refreshing cup brewed daily.</p>
                    <span class="price">₱49</span>
                </div>
            </div>
        </div>
    </section>

    <!-- FRIED RICE -->
    <section id="fried-rice" class="menu-section">
        <h2 class="menu-section-title">Fried Rice</h2>

        <div class="menu-grid">
            <div class="menu-card">
                <div class="menu-img">
                    <img src="../src/assets/images/sample3.jpg" alt="Garlic Fried Rice" />
                </div>
                <div class="menu-info">
                    <h3>Garlic Fried Rice</h3>
                    <p>Classic Filipino-style fried rice.</p>
                    <span class="price">₱69</span>
                </div>
            </div>
        </div>
    </section>

    <!-- TOFU SQUARE -->
    <section id="tofu-square" class="menu-section">
        <h2 class="menu-section-title">Tofu Square</h2>

        <div class="menu-grid">
            <div class="menu-card">
                <div class="menu-img">
                    <img src="../src/assets/images/sample3.jpg" alt="Crispy Tofu" />
                </div>
                <div class="menu-info">
                    <h3>Crispy Tofu</h3>
                    <p>Served with sweet chili sauce.</p>
                    <span class="price">₱89</span>
                </div>
            </div>
        </div>
    </section>

    <!-- COMBO MEALS -->
    <section id="combo-meals" class="menu-section">
        <h2 class="menu-section-title">Combo Meals</h2>

        <div class="menu-grid">
            <div class="menu-card">
                <div class="menu-img">
                    <img src="../src/assets/images/sample3.jpg" alt="Combo Meal" />
                </div>
                <div class="menu-info">
                    <h3>Chicken + Tofu Combo</h3>
                    <p>Perfectly paired flavors.</p>
                    <span class="price">₱199</span>
                </div>
            </div>
        </div>
    </section>

    <!-- EXTRAS -->
    <section id="extras" class="menu-section">
        <h2 class="menu-section-title">Extras</h2>

        <div class="menu-grid">
            <div class="menu-card">
                <div class="menu-img">
                    <img src="../src/assets/images/sample3.jpg" alt="Extra Rice" />
                </div>
                <div class="menu-info">
                    <h3>Extra Rice</h3>
                    <p>Steamed and fluffy.</p>
                    <span class="price">₱20</span>
                </div>
            </div>
        </div>
    </section>

</body>
</html>


<header>
    <!-- top announcement / discount bar (matches styles.css .discount-bar) -->
    <div class="discount-bar" role="status">
        <div class="discount-content">
            <span>Limited Time Offer: Get 20% Off Your First Order!</span>
        </div>
        <button id="closeDiscount" class="discount-close" aria-label="Close offer">✕</button>
    </div>

    <nav id="navbar" class="navbar">
        <div class="nav-container">
            <div class="nav-left">
                <a href="/website/src/home.php">Home.</a>
                <a href="/website/src/about.php">Info.<i class="bi bi-caret-down-fill"></i></a>
                <a href="/website/src/menu.php">Menu.<i class="bi bi-caret-down-fill"></i></a>
            </div>

            <div class="nav-logo">
                <a href="/website/src/home.php">
                    <h1 class="logo-creative">Kusina ni Kape'Tan.</h1>
                </a>
            </div>

            <div class="nav-right">
                <a href="/website/src/cart.php" title="Cart">Cart.<i class="bi bi-bag-fill"></i></a>
                <a href="/website/src/auth.php" title="Account">Sign-Up.<i class="bi bi-person-circle"></i></a>
            </div>
        </div>
    </nav>
</header>

<script>
    // guard existence before adding listeners
    const closeBtn = document.getElementById('closeDiscount');
    if (closeBtn) {
        closeBtn.addEventListener('click', function () {
            const bar = document.querySelector('.discount-bar');
            if (bar) bar.style.display = 'none';
            // keep page spacing consistent
            document.body.style.paddingTop = 'var(--navbar-height)';
        });
    }

</script>



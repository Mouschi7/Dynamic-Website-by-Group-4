<?php include("../src/partials/announcementbar.php"); ?>
<?php include("../src/partials/navbar.php"); ?>

<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <title>Kusina ni Kape'Tan | Home</title>
            <link rel="stylesheet" href="index.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
      </head>
      <body>
            <main>
                  <section class="hero">
                        <video autoplay muted loop playsinline class="hero-video" aria-hidden="true">
                              <source src="./assets/videos/bgedit.mp4" type="video/mp4" />
                              Your browser does not support the video tag.
                        </video>

                        <div class="hero-overlay"></div>
                              <div class="hero-inner">
                                    <div class="hero-text">
                                          <h1 class="hero-title">Welcome to <span class="accent">Kusina ni Kape'Tan</span></h1>
                                          <p class="hero-tagline">Brewing warmth and flavor in every dish</p>
                                          <p class="hero-description">
                                                Discover comfort food crafted with passion — from authentic Filipino
                                                flavors to heartwarming fusion favorites. Come taste what home feels like.
                                          </p>
                                          <a href="menu.php" class="hero-button">View Menu <i class="bi bi-arrow-right"></i></a>
                                    </div>      
                              </div>
                        </div>
                  </section>

                  <section class="section why-section">
                        <div class="why-container">
                              <div class="why-content-wrapper">
                                    <div class="why-text">
                                          <h2>Why Kusina ni Kape'Tan?</h2>
                                          <p class="why-description">
                                          Food service is more than just preparing and serving meals. It's about creating
                                          memorable experiences for every customer. We combine quality ingredients, skilled
                                          preparation, and a welcoming atmosphere to ensure that every dish brings satisfaction
                                          and joy. A great food service focuses on freshness, flavor, and presentation to delight
                                          the senses.
                                          </p>
                                          <button class="why-button">
                                          Our Story <i class="bi bi-arrow-right"></i>
                                          </button>
                                    </div>
                                    <div class="why-image">
                                          <img src="./assets/images/sample3.jpg" alt="Kusina ni Kape'Tan Food">
                                    </div>
                              </div>
                        </div>
                  </section>
            </main>
      </body>
</html>

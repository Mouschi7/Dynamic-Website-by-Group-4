<?php include("../src/partials/announcementbar.php"); ?>
<?php include("../src/partials/navbar.php"); ?>

<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8" />
            <title>Kusina ni Kapetan</title>
            <link rel="stylesheet" href="/website/src/landing.css" />
            <link rel="stylesheet" href="/website/src/index.css" />
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
      </head>
      <body class="landing-page">
            <div class="landing">
                  <main class="banner" role="main" aria-label="Filipino restaurant hero">
                        <div class="slides">
                              <div class="slide active" style="background-image: url('./assets/images/imbutido.jpeg');"></div>
                              <div class="slide" style="background-image: url('./assets/images/longanisa.jpeg');"></div>
                              <div class="slide" style="background-image: url('./assets/images/pork.jpeg');"></div>
                              <div class="slide" style="background-image: url('./assets/images/tocino.jpeg');"></div>
                        </div>

                        <div class="container">
                              <div class="left">
                                    <h1>Kusina Ni<br>Kapetan</h1>
                                    <p class="lead">
                                          Experience authentic Filipino flavors in a warm, inviting atmosphere.
                                          Traditional recipes meet modern dining at Kusina ni Kapetan.
                                    </p>
                                    <button class="cta" id="enterBtn">
                                          Enter Restaurant
                                          <i class="bi bi-arrow-right"></i>
                                    </button>
                              </div>
                        </div>

                        <div class="overlay-controls">
                              <button id="prevBtn" aria-label="Previous image">
                              <i class="bi bi-chevron-left"></i>
                              </button>

                              <button id="nextBtn" aria-label="Next image">
                              <i class="bi bi-chevron-right"></i>
                              </button>
                        </div>

                        <div class="slide-indicators">
                              <button class="indicator active"></button>
                              <button class="indicator"></button>
                              <button class="indicator"></button>
                              <button class="indicator"></button>
                        </div>
                  </main>
            </div>

            <script>
                  document.addEventListener("DOMContentLoaded", function() {
                        const slides = document.querySelectorAll(".slide");
                        const indicators = document.querySelectorAll(".indicator");
                        let current = 0;
                        const next = () => changeSlide((current + 1) % slides.length);
                        const prev = () => changeSlide((current - 1 + slides.length) % slides.length);

                        function changeSlide(index) {
                              slides[current].classList.remove("active");
                              indicators[current].classList.remove("active");
                              slides[index].classList.add("active");
                              indicators[index].classList.add("active");
                              current = index;
                        }

                        document.getElementById("nextBtn").addEventListener("click", next);
                        document.getElementById("prevBtn").addEventListener("click", prev);
                        indicators.forEach((btn, i) => btn.addEventListener("click", () => changeSlide(i)));

                        setInterval(next, 5000);

                        document.getElementById("enterBtn").addEventListener("click", () => {
                        window.location.href = "home.php";
                        });

                        document.addEventListener("keydown", e => {
                              if (e.key === "ArrowLeft") prev();
                              if (e.key === "ArrowRight") next();
                        });
                  });
            </script>
      </body>
</html>

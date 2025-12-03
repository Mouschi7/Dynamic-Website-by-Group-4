<?php include("../src/partials/announcementbar.php"); ?>
<?php include("../src/partials/navbar.php"); ?>

<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8" />
            <meta
                  name="viewport"
                  content="width=device-width, initial-scale=1.0"
            />
            <title>About Us - Kusina ni Kapetan</title>
            <link rel="stylesheet" href="index.css" />
      </head>

      <body>
            <!-- HERO SECTION -->
            <section class="about-hero">
                  <div class="about-hero-content">
                        <h1 data-animate="fade-up">About Us</h1>
                        <p data-animate="fade-up" data-delay="0.2s">
                              Discover the story behind
                              <strong>Kusina ni Kapetan</strong> — where
                              Filipino flavors, creativity, and community come
                              together.
                        </p>
                  </div>
            </section>

            <!-- STORY SECTIONS -->
            <section class="about-section">
                  <div class="about-section-image" style="background-image:url('./assets/images/sample2.jpg')" aria-hidden="true"></div>
                  <div class="about-text">
                        <h2>Our Story</h2>
                        <p>
                              "Kusina ni Kapetan" was founded inside Antipolo
                              Valley Mall with a passion for serving comfort
                              food that feels like home. Inspired by the
                              founders' surname "Tan," the name carries a sense
                              of leadership and community — like a captain
                              leading the kitchen.
                        </p>
                  </div>
            </section>

            <section class="about-section">
                  <div class="about-section-image" style="background-image:url('./assets/images/filipino2.jpg')" aria-hidden="true"></div>
                  <div class="about-text">
                        <h2>Our Specialties</h2>
                        <p>
                              We distinguish ourselves through originality —
                              signature dishes like our exceptionally large,
                              foot-long liempo and Chinese fusion plates such as
                              chicken chops with salted fish fried rice. Every
                              ingredient is chosen with care, from local produce
                              to Bolinao's finest dried fish.
                        </p>
                  </div>
            </section>

            <section class="about-section">
                  <div class="about-section-image" style="background-image:url('./assets/images/food3.jpg')" aria-hidden="true"></div>
                  <div class="about-text">
                        <h2>Our Vision</h2>
                        <p>
                              We welcome customers for walk-in orders and
                              pre-orders from 7:30 AM to 5:30 PM, Monday through
                              Saturday. While we are a pick-up only
                              establishment for now, our vision is to expand and
                              serve the broader community — bringing comfort
                              food that warms the soul.
                        </p>
                  </div>
            </section>

            <!-- MODERN FAQ SECTION -->
            <section class="faq-section">
                  <div class="faq-left">
                        <h2>Business Overview & FAQs</h2>
                        <p>
                              Learn more about our humble beginnings, our
                              dedication to food quality, and what keeps our
                              customers coming back for more.
                        </p>
                  </div>
                  <div class="faq-right">
                        <div class="faq-item">
                              <div class="faq-question">
                                    <span>Where are you located?</span>
                                    <span class="arrow">&#9656;</span>
                              </div>
                              <div class="faq-answer">
                                    We’re located inside
                                    <strong>Antipolo Valley Mall</strong>, a
                                    cozy spot where comfort food meets community
                                    and culture!
                              </div>
                        </div>
                        <div class="faq-item">
                              <div class="faq-question">
                                    <span>What makes you unique?</span>
                                    <span class="arrow">&#9656;</span>
                              </div>
                              <div class="faq-answer">
                                    Our signature dishes like
                                    <strong>foot-long liempo</strong> and
                                    <strong>Chinese fusion meals</strong> are
                                    made with love and locally sourced
                                    ingredients you won’t find anywhere else.
                              </div>
                        </div>
                        <div class="faq-item">
                              <div class="faq-question">
                                    <span>What are your operating hours?</span>
                                    <span class="arrow">&#9656;</span>
                              </div>
                              <div class="faq-answer">
                                    We’re open
                                    <strong
                                          >Monday to Saturday, 7:30 AM – 5:30
                                          PM</strong
                                    >. Walk-ins and pre-orders are welcome
                                    anytime!
                              </div>
                        </div>
                        <div class="faq-item">
                              <div class="faq-question">
                                    <span>Do you offer delivery?</span>
                                    <span class="arrow">&#9656;</span>
                              </div>
                              <div class="faq-answer">
                                    Currently, we focus on
                                    <strong>pick-up and pre-orders</strong>, but
                                    we’re planning to offer delivery soon — stay
                                    tuned!
                              </div>
                        </div>
                  </div>
            </section>

            <script>
                  // Scroll reveal for .about-text
                  const observer = new IntersectionObserver(
                        (entries) => {
                              entries.forEach((entry) => {
                                    if (entry.isIntersecting) {
                                          entry.target.classList.add("visible");
                                          observer.unobserve(entry.target);
                                    }
                              });
                        },
                        { threshold: 0.2 }
                  );

                  document
                        .querySelectorAll(".about-text")
                        .forEach((section) => observer.observe(section));

                  // FAQ accordion
                  document.querySelectorAll(".faq-item").forEach((item) => {
                        item.addEventListener("click", () => {
                              item.classList.toggle("active");
                        });
                  });
            </script>
            <?php include("../src/partials/footer.php"); ?>
      </body>
</html>

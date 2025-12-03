<?php include("../src/partials/announcementbar.php"); ?>
<?php include("../src/partials/navbar.php"); ?>

<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <title>Home | Kusina ni Kape'Tan</title>
            <link rel="stylesheet" href="index.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
      </head>
      <body>
            <main>
                  <section class="hero">
                        <video autoplay muted loop playsinline class="hero-video">
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

                  <!-- FEATURES SECTION: image left, text right -->
                  <section class="features">
                        <div class="features-inner">
                              <div class="feature-row">
                                    <div class="feature-image">
                                          <img src="./assets/images/coffee-icon.png" alt="Coffee" />
                                    </div>
                                    <div class="feature-body">
                                          <h3>Globally sourced. Locally crafted.</h3>
                                          <p>Cupped, tested, developed and roasted at our Coffee Lab right here in Antipolo.</p>
                                    </div>
                              </div>

                              <div class="feature-row">
                                    <div class="feature-image">
                                          <img src="./assets/images/recipe-icon.png" alt="Recipes" />
                                    </div>
                                    <div class="feature-body">
                                          <h3>Modern Recipes. Holistic approach.</h3>
                                          <p>We focus on quality, provenance, and attention to flavor and presentation.</p>
                                    </div>
                              </div>

                              <div class="feature-row">
                                    <div class="feature-image">
                                          <img src="./assets/images/location-icon.png" alt="Locations" />
                                    </div>
                                    <div class="feature-body">
                                          <h3>No two houses the same.</h3>
                                          <p>Each location is designed to offer a contemporary, warm dining experience.</p>
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
                                          Our Story
                                          </button>
                                    </div>
                                    <div class="why-image">
                                          <img src="./assets/images/sample3.jpg" alt="Kusina ni Kape'Tan Food">
                                    </div>
                              </div>
                        </div>
                  </section>

                  

                  <!-- SPECIALS SECTION -->
                  <section class="specials">
                        <h2 class="section-title">Our Specials</h2>

                        <div class="specials-slider-wrapper">
                              <button
                                    id="prevSpecialBtn"
                                    class="arrow-btn left"
                              >
                                    <i class="bi bi-chevron-left"></i>
                              </button>

                              <div class="specials-slider">
                                    
                                    <div class="special-slide">
                                          <div class="special-card">
                                                <img
                                                      src="./assets/images/hotdog.jpeg"
                                                      alt="Hotsilog"
                                                />
                                                <div class="special-info">
                                                      <h3>Hotsilog</h3>
                                                      <p class="special-desc">
                                                            Savory hotdog served with garlic rice
                                                            and fried egg.
                                                      </p>
                                                      <div class="special-meta">
                                                            <span class="price">₱120</span>
                                                            <span class="stars"
                                                                  >⭐⭐⭐⭐⭐ 5.0</span
                                                            >
                                                      </div>
                                                </div>
                                          </div>
                                    </div>

                                    
                                    <div class="special-slide">
                                          <div class="special-card">
                                                <img
                                                      src="./assets/images/imbutido.jpeg"
                                                      alt="Sisigsilog"
                                                />
                                                <div class="special-info">
                                                      <h3>Sisigsilog</h3>
                                                      <p class="special-desc">
                                                            Classic pork sisig served with rice
                                                            and egg.
                                                      </p>
                                                      <div class="special-meta">
                                                            <span class="price">₱120</span>
                                                            <span class="stars"
                                                                  >⭐⭐⭐⭐⭐ 5.0</span
                                                            >
                                                      </div>
                                                      <button class="btn order-btn">
                                                            Order now
                                                      </button>
                                                </div>
                                          </div>
                                    </div>

                                    
                                    <div class="special-slide">
                                          <div class="special-card">
                                                <img
                                                      src="./assets/images/longanisa.jpeg"
                                                      alt="Tocilog"
                                                />
                                                <div class="special-info">
                                                      <h3>Tocilog</h3>
                                                      <p class="special-desc">
                                                            Sweet tocino paired with garlic rice
                                                            and egg.
                                                      </p>
                                                      <div class="special-meta">
                                                            <span class="price">₱120</span>
                                                            <span class="stars"
                                                                  >⭐⭐⭐⭐⭐ 5.0</span
                                                            >
                                                      </div>
                                                      <button class="btn order-btn">
                                                            Order now
                                                      </button>
                                                </div>
                                          </div>
                                    </div>

                                    
                                    <div class="special-slide">
                                          <div class="special-card">
                                                <img
                                                      src="./assets/images/tocino.jpeg"
                                                      alt="Tapsilog"
                                                />
                                                <div class="special-info">
                                                      <h3>Tapsilog</h3>
                                                      <p class="special-desc">
                                                            Beef tapa, garlic rice, and fried egg
                                                            — Filipino classic.
                                                      </p>
                                                      <div class="special-meta">
                                                            <span class="price">₱120</span>
                                                            <span class="stars"
                                                                  >⭐⭐⭐⭐⭐ 5.0</span
                                                            >
                                                      </div>
                                                      <button class="btn order-btn">
                                                            Order now
                                                      </button>
                                                </div>
                                          </div>
                                    </div>
                                    
                                    <div class="special-slide">
                                          <div class="special-card">
                                                <img
                                                      src="./assets/images/filipinofood.avif"
                                                      alt="Special 5"
                                                />
                                                <div class="special-info">
                                                      <h3>Chef's Special</h3>
                                                      <p class="special-desc">
                                                            A rotating chef special—ask in-store for today's flavor.
                                                      </p>
                                                      <div class="special-meta">
                                                            <span class="price">₱160</span>
                                                            <span class="stars">⭐⭐⭐⭐⭐ 5.0</span>
                                                      </div>
                                                      <button class="btn order-btn">Order now</button>
                                                </div>
                                          </div>
                                    </div>
                              </div>

                              <button
                                    id="nextSpecialBtn"
                                    class="arrow-btn right"
                              >
                                    <i class="bi bi-chevron-right"></i>
                              </button>
                        </div>

                        <div class="slide-indicators specials-indicators">
                              <button class="indicator active"></button>
                              <button class="indicator"></button>
                              <button class="indicator"></button>
                              <button class="indicator"></button>
                        </div>
                  </section>

                  <!-- TESTIMONIAL SECTION -->
                  <section class="testimonials">
                        <h2 class="section-title">What Our Customers Say</h2>

                        <div class="testimonials-slider">
                              <div class="testimonial">
                                    <img
                                          src="./assets/images/customer1.jpg"
                                          alt="Customer 1"
                                          class="customer-img"
                                    />
                                    <p>"Highly recommended."</p>
                                    <div class="stars">⭐⭐⭐⭐⭐</div>
                                    <h4>- Maria S.</h4>
                              </div>

                              <div class="testimonial">
                                    <img
                                          src="./assets/images/customer2.jpg"
                                          alt="Customer 2"
                                          class="customer-img"
                                    />
                                    <p>
                                          "Highly recommended."
                                    </p>
                                    <div class="stars">⭐⭐⭐⭐⭐</div>
                                    <h4>- Kevin L.</h4>
                              </div>

                              <div class="testimonial">
                                    <img
                                          src="./assets/images/customer3.jpg"
                                          alt="Customer 3"
                                          class="customer-img"
                                    />
                                    <p>"Highly recommended."</p>
                                    <div class="stars">⭐⭐⭐⭐⭐</div>
                                    <h4>- Carla R.</h4>
                              </div>

                              <div class="testimonial">
                                    <img
                                          src="./assets/images/customer4.jpg"
                                          alt="Customer 4"
                                          class="customer-img"
                                    />
                                    <p>"Highly recommended."</p>
                                    <div class="stars">⭐⭐⭐⭐⭐</div>
                                    <h4>- John D.</h4>
                              </div>
                        </div>
                  </section>

                  <?php include("../src/partials/footer.php"); ?>
                  <script src="script.js"></script>
            </main>
      </body>
</html>

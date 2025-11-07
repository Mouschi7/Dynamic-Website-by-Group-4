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
            <title>Kusina ni Kape'Tan | Login / Register</title>
            <link rel="stylesheet" href="../src/index.css" />
      </head>

      <body>
            <div class="login-page">
                  <div class="auth-container" id="authBox">
                        <!-- LOGIN FORM -->
                        <div id="loginForm">
                              <h2>Welcome Back ☕</h2>
                              <div class="form-group">
                                    <label>Email</label>
                                    <input
                                          type="email"
                                          placeholder="Enter your email"
                                    />
                              </div>
                              <div class="form-group">
                                    <label>Password</label>
                                    <input
                                          type="password"
                                          placeholder="Enter your password"
                                    />
                              </div>
                              <button class="btn">Login</button>
                              <p class="toggle-text">
                                    Don’t have an account?
                                    <span onclick="toggleForm()">Register</span>
                              </p>
                        </div>

                        <!-- REGISTER FORM -->
                        <div id="registerForm" class="hidden">
                              <h2>Create Account 🍴</h2>
                              <div class="form-group">
                                    <label>Full Name</label>
                                    <input
                                          type="text"
                                          placeholder="Your name"
                                    />
                              </div>
                              <div class="form-group">
                                    <label>Email</label>
                                    <input
                                          type="email"
                                          placeholder="Your email"
                                    />
                              </div>
                              <div class="form-group">
                                    <label>Password</label>
                                    <input
                                          type="password"
                                          placeholder="Choose a password"
                                    />
                              </div>
                              <button class="btn">Register</button>
                              <p class="toggle-text">
                                    Already have an account?
                                    <span onclick="toggleForm()">Login</span>
                              </p>
                        </div>
                  </div>
            </div>

            <script>
                  const loginForm = document.getElementById("loginForm");
                  const registerForm = document.getElementById("registerForm");

                  function toggleForm() {
                        loginForm.classList.toggle("hidden");
                        registerForm.classList.toggle("hidden");
                  }
            </script>
      </body>
</html>

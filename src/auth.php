<?php include("../src/partials/announcementbar.php"); ?>
<?php include("../src/partials/navbar.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="container">
      <div class="form-section">
        <h2 class="fade-in">Hello our favorite<br />customer :</h2>

        <button class="google-btn bounce">Sign up with Google</button>

        <div class="social-icons fade-in">
          <a href="#"><img src="./assets/images/fb.jpg" alt="Facebook" /></a>
          <a href="#"><img src="./assets/images/twitter.png" alt="X" /></a>
          <a href="#"><img src="./assets/images/insta.jpg" alt="Instagram" /></a>
        </div>

        <p class="divider fade-in">
          ----------------------------------- OR
          -----------------------------------
        </p>

        <form class="fade-in" action="register.php" method="post">
          <div class="input-row">
            <input type="text" name="name" placeholder="Name" required />
            <input
              type="email"
              name="email"
              placeholder="Email Address"
              required
            />
          </div>

          <div class="input-row">
            <input
              type="password"
              name="password"
              placeholder="Password"
              required
            />
            <input
              type="password"
              name="password_repeat"
              placeholder="Repeat password"
              required
            />
          </div>

          <div class="terms">
            <input type="checkbox" id="agree" name="agree" value="1" required />
            <label for="agree"
              >I agree terms of service and privacy policy</label
            >
          </div>

          <button type="submit" class="signup-btn bounce">Sign up</button>
        </form>
      </div>

      <div class="image-section">
        <img src="./assets/images/sample1.jpg" alt="Breakfast Meal" />
      </div>
    </div>

    <script src="login.js"></script>
  </body>
</html>

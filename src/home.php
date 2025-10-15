<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Kusina ni Kapetan | Home</title>
      <link rel="stylesheet" href="styles.css">
      <link rel="icon" type="image/png" href="../images/favicon-16x16.png">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>

      <?php include "partials/navbar.php"; ?>

      <main>
            
            <section class="section hero">
                  <video autoplay muted loop playsinline class="hero-bg">
                        <source src="/website/videos/bgedit.mp4">
                        Your browser does not support the video tag.
                  </video>
                  
            </section>
      </main>
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      <script>
      var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
      });
      </script>
</body>
</html>
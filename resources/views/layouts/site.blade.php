<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Mpandaguta Primary</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Updated: Apr 25 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <!-- Additional CSS for floating window -->
  <style>
    .floating-window {
      position: fixed;
      bottom: 20px; /* Adjust as needed */
      right: 20px; /* Adjust as needed */
      z-index: 1000; /* Ensure it's above other content */
    }
  </style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{'/'}}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.jpg" height="200" alt=""> -->
        <h1 class="">Mpandaguta</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{'/'}}" class="active">Home</a></li>
          <li><a href="{{'/'}}">About</a></li>
          <li><a href="{{'/site_events'}}">Events</a></li>
          <li><a href="{{'/site_testimonies'}}">Alumni</a></li>
          <li><a href="{{'/site_notices'}}">Noticies</a></li>
		  <li><a href="{{'/site_archivements'}}">Archivements</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{'/login'}}">Login</a>

    </div>
  </header>

  <main class="main">
    @yield('content')
  </main>

  <footer id="footer" class="footer position-relative">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="">Mentor</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Mpandaguta Zimbabwe</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+263 779 755 462</span></p>
            <p><strong>Email:</strong> <span>admin@mpandaguta.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Subjects</h4>
          <ul>
            <li><a href="#">Maths</a></li>
            <li><a href="#">English</a></li>
            <li><a href="#">Shona</a></li>
            <li><a href="#">FRS</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>
	<style>
.floating-window {
  position: fixed;
  bottom: 20px; /* Adjust as needed */
  left: 20px; /* Align to the left */
  z-index: 1000; /* Ensure it's above other content */
  width: 500px;
}

		</style>

    <!-- Floating window -->
    <!-- Floating window -->
	<div class="floating-window">
  <button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWindow" aria-expanded="false" aria-controls="collapseWindow">
    Chat with Star 
  </button>
  <div class="collapse" id="collapseWindow">
    <div class="card card-body">
      <p><b><i>Hi Welcome to mpandaguta primary,I am Star, How can i help you today?</i></b></p>
    @foreach($responses as $option)
	    <p>{{ $option->id }}. {{ $option->name }}</p>
    @endforeach

      <!-- Response area -->
      <div class="response-area mt-3" style="height: 200px; overflow-y: auto;"></div>
      
      <!-- Input field and send icon -->
      <div class="input-group mt-3">
        <input type="number" id="userInput" class="form-control" placeholder="Type your message here...">
        <button class="btn btn-primary" type="button" onclick="sendMessage()">
          <i class="bi bi-arrow-right"></i>
        </button>
      </div>
    </div>
  </div>
</div>

<script>
  function sendMessage() {
    var userInput = document.getElementById('userInput').value;

        fetch('/get-response/' + userInput)
            .then(response => response.json())
            .then(data => {
                showResponse(data.response);
            })
            .catch(error => {
                console.error('Error:', error);
            });

	document.getElementById('userInput').value = '';
  }

  function showResponse(response) {
    var responseArea = document.querySelector('.response-area');
    responseArea.innerHTML = responseArea.innerHTML + '<p>' + response + '</p>';
  }
</script>



    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1">SiteName</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

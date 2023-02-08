<?php
$ git clone https://github.com/username/username.github.io
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home | Riot Music Room Studio </title>

  <!-- Favicons -->
  <link href="img/main_img/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly - v4.9.1
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
.bg-image {
  background-image: url("img/main_img/bg.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

<body>

  

  <header id="header" class="fixed-top" style="background-image: url('img/about_img/about_bg_3rd.gif'); 
    background-repeat: no-repeat; background-size: cover;">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <!-- ======= logo ======= -->
      <a href="index.html"><img src="img/main_img/logo.png" alt="" class="img-fluid" width="100" height="70"></a>

      <nav id="navbar" class="navbar order-last order-lg-0" >
        <ul>
          <li><a class="active" href="index.php">HOME</a></li>
          <li><a href="about.php">ABOUT US</a></li>
          <li><a href="book.php">BOOK NOW</a></li>
          <li><a href="explore.php">EXPLORE</a></li>
          <li><a href="contact.php">CONTACT</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">

        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/MNVBandRehearsal" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      </div> 
    </div>

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

<div class="bg-image">
  <section id="hero" class="d-flex align-items-center"> 
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">

        <h1>RIOT MUSIC STUDIO</h1>
        <h2>"There's nothing like music to relieve the soul and uplift it."
          <br><i>Mickey Hart</i></h2>
          <br>
        <a href="book.php" class="btn-about">RESERVE NOW</a>

        <b style="margin-top: 50px; color:#fff; font-size: 13px;">MUTE THE BACKGROUND MUSIC?</b>
        <div style='background-color:#fff; width: 25px;  margin-top: 10px; border-radius: 5px;' id='sound_button'      onClick="playpause()" ><img title='Music Playing' alt='Play The Music' src='https://cdn3.iconfinder.com/data/icons/eightyshades/512/29_Sound_alt-24.png' />
       </div>

    </div>
</div>
  </section><!-- End Hero -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Jarvis Industry</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- For the music Icon -->
  <script type="text/javascript">
  // Background Sound Play/Pause Script:
  // Description: Background Music Will Be On Via Click And And Will Be Off On Other Click With Image Change Also By Pure JavaScript.
  // Copyright EXEIdeas International 2013. All Right Reserved.
    function playpause() { var snd = document.getElementById("sound"); var snd_btn = document.getElementById("sound_button"); snd.muted = !snd.muted; if(snd.muted){ snd_btn.innerHTML = "<img alt='Pause The Music' title='Music Paused' src='https://cdn3.iconfinder.com/data/icons/eightyshades/512/30_Sound_off-24.png' />"; } else{ snd_btn.innerHTML = "<img alt='Play The Music' title='Music Palying' src='https://cdn3.iconfinder.com/data/icons/eightyshades/512/29_Sound_alt-24.png' />"; } }
  </script>
  <!-- For the Audio -->
  <audio autoplay="true" loop="true" width="0" height="0" id="sound" src="assets/audio/audio_home.mp3" type="audio/mp3" ></audio>
  <noembed><bgsound src="music.mp3" loop="infinite"/></noembed>

</body>

</html>
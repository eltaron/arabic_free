<?php
    ob_start();
    session_start();
    $pageTitle = 'free';
    $Title = 'free';
    if (isset($_SESSION['user'])) {
		header('Location: main.php');
	}
    include 'inital.php';
    include $tpl . 'header.php'; 
?>
<main id="main" class="free" dir="rtl">
<section id="free" class="about text-center">
  <div class="container" data-aos="fade-up">
    <div class="title">
      <h2 class="mt-5 pt-5">الفيديوهات المجانية</h2>
    </div>

  <div class="row">
    <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
      <img src="assets/img/about.jpg" class="img-fluid mt-3 mb-3" alt="">
      <a href="https://www.youtube.com/watch?v=hin8Tgwk2Ns" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
      <a class="btn-get-started scrollto">المراجعة النهائية فى النحو </a>
    </div>
    <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
        <img src="assets/img/about.jpg" class="img-fluid mt-3 mb-3" alt="">
        <a href="https://www.youtube.com/watch?v=hin8Tgwk2Ns" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        <a class="btn-get-started scrollto">المراجعة النهائية فى النحو </a>
      </div>
  </div>
  <div class="row">
    <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
      <img src="assets/img/about.jpg" class="img-fluid mt-3 mb-3" alt="">
      <a href="https://www.youtube.com/watch?v=hin8Tgwk2Ns" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
      <a class="btn-get-started scrollto">المراجعة النهائية فى النحو </a>
    </div>
    <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
        <img src="assets/img/about.jpg" class="img-fluid mt-3 mb-3" alt="">
        <a href="https://www.youtube.com/watch?v=hin8Tgwk2Ns" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        <a class="btn-get-started scrollto">المراجعة النهائية فى النحو </a>
      </div>
    </div>
  </div>
</section>
  </main><!-- End #main -->
  
  <?php 
    include $tpl . 'footer.php'; 
    include $tpl . 'scripts.php'; 
    ob_end_flush();
?>
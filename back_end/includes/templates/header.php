<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
  <div class="container-fluid d-flex align-items-center justify-content-between">

    <a href="#about" class="get-started-btn scrollto">
      أبدأ
    </a>

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="<?php if($pageTitle == 'register'){ echo 'active';}?>"><a href="register.php">الدخول للمنصة</a></li>
        <?php if($Title == 'Homepage'){
          echo '<li><a href="#contact">تواصل معنا </a></li>';} 
        ?>
        <li class="<?php if($pageTitle == 'free'){ echo 'active';}?>"><a href="free.php">الفيديوهات المجانية</a></li>
        <li class="<?php if($pageTitle == 'posts'){ echo 'active';}?>"><a href="posts.php">المقالات</a></li>
        <li class="<?php if($pageTitle == 'Homepage'){ echo 'active';}?>"><a href="index.php">الرئيسية</a></li>
      </ul>
    </nav><!-- .nav-menu -->
    <h1 class="logo"><a href="index.php">المعلم</a></h1>
  </div>
</header><!-- End Header -->

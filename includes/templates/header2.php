
<body style="direction: rtl;">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="index.html">المعلم</a></h1>
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="<?php if($pageTitle == 'main'){ echo 'active';}?>"><a href="main.php">الرئيسية</a>
            <li class="<?php if($pageTitle == 'posts2'){ echo 'active';}?>"><a href="posts2.php">المقالات</a></li><li>
            <li class="<?php if($pageTitle == 'activities'){ echo 'active';}?>"><a href="activities.php">المنشورات</a></li>
            <li class="<?php if($pageTitle == 'events'){ echo 'active';}?>"><a href="events.php">المهام</a></li>
            <li class="<?php if($pageTitle == 'account'){ echo 'active';}?>"><a href="account.php">الحساب الشخصى</a></li>
            <li class="d-lg-none d-block"><a href="logout.php">تسجيل الخروج</a></li>
          </ul>
        </nav><!-- .nav-menu -->
        <a href="logout.php" class="get-started-btn scrollto d-none d-lg-block">
          تسجيل الخروج
        </a>
    </div>
  </header>
<?php
    ob_start();
    session_start();
    $pageTitle = 'Homepage';
    $Title = 'Homepage';
    if (isset($_SESSION['user'])) {
		header('Location: main.php');
	}
  include 'inital.php';
?>
<body>
  <header id="header" class="fixed-top ">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <a href="#about" class="get-started-btn scrollto d-none d-md-block">أبدا</a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="register.php">الدخول للمنصة</a></li>
          <li><a href="#contact">تواصل معنا </a></li>
          <li><a href="free.php">الفيديوهات المجانية</a></li>
          <li><a href="posts.php">المقالات</a></li>
          <li class="active"><a href="index.php">الرئيسية</a></li>
        </ul>
      </nav><!-- .nav-menu -->
      <h1 class="logo"><a href="index.php">المعلم</a></h1>
    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
      <h1>المعلم</h1>
      <h2>هدفنا خدمتكم و نجاحكم</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto d-none d-md-block">نبذة عنا</a>
        <a href="https://www.youtube.com/watch?v=hin8Tgwk2Ns" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> شاهد فيديو  <i class="icofont-play-alt-2"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">
              <div class="col-lg-3 col-md-5 col-6 d-md-flex col-sm-12 align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-award"></i>
                  <span>شهادات</span>
                  <p>تقدير</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-document-folder"></i>
                  <span>مسابقات</span>
                  <p>تعليمية</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-clock-time"></i>
                  <span>امتحانات </span>
                  <p>شاملة</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-simple-smile"></i>
                  <span>طلاب</span>
                  <p>متفوقين</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=hin8Tgwk2Ns" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content">
            <h3>نبذة تعريفية عن المنصة</h3>
            <p class="font-italic">
            سيوضح الفيديو طريقة استخدام المنصة كطالب 
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i>
                عند انشاء حساب يجب عليك مراجعة البيانات المرسلة جيدا لانها سيترتب عليها ظهور صفحات خاص بك
              </li>
              <li><i class="bx bx-check-double"></i> يجب عليك بعد انشاء حساب تسجيل الدخول</li>
              <li><i class="bx bx-check-double"></i> لا يمكن الدخول من اكثر من متصفح في نفس الوقت
              </li>
              <li><i class="bx bx-check-double"></i>حضورك ومشاهدتك لدروسك يترتب عليها نسبة حضورك وغيابك </li>
            </ul>
            <p>
              المنصة قيد التطوير لذلك عند وجود اى مشاكل او استفسار سواء فى المنصة بشكل عام او التسجيل بشكل خاص يرجى التواصل معنا</li>

            </p>
          </div>

        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= About Boxes Section ======= -->
    <section id="about-boxes" class="about-boxes">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="assets/img/5-Tips-Mission-Based-Article_Final.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-brush-4-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">مهمتنا</a></h5>
                <p class="card-text">تحضير الطلاب جيدا لأداء الامتحانات عن طريق ممارسة الأمتحانات أكثر من مره شهريا كما نعمل على جعل الطالب يفهم المادة ولا يحفظها</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <img src="assets/img/408-4080137_mission-clipart-team-goal-graphic-design.png" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-calendar-check-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">خطتنا </a></h5>
                <p class="card-text">مراجعة دورية امتحانات شهرية منافسات قوية ومكافات قيمة</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <img src="assets/img/5-Tips-Mission-Based-Article_Final.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-movie-2-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">رؤيتنا </a></h5>
                <p class="card-text">تحضير الطلاب جيدا لأداء الامتحانات عن طريق ممارسة الأمتحانات أكثر من مره شهريا كما نعمل على جعل الطالب يفهم المادة ولا يحفظها</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Boxes Section -->
    <!-- ======= features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <div class="title pt-5">
          <h2>علوم اللغة</h2>
        </div>
        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3">
            <a class="nav-link " data-toggle="tab" href="#tab-1">
              <i class="ri-gps-line"></i>
              <h4 class="d-none d-lg-block">النحو </h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-toggle="tab" href="#tab-2">
              <i class="ri-body-scan-line"></i>
              <h4 class="d-none d-lg-block">البلاغة</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-toggle="tab" href="#tab-3">
              <i class="ri-sun-line"></i>
              <h4 class="d-none d-lg-block">الأدب</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link active show" data-toggle="tab" href="#tab-4">
              <i class="ri-store-line"></i>
              <h4 class="d-none d-lg-block">النصوص</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane " id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>النحو</h3>
                <p class="font-italic">
                  <p>
                    تزخر اللغة بالعديد من النصوص التي عُرِّفت على لسان العرب القدماء بأنها ما لا يحتمل إلا معنى واحداً أو ما لا يحتمل التأويل، أما عند أهل الحديث فقد وردت بمعنى الإسناد والتعيين والتحديد، إلا أن أهل الفقه أقرّوا بأنَّ النص هو الدليل الشرعي كالقرآن.[١] وقد عرَّف النُقّاد النص الأدبي بأنّه بناء يتكوّن من عدد من الجمل السليمة المرتبطة فيما بينها بعلاقات، وقد تربط هذه العلاقات بين جملتين أو بين أكثر
                  </p>
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> اللهم لك الحمد كما ينبغى لجلال وجهك وعظيم سلطانك</li>
                  <li><i class="ri-check-double-line"></i> اللهم لك الحمد كما ينبغى لجلال وجهك وعظيم سلطانك</li>
                  <li><i class="ri-check-double-line"></i> اللهم لك الحمد كما ينبغى لجلال وجهك وعظيم سلطانك</li>
                  <li><i class="ri-check-double-line"></i> اللهم لك الحمد كما ينبغى لجلال وجهك وعظيم سلطانك</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/x1.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>البلاغة</h3>
                <p class="font-italic">
                  <p>
                    تزخر اللغة بالعديد من النصوص التي عُرِّفت على لسان العرب القدماء بأنها ما لا يحتمل إلا معنى واحداً أو ما لا يحتمل التأويل، أما عند أهل الحديث فقد وردت بمعنى الإسناد والتعيين والتحديد، إلا أن أهل الفقه أقرّوا بأنَّ النص هو الدليل الشرعي كالقرآن.[١] وقد عرَّف النُقّاد النص الأدبي بأنّه بناء يتكوّن من عدد من الجمل السليمة المرتبطة فيما بينها بعلاقات، وقد تربط هذه العلاقات بين جملتين أو بين أكثر
                  </p>
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> اللهم لك الحمد كما ينبغى لجلال وجهك وعظيم سلطانك</li>
                  <li><i class="ri-check-double-line"></i> اللهم لك الحمد كما ينبغى لجلال وجهك وعظيم سلطانك</li>
                  <li><i class="ri-check-double-line"></i> اللهم لك الحمد كما ينبغى لجلال وجهك وعظيم سلطانك</li>
                  <li><i class="ri-check-double-line"></i> اللهم لك الحمد كما ينبغى لجلال وجهك وعظيم سلطانك</li>rure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/artworks-000356741385-ibokaz-t500x500.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>الأدب</h3>
                <p class="font-italic">
                  <p>
                    تزخر اللغة بالعديد من النصوص التي عُرِّفت على لسان العرب القدماء بأنها ما لا يحتمل إلا معنى واحداً أو ما لا يحتمل التأويل، أما عند أهل الحديث فقد وردت بمعنى الإسناد والتعيين والتحديد، إلا أن أهل الفقه أقرّوا بأنَّ النص هو الدليل الشرعي كالقرآن.[١] وقد عرَّف النُقّاد النص الأدبي بأنّه بناء يتكوّن من عدد من الجمل السليمة المرتبطة فيما بينها بعلاقات، وقد تربط هذه العلاقات بين جملتين أو بين أكثر
                  </p>
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> اللهم لك الحمد كما ينبغى لجلال وجهك وعظيم سلطانك</li>
                  <li><i class="ri-check-double-line"></i> اللهم لك الحمد كما ينبغى لجلال وجهك وعظيم سلطانك</li>
                  <li><i class="ri-check-double-line"></i> اللهم لك الحمد كما ينبغى لجلال وجهك وعظيم سلطانك</li>
                  <li><i class="ri-check-double-line"></i> اللهم لك الحمد كما ينبغى لجلال وجهك وعظيم سلطانك</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/1422-2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane active show" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>النصوص</h3>
                <p class="font-italic">
                  <p>
                    تزخر اللغة بالعديد من النصوص التي عُرِّفت على لسان العرب القدماء بأنها ما لا يحتمل إلا معنى واحداً أو ما لا يحتمل التأويل، أما عند أهل الحديث فقد وردت بمعنى الإسناد والتعيين والتحديد، إلا أن أهل الفقه أقرّوا بأنَّ النص هو الدليل الشرعي كالقرآن.[١] وقد عرَّف النُقّاد النص الأدبي بأنّه بناء يتكوّن من عدد من الجمل السليمة المرتبطة فيما بينها بعلاقات، وقد تربط هذه العلاقات بين جملتين أو بين أكثر
                  </p>
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> اللهم لك الحمد كما ينبغى لجلال وجهك وعظيم سلطانك</li>
                  <li><i class="ri-check-double-line"></i> اللهم لك الحمد كما ينبغى لجلال وجهك وعظيم سلطانك</li>
                  <li><i class="ri-check-double-line"></i> اللهم لك الحمد كما ينبغى لجلال وجهك وعظيم سلطانك</li>
                  <li><i class="ri-check-double-line"></i> اللهم لك الحمد كما ينبغى لجلال وجهك وعظيم سلطانك</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/Basmalah_By_Wesam_2_by_ACalligraphy.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->
    <!-- ======= videos Section ======= -->
    <section id="video" class="video section-bg">
      <div class="container" data-aos="fade-up">
        <div class="title pt-5">
          <h2>الفيديوهات المجانية</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="assets/img/s6a-350x350.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>فيديو3</h4>
                <div class="social">
                  <a href="#exampleModal" data-toggle="modal" data-target="#exampleModal"><i class="icofont-play-alt-1"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="assets/img/s6a-350x350.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>فيديو2</h4>
                <div class="social">
                  <a href="#exampleModal_2" data-toggle="modal" data-target="#exampleModal_2"><i class="icofont-play-alt-1"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="assets/img/s6a-350x350.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>فيديو1</h4>
                <div class="social">
                  <a href="#exampleModal_3"data-toggle="modal" data-target="#exampleModal_3"><i class="icofont-play-alt-1"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/YQu9Br72PP8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            </div>
          </div>
    </div>
    <div class="modal fade" id="exampleModal_2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <iframe width="100%" height="500" src="https://www.youtube.com/embed/YQu9Br72PP8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
      </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModal_3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <iframe width="100%" height="500" src="https://www.youtube.com/embed/YQu9Br72PP8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
      </div>
      </div>
    </div>
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">
        <div class="title">
          <h2>أراء طلابنا</h2>
        </div>
        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>منى محمد </h3>
            <h4>طالبة</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              شرح حضرتك عظيم جدا بالتوفيق دايما ومن نجاح لنجاح
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>أحمد محمد</h3>
            <h4>طالب</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              شرح حضرتك عظيم جدا بالتوفيق دايما ومن نجاح لنجاح              
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>محمد أحمد</h3>
            <h4>طالب</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              شرح حضرتك عظيم جدا بالتوفيق دايما ومن نجاح لنجاح              
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">
        <div class="title pt-5">
          <h2>الأسئلة الشائعة</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">قمت بأنشاء حساب ولكن لم أدخل الى المنصه لماذا؟ <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                بعد انشاء الحساب يرجى الانتظار حتى يقوم المدرس بتفعيلك 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed"> لقد تم ألغائى من الدخول بعد شهر لما<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  كل شهر يتم تفعيل الطلاب الذين قاموا بالدفع الشهرى فقط والبقيه يلغى تفعيلهم
                </p>
              </div>
            </li>

           
            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed"> لقد تم ألغائى من الدخول بعد شهر لماذا<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  كل شهر يتم تفعيل الطلاب الذين قاموا بالدفع الشهرى فقط والبقيه يلغى تفعيلهم
                </p>
              </div>
            </li>

           
            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed"> لقد تم ألغائى من الدخول بعد شهر لماذا<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                  كل شهر يتم تفعيل الطلاب الذين قاموا بالدفع الشهرى فقط والبقيه يلغى تفعيلهم
                </p>
              </div>
            </li>

            
            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed"> لقد تم ألغائى من الدخول بعد شهر لماذا<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                  كل شهر يتم تفعيل الطلاب الذين قاموا بالدفع الشهرى فقط والبقيه يلغى تفعيلهم
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section>
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="title  pt-5">
          <h2>تواصل معنا </h2>
        </div>
        <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $username 	= filter_var($_POST['username'], FILTER_SANITIZE_STRING);
                    $email 	    = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                    $comment 	= filter_var($_POST['message'], FILTER_SANITIZE_STRING);
                    if (! empty($comment)) {
                        $stmt = $con->prepare("INSERT INTO 
                            message(message, username, email, date)
                            VALUES(:message, :username, :email, NOW())");
                        $stmt->execute(array(
                            'message'   => $comment,
                            'username'  => $username,
                            'email'     => $email
                        ));
                        if ($stmt) {
                            echo '<div class="alert alert-success text-center alert-dismissible fade show" role="alert" id="alert-message">
                                    تم ارسال الرسالة بنجاح
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';
                        }
                    } else {
                        echo '<div class="alert alert-warning alert-dismissible text-center fade show" role="alert" id="alert-message">
                                يجب عليك اضافة الرساله
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                    }
                }
            ?>
      <div class="row">
        <div class="col-lg-6 mt-4 mt-lg-0 order-2">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class=" form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="الأسم" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="البريد الألكترونى" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="عنوان الرسالة" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="الرسالة"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">جارى الأرسال</div>
              <div class="error-message"></div>
              <div class="sent-message">تم أرسال رسالتك بنجاح</div>
            </div>
            <div class="text-center"><button type="submit">أرسال</button></div>
          </form>
        </div>    
        <div class="col-lg-6 order-1">
          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>العنوان</h3>
                <p>كفر الشيخ</p>
              </div>
            </div>
            <div class="col-md-12">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>راسلنا </h3>
                <p>0123654789</p>
              </div>
            </div>
            <div class="col-md-12">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>اتصل بنا </h3>
                <p>01472589635</p>
              </div>
            </div>
          </div>

        </div>

      </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <?php 
    include $tpl . 'footer.php'; 
    include $tpl . 'scripts.php'; 
    ob_end_flush();
?>
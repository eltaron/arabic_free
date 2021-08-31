<?php
ob_start();
session_start();
$pageTitle = 'posts2';
$Title = 'posts2';
include 'inital.php';
include "check_token.php";
$getUser = $con->prepare("SELECT * FROM members WHERE username = ?");
$getUser->execute(array($sessionUser));
$info = $getUser->fetch();
if (isset($_SESSION['user']) && $info['regstatus'] == 1) { 
    include $tpl . 'header2.php'; 
    $getposts = $con->prepare("SELECT * FROM post where type = 1");
    $getposts->execute();
    $posts = $getposts->fetchAll();
?>
  <main id="main">
    <section id="posts" class="posts">
        <div class="container">
            <div class="title mt-5">
                <h2 class="mt-5">المقالات</h2>
              </div>
              <?php 
                foreach ($posts as $post){
                    ?>
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">
              <div class="card" style='background-image: url("assets/img/2-1.jpg");'>
                <div class="card-body">
                  <h5 class="card-title"><a href=""><?php echo $post['post_name'] ;?></a></h5>
                  <p class="card-text"><?php
                                $stringCut = substr( $post['post_description'], 0, 300);
                                $endPoint = strrpos($stringCut, ' ');
                                $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                echo $string ;?>
                                </p>
                  <div class="read-more"><a href="postcontent.php?postid=<?php echo $post['post_id'] ;?>"><i class="icofont-arrow-left"></i>المزيد</a></div>
                </div>
              </div>
            </div>
          </div>\
          <?php
                }
            ?>
        </div>
      </section>
  </main><!-- End #main -->
  <?php
include $tpl . 'footer.php'; 
include $tpl . 'scripts.php'; 
}else {
    header('Location: index.php');
    exit();
}
ob_end_flush();
?>
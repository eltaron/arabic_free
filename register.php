<?php
    ob_start();
    session_start();
    $pageTitle = 'register';
    $Title = 'register';
    if (isset($_SESSION['user'])) {
		header('Location: main.php');
	}
    include 'inital.php';
    include $tpl . 'header.php'; 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if (isset($_POST['sign'])) {
        $formErrors = array();
        $token = getToken(10);
        $username 	= filter_var($_POST['username'],FILTER_SANITIZE_STRING);
        $password 	= filter_var($_POST['password'],FILTER_SANITIZE_STRING);
        $phone      = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
        $class      = $_POST['parent'];
        $MAC = exec('getmac'); 
        $MAC = strtok($MAC, ' '); 
        if (isset($username)) {
            if (strlen($username) < 4) {$formErrors[] = 'اسم المستخدم يجب ان يكون اكبر من 4 احرف';}
        }
        if (isset($password)) {
            if (strlen($password) < 4) {$formErrors[] = 'كلمة المرور يجب ان تكون اكبر من 4 ارقام';}
        }
        if (isset($phone)) {
            if (strlen($phone) < 8) {$formErrors[] = 'رقم الهاتف يجب ان يكون اكبر من 8 ارقام';}
        }
        if (empty($class)) {
            $formErrors[] = 'يجب اختيار القسم';
        }
        // Check If There's No Error Proceed The User Add
        if (empty($formErrors)) {
            // Check If User Exist in Database
            $check = checkItem("username", "members", $username);
            if ($check == 1) {
                $formErrors[] = 'هذا المستخدم موجود عليك استخدام اسم مستخدم اخر';
            } else {
                // Insert Userinfo In Database
                $stmt = $con->prepare("INSERT INTO 
                            members(username, password, phone, groupid, regstatus, date, mac)
                                    VALUES(:zuser, :zpass, :zphone, :zclass, 0, now(), :mac)");
                $stmt->execute(array(
                    'zuser' => $username,
                    'zpass' => sha1($password),
                    'zphone' => $phone,
                    'zclass' => $class,
                    'mac'    => sha1($MAC)
                ));
                // Update user token 
                $ins = $con->prepare("insert into user_token(username,token) VALUES(:zuser, :ztoken)");
                $ins->execute(array(
                    'zuser' 	=> $username,
                    'ztoken'	=> $token
                ));
                // Echo Success Message
                $succesMsg = 'لقد تم تسجيل البيانات قم بتسجيل الدخول';
                header('Location: reg.php');
                exit();
                
            }
        }
      }
      if (isset($_POST['login'])) {
        $user = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
        $pass = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
        $hashedPass = sha1($pass);
        $MAC = exec('getmac'); 
        $MAC = strtok($MAC, ' '); 
        // Check If The User Exist In Database
        $stmt = $con->prepare("SELECT 
                                    userid, username, password, only 
                                FROM 
                                    members 
                                WHERE 
                                    username = ? 
                                AND 
                                    password = ?
                                AND
                                    mac = ?");
        $stmt->execute(array($user, $hashedPass, sha1($MAC)));
        $get = $stmt->fetch();
        $count = $stmt->rowCount();
        // If Count > 0 This Mean The Database Contain Record About This Username
        if ($count > 0) {
            $token = getToken(10);
            $_SESSION['user'] = $user; // Register Session Name
            $_SESSION['uid'] = $get['userid']; // Register User ID in Session
            $_SESSION['token'] = $token;
            // Update user token 
            $result_token = $con->prepare("select count(*) as allcount from user_token where username = ? ");
            $result_token->execute(array($user));
            $row_token = $result_token->rowCount();
            if ($row_token > 0) {
                $mod = $con->prepare("update user_token set token = ? where username = ?");
                $mod->execute(array($token, $user)); 
            } else {
                $ins = $con->prepare("insert into user_token(username,token) VALUES(:zuser, :ztoken)");
                $ins->execute(array(
                    'zuser' 	=> $user,
                    'ztoken'	=> $token
                ));
            }
            header('Location:main.php'); // Redirect To Dashboard Page
            exit();
        } else {
          $formErrors[] = 'خطأ بالتسجيل';
        }
      } 
    }
?>
  <div id="main">
    <div class="form" >
        <?php 
          if (!empty($formErrors)) {
              foreach ($formErrors as $error) {
                  echo '
                      <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                      ' . $error . '
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                  ';
              }
          }
          if (isset($succesMsg)) {
              echo '
                  <div class="alert alert-success text-center  alert-dismissible fade show" role="alert">
                      ' . $succesMsg . '
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>';
          }
        ?>
        <ul class="tab-group">
          <li class="tab active"><a href="#signup">انشاء حساب</a></li>
          <li class="tab"><a href="#login">تسجيل الدخول</a></li>
        </ul>
        <div class="tab-content">
          <div id="signup"> 
            <h2 class="text-center mb-3">مرحبا بك</h2> 
            <div class="text-center"><img src="assets/img/register.png"width="80px" height="80px"></div> 
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
              <div class="field-wrap">
                <input type="text" required class="username" name="username" placeholder="اسم المستخدم" />
              </div>
              <div class="field-wrap">
                <input type="number"required class="phone" name="phone" placeholder="رقم هاتف ولى الامر"/>
              </div>
            <div class="field-wrap">
              <input type="password"required class="password" name="password" placeholder="الرقم السرى"/>
            </div>
            <div class="field-wrap">
              <select class="custom-select show_btn" style="direction: rtl;">
                <option selected>الصف</option>
                <option value="2" data-show="1">الصف الأول الثانوى</option>
                <option value="2" data-show="2">الصف الثانى الثانوى </option>
                <option value="2" data-show="3">الصف الثالث الثانوى</option>
              </select>
            </div>
            <div class="field-wrap" style="direction: rtl;">
              <select class="custom-select main_select show_item" name="parent" id="1" required>
                <option selected disabled>المجموعة</option>
                <option value="1"> المجموعة الاولى</option>
                <option value="2">المجموعة الثانية</option>
                <option value="3">المجموعة التالتة</option>
                <option value="4">المجموعة الرابعة</option>
                <option value="5">المجموعة الخامسة</option>
                <option value="6">المجموعة السادسة</option>
              </select>
              <select class="custom-select main_select show_item" name="parent" id="2" required>
                <option selected disabled>المجموعة</option>
                <option value="7"> المجموعة الاولى</option>
                <option value="8">المجموعة الثانية</option>
                <option value="9">المجموعة التالتة</option>
                <option value="10">المجموعة الرابعة</option>
                <option value="11">المجموعة الخامسة</option>
                <option value="12">المجموعة السادسة</option>
              </select>
              <select class="custom-select main_select show_item" name="parent" id="3" required>
                <option selected disabled>المجموعة</option>
                <option value="13"> المجموعة الاولى</option>
                <option value="14">المجموعة الثانية</option>
                <option value="15">المجموعة التالتة</option>
                <option value="16">المجموعة الرابعة</option>
                <option value="17">المجموعة الخامسة</option>
                <option value="18">المجموعة السادسة</option>
              </select>
            </div>
            <button type="submit" class="button button-block" name="sign">أنشاء حساب</button>
            </form>
          </div>
          <div id="login">   
            <h2 class="text-center mb-3">مرحبا بك</h2>
            <div class="text-center"><img src="assets/img/login.png" width="80px" height="80px"></div>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
              <div class="field-wrap">
                <input type="text" required placeholder="اسم المستخدم" name="username"/>
              </div>
              <div class="field-wrap">
                <input type="password" required placeholder="كلمة المرور" name="password"/>
              </div>
              <button class="button button-block mt-4" name="login">تسجيل الدخول</button>
            </form>
          </div>
        </div><!-- tab-content -->
    </div> <!-- /form -->
  </div>
<?php 
  include $tpl . 'footer.php'; 
  include $tpl . 'scripts.php'; 
  ob_end_flush();
?>
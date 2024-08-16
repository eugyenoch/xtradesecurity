<?php
// Include required files
include "../function.php";
include "../cookie.php";

/** @var mysqli $con */

// Initialize the toast variable
$toast = '';

// Check if the admin is already logged in
if (isset($_SESSION['admin_session']) && !empty($_SESSION['admin_session'])) {
  header("Location: user-profile.php");
  exit;
}

// Build the login script
if (isset($_POST['emailLogin']) || isset($_POST['phoneLogin'])) {
  // Verify reCAPTCHA
  $captchaToken = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '';
  if (!verifyReCaptcha($captchaToken)) {
      $toast = 'captchaOmit';
  } else {
      if(isset($_POST['emailLogin'])) {
              // Sanitize and extract the user input
              $admin_email_or_username = sanitize($_POST['adminEmail']);
              $pass = md5(sanitize($_POST['pwd']));

              // Use prepared statements to prevent SQL injection
              $stmt = $con->prepare("SELECT * FROM admin WHERE (user_email = ? OR userName = ?) AND user_pass = ?");
              $stmt->bind_param("sss", $admin_email_or_username, $admin_email_or_username, $pass);
              $stmt->execute();
              $result = $stmt->get_result();

              // Count the number of rows that contain the data
              $rowCountAdmin = $result->num_rows;

              // Check if there is no matching row with the user data
              if ($rowCountAdmin <= 0) {
                  $toast = "fail";
              } else {
                  $_SESSION['admin_session'] = $admin_email_or_username;
                  $toast = "success";
                  header("Location: user-profile.php");
                  exit;
              }

              $stmt->close();
          }

          if (isset($_POST['phoneLogin'])) {
            // Sanitize and extract the user input
            $admin_phone = sanitize($_POST['dialCode'] . $_POST['adminPhone']);
            $pass = md5($_POST['pwd2']);
        
            // Use prepared statements to prevent SQL injection
            $stmt = $con->prepare("SELECT * FROM admin WHERE phone = ? AND user_pass = ?");
            $stmt->bind_param("ss", $admin_phone, $pass);
            $stmt->execute();
            $result = $stmt->get_result();
        
            // Count the number of rows that contain the data
            $rowCountAdmin = $result->num_rows;
        
            // Check if there is no matching row with the user data
            if ($rowCountAdmin <= 0) {
                $toast = "fail";
            } else {
                $admin = $result->fetch_assoc();
                // Set session to admin_email instead of admin_phone
                $_SESSION['admin_session'] = $admin['user_email'];
                $toast = "success";
                header("Location: user-profile.php");
                exit;
            }
        
            $stmt->close();
        }
        
         }
  } 
?>

<!DOCTYPE html>
<html lang="en">

<?php include "include/header.php"; ?>

  <body class="body header-fixed">

    <!-- Header -->
    <header id="header_main" class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="header__body d-flex justify-content-between">
              <div class="header__left">

               <?php include "../include/logo.php"; ?>

                <div class="left__main">
                <?php include "include/nav.php";?>
                  <!-- /#main-nav -->
                </div>
              </div>

              <?php include "include/headerRight.php";?>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end Header -->

    <!-- PageTitle -->
    <section class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3 class="heading">Login to Your Account</h3>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumb">
              <li><a href="../index.php">Home</a></li>
              <li><p class="fs-18">/</p></li>
              <li><p class="fs-18">Login</p></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- End PageTitle -->

    <section class="register login">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block-text center">
              <h3 class="heading">Admin Login</h3>
              <p class="desc fs-20">
                Welcome back! Log In now to start managing your account
              </p>
              <div class="lock">
                <div class="icon">
                  <svg
                    width="16"
                    height="20"
                    viewBox="0 0 16 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M8.00004 11.7578C7.67672 11.7578 7.41406 12.0205 7.41406 12.3438C7.41406 12.6671 7.67672 12.9298 8.00004 12.9298C8.32336 12.9298 8.58602 12.6671 8.58602 12.3438C8.58602 12.0205 8.32336 11.7578 8.00004 11.7578Z"
                      fill="white"
                    />
                    <path
                      d="M11.5162 8.24219H4.2187C2.10011 8.24219 0.382568 9.95965 0.382568 12.0783C0.382568 15.6973 2.78413 19.0605 6.32241 19.8205C11.2508 20.8791 15.618 17.0922 15.618 12.344C15.618 10.0787 13.7816 8.24219 11.5162 8.24219ZM8.58628 13.9941V17.071C8.58628 17.3949 8.32417 17.657 8.0003 17.657C7.6764 17.657 7.41433 17.3949 7.41433 17.071V13.9941C6.73374 13.7514 6.24237 13.107 6.24237 12.3441C6.24237 11.3747 7.03093 10.5861 8.0003 10.5861C8.96968 10.5861 9.75823 11.3747 9.75823 12.3441C9.75823 13.107 9.26686 13.7513 8.58628 13.9941Z"
                      fill="white"
                    />
                    <path
                      d="M8.00039 0C5.08223 0 2.72656 2.35562 2.72656 5.27383V7.3234C3.20102 7.17391 3.69582 7.07086 4.21898 7.07086H5.07051V5.27383C5.07051 3.65652 6.38309 2.34395 8.00039 2.34395C9.6177 2.34395 10.9303 3.65652 10.9303 5.27383V7.07082H11.5163C12.1356 7.07082 12.7216 7.19777 13.2742 7.3948V5.27383C13.2742 2.35844 10.9128 0 8.00039 0Z"
                      fill="white"
                    />
                  </svg>
                </div>
                <p><span>https://</span>www.xtradesecurity.com</p>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="flat-tabs">
              <ul class="menu-tab">
                <li class="active"><h6 class="fs-16">Email</h6></li>
                <li><h6 class="fs-16">Mobile</h6></li>
              </ul>

              <div class="content-tab">
                <div class="content-inner">
                  <form action="<?= htmlentities($_SERVER['PHP_SELF']);?>" method="post" name="adminLoginForm">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email/ID</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email address" name="adminEmail" title="Email is required" required/>
                    </div>
                    <div class="form-group s1">
                      <label>Password </label>
                      <input type="password" class="form-control" placeholder="Enter password." name="pwd" />
                    </div>

                    <div class="form-group form-check">
                      <div>
                        <input type="checkbox" class="form-check-input" name="adminCheckbox" />
                        <label class="form-check-label">Remember Me</label>
                      </div>
                      <p><a class="small" href="check.php">Forgot Password?</a></p>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6Ld5Px8qAAAAAOqOnYeBL8ELqirvPKqMAauzHrnT" data-callback='onSubmit' data-action='submit'></div>

                    <button type="submit" class="btn-action" name="emailLogin">Login</button>
                    <div class="bottom">
                      <p>Not admin?</p>
                      <a href="../user/login.php">Login Here</a>
                    </div>
                  </form>
                </div>
                <div class="content-inner">
                  <form action="<?= htmlentities($_SERVER['PHP_SELF']);?>" method="post" name="adminLoginForm2">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Mobile Phone</label>
                      <div>
                        <select  class="form-control" id="exampleFormControlSelect1" name="dialCode">
                        <?php include "../include/selectDialingCode.html";?>
                        </select>
                        <input type="tel" class="form-control"  placeholder="Your Phone number" name="adminPhone" />
                      </div>
                    </div>
                    <div class="form-group s1">
                      <label>Password </label>
                      <input type="password" class="form-control" placeholder="Enter password." name="pwd2" />
                    </div>

                    <div class="form-group form-check">
                    <div>
                        <input type="checkbox" class="form-check-input" name="adminPhoneCheckbox" />
                        <label class="form-check-label">Remember Me</label>
                      </div>
                      <p><a class="small" href="check.php">Forgot Password?</a></p>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6Ld5Px8qAAAAAOqOnYeBL8ELqirvPKqMAauzHrnT" data-callback='onSubmit' data-action='submit'></div>

                    <button type="submit" class="btn-action" name="phoneLogin">Login</button>
                    <div class="bottom">
                      <p>Not admin?</p>
                      <a href="../user/login.php">Login Here</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="qr-code center">
              <img src="assets/images/icon/qrcode.png" alt="" />
              <h6 class="fs-20">Login with QR code (coming soon)</h6>
              <p class="fs-14">
                Scan this code with the <span>XTrade Security mobile app</span> <br />
                to log in instantly.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-sale">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="block-text">
              <h4 class="heading">You Will Be Able To Add Managers</h4>
              <p class="desc">
                As quickly as you are able to login, you will be able to add other admins and managers to help in sitewide management tasks.
              </p>
            </div>
          </div>
          <div class="col-md-5">
            <!-- <div class="button">
            <a href="#">Begin Investing</a>
            </div> -->
          </div>
        </div>
      </div>
    </section>

  <?php include "../include/footer.php"; ?>

    <script src="../app/js/aos.js"></script>
    <script src="../app/js/jquery.min.js"></script>
    <script src="../app/js/jquery.easing.js"></script>
    <script src="../app/js/popper.min.js"></script>
    <script src="../app/js/bootstrap.min.js"></script>
    <script src="../app/js/app.js"></script>
    <script src="../app/js/jquery.peity.min.js"></script>

    <script src="../app/js/switchmode.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

    <!--Toastr-->
    <script type="text/javascript" src="../app/js/toastr.min.js"></script>
     <!-- Recaptcha Script -->
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </body>
</html>
<?php
if (isset($toast)) {
    if($toast==='success'){
      echo "<script>toastr.success('You will be redirected shortly', 'Success')</script>";
    }

    if($toast==='fail'){
      echo "<script>toastr.error('We cannot log you in', 'Wrong credentials')</script>";
    }

    if($toast==='captchaFail'){
      echo "<script>toastr.error('reCAPTCHA verification failed  or you have entered wrong credentials.', 'Please Try Again'); </script>";
    }

    if($toast==='captchaOmit'){
      echo "<script>toastr.warning('Please complete the reCAPTCHA verification.', 'Message Not Sent'); </script>";
    }
 
    if($toast==='Subsuccess'){
      echo "<script>toastr.success('You were subscribed successfully', 'Success');</script>";
     }
 
     if($toast==='Subfail'){
       echo "<script>toastr.error('A problem was encountered while performing that operation', 'Error');</script>";
     }
  }
?>
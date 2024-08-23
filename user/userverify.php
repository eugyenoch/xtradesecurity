<?php
use phpmailer\phpmailer\PHPMailer;
use phpmailer\phpmailer\SMTP;
use phpmailer\phpmailer\Exception;

// Include required files
include "../function.php";
include "../cookie.php";

//Check if the user is already logged in
if (isset($_SESSION['admin_session']) && !empty($_SESSION['admin_session'])) {
    header("Location: ../user-profile.php");
    exit;
  }

//Check if the user is already logged in
if (isset($_SESSION['user_session']) && !empty($_SESSION['user_session'])) {
    header("Location: user-profile.php");
    exit;
  }

//PROCESS RESEND VALIDATION FORM
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

//Load Composer's autoloader
require '../vendor/autoload.php';

$config = require_once '../emailConfig.php';

$toast = '';

if (isset($_GET['token']) && $_GET['token']!==null) {
   $token = sanitize($_GET['token']);

    // Check if the token is valid
    $sql = "SELECT * FROM users WHERE verification_token = ? AND is_verified = 0";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Token is valid, update user status
        $updateQuery = "UPDATE users SET is_verified = 1 WHERE verification_token = ?";
        $updateStmt = $con->prepare($updateQuery);
        $updateStmt->bind_param("s", $token);
        if ($updateStmt->execute()) {
           // $toast = "success";
           echo "<script>alert('User validated successfully. Click OK to login'); window.location='login.php';</script>";
        } else {
            $toast = "invalidToken";
            //echo "<script>alert('Error verifying email. Please contact support or login if you have registered'); window.location='login.php';</script>";
        }
        $updateStmt->close();
    } else {
        // Invalid or expired token
        $toast = "invalidToken";
        //echo "<script>alert('No token provided. Please click the link in your email or request new token below');</script>";
    }
    $stmt->close();
} else {
   //echo "<script>alert('Could not successfully register this user.'); window.location = '../index.php';</script>";
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tokenResend'])) {
    //Sanitize and extract user input
    $email = sanitize($_POST['userEmail']);
    $recaptcha_response = $_POST['g-recaptcha-response'];

    // Check if the reCAPTCHA response is set
    if (isset($recaptcha_response) && !empty($recaptcha_response)) {
        // reCAPTCHA validation
        $recaptcha_secret = '6Ld5Px8qAAAAABT4wTXKHJNpXt6-iEROX-VqoSwr';
        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptcha_data = [
            'secret' => $recaptcha_secret,
            'response' => $recaptcha_response
        ];

        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($recaptcha_data),
            ],
        ];
        $context  = stream_context_create($options);
        $captchaResult = file_get_contents($recaptcha_url, false, $context);
        $captchaResult = json_decode($captchaResult);

        if ($captchaResult->success) {
            // Check if the email exists and is not verified
            $sql = "SELECT * FROM users WHERE user_email = ? AND is_verified = 0";
            $stmt = $con->prepare($sql);

            if ($stmt) {
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $user = $result->fetch_assoc();
                    $verification_token = bin2hex(random_bytes(16));

                    // Update the verification token
                    $updateQuery = "UPDATE users SET verification_token = ? WHERE user_email = ?";
                    $updateStmt = $con->prepare($updateQuery);

                    if ($updateStmt) {
                        $updateStmt->bind_param("ss", $verification_token, $email);
                        if ($updateStmt->execute()) {
                            // Send verification email
                            $mail = new PHPMailer(true);
                            try {
                                //Server settings
                                $mail->isSMTP();
                                $mail->Host = $config['smtp']['host'];
                                $mail->SMTPAuth = true;
                                $mail->Username = $config['smtp']['username'];
                                $mail->Password = $config['smtp']['password'];
                                $mail->SMTPSecure = $config['smtp']['encryption'];
                                $mail->Port = $config['smtp']['port'];

                                // Set encryption based on config
                                if ($config['smtp']['encryption'] === 'tls') {
                                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                                } elseif ($config['smtp']['encryption'] === 'ssl') {
                                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                                }

                                // Recipients
                                $mail->setFrom($config['email']['from_address'], $config['email']['from_name']);
                                $mail->addAddress($email, $user['firstname'] . ' ' . $user['lastname']);

                                // Content
                                $mail->isHTML(true);
                                $mail->Subject = 'Email Verification';
                                $mail->Body    = "Dear {$user['firstname']} {$user['lastname']},<br><br>Thank you for revalidating your account. Please click the link below to revalidate your email address:<br><br>
                                                  <a href='https://xtradesecurity.com/user/userverify.php?token=$verification_token'>Verify Email.</a><br>If you are having issues with the link, copy the below directly to your browser
                                                  <br>https://xtradesecurity.com/user/userverify.php?token=$verification_token<br><br>Best Regards,<br>XTrade Security LTD";
                                $mail->AltBody = "Dear {$user['firstname']} {$user['lastname']},\n\nThank you for revalidating your account. Please click the link below to revalidate your email address:\n\n
                                                  https://xtradesecurity.com/user/userverify.php?token=$verification_token\n\nBest Regards,\nXTrade Security LTD";

                                $mail->send();
                                echo "<script>alert('A new verification link has been sent to your email.');</script>";
                                //echo "<script>toastr.success('A new verification link has been sent to your email address.','Success');</script>";

                            } catch (Exception $e) {
                                echo "<script>toastr.error('Failed to send you a new verification email. Please try again later.','Error');</script>";
                            }
                        } else {
                            echo "<script>toastr.error('Failed to update verification token. Please try again later.','Error');</script>";
                        }
                        $updateStmt->close();
                    } else {
                        echo "<script>toastr.error('Failed to update user. Please try again later.','Error');</script>";
                    }
                } else {
                    echo "<script>toastr.error('Email not found or already verified.','Error');</script>";
                }
                $stmt->close();
            } else {
                echo "<script>toastr.error('Something wrong with this service. Please try again later.','Error');</script>";
            }
        } else {
            $toast = 'captchaFail';
        }
    } else {
        $toast = 'captchaOmit';
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
            <h3 class="heading">Verification Token Request</h3>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumb">
              <li><a href="../index.php">Home</a></li>
              <li><p class="fs-18">/</p></li>
              <li><p class="fs-18">Verification</p></li>
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
              <!-- <h3 class="heading"></h3> -->
              <p class="desc fs-20">
                You will be able generate a new validation token if you don't have one
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
          <?php if (isset($_SESSION['unverified_email']) || $toast === 'invalidToken'): ?>
            <div class="flat-tabs">
              <ul class="menu-tab">
                <li class="active"><h6 class="fs-16">User validation</h6></li>
                <!-- <li><h6 class="fs-16">Mobile</h6></li> -->
              </ul>
             
              <div class="content-tab">
                <div class="content-inner">
                  <form action="<?= htmlentities($_SERVER['PHP_SELF']);?>" method="post" name="userLoginForm">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email/ID<span>*</span></label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email address" name="userEmail" title="Email is required" required />
                      <small>&nbsp;This must be the same email used during signup. If we find it, we will resend validation message</small>
                    </div>

                    <div class="g-recaptcha" data-sitekey="6Ld5Px8qAAAAAOqOnYeBL8ELqirvPKqMAauzHrnT" data-callback='onSubmit' data-action='submit'></div>
                
                    <button type="submit" class="btn-action" name="tokenResend">Resend Token</button>
                    <div class="bottom">
                      <p>Not a member or tring to login?<span><a href="register.php">Sign up Here</a>&nbsp;OR&nbsp;<a href="login.php">Login Here</a></span>
                    </p>
                    </div>
                  </form>
                </div>
                <!-- <div class="content-inner">
                 //for phone number login
                </div> -->
              </div>   
            </div>
            <?php unset($_SESSION['unverified_email']); endif; ?>

            <div class="qr-code center">
              <img src="assets/images/icon/qrcode.png" alt="" />
              <h6 class="fs-20">Verify with QR code (coming soon)</h6>
              <p class="fs-14">
                Scan QR code with the <span>xtrade security mobile app</span> <br />
                to verify your account instantly.
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
              <h4 class="heading">Earn up to $25 worth of crypto</h4>
              <p class="desc">
                Discover how specific cryptocurrencies work — and get a bit of
                each crypto investment to try out for yourself.
              </p>
            </div>
          </div>
          <div class="col-md-5">
            <div class="button">
            <a href="#">Begin Investing</a>
            </div>
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
      echo "<script>toastr.success('Email successfully verified', 'Success'); window.location='login.php';</script>";
    }

    if($toast==='invalidToken'){
      echo "<script>toastr.info('It seems you are verified already. Kindly login. If not, Please click the link in your email or request new token using the form below.', 'No Token Provided');</script>";
    }
 
    if($toast==='Subsuccess'){
     echo "<script>toastr.success('You were subscribed successfully', 'Success'); window.location='user-profile.php';</script>";
    }

    if($toast==='Subfail'){
      echo "<script>toastr.error('A problem was encountered while performing that operation', 'Error'); window.location='user-profile.php';</script>";
    }
    if($toast==='captchaFail'){
      echo "<script>toastr.warning('You may have requested this more than once already. Please check your email and try again.', 'Error'); </script>";
    }

    if($toast==='captchaOmit'){
      echo "<script>toastr.warning('Please complete the reCAPTCHA verification.', 'Message Not Sent'); </script>";
    }
  }
?>
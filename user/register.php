<?php
use phpmailer\phpmailer\PHPMailer;
use phpmailer\phpmailer\SMTP;
use phpmailer\phpmailer\Exception;

include '../function.php';

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

//Load Composer's autoloader
require '../vendor/autoload.php';

$config = require_once '../emailConfig.php';

// Generate a wallet address of 40 characters in length (excluding the "xt" prefix)
$internalWallet = generateRandomWalletAddress();

// Initialize the toast variable
$toast = '';

// Check if the user is already logged in
if (isset($_SESSION['user_session']) && !empty($_SESSION['user_session'])) {
  echo "<script>window.location='user-profile.php';</script>";
  exit;
}


// Check if the form is submitted
if (isset($_POST['addUser'])) {

  // Sanitize and extract user input
  $firstname = sanitize($_POST['fname']);
  $lastname = sanitize($_POST['lname']);
  $email = sanitize($_POST['email']);
  $username = sanitize($_POST['userName']);
  $password = md5($_POST['pwd']);
  $dial_code = sanitize($_POST['dialCode']);
  $phone_number = sanitize($_POST['phone']);
  $mobile_phone = $dial_code . $phone_number;
  $affid = sanitize($_POST['affid']);
  $address = sanitize($_POST['address']);
  $city = sanitize($_POST['city']);
  $country = sanitize($_POST['country']);
  $refCode = sanitize($_POST['refCode']);
  $verification_token = bin2hex(random_bytes(16));

  // Check if the reCAPTCHA response is set
  if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
      // reCAPTCHA validation
      $recaptcha_secret = '6Ld5Px8qAAAAABT4wTXKHJNpXt6-iEROX-VqoSwr';
      $recaptcha_response = $_POST['g-recaptcha-response'];

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
          // Check if email or username already exists
          $checkQuery = "SELECT * FROM users WHERE user_email = ? OR userName = ?";
          $checkStmt = $con->prepare($checkQuery);
          $checkStmt->bind_param("ss", $email, $username);
          $checkStmt->execute();
          $result = $checkStmt->get_result();

          if ($result->num_rows > 0) {
              // Email or username already exists
              $toast = "checkEmail";
          } else {
              // Prepare the SQL query to insert the new user
              $sql = "INSERT INTO users (firstname, lastname, user_email, userName, user_pass, address, city, country, phone, affid, asset_address, verification_token, is_verified)
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 0)";

              // Initialize a statement
              $stmt = $con->prepare($sql);
              // Bind the parameters
              $stmt->bind_param("ssssssssssss", $firstname, $lastname, $email, $username, $password, $address, $city, $country, $mobile_phone, $affid, $internalWallet, $verification_token);

              // Execute the statement
              if ($stmt->execute()) {
                  // Check if a referral code was provided
                  if (!empty($refCode)) {
                      // Look up the referrer's username using the referral code
                      $referrerQuery = "SELECT user_email, userName FROM users WHERE affid = ?";
                      $referrerStmt = $con->prepare($referrerQuery);
                      $referrerStmt->bind_param("s", $refCode);
                      $referrerStmt->execute();
                      $referrerResult = $referrerStmt->get_result();

                      if ($referrerResult->num_rows > 0) {
                          // Fetch the referrer's username
                          $referrerRow = $referrerResult->fetch_assoc();
                          $referrerEmail = $referrerRow['user_email'];
                          $referrerUsername = $referrerRow['userName'];

                          // Insert the referral data into the referral table
                          $referralQuery = "INSERT INTO referral (referrer, referrer_email, referrer_affid, user_referred, user_referred_email, user_referred_affid) VALUES (?, ?, ?, ?, ?, ?)";
                          $referralStmt = $con->prepare($referralQuery);
                          $referralStmt->bind_param("ssssss", $referrerUsername,  $referrerEmail, $refCode, $username, $email, $affid);
                          $referralStmt->execute();
                          $referralStmt->close();
                      }

                      $referrerStmt->close();
                  }

                  // Send verification email
                  $mail = new PHPMailer(true);
                  try {
                      // Server settings
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
                      $mail->addAddress($email, $firstname . ' ' . $lastname);

                      // Content
                      $mail->isHTML(true);
                      $mail->Subject = 'Email Verification';
                      $mail->Body    = "Dear $firstname $lastname,<br><br>Thank you for registering. Please click the link below to verify your email address:<br><br>
                                        <a href='https://xtradesecurity.com/user/userverify.php?token=$verification_token'>Verify Email.</a><br>If you are having issues with the link, copy the below directly to your browser
                                        <br>https://xtradesecurity.com/user/userverify.php?token=$verification_token<br><br>Best Regards,<br>XTrade Security LTD";
                      $mail->AltBody = "Dear $firstname $lastname,\n\nThank you for registering. Please click the link below to verify your email address:\n\n
                                        https://xtradesecurity.com/user/userverify.php?token=$verification_token\n\nBest Regards,\nXTrade Security LTD";

                      $mail->send();
                      // Send browser notification
                      $toast = 'verifyEmail';

                  } catch (Exception $e) {
                      $toast = 'fail';
                      error_log("Email sending failed: " . $mail->ErrorInfo);
                  }
              } else {
                  $toast = 'fail';
                  error_log("Database insertion failed: " . $stmt->error);
              }

              // Close the statement
              $stmt->close();
          }

          // Close the check statement
          $checkStmt->close();
      } else {
          // reCAPTCHA failed
          $toast = 'captchaFail';
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
            <h3 class="heading">User Signup Page</h3>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumb">
              <li><a href="../index.php">Home</a></li>
              <li><p class="fs-18">/</p></li>
              <li><p class="fs-18">Register</p></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- End PageTitle -->

    <section class="register">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block-text center">
              <h3 class="heading">Create an account</h3>
              <p class="desc fs-20">
                Register in advance and enjoy all the benefits of being a member.
              </p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="flat-tabs">
              <ul class="menu-tab">
              <li class="active"><h6 class="fs-16">Email/Phone signup</h6></li>
              <!-- <li><h6 class="fs-16">Mobile</h6></li> -->
              </ul>

              <div class="content-tab">
                <div class="content-inner">
                <form action="<?= htmlentities($_SERVER['PHP_SELF']);?>" method="post" name="addUserEmailForm">

                      <input type="hidden" class="form-control" id="affiliationId" name="affid" value="<?= mt_rand(100000,999999);?>" />

                      <div class="form-group">
                          <label for="userEmail">Email<span>*</span></label>
                          <input type="email" class="form-control" id="userEmail" name="email" placeholder="Please fill in the email" required />
                      </div>

                      <div class="form-group">
                          <label for="userName">Username<span>*</span></label>
                          <input type="text" class="form-control" id="userName" name="userName" title="Please fill in the username without spaces" placeholder="Enter username without spaces" required />
                      </div>

                      <div class="form-group">
                          <label for="userPassword">Password<span>*<small>(8 or more characters, including uppercase letters, lowercase letters, numbers, and special characters)</small></span></label>
                          <input type="password" class="form-control" id="userPassword" placeholder="Please enter a password." name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required />
                      </div>

                      <div class="form-group">
                          <label for="firstName">First Name<span class="fs-14">*<small>(Excluding special characters)</small></span></label>
                          <input type="text" class="form-control" id="firstName" placeholder="Enter firstname" name="fname" required />
                      </div>

                      <div class="form-group">
                          <label for="lastName">Last Name<span class="fs-14">*<small>(Excluding special characters)</small></span></label>
                          <input type="text" class="form-control" id="lastName" placeholder="Enter lastname" name="lname" required />
                      </div>

                      <div class="form-group">
                          <label for="mobilePhone">Mobile Phone<span>*</span></label>
                          <div>
                              <select class="form-control" name="dialCode" required><?php include "../include/selectDialingCode.html";?></select>
                              <input type="text" class="form-control" id="mobilePhone" placeholder="Your Phone number" name="phone" required />
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="userAddress">Address</label>
                          <input type="text" class="form-control" id="userAddress" placeholder="Please enter your address" name="address" />
                      </div>

                      <div class="form-group">
                          <label for="userCity">City</label>
                          <input type="text" class="form-control" id="userCity" placeholder="Please enter your city" name="city" />
                      </div>

                      <div class="form-group">
                          <label for="userCountry">Country</label>
                          <select class="form-control" id="userCountry" name="country"><?php include "../include/selectCountry.html";?></select>
                      </div>

                      <div class="form-group">
                          <label for="referrerCode">Referrer Code (recommended)</label>
                          <input type="text" class="form-control" id="referrerCode" placeholder="Please enter your referrer code" name="refCode" />
                          <small>It is recommended that you include the code of the person who referred you. If you don't have this code, ask them.</small>
                      </div>

                      <div class="form-group">
                          <input type="checkbox" name="checkbox" required />By submitting this form, I agree to the website <a href="../terms-of-use.php">terms of use</a> and <a href="../privacy-policy.php">privacy policy</a><span class="text-danger">*</span>
                      </div>

                      <div class="g-recaptcha" data-sitekey="6Ld5Px8qAAAAAOqOnYeBL8ELqirvPKqMAauzHrnT" data-callback='onSubmit' data-action='submit'></div>

                      <button type="submit" class="btn-action" name="addUser">Create Account</button>

                      <div class="bottom">
                          <p>Have an account?</p>
                          <a href="login.php">Login Here</a>
                      </div>
                      </form>

                </div>
              </div>
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
              <a href="user-profile.php">Begin Investing</a>
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
    <script>
      function Convert() {
        let dollarInput = document.getElementByClass("dollar").value;
        let bitcoinInput = document.getElementByClass("bitcoin").value;

        if ((dollarInput != "") & (bitcoinInput == "")) {
          let parsedDollar = parseFloat(dollarInput);
          let fromDollarToBitcoin = parsedDollar * 0.000022;

          let output = document.getElementByClass("bitcoin");
          output.value = fromDollarToBitcoin;
          console.log("Bitcoin", fromDollarToBitcoin);

          clearMessage();
          clearAlert();
        }

        if ((bitcoinInput != "") & (dollarInput == "")) {
          let parsedBitcoin = parseFloat(bitcoinInput);
          let fromBitcoinToDollar = parsedBitcoin * 46403.5;

          let output = document.getElementByClass("dollar");
          output.value = fromBitcoinToDollar;
          console.log("US$", fromBitcoinToDollar);

          clearMessage();
          clearAlert();
        }

        if ((bitcoinInput == "") & (dollarInput == "")) {
          showMessage();
        }
      }
    </script>
    <script>
      //Remove space from an input field in realtime
    document.getElementById('userName').addEventListener('input', function (e) {
        this.value = this.value.replace(/\s+/g, '');
    });
</script>
  </body>
</html>
<?php

if(isset($toast)){
    if($toast==='success'){
      echo "<script>toastr.success('Your action was performed successfully', 'Success');</script>";
    }

    if($toast==='Subsuccess'){
     echo "<script>toastr.success('You were subscribed successfully', 'Success'); window.location='user-profile.php';</script>";
    }

    if($toast==='fail'){
      echo "<script>toastr.error('There was an error in performing this operation', 'Error')</script>";
    }

    if($toast==='Subfail'){
      echo "<script>toastr.error('A problem was encountered while performing that operation', 'Error'); window.location='user-profile.php';</script>";
    }

    if($toast==='checkEmail'){
      echo "<script>toastr.warning('The email or username already exists. Ensure you use correct credentials', 'Error');</script>";
    }

    if($toast==='verifyEmail'){
      echo "<script>toastr.info('check the email provided for welcome message', 'Welcome Message Sent');</script>";
    }
    if($toast==='captchaFail'){
      echo "<script>toastr.error('reCAPTCHA verification failed. Please try again.', 'Error'); </script>";
    }

    if($toast==='captchaOmit'){
      echo "<script>toastr.warning('Please complete the reCAPTCHA verification.', 'Message Not Sent'); </script>";
    }
  }
?>

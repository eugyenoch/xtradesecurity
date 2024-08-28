<?php
use phpmailer\phpmailer\PHPMailer;
use phpmailer\phpmailer\SMTP;
use phpmailer\phpmailer\Exception;

include 'function.php';
checkUserLogin();

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

//Load Composer's autoloader
require 'vendor/autoload.php';

$config = require_once 'emailConfig.php';

// Initialize the toast variable
$toast = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['loan'])) {
    // Sanitize and extract user input
    $firstname = sanitize($_POST['firstname']);
    $lastname = sanitize($_POST['lastname']);
    $dob = sanitize($_POST['dob']);
    $email = sanitize($_POST['email']);
    $address = sanitize($_POST['address']);
    $country = sanitize($_POST['country']);
    $phone = sanitize($_POST['phone']);
    $lamount = sanitize($_POST['lamount']);
    $message = sanitize($_POST['message']);
    $employer = sanitize($_POST['employer']);
    $jobtitle = sanitize($_POST['jobtitle']);
    $income = sanitize($_POST['income']);
    $loanDuration = sanitize($_POST['loanDuration']);

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
    $result = file_get_contents($recaptcha_url, false, $context);
    $result = json_decode($result);
    
    if ($result->success) {
      // Send email using PHPMailer
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
          $mail->setFrom('noreply@xtradesecurity.com', 'xTrade Security');
          $mail->addAddress('finance@xtradesecurity.com', 'Xtrade Support'); // Replace with your recipient's address and name

          // Content
          $mail->isHTML(true);
          $mail->Subject = 'Website Loan Application';
          $mail->Body    = "
              <h3>Loan Application Request</h3>
              <p><strong>First Name:</strong> $firstname</p>
              <p><strong>Last Name:</strong> $lastname</p>
              <p><strong>Date of Birth:</strong> $dob</p>
              <p><strong>Email:</strong> $email</p>
              <p><strong>Address:</strong> $address</p>
              <p><strong>Country:</strong> $country</p>
              <p><strong>Phone:</strong> $phone</p>
              <p><strong>Loan Amount Requested:</strong> $lamount</p>
              <p><strong>Purpose of Loan:</strong> $message</p>
              <p><strong>Collateral:</strong> $collateral</p>
              <p><strong>Repayment Plan:</strong> $repayment</p>
              <h3>Employment Information</h3>
              <p><strong>Employer Name:</strong> $employer</p>
              <p><strong>Job Title:</strong> $jobtitle</p>
              <p><strong>Monthly Income:</strong> $income</p>
              <h3>Reference Information</h3>
              <p><strong>First Ref:</strong> $ref1</p>
              <p><strong>First Ref Tel:</strong> $ref1tel</p>
              <p><strong>Second Ref:</strong> $ref2</p>
              <p><strong>Second Ref Tel:</strong> $ref2tel</p>
          ";
          $mail->AltBody = "
              Loan Application Request
              First Name: $firstname\n
              Last Name: $lastname\n
              Date of Birth: $dob\n
              Email: $email\n
              Address: $address\n
              Country: $country\n
              Phone: $phone\n
              Loan Amount Requested: $lamount\n
              Purpose of Loan: $message\n
              Collateral: $collateral\n
              Repayment: $repayment\n
              
              Employment Information
              Employer Name: $employer\n
              Job Title: $jobtitle\n
              Monthly Income: $income\n

              Reference Information
              First Ref: $ref1\n
              First Ref Tel: $ref1tel\n
              Second Ref: $ref2\n
              Second Ref Tel: $ref2tel\n     
          ";

          $mail->send();
          $toast = 'success';
      } catch (Exception $e) {
          $toast = 'fail';
          // You can log the error if needed
          error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
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

 <?php include "header.php"; ?>

  <body class="body header-fixed">
    <!-- Header -->
    <header id="header_main" class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="header__body d-flex justify-content-between">
              <div class="header__left">
             
             <!-- insert the logo --> 
               <?php include "include/logo.php"; ?>

                <!-- Main Navbar -->
                <div class="left__main">
                <?php include "nav.php"; ?>
                  <!-- /#main-nav -->
                </div>
              </div>

              <?php include "headerRight.php"; ?>
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
            <h3 class="heading">Apply For Loans</h3>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li><p class="fs-18">/</p></li>
              <li><p class="fs-18">Loans</p></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- End PageTitle -->

    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-md-12">
            <div class="image">
              <img src="assets/images/layout/testimonials.png" alt="xTrade Security support representation image" title="xTrade Security Support" />
            </div>
          </div>
          <div class="col-xl-6 col-md-12">
            <div class="contact-main">
              <div class="block-text center">
                <h3 class="heading">Get in touch with us </h3>
                <p class="desc fs-20">Send a loan application mesasge using the form and a staff will reachout to you, if you qualify. </p>
              </div>

              <form action="<?= htmlentities($_SERVER['PHP_SELF']);?>" method="post" name="loanForm">
              <div class="row">
                <div class="form-group col-6">
                  <label>Firstname<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" placeholder="Enter your first name" name="firstname" required />
                </div>
                <div class="form-group col-6">
                  <label>Lastname<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" placeholder="Enter your last name" name="lastname" required />
                </div>
              </div>

              <div class="form-group">
                  <label>Date of Birth</label>
                  <input type="date" class="form-control" name="dob" />
                </div>
                 
                <div class="form-group">
                  <label>Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" placeholder="Enter mail" name="email" required />
                </div>
                <div class="form-group">
                  <label>Address </label>
                  <input type="text" class="form-control" placeholder="Enter address" name="address" />
                </div>
                <div class="row">
                <div class="form-group col-4">
                  <label>Country/Code</label>
                  <select class="form-control" id="exampleFormControlSelect2" name="country">
                  <option value="">Choose a country</option>
                    <?php include "include/selectDialingCode.html";?>
                    </select>
                   </div>
                <div class="form-group col-8">
                  <label>Telephone</label>
                  <input type="tel" class="form-control" placeholder="Enter your phone number" name="phone" 
                  title="Please match the requested format, including country code" pattern="\d{7,15}" title="Format: 98889000" />
                  <small>Format:457890000</small>
                </div>
                </div>

                <div class="form-group">
                  <label>Loan Amount Requested ($) <span class="text-danger">*</span></label>
                  <input type="number" class="form-control" placeholder="Enter the amount requested" name="lamount" required />
                </div>
               
                <div class="form-group">
                  <label>Purpose of Loan <span class="text-danger">*</span></label>
                  <textarea cols="30" rows="10" class="form-control" maxlength="300" placeholder="Enter your message in details" name="message" required></textarea>
                  <small>(Briefly describe why you are requesting the loan and how you plan to use the funds. Maximum 300 words)</small>
                </div>

                <h6>Employment Information</h6>
                <div class="form-group">
                  <label>Employer Name<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" placeholder="Enter employer information" name="employer" required />
                </div>
                <div class="row">
                <div class="form-group col">
                  <label>Position <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" placeholder="position" name="position" required />
                </div>
                <div class="form-group col">
                  <label>Monthly Income($) <span class="text-danger">*</span></label>
                  <input type="number" class="form-control" placeholder="Enter current income" name="monthly-income" required />
                </div>
                </div>
                <div class="form-group">
                  <label>Collateral <span class="text-danger">*</span></label>
                  <textarea cols="30" rows="10" class="form-control" maxlength="300" placeholder="Enter your message in details" name="collateral" required></textarea>              
                </div>
                <div class="form-group">
                  <label>Repayment Plan <span class="text-danger">*</span></label>
                  <textarea cols="30" rows="10" class="form-control" maxlength="300" placeholder="Enter your message in details" name="repayment" required></textarea>              
                </div>

                <h6>References</h6>
                <p>(Provide two personal or professional references with contact information)</p>
                <div class="row">
                <div class="form-group col-6">
                  <label>Full Name<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" placeholder="Enter firstname and lastname" name="ref1" required />
                </div>
                <div class="form-group col-6">
                  <label>Phone<span class="text-danger">*</span></label>
                  <input type="tel" class="form-control" placeholder="Enter your phone number" name="ref1tel" 
                  title="Please match the requested format, including country code" pattern="\+\d{1,3}-\d{1,4}-\d{4,9}" title="Format: +1-234-56789000" required />
                  <small>Format:+1-234-56789000</small>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-6">
                  <label>Full Name<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" placeholder="Enter firstname and lastname" name="ref2" required />
                </div>
                <div class="form-group col-6">
                  <label>Phone<span class="text-danger">*</span></label>
                  <input type="tel" class="form-control" placeholder="Enter your phone number" name="ref2tel" 
                  title="Please match the requested format, including country code" pattern="\+\d{1,3}-\d{1,4}-\d{4,9}" title="Format: +1-234-56789000" required />
                  <small>Format:+1-234-56789000</small>
                </div>
              </div>
                
                <div class="form-group">
                <input type="checkbox" name="checkbox" required />By submitting this form, I agree to the website <a href="terms-of-use.php">terms of use</a> and <a href="privacy-policy.php">privacy policy</a><span class="text-danger">*</span>
                </div>
              
                <div class="g-recaptcha" data-sitekey="6Ld5Px8qAAAAAOqOnYeBL8ELqirvPKqMAauzHrnT" data-callback='onSubmit' data-action='submit'></div>
                
                <button type="submit" name="loan" class="btn-action">Send Request</button>
              </form>
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
              <h4 class="heading">Check out the FAQs for additional support.</h4>
              <p class="desc">
                Discover more about what we can do for you by looking at our frequently asked questions: some of the issues faced by customers have been treated at the FAQs.<br>Find answers to the most common questions about our services, security features, and account management to enhance your experience within our platform.
              </p>
            </div>
          </div>
          <div class="col-md-5">
            <div class="button">
              <a href="faq.php">Get additional support</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer section -->
    <?php include "include/footer.php"; ?>

    <script src="app/js/aos.js"></script>
    <script src="app/js/jquery.min.js"></script>
    <script src="app/js/jquery.easing.js"></script>
    <script src="app/js/popper.min.js"></script>
    <script src="app/js/bootstrap.min.js"></script>
    <script src="app/js/app.js"></script>
    <script src="app/js/jquery.peity.min.js"></script>

    <script src="app/js/switchmode.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
     <!--Toastr-->
     <script type="text/javascript" src="app/js/toastr.min.js"></script>

    <!-- Recaptcha Script -->
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </body>
</html>
<?php

if(isset($toast)){
    if($toast==='success'){
      echo "<script>toastr.success('Thank you. Your message was sent successfully.', 'Success');</script>";
    }

    if($toast==='fail'){
      echo "<script>toastr.error('Message could not be sent at the moment. Please try again later', 'Error')</script>";
    }

    if($toast==='Subsuccess'){
      echo "<script>toastr.success('You were subscribed successfully', 'Success');</script>";
     }
 
     if($toast==='Subfail'){
       echo "<script>toastr.error('A problem was encountered while performing that operation', 'Error');</script>";
     }

    if($toast==='captchaFail'){
      echo "<script>toastr.error('reCAPTCHA verification failed. Please try again.', 'Error'); </script>";
    }

    if($toast==='captchaOmit'){
      echo "<script>toastr.warning('Please complete the reCAPTCHA verification.', 'Message Not Sent'); </script>";
    }
  }
?>
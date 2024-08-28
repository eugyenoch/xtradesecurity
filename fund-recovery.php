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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['recover'])) {
    // Sanitize and extract user input
    $firstname = sanitize($_POST['firstname']);
    $lastname = sanitize($_POST['lastname']);
    $phone = sanitize($_POST['phone']);
    $email = sanitize($_POST['email']);
    $address = sanitize($_POST['address']);
    $country = sanitize($_POST['country']);
    $doi = sanitize($_POST['doi']);
    $description = sanitize($_POST['description']);
    $resolution = sanitize($_POST['resolution']);

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
            // Initialize PHPMailer and send email
            $mail = new PHPMailer(true);
            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host = $config['smtp']['host'];
                $mail->SMTPAuth = true;
                $mail->Username = $config['smtp']['username'];
                $mail->Password = $config['smtp']['password'];
                $mail->Port = $config['smtp']['port'];

                // Set encryption based on config
                if ($config['smtp']['encryption'] === 'tls') {
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                } elseif ($config['smtp']['encryption'] === 'ssl') {
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                }

                // Recipients
                $mail->setFrom('noreply@xtradesecurity.com', 'xTrade Security LTD');
                $mail->addAddress('finance@xtradesecurity.com', 'xTrade Security Support');
                // Content
                $mail->isHTML(true);
                $mail->Subject = 'New Fund Recovery Request';
                $mail->Body    = "There is a new fund recovery request from the website. Details are shown below:<br>
                    First Name: $firstname<br>
                    Last Name: $lastname<br>
                    Email: $email<br>
                    Phone: $phone<br>
                    Address: $address<br>
                    Country: $country<br>
                    Date of Incidence: $doi<br>
                    Description: $description<br>
                    Desired Resolution: $resolution";
                $mail->AltBody = "There is a new fund recovery request from the website. Details are shown below:\n
                    First Name: $firstname\n
                    Last Name: $lastname\n
                    Email: $email\n
                    Phone: $phone\n
                    Address: $address\n
                    Country: $country\n
                    Date of Incidence: $doi\n
                    Description: $description\n
                    Desired Resolution: $resolution";

                // Attachments
                if (!empty($_FILES['receipt']['tmp_name'])) {
                    $mail->addAttachment($_FILES['receipt']['tmp_name'], $_FILES['receipt']['name']);
                }
                if (!empty($_FILES['photo']['tmp_name'])) {
                    $mail->addAttachment($_FILES['photo']['tmp_name'], $_FILES['photo']['name']);
                }
                if (!empty($_FILES['report']['tmp_name'])) {
                    $mail->addAttachment($_FILES['report']['tmp_name'], $_FILES['report']['name']);
                }
                if (!empty($_FILES['signature']['tmp_name'])) {
                    $mail->addAttachment($_FILES['signature']['tmp_name'], $_FILES['signature']['name']);
                }

                // Send the email
                $mail->send();
                $toast = 'success';
            } catch (Exception $e) {
                $toast = 'fail';
                // Log the error
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
            <h3 class="heading">Fund Recovery Page</h3>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li><p class="fs-18">/</p></li>
              <li><p class="fs-18">Fund Recovery</p></li>
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
                <p class="desc fs-20">Send us your mesasge using the form and a staff will reachout to you as regarding your request. </p>
              </div>

              <form action="<?= htmlentities($_SERVER['PHP_SELF']);?>" method="post" name="fundRecoveryForm" enctype="multipart/form-data">
                    <div class="row"> 
                        <div class="form-group col">
                            <label>Your firstname<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter your first name" name="firstname" required />
                        </div>
                        <div class="form-group col">
                            <label>Your lastname<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter your last name" name="lastname" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" placeholder="Enter email" name="email" required />
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="Enter address" name="address" />
                    </div>

                    <div class="row">
                        <div class="form-group col-4">
                            <label>Country/Code</label>
                            <select class="form-control" name="country" required>
                                <option value="">Select country</option>
                                <?php include "include/selectDialingCode.html"; ?>
                            </select>
                        </div>
                        <div class="form-group col-8">
                            <label>Telephone</label>
                            <input type="tel" class="form-control" placeholder="Enter your phone number" name="phone" pattern="\d{7,15}" title="Please match the requested format, including country code. Format: 457890000" />
                            <small>Format: 457890000</small>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Date of Incidence<span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="doi" required />
                    </div>

                    <div class="form-group">
                        <label>Description of issue <span class="text-danger">*</span></label>
                        <textarea cols="30" rows="10" class="form-control" maxlength="300" placeholder="Enter your message in details" name="description" required></textarea>
                        <small>Provide details of the issue you are requesting recovery for. Include any relevant dates and circumstances. Maximum 300 words.</small>
                    </div>

                    <div class="form-group">
                        <label>Desired resolution <span class="text-danger">*</span></label>
                        <textarea cols="30" rows="10" class="form-control" maxlength="300" placeholder="Enter your desired resolution" name="resolution" required></textarea>
                        <small>Describe what you are seeking as a resolution. For example, replacement, refund, etc.</small>
                    </div>

                    <h6>Supporting Documents and Signature</h6>
                    <span>Attach any documents related to the recovery request, such as receipts, photos, or reports</span>

                    <div class="form-group">
                        <label for="formFileReceipt" class="form-label">Receipt/Invoice</label>
                        <input class="form-control form-control-sm" id="formFileReceipt" type="file" accept="image/*" name="receipt" />
                    </div>

                    <div class="form-group">
                        <label for="formFilePhoto" class="form-label">Photo Evidence</label>
                        <input class="form-control form-control-sm" id="formFilePhoto" type="file" accept="image/*" name="photo" />
                    </div>

                    <div class="form-group">
                        <label for="formFileReport" class="form-label">Report/Other(PDf only)</label>
                        <input class="form-control form-control-sm" id="formFileReport" type="file" accept=".pdf" name="report" />
                    </div>

                    <div class="form-group">
                        <label for="formFileSignature" class="form-label">Signature(PDf only)</label>
                        <input class="form-control form-control-sm" id="formFileSignature" type="file" accept=".pdf" name="signature" />
                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="checkbox" required /> By submitting this form, I agree to the website <a href="terms-of-use.php">terms of use</a> and <a href="privacy-policy.php">privacy policy</a> <span class="text-danger">*</span>
                    </div>

                    <div class="g-recaptcha" data-sitekey="6Ld5Px8qAAAAAOqOnYeBL8ELqirvPKqMAauzHrnT" data-callback='onSubmit' data-action='submit'></div>
                    
                    <button type="submit" name="recover" class="btn-action">Submit</button>
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
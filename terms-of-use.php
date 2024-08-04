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
            <h3 class="heading">Terms of use</h3>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li><p class="fs-18">/</p></li>
              <li><p class="fs-18">Terms of use</p></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- End PageTitle -->

    <section class="faq">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block-text center">
              <h5 class="heading">Terms of use for the xTradeSecurity website</h5>
              <p class="desc fs-20">Last updated: 1<sup>st</sup> August, 2024</p>
            </div>
          </div>
          
<p>Welcome to xTradeSecurity. These Terms of Use ("Terms") govern your access to and use of our website and services. By accessing or using our website, you agree to comply with and be bound by these Terms.</p>

        <h6>1. Acceptance of Terms</h6>
        <p>By accessing our website, you agree to comply with and be bound by these Terms. If you do not agree to these Terms, you should not use our website or services.</p>

        <h6>2. Changes to Terms</h6>
        <p>We reserve the right to modify these Terms at any time. We will notify you of any changes by posting the updated Terms on our website. Your continued use of the website after any modifications signifies your acceptance of the new Terms.</p>

        <h6>3. Eligibility</h6>
        <p>To use our services, you must be at least 18 years old or the age of majority in your jurisdiction, whichever is greater. By using our website, you represent and warrant that you meet these requirements.</p>

        <h6>4. User Accounts</h6>
        <p>To access certain features of our website, you may be required to create an account. You agree to provide accurate, current, and complete information during the registration process and to update such information as necessary. You are responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account.</p>

        <h6>5. Use of the Website</h6>
        <p>You agree to use our website and services only for lawful purposes and in accordance with these Terms. You agree not to:</p>
        <ul>
            <li>Use our website in any way that violates any applicable local, state, national, or international law or regulation.</li>
            <li>Engage in any conduct that restricts or inhibits anyone's use or enjoyment of the website, or which, as determined by us, may harm xTradeSecurity or users of the website.</li>
            <li>Use any device, software, or routine that interferes with the proper working of the website.</li>
            <li>Introduce any viruses, trojan horses, worms, logic bombs, or other material that is malicious or technologically harmful.</li>
        </ul>

        <h6>6. Intellectual Property</h6>
        <p>The content on our website, including text, graphics, logos, images, and software, is the property of xTradeSecurity or its licensors and is protected by copyright, trademark, and other intellectual property laws. You may not use, reproduce, or distribute any content from our website without our prior written permission.</p>

        <h6>7. Termination</h6>
        <p>We reserve the right to terminate or suspend your account and access to our website at our sole discretion, without notice, for conduct that we believe violates these Terms or is harmful to other users of the website or us or for any other reason.</p>

        <h6>8. Disclaimer of Warranties</h6>
        <p>Our website and services are provided on an "as is" and "as available" basis. We make no warranties, express or implied, regarding the operation or availability of the website or the information, content, materials, or products included on the website.</p>

        <h6>9. Limitation of Liability</h6>
        <p>To the fullest extent permitted by law, xTradeSecurity shall not be liable for any indirect, incidental, special, consequential, or punitive damages, or any loss of profits or revenues, whether incurred directly or indirectly, or any loss of data, use, goodwill, or other intangible losses, resulting from (a) your use or inability to use the website; (b) any unauthorized access to or use of our servers and/or any personal information stored therein.</p>

        <h6>10. Governing Law</h6>
        <p>These Terms shall be governed and construed in accordance with the laws of [Your Jurisdiction], without regard to its conflict of law provisions.</p>

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
              <h4 class="heading">support is always available</h4>
              <p class="desc">
               If you have any other questions not covered here, please feel free to reach out to our customer support team for further assistance regarding our policy.
              </p>
            </div>
          </div>
          <div class="col-md-5">
            <div class="button">
              <a href="contact.php">Contact support</a>
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
  </body>
</html>
<?php

if(isset($toast)){
    if($toast==='success'){
      echo "<script>toastr.success('You will be redirected shortly', 'Success');</script>";
    }

    if($toast==='Subsuccess'){
     echo "<script>toastr.success('You were subscribed successfully', 'Success'); window.location='user-profile.php';</script>";
    }

    if($toast==='fail'){
      echo "<script>toastr.error('We cannot log you in', 'Error')</script>";
    }

    if($toast==='Subfail'){
      echo "<script>toastr.error('A problem was encountered while performing that operation', 'Error'); window.location='user-profile.php';</script>";
    }
  }
?>
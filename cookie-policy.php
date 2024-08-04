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
            <h3 class="heading">Cookie policy</h3>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li><p class="fs-18">/</p></li>
              <li><p class="fs-18">Cookie policy</p></li>
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
              <h5 class="heading">Cookie policy Statement for the xTradeSecurity website</h5>
              <p class="desc fs-20">Last updated: 1<sup>st</sup> August, 2024</p>
            </div>
          </div>
          
<p>At xTradeSecurity, we use cookies and similar tracking technologies to enhance your experience on our website. This Cookie Policy explains what cookies are, how we use them, and your choices regarding their use.</p>

        <h6>1. What are Cookies?</h6>
        <p>Cookies are small text files that are placed on your device when you visit a website. They are widely used to make websites work more efficiently, as well as to provide information to the owners of the site.</p>

        <h6>2. How We Use Cookies</h6>
        <p>We use cookies for the following purposes:</p>
        <ul>
            <li><strong>Essential Cookies:</strong> These cookies are necessary for the website to function properly. They enable you to navigate the site and use its features.</li>
            <li><strong>Performance Cookies:</strong> These cookies collect information about how you use our website, such as which pages you visit most often. This information helps us improve the performance and user experience of our site.</li>
            <li><strong>Functionality Cookies:</strong> These cookies allow our website to remember choices you make, such as your language preferences, to provide a more personalized experience.</li>
            <li><strong>Targeting Cookies:</strong> These cookies are used to deliver advertisements that are more relevant to you and your interests. They may also limit the number of times you see an advertisement and help measure the effectiveness of advertising campaigns.</li>
        </ul>

        <h6>3. Third-Party Cookies</h6>
        <p>We may also use third-party cookies provided by trusted partners for the purposes mentioned above. These cookies are subject to the respective privacy policies of these external services.</p>

        <h6>4. Your Choices Regarding Cookies</h6>
        <p>You have the option to control the use of cookies on our website. You can manage your cookie preferences by adjusting your browser settings. Please note that disabling certain cookies may affect the functionality and performance of our website.</p>
        <ul>
            <li><strong>Browser Settings:</strong> Most web browsers allow you to control cookies through their settings preferences. For more information on how to manage cookies, please refer to your browser's help documentation.</li>
            <li><strong>Opt-Out Tools:</strong> You can opt-out of certain third-party cookies by using opt-out tools provided by the third parties themselves. For example, you can opt-out of Google Analytics by installing the Google Analytics opt-out browser add-on.</li>
        </ul>

        <h6>5. Changes to Our Cookie Policy</h6>
        <p>We may update this Cookie Policy from time to time to reflect changes in our practices or for other operational, legal, or regulatory reasons. We encourage you to review this policy periodically to stay informed about our use of cookies.</p>

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
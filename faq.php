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
               
               <?php include "logo.php"; ?>

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
            <h3 class="heading">FAQ</h3>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li><p class="fs-18">/</p></li>
              <li><p class="fs-18">FAQ</p></li>
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
              <h3 class="heading">Frequently Asked Questions</h3>
              <p class="desc fs-20">Learn how to get started</p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="flat-accordion">
              <div class="flat-toggle">
                <h6 class="toggle-title">What is Rockie</h6>
                <div class="toggle-content">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Tellus aliquam parturient erat id vel, condimentum a,
                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                    ultrices venenatis.
                  </p>
                  <a href="#">Learn more</a>
                </div>
              </div>
              <div class="flat-toggle">
                <h6 class="toggle-title">How to start with Rockie</h6>
                <div class="toggle-content">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Tellus aliquam parturient erat id vel, condimentum a,
                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                    ultrices venenatis.
                  </p>
                  <a href="#">Learn more</a>
                </div>
              </div>
              <div class="flat-toggle">
                <h6 class="toggle-title">
                  What Cryptocurrencies can I use to purchase
                </h6>
                <div class="toggle-content">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Tellus aliquam parturient erat id vel, condimentum a,
                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                    ultrices venenatis.
                  </p>
                  <a href="#">Learn more</a>
                </div>
              </div>
              <div class="flat-toggle">
                <h6 class="toggle-title">How to buy & sell in Rockie</h6>
                <div class="toggle-content">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Tellus aliquam parturient erat id vel, condimentum a,
                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                    ultrices venenatis.
                  </p>
                  <a href="#">Learn more</a>
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
                each crypto to try out for yourself.
              </p>
            </div>
          </div>
          <div class="col-md-5">
            <div class="button">
              <a href="#">Create Account</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer section -->
    <?php include "footer.php"; ?>

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

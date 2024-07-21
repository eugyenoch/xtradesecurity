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
            <h3 class="heading">Contact</h3>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li><p class="fs-18">/</p></li>
              <li><p class="fs-18">Contact</p></li>
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
              <img src="assets/images/layout/contact.jpg" alt="" />
            </div>
          </div>
          <div class="col-xl-6 col-md-12">
            <div class="contact-main">
              <div class="block-text center">
                <h3 class="heading">Leave a message for us</h3>
                <p class="desc fs-20">Get in touch with Rockie</p>
              </div>

              <form>
                <div class="form-group">
                  <label>Your name</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter your name"
                  />
                </div>
                <div class="form-group">
                  <label>Email </label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter mail"
                  />
                </div>

                <div class="form-group">
                  <label>Subject </label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>NFT Items</option>
                    <option>NFT Items 1</option>
                    <option>NFT Items 1</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Message </label>
                  <textarea
                    cols="30"
                    rows="10"
                    class="form-control"
                    placeholder="Enter your message"
                  ></textarea>
                </div>

                <button type="submit" class="btn-action">Send message</button>
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

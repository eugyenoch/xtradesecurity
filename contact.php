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
              <li><a href="index.php">Home</a></li>
              <li><p class="fs-18">/</p></li>
              <li><p class="fs-18">Contact page</p></li>
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
              <img src="assets/images/layout/testimonials.png" alt="xTradeSecurity support representation image" title="xTradeSecurity Support" />
            </div>
          </div>
          <div class="col-xl-6 col-md-12">
            <div class="contact-main">
              <div class="block-text center">
                <h3 class="heading">Leave a message for us</h3>
                <p class="desc fs-20">Get in touch with xTradeSecurity</p>
              </div>

              <form>
                <div class="form-group">
                  <label>Your firstname<span class="text-danger">*</span></label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter your first name"
                    required
                  />
                </div>
                <div class="form-group">
                  <label>Your lastname<span class="text-danger">*</span></label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter your last name"
                    required
                  />
                </div>
                 <div class="form-group">
                  <label>Your Phone number<br><small>Format: 123-456-7890000</small></label>
                  <input
                    type="tel"
                    class="form-control"
                    placeholder="Enter your phone number"
                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4,7}"
                  />
                </div>
                <div class="form-group">
                  <label>Email <span class="text-danger">*</span></label>
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Enter mail"
                    required
                  />
                </div>

                <div class="form-group">
                  <label>Subject <span class="text-danger">*</span></label>
                  <select class="form-control" id="exampleFormControlSelect1" required>
                    <option value="general">General Enquiry</option>
                    <option value="account">Account issues</option>
                    <option value="technical">Technical</option>
                    <option value="markets">Markets and Exchange</option>
                    <option value="affiliates">Affiliates and third-party</option>
                    <option value="wallet">Wallet and Finance</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Message <span class="text-danger">*</span></label>
                  <textarea
                    cols="30"
                    rows="10"
                    class="form-control"
                    placeholder="Enter your message in details"
                    required
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
              <h4 class="heading">Check out the FAQs for additional support.</h4>
              <p class="desc">
                Discover more about what we can do for you by looking at our frequently asked questions: some of the issues faced by customers have been treated at the FAQs.<br>Find answers to the most common questions about xTradeSecurity’s services, security features, and account management to enhance your experience with our platform.
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

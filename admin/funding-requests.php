<?php
include '../function.php';
checkAdminLogin();
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
            <h3 class="heading">Add A New Admin</h3>
          </div>
          <div class="col-md-6">
          <span><a href="user-profile.php">Back to dashboard<<</a></span>
            <ul class="breadcrumb">
              <li><a href="user-profile.php">Home</a></li>
              <li><p class="fs-18">/</p></li>
              <li><p class="fs-18">Add admin</p></li>
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
              <h3 class="heading">Admin Registration</h3>
              <p class="desc fs-20">Fill out this form to add a new admin to your website</p>
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
                  <form action="<?= htmlentities($_SERVER['PHP_SELF']);?>" method="post" name="addAdminEmailForm">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Please fill in the email" required />
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Please fill in the username" required />
                    </div>
                    <div class="form-group">
                      <label>Password<span>(8 or more characters, including uppercase letters, lowercase letters, numbers and special characters)</span></label>
                      <input type="password" class="form-control" placeholder="Please enter a password." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required />
                    </div>
                    <div class="form-group">
                      <label>First Name<span class="fs-14">(Excluding special characters)</span></label>
                      <input type="text" class="form-control" placeholder="Enter firstname" required />
                    </div>
                    <div class="form-group">
                      <label>Last Name<span class="fs-14">(Excluding special characters)</span></label>
                      <input type="text" class="form-control" placeholder="Enter lastname" required />
                    </div>
                
                    <div class="form-group">
                      <label for="exampleInputEmail1">Mobile Phone</label>
                      <div>
                        <select class="form-control"><?php include "../include/selectDialingCode.html";?></select>
                        <input type="text" class="form-control" placeholder="Your Phone number" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Address </label>
                      <input type="text" class="form-control" placeholder="Please enter your address" />
                    </div>

                    <div class="form-group">
                      <label>City </label>
                      <input type="text" class="form-control" placeholder="Please enter your city" />
                    </div>

                    <div class="form-group">
                      <label>Country </label>
                      <select class="form-control"><?php include "../include/selectCountry.html";?></select>
                    </div>

                    <button type="submit" class="btn-action" name="addAdmin">Register Admin</button>
                    <!-- <div class="bottom">
                      <p>Already have an account?</p>
                      <a href="login.html">Login</a>
                    </div> -->
                </form> 
                </div>
                <!-- <div class="content-inner"></div> -->
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
              <a href="login.php">Login to Your Account</a>
            </div>
          </div>
        </div>
      </div>
    </section>

  <?php include "footer.php"; ?>

    <script src="../app/js/aos.js"></script>
    <script src="../app/js/jquery.min.js"></script>
    <script src="../app/js/jquery.easing.js"></script>
    <script src="../app/js/popper.min.js"></script>
    <script src="../app/js/bootstrap.min.js"></script>
    <script src="../app/js/app.js"></script>
    <script src="../app/js/jquery.peity.min.js"></script>

    <script src="../app/js/switchmode.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

    

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
  </body>
</html>

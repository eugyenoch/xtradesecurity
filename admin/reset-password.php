<?php
// Include required files
include "../function.php";
include "../cookie.php";

// Initialize the toast variable
$toast = '';

if (isset($_POST['resetPassword'])) {
  if (!isset($_SESSION['admin_email'])) {
    echo "<script>alert('Unauthorized access!'); window.location.href = 'login.php';</script>";
    exit;
    }

    $admin_email = $_SESSION['admin_email'];
    $new_password = md5($_POST['newPassword']);
    $reset_password = md5($_POST['confirmPassword']);

    if ($new_password !== $reset_password) {
        echo "<script>alert('Passwords do not match.'); window.location.href = 'reset-password.php';</script>";
        exit;
    }

    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare("UPDATE admin SET user_pass = ? WHERE user_email = ?");
    $stmt->bind_param("ss", $new_password, $admin_email);

    if ($stmt->execute()) {
        echo "<script>alert('Password updated successfully.'); window.location.href = 'login.php';</script>";
    } else {
        echo "<script>alert('Failed to update password! Please login with your known credentials or repeat process.'); window.location.href = 'login.php';</script>";
    }

  $stmt->close();
  session_unset();
  session_destroy();
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
               <?php include "logo.php"; ?>
               
                <div class="left__main">
                <?php include "nav.php";?>
                  <!-- /#main-nav -->
                </div>
              </div>

              <?php include "headerRight.php";?>
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
            <h3 class="heading">Password Change</h3>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumb">
              <li><a href="../index.php">Home</a></li>
              <li><p class="fs-18">/</p></li>
              <li><p class="fs-18">Password change</p></li>
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
              <h3 class="heading">Admin Password Reset</h3>
              <p class="desc fs-20">Please use the form to set a new password</p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="flat-tabs">
              <ul class="menu-tab">
                <li class="active"><h6 class="fs-16">Reset Password</h6></li>
                <!-- <li><h6 class="fs-16">Mobile</h6></li> -->
              </ul>
              <div class="col-md-12">
            <div class="flat-tabs">
              <!-- <ul class="menu-tab"></ul> -->
              <div class="content-tab">
                <div class="content-inner">
                
                  <form action="<?php htmlentities($_SERVER['PHP_SELF']);?>" method="post" name="adminResetPasswordForm">
                  <div class="form-group s1">
                      <label>New Password</label>
                      <input type="password" class="form-control" placeholder="Please enter a password." name="newPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required />
                      <small>(8 or more characters, including Uppercase letters, lowercase letters, numbers and special characters)</small>
                    </div>

                    <div class="form-group s1">
                     <label>Re-enter Password</label> 
                      <input type="password" class="form-control" placeholder="Please re-enter your password." name="confirmPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required />
                    </div>

                    <button type="submit" class="btn-action" name="resetPassword">Reset Password</button>
                    <div class="bottom">
                      <p>Remember Your Password?</p>
                      <a href="login.php">Login</a>
                    </div>
                </form>
              </div>
                </div>
              </div>
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
<?php
        if(isset($toast) && $toast==='success'){
          echo "<script>toastr.success('You will be redirected shortly', 'Success')</script>";
        }

        if(isset($toast) && $toast==='fail'){
          echo "<script>toastr.error('We cannot log you in', 'Wrong credentials')</script>";
        }
        ?>
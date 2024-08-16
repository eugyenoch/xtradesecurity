<?php
// Include required files
include "../function.php";
include "../cookie.php";

// Initialize the toast variable
$toast = '';

if (isset($_POST['confirm'])) {
    $admin_email = sanitize($_POST['adminEmail']);
    $admin_phone = $_POST['dialCode'] . sanitize($_POST['adminPhone']);
    
    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare("SELECT * FROM admin WHERE user_email = ? AND phone = ?");
    $stmt->bind_param("ss", $admin_email, $admin_phone);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $toast='success';
        $_SESSION['admin_email'] = $admin_email;
        header("Location: reset-password.php");
        exit;
    } else {
        $toast='fail';
        echo "<script>alert('Invalid email or phone number.'); window.location.href = 'login.php';</script>";
    }

    $stmt->close();
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
            <h3 class="heading">Admin Verification</h3>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumb">
              <li><a href="../index.php">Home</a></li>
              <li><p class="fs-18">/</p></li>
              <li><p class="fs-18">Admin verification</p></li>
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
              <h3 class="heading">Password Recovery</h3>
              <p class="desc fs-20">
             <small> Confirm your registered email address and phone number. If found, you will be re-directed to update your password effectively</small>
              </p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="flat-tabs">
              <!-- <ul class="menu-tab">
                <li class="active"><h6 class="fs-16">Email</h6></li>
                <li><h6 class="fs-16">Mobile</h6></li>
              </ul> -->
              <div class="col-md-12">
            <div class="flat-tabs">
              <!-- <ul class="menu-tab"></ul> -->
              <div class="content-tab">
                <div class="content-inner">
                    <form action="<?php htmlentities($_SERVER['PHP_SELF']);?>" method="post" name="adminCheckForm">
                        <div class="form-floating mb-3">
                        <label for="inputEmail">Email address</label>
                            <input class="form-control" id="inputEmail" type="email" placeholder="username" name="adminEmail" title="Enter your registered email address" required />
                        </div>
                        <div class="form-group">
                      <label for="InputEmail1">Phone</label>
                      <div>
                        <select  class="form-control" id="exampleFormControlSelect1" name="dialCode">
                        <?php include "../include/selectDialingCode.html";?>
                        </select>
                        <input type="tel" class="form-control"  placeholder="Your Phone number" name="adminPhone" required />
                      </div>
                    </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <a class="small" href="login.php">Return to login?</a>
                            <button type="submit" class="btn-action" name="confirm">Confirm Credentials</button>
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


  </body>
</html>
<?php
        if(isset($toast) && $toast==='success'){
          echo "<script>toastr.success('You will be redirected shortly', 'Success')</script>";
        }

        if(isset($toast) && $toast==='fail'){
          echo "<script>toastr.error('We cannot verify you', 'Wrong credentials')</script>";
        }
        ?>
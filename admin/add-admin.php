<?php
include '../function.php';
checkAdminLogin();

// Check if the form is submitted
if (isset($_POST['addAdmin'])) {
    // Sanitize and extract user input
    $firstname = sanitize($_POST['fname']);
    $lastname = sanitize($_POST['lname']);
    $email = sanitize($_POST['email']);
    $username = sanitize($_POST['userName']);
    $password = md5($_POST['pwd']);
    //$password = password_hash(sanitize($_POST['pwd']), PASSWORD_BCRYPT); // Hash the password
    $dial_code = sanitize($_POST['dialCode']);
    $phone_number = sanitize($_POST['phone']);
    $mobile_phone = $dial_code . $phone_number;
    $address = sanitize($_POST['address']);
    $city = sanitize($_POST['city']);
    $country = sanitize($_POST['country']);

    // Prepare the SQL query
    $sql = "INSERT INTO admin (firstname, lastname, user_email, userName, user_pass, address, city, country, phone)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    // Initialize a statement
    $stmt = $con->prepare($sql);

    // Bind the parameters
    $stmt->bind_param("sssssssss", $firstname, $lastname, $email, $username, $password, $address, $city, $country, $mobile_phone);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('New admin added successfully.'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: New admin unsuccessful.')</script>";
    }
    // Close the statement
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
                      <label for="exampleInputEmail1">Email<span>*</span></label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Please fill in the email" required />
                     
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username<span>*</span></label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="userName" placeholder="Please fill in the username" required />
                      
                    </div>
                    <div class="form-group">
                      <label>Password<span>*(8 or more characters, including uppercase letters, lowercase letters, numbers and special characters)</span></label>
                      <input type="password" class="form-control" placeholder="Please enter a password." name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required />
                     
                    </div>
                    <div class="form-group">
                      <label>First Name<span class="fs-14">*(Excluding special characters)</span></label>
                      <input type="text" class="form-control" placeholder="Enter firstname" name="fname" required />
                     
                    </div>
                    <div class="form-group">
                      <label>Last Name<span class="fs-14">*(Excluding special characters)</span></label>
                      <input type="text" class="form-control" placeholder="Enter lastname" name="lname" required />
                   
                    </div>
                
                    <div class="form-group">
                      <label for="exampleInputEmail1">Mobile Phone</label>
                      <div>
                        <select class="form-control" name="dialCode"><?php include "../include/selectDialingCode.html";?></select>
                        <input type="text" class="form-control" placeholder="Your Phone number" name="phone" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Address </label>
                      <input type="text" class="form-control" placeholder="Please enter your address" name="address" />
                    </div>

                    <div class="form-group">
                      <label>City </label>
                      <input type="text" class="form-control" placeholder="Please enter your city" name="city" />
                    </div>

                    <div class="form-group">
                      <label>Country </label>
                      <select class="form-control" name="country"><?php include "../include/selectCountry.html";?></select>
                    </div>

                    <div class="form-group">
                    <label>
                      <input type="checkbox" name="agreement" checked required />
                            I agree to the <a href="../terms-of-use.php" title="View terms of use" target="_blank" rel="noopener noreferrer">Terms Of Use</a><span>*</span></label><br>
                       
                    </div>

                    <button type="submit" class="btn-action" name="addAdmin">Register Admin</button>
                    <div class="bottom">
                      <p>Back to admin home page</p>
                      <a href="user-profile.php">Click Here</a>
                    </div>
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


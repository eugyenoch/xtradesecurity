<?php
include '../function.php'; 
checkUserLogin();
?>
<!DOCTYPE html>
<html lang="en">
<?php include "include/profileHeader.php";?>

  <body>
    <div id="preloader"><i>.</i><i>.</i><i>.</i></div>

    <div id="main-wrapper">
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-xxl-12">
              <div class="header-content">
                <div class="header-left">
                  <div class="brand-logo">
                    <a href="index.html">
                      <img src="./images/logo.png" alt="" />
                      <span>XTrade Security</span>
                    </a>
                  </div>
                  <div class="search">
                    <form action="#">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Search Here"
                        />
                        <span class="input-group-text"
                          ><i class="icofont-search"></i
                        ></span>
                      </div>
                    </form>
                  </div>
                </div>
                <?php include "include/profileHeadRight.php";?>

      <?php include "include/sidebar.php";?>

      <div class="content-body">
        <div class="container">
          <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6">
              <div class="card welcome-profile">
                <div class="card-body">
                  <img src="./images/profile/2.png" alt="" />
                  <h4>Welcome, Jannatul Maowa!</h4>
                  <p>
                    Looks like you are not verified yet. Verify yourself to use
                    the full potential of XTrade Security.
                  </p>

                  <ul>
                    <li>
                      <a href="#">
                        <span class="verified"
                          ><i class="icofont-check-alt"></i
                        ></span>
                        Verify account
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="not-verified"
                          ><i class="icofont-close-line"></i
                        ></span>
                        Two-factor authentication (2FA)
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Download App</h4>
                </div>
                <div class="card-body">
                  <div class="app-link">
                    <h5>Get Verified On Our Mobile App</h5>
                    <p>
                      Verifying your identity on our mobile app more secure,
                      faster, and reliable.
                    </p>
                    <a href="#" class="btn btn-primary">
                      <img src="./images/android.svg" alt="" />
                    </a>
                    <br />
                    <div class="mt-3"></div>
                    <a href="#" class="btn btn-primary">
                      <img src="./images/apple.svg" alt="" />
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Information</h4>
                  <a href="./settings-profile.html" class="btn btn-primary"
                    >Edit</a
                  >
                </div>
                <div class="card-body">
                  <form class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                      <div class="user-info">
                        <span>USER ID</span>
                        <h4>818778</h4>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                      <div class="user-info">
                        <span>EMAIL ADDRESS</span>
                        <h4>email@example.com</h4>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                      <div class="user-info">
                        <span>COUNTRY OF RESIDENCE</span>
                        <h4>Bangladesh</h4>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                      <div class="user-info">
                        <span>JOINED SINCE</span>
                        <h4>20/10/2020</h4>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                      <div class="user-info">
                        <span>TYPE</span>
                        <h4>Personal</h4>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-xxl-8 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">VERIFY & UPGRADE</h4>
                </div>
                <div class="card-body">
                  <h5>
                    Account Status :
                    <span class="text-warning"
                      >Pending <i class="icofont-warning"></i
                    ></span>
                  </h5>
                  <p>
                    Your account is unverified. Get verified to enable funding,
                    trading, and withdrawal.
                  </p>
                  <a href="#" class="btn btn-primary"> Get Verified</a>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Earn 30% Commission</h4>
                </div>
                <div class="card-body">
                  <p>Refer your friends and earn 30% of their trading fees.</p>
                  <a href="#" class="btn btn-primary"> Referral Program</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="./vendor/apexchart/apexcharts.min.js"></script>
    <script src="./js/dashboard.js"></script>

    <script src="./js/scripts.js"></script>
    <script></script>
  </body>
</html>

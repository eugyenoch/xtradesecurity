<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Qash - Crypto Exchange Dashboard UI Kit</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./images/favicon.png"
    />
    <!-- Custom Stylesheet -->

    <link rel="stylesheet" href="./css/style.css" />
  </head>

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
                      <span>Qash</span>
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

                <div class="header-right">
                  <div class="dark-light-toggle" onclick="themeToggle()">
                    <span class="dark"><i class="icofont-moon"></i></span>
                    <span class="light"><i class="icofont-sun-alt"></i></span>
                  </div>
                  <div class="notification dropdown">
                    <div class="notify-bell" data-toggle="dropdown">
                      <span><i class="icofont-alarm"></i></span>
                    </div>
                    <div
                      class="
                        dropdown-menu dropdown-menu-right
                        notification-list
                      "
                    >
                      <h4>Announcements</h4>
                      <div class="lists">
                        <a href="#" class="">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon success"
                              ><i class="icofont-check"></i
                            ></span>
                            <div>
                              <p>Account created successfully</p>
                              <span>2020-11-04 12:00:23</span>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon fail"
                              ><i class="icofont-close"></i
                            ></span>
                            <div>
                              <p>2FA verification failed</p>
                              <span>2020-11-04 12:00:23</span>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon success"
                              ><i class="icofont-check"></i
                            ></span>
                            <div>
                              <p>Device confirmation completed</p>
                              <span>2020-11-04 12:00:23</span>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon pending"
                              ><i class="icofont-warning"></i
                            ></span>
                            <div>
                              <p>Phone verification pending</p>
                              <span>2020-11-04 12:00:23</span>
                            </div>
                          </div>
                        </a>

                        <a href="./settings-activity.html"
                          >More <i class="icofont-simple-right"></i
                        ></a>
                      </div>
                    </div>
                  </div>

                  <div class="profile_log dropdown">
                    <div class="user" data-toggle="dropdown">
                      <span class="thumb"
                        ><img src="./images/profile/2.png" alt=""
                      /></span>
                      <span class="arrow"
                        ><i class="icofont-angle-down"></i
                      ></span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right">
                      <div class="user-email">
                        <div class="user">
                          <span class="thumb"
                            ><img src="./images/profile/2.png" alt=""
                          /></span>
                          <div class="user-info">
                            <h5>Jannatul Maowa</h5>
                            <span>Qash.inc@gmail.com</span>
                          </div>
                        </div>
                      </div>

                      <div class="user-balance">
                        <div class="available">
                          <p>Available</p>
                          <span>0.00 BTC</span>
                        </div>
                        <div class="total">
                          <p>Total</p>
                          <span>0.00 USD</span>
                        </div>
                      </div>
                      <a href="profile.html" class="dropdown-item">
                        <i class="icofont-ui-user"></i>Profile
                      </a>
                      <a href="wallet.html" class="dropdown-item">
                        <i class="icofont-wallet"></i>Wallet
                      </a>
                      <a href="settings-profile.html" class="dropdown-item">
                        <i class="icofont-ui-settings"></i> Setting
                      </a>
                      <a href="settings-activity.html" class="dropdown-item">
                        <i class="icofont-history"></i> Activity
                      </a>
                      <a href="lock.html" class="dropdown-item">
                        <i class="icofont-lock"></i>Lock
                      </a>
                      <a href="signin.html" class="dropdown-item logout">
                        <i class="icofont-logout"></i> Logout
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sidebar">
        <div class="brand-logo">
          <a href="index.html"><img src="./images/logo.png" alt="" /> </a>
        </div>
        <div class="menu">
          <ul>
            <li>
              <a
                href="index.html"
                data-toggle="tooltip"
                data-placement="right"
                title="Home"
              >
                <span><i class="icofont-ui-home"></i></span>
              </a>
            </li>
            <li>
              <a
                href="trade.html"
                data-toggle="tooltip"
                data-placement="right"
                title="Trade"
              >
                <span><i class="icofont-stack-exchange"></i></span>
              </a>
            </li>
            <li>
              <a
                href="wallet.html"
                data-toggle="tooltip"
                data-placement="right"
                title="Wallet"
              >
                <span><i class="icofont-wallet"></i></span>
              </a>
            </li>
            <li>
              <a
                href="price.html"
                data-toggle="tooltip"
                data-placement="right"
                title="Price"
              >
                <span><i class="icofont-price"></i></span>
              </a>
            </li>
            <li class="logout">
              <a
                href="signin.html"
                data-toggle="tooltip"
                data-placement="right"
                title="Signout"
              >
                <span><i class="icofont-power"></i></span>
              </a>
            </li>
          </ul>

          <p class="copyright">&#169; <a href="#">codeefly</a></p>
        </div>
      </div>

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
                    the full potential of Qash.
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

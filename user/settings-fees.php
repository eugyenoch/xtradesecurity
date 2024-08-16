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
            <div class="col-xl-12">
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
            <div class="col-xxl-12">
              <div class="page-title">
                <h4>Fees</h4>
              </div>
              <div class="card h-unset">
                <div class="card-header">
                  <div class="settings-menu">
                    <a href="settings-profile.html">Profile</a>
                    <a href="settings-application.html">Application</a>
                    <a href="settings-security.html">Security</a>
                    <a href="settings-activity.html">Activity</a>
                    <a href="settings-privacy.html">Privacy</a>
                    <a href="settings-payment-method.html">Payment Method</a>
                    <a href="settings-api.html">API</a>
                    <a href="settings-fees.html">Fees</a>
                  </div>
                </div>
                <div class="card-body pb-0">
                  <div class="row">
                    <div class="col-xxl-12">
                      <div class="card no-shadow h-unset">
                        <div class="card-header">
                          <h4 class="card-title">Normal User</h4>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Tier</th>
                                  <th>Total Qash holding</th>
                                  <th>30-day Trading Volume (BTC)</th>
                                  <th>Maker Fee</th>
                                  <th>Taker Fee</th>
                                  <th>24h Withdrawal Limit (BTC)</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Lv 1</td>
                                  <td>&#60; 500</td>
                                  <td>&#60; 1000</td>
                                  <td>&#60; 0.100%</td>
                                  <td>&#60; 0.150%</td>
                                  <td>500</td>
                                </tr>
                                <tr>
                                  <td>Lv 1</td>
                                  <td>&#60; 500</td>
                                  <td>&#60; 1000</td>
                                  <td>&#60; 0.100%</td>
                                  <td>&#60; 0.150%</td>
                                  <td>500</td>
                                </tr>
                                <tr>
                                  <td>Lv 1</td>
                                  <td>&#60; 500</td>
                                  <td>&#60; 1000</td>
                                  <td>&#60; 0.100%</td>
                                  <td>&#60; 0.150%</td>
                                  <td>500</td>
                                </tr>
                                <tr>
                                  <td>Lv 1</td>
                                  <td>&#60; 500</td>
                                  <td>&#60; 1000</td>
                                  <td>&#60; 0.100%</td>
                                  <td>&#60; 0.150%</td>
                                  <td>500</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-12">
                      <div class="card no-shadow h-unset">
                        <div class="card-header">
                          <h4 class="card-title">VIP User</h4>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Tier</th>
                                  <th>Total Qash holding</th>
                                  <th>30-day Trading Volume (BTC)</th>
                                  <th>Maker Fee</th>
                                  <th>Taker Fee</th>
                                  <th>24h Withdrawal Limit (BTC)</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Lv 1</td>
                                  <td>&#60; 500</td>
                                  <td>&#60; 1000</td>
                                  <td>&#60; 0.100%</td>
                                  <td>&#60; 0.150%</td>
                                  <td>500</td>
                                </tr>
                                <tr>
                                  <td>Lv 1</td>
                                  <td>&#60; 500</td>
                                  <td>&#60; 1000</td>
                                  <td>&#60; 0.100%</td>
                                  <td>&#60; 0.150%</td>
                                  <td>500</td>
                                </tr>
                                <tr>
                                  <td>Lv 1</td>
                                  <td>&#60; 500</td>
                                  <td>&#60; 1000</td>
                                  <td>&#60; 0.100%</td>
                                  <td>&#60; 0.150%</td>
                                  <td>500</td>
                                </tr>
                                <tr>
                                  <td>Lv 1</td>
                                  <td>&#60; 500</td>
                                  <td>&#60; 1000</td>
                                  <td>&#60; 0.100%</td>
                                  <td>&#60; 0.150%</td>
                                  <td>500</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="./js/scripts.js"></script>
    <script></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<?php include "include/profileHeader.php";?>

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

    <?php include "include/sidebar.php"; ?>

      <div class="content-body">
        <div class="container">
          <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-btc">
                <a href="price-details.html">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc BTC-alt"></i>
                      <span>Bitcoin</span>
                    </div>
                    <h5>$ 11,785.10</h5>
                  </div>
                  <div id="chart"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-eth">
                <a href="price-details.html">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc ETH-alt"></i>
                      <span>Ethereum</span>
                    </div>
                    <h5>$ 11,785.10</h5>
                  </div>
                  <div id="chart2"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-usdt">
                <a href="price-details.html">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc USDT-alt"></i>
                      <span>Tether</span>
                    </div>
                    <h5>$ 11,785.10</h5>
                  </div>
                  <div id="chart3"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-xrp">
                <a href="price-details.html">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc XRP-alt"></i>
                      <span>Ripple</span>
                    </div>
                    <h5>$ 11,785.10</h5>
                  </div>
                  <div id="chart4"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-ltc">
                <a href="price-details.html">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc LTC-alt"></i>
                      <span>Litecoin</span>
                    </div>
                    <h5>$ 11,785.10</h5>
                  </div>
                  <div id="chart5"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-ada">
                <a href="price-details.html">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc ADA-alt"></i>
                      <span>Cardano</span>
                    </div>
                    <h5>$ 11,785.10</h5>
                  </div>
                  <div id="chart6"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-eos">
                <a href="price-details.html">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc EOS-alt"></i>
                      <span>EOS</span>
                    </div>
                    <h5>$ 11,785.10</h5>
                  </div>
                  <div id="chart7"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-xmr">
                <a href="price-details.html">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc Xme-alt"></i>
                      <span>Monero</span>
                    </div>
                    <h5>$ 11,785.10</h5>
                  </div>
                  <div id="chart8"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-xtz">
                <a href="price-details.html">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc XTZ-alt"></i>
                      <span>Tezos</span>
                    </div>
                    <h5>$ 11,785.10</h5>
                  </div>
                  <div id="chart9"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-xem">
                <a href="price-details.html">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc XEM-alt"></i>
                      <span>NEM</span>
                    </div>
                    <h5>$ 11,785.10</h5>
                  </div>
                  <div id="chart10"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-neo">
                <a href="price-details.html">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc NEO-alt"></i>
                      <span>NEO</span>
                    </div>
                    <h5>$ 11,785.10</h5>
                  </div>
                  <div id="chart11"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-dash">
                <a href="price-details.html">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc DASH-alt"></i>
                      <span>Dash</span>
                    </div>
                    <h5>$ 11,785.10</h5>
                  </div>
                  <div id="chart12"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-etc">
                <a href="price-details.html">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc ETC-alt"></i>
                      <span>Ethereum Classic</span>
                    </div>
                    <h5>$ 11,785.10</h5>
                  </div>
                  <div id="chart13"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-dgb">
                <a href="price-details.html">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc DGB-alt"></i>
                      <span>DigiByte</span>
                    </div>
                    <h5>$ 11,785.10</h5>
                  </div>
                  <div id="chart14"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="price-widget bg-dcr">
                <a href="price-details.html">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc DCR-alt"></i>
                      <span>Decred</span>
                    </div>
                    <h5>$ 11,785.10</h5>
                  </div>
                  <div id="chart15"></div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="./vendor/apexchart/apexcharts.min.js"></script>
    <script src="./js/plugins/apex-price.js"></script>

    <script src="./js/scripts.js"></script>
    <script></script>
  </body>
</html>

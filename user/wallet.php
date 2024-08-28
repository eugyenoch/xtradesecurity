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
                    <a href="../index.php">
                      <img src="./images/logo.png" alt="" />
                      <span>XTrade Security <i class="icofont-wallet"></i> Wallet</span>
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
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="wallet-widget card">
                <h5>Estimated Balance</h5>
                <h2><span class="text-primary">0.000</span> <sub>USD</sub></h2>
                <p>= 0.000000 BTC</p>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="wallet-widget card">
                <h5>Available Balance</h5>
                <h2><span class="text-success">0.000</span> <sub>USD</sub></h2>
                <p>= 0.000000 BTC</p>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="wallet-widget card">
                <h5>Pending Balance</h5>
                <h2><span class="text-warning">0.000</span> <sub>USD</sub></h2>
                <p>= 0.000000 BTC</p>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="wallet-widget card">
                <h5>Locked Balance</h5>
                <h2><span class="text-danger">0.000</span> <sub>USD</sub></h2>
                <p>= 0.000000 BTC</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xxl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Wallet Addresses</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped responsive-table">
                      <thead>
                        <tr>
                          <th>Coin Name</th>
                          <th>Address</th>
                          <th>QR</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="coin-name">
                              <i class="cc BTC"></i>
                              <span>Bitcoin</span>
                            </div>
                          </td>
                          <td>35Hb5B6qJa5ntYaNFN3hGYXdAjh919g2VH</td>
                          <td>
                            <img
                              class="qr-img"
                              src="./images/qr.svg"
                              alt=""
                              width="40"
                            />
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="coin-name">
                              <i class="cc BTC"></i>
                              <span>Bitcoin</span>
                            </div>
                          </td>
                          <td>35Hb5B6qJa5ntYaNFN3hGYXdAjh919g2VH</td>
                          <td>
                            <img
                              class="qr-img"
                              src="./images/qr.svg"
                              alt=""
                              width="40"
                            />
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="coin-name">
                              <i class="cc BTC"></i>
                              <span>Bitcoin</span>
                            </div>
                          </td>
                          <td>35Hb5B6qJa5ntYaNFN3hGYXdAjh919g2VH</td>
                          <td>
                            <img
                              class="qr-img"
                              src="./images/qr.svg"
                              alt=""
                              width="40"
                            />
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="coin-name">
                              <i class="cc BTC"></i>
                              <span>Bitcoin</span>
                            </div>
                          </td>
                          <td>35Hb5B6qJa5ntYaNFN3hGYXdAjh919g2VH</td>
                          <td>
                            <img
                              class="qr-img"
                              src="./images/qr.svg"
                              alt=""
                              width="40"
                            />
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Balance</h4>
                </div>
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                      <div class="balance-chart">
                        <div id="balance-chart"></div>
                        <h4>Total Balance = $ 5360</h4>
                      </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                      <ul class="balance-widget">
                        <li>
                          <div class="icon-title">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </div>
                          <div class="text-end">
                            <h5>0.000242 BTC</h5>
                            <span>0.125 USD</span>
                          </div>
                        </li>
                        <li>
                          <div class="icon-title">
                            <i class="cc USDT"></i>
                            <span>Tether</span>
                          </div>
                          <div class="text-end">
                            <h5>0.000242 USDT</h5>
                            <span>0.125 USD</span>
                          </div>
                        </li>
                        <li>
                          <div class="icon-title">
                            <i class="cc XTZ"></i>
                            <span>Tezos</span>
                          </div>
                          <div class="text-end">
                            <h5>0.000242 XTZ</h5>
                            <span>0.125 USD</span>
                          </div>
                        </li>
                        <li>
                          <div class="icon-title">
                            <i class="cc XMR"></i>
                            <span>Monero</span>
                          </div>
                          <div class="text-end">
                            <h5>0.000242 XMR</h5>
                            <span>0.125 USD</span>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Balance</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped responsive-table">
                      <thead>
                        <tr>
                          <th>Asset</th>
                          <th>Balance</th>
                          <th>Available</th>
                          <th>Locked</th>
                          <th>% Gain</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>>0</td>
                          <td>0</td>
                          <td class="success-arrow">
                            <strong>0.005%</strong>
                            <i class="icofont-arrow-up ml-2"></i>
                          </td>
                        </tr>
                        <tr>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>>0</td>
                          <td>0</td>
                          <td class="success-arrow">
                            <strong>0.005%</strong>
                            <i class="icofont-arrow-up ml-2"></i>
                          </td>
                        </tr>
                        <tr>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>>0</td>
                          <td>0</td>
                          <td class="success-arrow">
                            <strong>0.005%</strong>
                            <i class="icofont-arrow-up ml-2"></i>
                          </td>
                        </tr>
                        <tr>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>>0</td>
                          <td>0</td>
                          <td class="success-arrow">
                            <strong>0.005%</strong>
                            <i class="icofont-arrow-up ml-2"></i>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Deposit</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped responsive-table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Type</th>
                          <th>Amount</th>
                          <th>Date</th>
                          <th>Hash</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>12345</td>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>Jan 01</td>
                          <td>#1236598745565</td>
                          <td>Pending</td>
                        </tr>
                        <tr>
                          <td>12345</td>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>Jan 01</td>
                          <td>#1236598745565</td>
                          <td>Pending</td>
                        </tr>
                        <tr>
                          <td>12345</td>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>Jan 01</td>
                          <td>#1236598745565</td>
                          <td>Pending</td>
                        </tr>
                        <tr>
                          <td>12345</td>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>Jan 01</td>
                          <td>#1236598745565</td>
                          <td>Pending</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Withdrawals</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped responsive-table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Type</th>
                          <th>Amount</th>
                          <th>Fee</th>
                          <th>Date</th>
                          <th>Hash</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>12345</td>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>0.02%</td>
                          <td>Jan 01</td>
                          <td>#1236598745565</td>
                          <td>Pending</td>
                        </tr>
                        <tr>
                          <td>12345</td>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>0.02%</td>
                          <td>Jan 01</td>
                          <td>#1236598745565</td>
                          <td>Pending</td>
                        </tr>
                        <tr>
                          <td>12345</td>
                          <td class="coin-name">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </td>
                          <td>0</td>
                          <td>0.02%</td>
                          <td>Jan 01</td>
                          <td>#1236598745565</td>
                          <td>Pending</td>
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

    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="./vendor/basic-table/jquery.basictable.min.js"></script>
    <script src="./js/plugins/basic-table-init.js"></script>

    <script src="./vendor/apexchart/apexcharts.min.js"></script>
    <script src="./js/dashboard.js"></script>

    <script src="./js/scripts.js"></script>
    <script></script>
  </body>
</html>

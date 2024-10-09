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
                  <a href="../index.php">
                    <img src="../assets/images/logo/favicon.png" alt="icon image" title="XTrade Security LTD" />
                    <span>XTrade Security&nbsp;<i class="icofont-ui-settings"></i>&nbsp;Settings</span>
                    </a>
                  </div>
                  <?php include './include/search-crypto.php';?>
                </div>
                <?php include "include/profileHeadRight.php";?>

      <?php include "include/sidebar.php";?>

      <div class="content-body">
        <div class="container">
          <div class="row">
            <div class="col-xxl-12">
              <div class="page-title">
                <h4>Fees (Trading and Investment)</h4>
              </div>
              <div class="card h-unset">
                <div class="card-header">
                  <div class="settings-menu">
                    <a href="settings-profile.php">Profile</a>
                    <a href="settings-application.php">Application</a>
                    <a href="settings-security.php">Security</a>
                    <a href="settings-activity.php">Activity</a>
                    <a href="settings-privacy.php">Privacy</a>
                    <a href="settings-payment-method.php">Payment Method</a>
                    <a href="settings-api.php">API</a>
                    <a href="#">Fees</a>
                  </div>
                </div>
                <div class="card-body pb-0">
                  <div class="row">
                    <div class="col-xxl-12">
                      <div class="card no-shadow h-unset">
                        <div class="card-header">
                          <h4 class="card-title">Trading (Xtrade exchange and xTrade P2P)</h4>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Tier</th>
                                  <th>Total XTrade Security holding</th>
                                  <th>30-day Trading Volume (USDT)</th>
                                  <th>Maker Fee</th>
                                  <th>Taker Fee</th>
                                  <th>24h Withdrawal Limit (USDT)</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Lv 1</td>
                                  <td>&#60; 5000</td>
                                  <td>&#60; 100000</td>
                                  <td>&#60; 1.100%</td>
                                  <td>&#60; 5.150%</td>
                                  <td>&#8804;4000</td>
                                </tr>
                                <tr>
                                  <td>Lv 2</td>
                                  <td>&#60; 25000</td>
                                  <td>&#60; 500000</td>
                                  <td>&#60; 1.100%</td>
                                  <td>&#60; 5.150%</td>
                                  <td>&#8804;20000</td>
                                </tr>
                                <tr>
                                  <td>Lv 3</td>
                                  <td>&#60; 10000</td>
                                  <td>&#60; 1000000</td>
                                  <td>&#60; 1.100%</td>
                                  <td>&#60; 5.150%</td>
                                  <td>&#8804;800000</td>
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
                          <h4 class="card-title">Investments</h4>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Tier</th>
                                  <th>Total XTrade Security holding</th>
                                  <th>30-day Trading Volume (USDT)</th>
                                  <th>Maker Fee</th>
                                  <th>Taker Fee</th>
                                  <th>24h Withdrawal Limit (USDT)</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Silver</td>
                                  <td>&#8804; 50</td>
                                  <td>&#8804; 5000</td>
                                  <td>&#60; 1.100%</td>
                                  <td>&#60; 5.150%</td>
                                  <td>&#8804;4000</td>
                                </tr>
                                <tr>
                                  <td>Diamond</td>
                                  <td>&#8804; 90</td>
                                  <td>&#8804; 9000</td>
                                  <td>&#60; 1.100%</td>
                                  <td>&#60; 5.150%</td>
                                  <td>&#8804;7000</td>
                                </tr>
                                <tr>
                                  <td>Diamond Plus</td>
                                  <td>&#8804; 20</td>
                                  <td>&#8804; 19500</td>
                                  <td>&#60; 1.100%</td>
                                  <td>&#60; 5.150%</td>
                                  <td>&#8804;15000</td>
                                </tr>
                                <tr>
                                  <td>Gold</td>
                                  <td>&#8804; 500</td>
                                  <td>&#8804; 50000</td>
                                  <td>&#60; 1.100%</td>
                                  <td>&#60; 5.150%</td>
                                  <td>&#8804;40000</td>
                                </tr>
                                <tr>
                                  <td>Gold Plus</td>
                                  <td>Negotiable</td>
                                  <td>Unlimited</td>
                                  <td>&#60; 1.100%</td>
                                  <td>&#60; 5.150%</td>
                                  <td>Unlimited</td>
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
                          <h4 class="card-title">Pay Commissions and Fees</h4>
                        </div>
                        <div class="card-body">
                        <button type="button" class="btn btn-secondary position-relative top-100 start-0" data-toggle="modal" data-target="#commission" tabindex="-1">Payment Details</button>
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
    <?php include "modalForms.php"; ?>
    <?php include "include/footer.php"; ?>
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
                <h4>Application</h4>
              </div>
              <div class="card h-unset">
                <div class="card-header">
                  <div class="settings-menu">
                    <a href="settings-profile.php">Profile</a>
                    <a href="#">Application</a>
                    <a href="settings-security.php">Security</a>
                    <a href="settings-activity.php">Activity</a>
                    <a href="settings-privacy.php">Privacy</a>
                    <a href="settings-payment-method.php">Payment Method</a>
                    <a href="settings-api.php">API</a>
                    <a href="settings-fees.php">Fees</a>
                  </div>
                </div>
                <div class="card-body pb-0">
                  <div class="row">
                    <div class="col-xxl-12">
                      <div class="card no-shadow h-unset">
                        <div class="card-header">
                          <h4 class="card-title">Sitewide Defaults</h4>
                        </div>
                        <div class="card-body">
                          <form action="#">
                            <div class="row g-3">
                              <div class="col-sm-6">
                                <label class="form-label">Language Default</label>
                                <select class="form-select" title="Default language is the English but can use the translator to translate" disabled>
                                  <option value="">English</option>
                                  <option value="">Bangla</option>
                                  <option value="">Hindi</option>
                                </select>
                              </div>
                              <div class="col-sm-6">
                                <label class="form-label">Currency Defaults</label>
                                <select class="form-select" title="Default currencies is the USD and USDT" disabled>
                                  <option value="">USD/USDT</option>
                                  <option value="">CAD</option>
                                  <option value="">Euro</option>
                                </select>
                              </div>
                              <div class="col-sm-6">
                                <label class="form-label">Theme Default</label>
                                <select class="form-select" title="Default theme is light mode" disabled>
                                  <option value="">Light</option>
                                  <option value="">Dark</option>
                                  <option value="">Blue</option>
                                </select>
                              </div>
                              <div class="col-sm-6">
                                <label class="form-label">Time Zone</label>
                                <select class="form-select" title="Default timezone is the GMT" disabled>
                                <option>(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
                                </select>
                              </div>
                              <!-- <div class="col-12">
                                <button class="btn btn-success pl-5 pr-5 waves-effect">Save</button>
                              </div> -->
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-12">
                      <div class="card no-shadow h-unset">
                        <div class="card-header">
                          <h4 class="card-title">Optional Notifications (in Beta)</h4>
                        </div>
                        <div class="card-body">
                          <form action="#">
                            <div class="col-lg-6">
                              <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" id="s1" />
                                <label class="form-check-label" for="s1">I send or receive digital currency</label>
                              </div>
                              <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" id="s2" />
                                <label class="form-check-label" for="s2">I receive merchant order</label>
                              </div>
                              <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" id="s3" />
                                <label class="form-check-label" for="s3">There are recommendation for my account</label>
                              </div>
                            </div>

                            <div class="col-12">
                              <button type="button" class="btn btn-success waves-effect" onclick="toastr.info('Your preference is noted. You have been whitelisted for the services','Notice');"> Save </button>
                            </div>
                          </form>
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

    <?php include "include/footer.php"; ?>
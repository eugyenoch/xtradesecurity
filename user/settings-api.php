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
            <div class="col-xxl-12">
              <div class="page-title">
                <h4>API</h4>
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
                          <h4 class="card-title">Create API Key</h4>
                        </div>
                        <div class="card-body">
                          <form action="#">
                            <div class="row g-3">
                              <div class="col-xl-6 col-md-6">
                                <label class="form-label"
                                  >Generate New Key</label
                                >
                                <input
                                  type="text"
                                  name="usd_amount"
                                  class="form-control"
                                  placeholder="Enter Passphrase"
                                />
                              </div>
                              <div class="col-xl-6 col-md-6">
                                <label class="form-label"
                                  >Confirm Passphrase</label
                                >
                                <input
                                  type="text"
                                  name="usd_amount"
                                  class="form-control"
                                  placeholder="Re-enter passphrase"
                                />
                              </div>
                              <div class="col-auto">
                                <button class="btn btn-primary">
                                  Create API Keys
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-12">
                      <div class="card no-shadow h-unset">
                        <div class="card-header">
                          <h4 class="card-title">Your API Keys</h4>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Key</th>
                                  <th>Status</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>69e387f1-31c3-45ad-9c68-5a51e5e78b43</td>
                                  <td>
                                    <div class="form-check form-switch">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        checked
                                      />
                                    </div>
                                  </td>
                                  <td>
                                    <span>
                                      <i class="icofont-ui-delete"></i>
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>69e387f1-31c3-45ad-9c68-5a51e5e78b43</td>
                                  <td>
                                    <div class="form-check form-switch">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                      />
                                    </div>
                                  </td>
                                  <td>
                                    <span>
                                      <i class="icofont-ui-delete"></i>
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>69e387f1-31c3-45ad-9c68-5a51e5e78b43</td>
                                  <td>
                                    <div class="form-check form-switch">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                      />
                                    </div>
                                  </td>
                                  <td>
                                    <span>
                                      <i class="icofont-ui-delete"></i>
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>69e387f1-31c3-45ad-9c68-5a51e5e78b43</td>
                                  <td>
                                    <div class="form-check form-switch">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                      />
                                    </div>
                                  </td>
                                  <td>
                                    <span>
                                      <i class="icofont-ui-delete"></i>
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>69e387f1-31c3-45ad-9c68-5a51e5e78b43</td>
                                  <td>
                                    <div class="form-check form-switch">
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                      />
                                    </div>
                                  </td>
                                  <td>
                                    <span>
                                      <i class="icofont-ui-delete"></i>
                                    </span>
                                  </td>
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

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
                <h4>Activity</h4>
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
                      <div class="card h-unset no-shadow">
                        <div class="card-header">
                          <h4 class="card-title">Third-Party Applications</h4>
                        </div>
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon-circle bg-warning text-white"
                              ><i class="icofont-question-square"></i
                            ></span>
                            <div>
                              <h5 class="mb-0">
                                You haven't authorized any applications yet.
                              </h5>
                              <p>
                                After connecting an application with your
                                account, you can manage or revoke its access
                                here.
                              </p>
                              <a class="btn btn-primary">Authorize now</a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="card h-unset no-shadow">
                        <div class="card-header">
                          <h4 class="card-title">Web Sessions</h4>

                          <small
                            >These sessions are currently signed in to your
                            account. Sign out all other sessions</small
                          >
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Signed In</th>
                                  <th>Browser</th>
                                  <th>IP Address</th>
                                  <th>Near</th>
                                  <th>Current</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1 day ago</td>
                                  <td>Chrome (Windows)</td>
                                  <td>250.364.239.254</td>
                                  <td>Bangladesh, Dhaka</td>
                                  <td>
                                    <span
                                      ><i class="icofont-check-alt"></i
                                    ></span>
                                    <span
                                      ><i class="icofont-close-line"></i
                                    ></span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>1 day ago</td>
                                  <td>Chrome (Windows)</td>
                                  <td>250.364.239.254</td>
                                  <td>Bangladesh, Dhaka</td>
                                  <td>
                                    <span
                                      ><i class="icofont-check-alt"></i
                                    ></span>
                                    <span
                                      ><i class="icofont-close-line"></i
                                    ></span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>1 day ago</td>
                                  <td>Chrome (Windows)</td>
                                  <td>250.364.239.254</td>
                                  <td>Bangladesh, Dhaka</td>
                                  <td>
                                    <span
                                      ><i class="icofont-check-alt"></i
                                    ></span>
                                    <span
                                      ><i class="icofont-close-line"></i
                                    ></span>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>

                      <div class="card h-unset no-shadow">
                        <div class="card-header">
                          <h4 class="card-title">Confirmed Devices</h4>

                          <small
                            >These devices are currently allowed to access your
                            account. Remove all other devices</small
                          >
                        </div>
                        <div class="card-body">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Confirmed</th>
                                <th>Browser</th>
                                <th>IP Address</th>
                                <th>Near</th>
                                <th>Current</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1 day ago</td>
                                <td>Chrome (Windows)</td>
                                <td>250.364.239.254</td>
                                <td>Bangladesh, Dhaka</td>
                                <td>
                                  <span><i class="icofont-check-alt"></i></span>
                                  <span
                                    ><i class="icofont-close-line"></i
                                  ></span>
                                </td>
                              </tr>
                              <tr>
                                <td>8 days ago</td>
                                <td>Chrome (Windows)</td>
                                <td>250.364.239.254</td>
                                <td>Bangladesh, Dhaka</td>

                                <td>
                                  <span><i class="icofont-check-alt"></i></span>
                                  <span
                                    ><i class="icofont-close-line"></i
                                  ></span>
                                </td>
                              </tr>
                              <tr>
                                <td>15 days ago</td>
                                <td>Chrome (Windows)</td>
                                <td>250.364.239.254</td>
                                <td>Bangladesh, Dhaka</td>

                                <td>
                                  <span><i class="icofont-check-alt"></i></span>
                                  <span
                                    ><i class="icofont-close-line"></i
                                  ></span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>

                      <div class="card h-unset no-shadow">
                        <div class="card-header">
                          <h4 class="card-title">Account Activity</h4>

                          <small>Recent activity on your account.</small>
                        </div>
                        <div class="card-body">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Action</th>
                                <th>Source</th>
                                <th>IP Address</th>
                                <th>Location</th>
                                <th>When</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>verified second factor</td>
                                <td>api</td>
                                <td>157.119.239.254</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">about 1 hour ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>verified second factor</td>
                                <td>api</td>
                                <td>157.119.239.254</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">about 2 hours ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>second factor failure</td>
                                <td>api</td>
                                <td>157.119.239.254</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">about 2 hours ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>device confirmation completed</td>
                                <td>web</td>
                                <td>157.119.239.254</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">1 day ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>signin</td>
                                <td>web</td>
                                <td>157.119.239.254</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">1 day ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>verified second factor</td>
                                <td>web</td>
                                <td>157.119.239.254</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">1 day ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>signout</td>
                                <td>web</td>
                                <td>157.119.239.214</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">8 days ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>signin</td>
                                <td>web</td>
                                <td>157.119.239.214</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">8 days ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>verified second factor</td>
                                <td>web</td>
                                <td>157.119.239.214</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">8 days ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>signout</td>
                                <td>api</td>
                                <td>157.119.239.214</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">8 days ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>signout</td>
                                <td>api</td>
                                <td>157.119.239.214</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">8 days ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>device confirmation completed</td>
                                <td>web</td>
                                <td>157.119.239.214</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">8 days ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>signin</td>
                                <td>web</td>
                                <td>157.119.239.214</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">8 days ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>verified second factor</td>
                                <td>web</td>
                                <td>157.119.239.214</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">8 days ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>signout</td>
                                <td>api</td>
                                <td>157.119.239.214</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">15 days ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>verified second factor</td>
                                <td>web</td>
                                <td>157.119.239.214</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">15 days ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>signin</td>
                                <td>web</td>
                                <td>157.119.239.214</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">15 days ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>signout</td>
                                <td>api</td>
                                <td>157.119.239.214</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">15 days ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>verified second factor</td>
                                <td>web</td>
                                <td>23.106.249.39</td>
                                <td>Singapore</td>
                                <td>
                                  <a href="#">15 days ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>verified second factor</td>
                                <td>api</td>
                                <td>157.119.239.214</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">15 days ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>phone verified</td>
                                <td>api</td>
                                <td>157.119.239.214</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">15 days ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>phone added</td>
                                <td>api</td>
                                <td>157.119.239.214</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">15 days ago</a>
                                </td>
                              </tr>
                              <tr>
                                <td>signin</td>
                                <td>api</td>
                                <td>157.119.239.214</td>
                                <td>Bangladesh</td>
                                <td>
                                  <a href="#">15 days ago</a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>

                      <div class="card h-unset no-shadow">
                        <div class="card-header">
                          <h4 class="card-title">Close Account</h4>
                        </div>
                        <div class="card-body">
                          <p>
                            Withdraw funds and close your XTrade Security account -
                            <span class="text-danger"
                              >this cannot be undone</span
                            >
                          </p>
                          <a href="#" class="btn btn-danger">Close Account</a>
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

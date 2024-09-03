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
                <h4>Activity</h4>
              </div>
              <div class="card h-unset">
                <div class="card-header">
                  <div class="settings-menu">
                    <a href="settings-profile.php">Profile</a>
                    <a href="settings-application.php">Application</a>
                    <a href="settings-security.php">Security</a>
                    <a href="#">Activity</a>
                    <a href="settings-privacy.php">Privacy</a>
                    <a href="settings-payment-method.php">Payment Method</a>
                    <a href="settings-api.php">API</a>
                    <a href="settings-fees.php">Fees</a>
                  </div>
                </div>
                <div class="card-body pb-0">
                  <div class="row">
                    <div class="col-xxl-12">
                      <div class="card h-unset no-shadow">
                        <div class="card-header">
                          <h4 class="card-title">Third-Party Applications (available soon)</h4>
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
                              <a class="btn btn-primary" onclick="toastr.info('This option is not available at the moment. Check back some other time','Notice')";>Authorize now</a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="card h-unset no-shadow">
                        <div class="card-header">
                          <h4 class="card-title">Current Account Activity</h4>

                          <small>These sessions are currently signed in to your
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
                                  <th>Current</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><?= $_SESSION['start_time'] ?></td>
                                  <td><?= htmlspecialchars($shortBrowserInfo); ?></td>
                                  <td><?= $_SESSION['ip_address']; ?></td>
                                  <td><?= $_SESSION['current'] ? 'Yes' : 'No'; ?></td>
                                  <td>
                                    <span><i class="icofont-check-alt"></i></span>
                                    <span><i class="icofont-close-line"></i></span>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>

                      <div class="card h-unset no-shadow">
                        <div class="card-header">
                          <h4 class="card-title">Close Account</h4>
                        </div>
                        <div class="card-body">
                          <p>Withdraw funds and contact us to close your XTrade Security account -
                            <span class="text-danger">this cannot be undone</span>
                          </p>
                          <a href="" class="btn btn-primary" data-toggle="modal" data-target="#withdrawFund" tabindex="-1">Withdraw Funds</a>
                          &nbsp;<a class="btn btn-danger" onclick="if(confirm('You will be redirected to the contact page to reach out for account closure. Are you sure?')){window.location='../contact.php'};">Close Account</a>
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

    <?php include "modalForms.php"; ?>
    <?php include "include/footer.php"; ?>

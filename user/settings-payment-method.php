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
                <h4>Payment Method</h4>
              </div>
              <div class="card h-unset">
                <div class="card-header">
                  <div class="settings-menu">
                    <a href="settings-profile.php">Profile</a>
                    <a href="settings-application.php">Application</a>
                    <a href="settings-security.php">Security</a>
                    <a href="settings-activity.php">Activity</a>
                    <a href="settings-privacy.php">Privacy</a>
                    <a href="#">Payment Method</a>
                    <a href="settings-api.php">API</a>
                    <a href="settings-fees.php">Fees</a>
                  </div>
                </div>
                <div class="card-body pb-0">
                  <div class="row">
                    <div class="col-12">
                      <div class="card no-shadow h-unset">
                        <div class="card-header">
                          <h4 class="card-title">Add a payment method</h4>
                        </div>
                        <div class="card-body">
                          <div class="verify-content">
                            <div class="d-flex align-items-center">
                              <span class="me-3 icon-circle bg-primary text-white"><i class="icofont-email"></i></span>
                              <div class="primary-number">
                                <p class="mb-0">Crypto Payment</p>
                                <small>Credit Card *********5478</small>
                                <br />
                                <span class="text-success">Verified</span>
                              </div>
                            </div>
                            <button class="btn btn-outline-primary" onclick="if(confirm('Click OK to go to wallet and manage your crypto payment method')){window.location='wallet.php'};">Manage</button>
                          </div>
                          <hr class="dropdown-divider my-4" />
                          <div class="verify-content">
                            <div class="d-flex align-items-center">
                              <span class="me-3 icon-circle bg-primary text-white"><i class="icofont-ui-touch-phone"></i></span>
                              <div class="primary-number">
                                <p class="mb-0">Bank Payment (in Beta)</p>
                                <small>Bank **************5421</small>
                                <br />
                                <span class="text-success">Verified</span>
                              </div>
                            </div>
                            <button class="btn btn-outline-primary" onclick="if(confirm('Click OK to go to wallet and manage your bank payment method')){window.location='wallet.php'};">Manage</button>
                          </div>
                          <hr class="dropdown-divider my-4" />
                          <div class="verify-content">
                            <div class="d-flex align-items-center">
                              <span class="me-3 icon-circle bg-primary text-white"><i class="icofont-email"></i></span>
                              <div class="primary-number">
                                <p class="mb-0">Card Payment (available soon)</p>
                                <small>Credit Card *********5478</small>
                                <br />
                                <span class="text-success">Verified</span>
                              </div>
                            </div>
                            <button class="btn btn-outline-primary" onclick="toastr.info('Card payments are not available at the moment. Check back later or use the cryptocurrency payments instead.','NOTICE');">Manage</button>
                          </div>

                          <div class="mt-5">
                            <button type="button" class="btn btn-primary me-3" data-toggle="modal" data-target="#addCrypto">Add New Wallet</button>
                            <button type="button" class="btn btn-info me-3" data-toggle="modal" data-target="#addBank">Add New Bank</button>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addCard">Add New Card</button>
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

   <!-- Modal -->
<div class="modal fade" id="addCrypto" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Receiving Wallet Address</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="walletProcessor.php" method="POST" class="identity-upload" enctype="multipart/form-data">
          <div class="row g-3">
          <div class="col-xl-12">
              <label class="form-label">Cryptocurrency<span class="text-danger">*</span></label>
              <select class="input-group-text" name="cryptocurrency">
                            <?php foreach(fetchUniqueWallets($con) as $wallet): ?>
                                <option value="<?= htmlspecialchars($wallet['wallet']) ?>">
                                    <?= htmlspecialchars($wallet['wallet']) ?>
                                </option>
                            <?php endforeach; ?>
                </select>
          </div>

            <div class="col-xl-12">
              <label class="form-label">Wallet Address for your chosen cryptocurrency<span class="text-danger">*</span></label>
              <input title="Enter wallet address or number" type="text" class="form-control" placeholder="Wallet address here" name="newAddress" required />
            </div>
            
            <div class="col-xl-12">
              <label class="form-label">Wallet Tag</label>
              <input title="Enter wallet tag: e.g. USDT wallet 1" class="form-control" type="text" name="newWalletTag" placeholder="Give wallet a tag name" />
            </div>
            <div class="avt col-xl-12">
              <label class="form-label">QR Code (if available)</label>
              <input type="file" name="qrcode" accept="image/*" title="Select an image" />
            </div>
            <div class="col-xl-12">
              <input name="user" type="text" class="form-control" value="<?php if(isset($user_email) && $user_email!=null){echo $user_email;} ?>" readonly hidden />
            </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-primary" name="addNewAddress" value="Confirm" />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

    
    <!-- Modal -->
    <div class="modal fade" id="addBank" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add bank account</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Please note that this service is in Beta</p>
            <form action="walletProcessor.php" class="identity-upload" method="post">
              <div class="row g-3">
                
                <div class="col-xl-12">
                  <label class="form-label">Account name <span class="text-danger">*</span> </label>
                  <input type="text" class="form-control" placeholder="Bank account name" name="account_name" required />
                </div>
                <div class="col-xl-12">
                  <label class="form-label">NUBAN/IBAN/Routing Number</label>
                  <input type="text" class="form-control" placeholder="Bank account number" name="account_number" />
                </div>
                <div class="col-xl-12">
                  <label class="form-label">Sortcode </label>
                  <input type="text" class="form-control" placeholder="bank sortcode" name="sortcode" />
                </div>
                <div class="col-xl-12">
                  <label class="form-label">Swift Code </label>
                  <input type="text" class="form-control" placeholder="Bank swift code" name="swiftcode" />
                </div>

                <div class="col-xl-12">
                  <label class="form-label">Bank Name<span class="text-danger">*</span> </label>
                  <input type="text" class="form-control" placeholder="Full bank name" name="bank_name" required />
                </div>

                <div class="col-xl-12">
                  <input name="user" type="text" class="form-control" value="<?php if(isset($user_email) && $user_email!=null){echo $user_email;}?>" disabled hidden />
                </div>
                
                <div class="col-xl-12">
                  <img src="<?php if(isset($profilePicUrl)){echo htmlspecialchars($profilePicUrl);}?>" alt="./images/routing.png" class="img-fluid" />
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="addBank">Confirm</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="successBankAccount" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Success</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" ></button>
          </div>
          <div class="modal-body">
            <div class="auth-form">
              <div class="card-body">
                <form action="verify-step-2.php" class="identity-upload">
                  <div class="identity-content">
                    <span class="icon"><i class="icofont-check"></i></span>
                    <p class="text-dark">Congratulation. Your bank added</p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addCard" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addCardLabel">Add card (available soon)</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="identity-upload">
              <div class="row g-3">
                <p>You are currently interacting with a demo as this service is not available yet</p>
                <div class="col-xl-12">
                  <label class="form-label">Name on card </label>
                  <input type="text" class="form-control" placeholder="Full name loading" value="<?php if(isset($firstname) && isset($lastname)){echo $firstname . '&nbsp;'. $lastname;}?>" />
                </div>
                <div class="col-xl-12">
                  <label class="form-label">Card number </label>
                  <input type="text" class="form-control" placeholder="5658 4258 6358 4756" />
                </div>
                <div class="col-xl-4">
                  <label class="form-label">Expiration </label>
                  <input type="text" class="form-control" placeholder="10/22" />
                </div>
                <div class="col-xl-4">
                  <label class="form-label">CVC </label>
                  <input type="text" class="form-control" placeholder="125" />
                </div>
                <div class="col-xl-4">
                  <label class="form-label">Postal code </label>
                  <input type="text" class="form-control" placeholder="2368" />
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#successCard">Submit</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="successCard" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Success</h5>
            <button
              type="button"
              class="btn-close"
              data-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="auth-form">
              <div class="card-body">
                <form action="verify-step-2.php" class="identity-upload">
                  <div class="identity-content">
                    <span class="icon"><i class="icofont-check"></i></span>
                    <p class="text-dark">Congratulation. Your card is added</p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include "include/footer.php"; ?>
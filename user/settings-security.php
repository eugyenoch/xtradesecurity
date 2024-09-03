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
                <h4>Security</h4>
              </div>
              <div class="card h-unset">
                <div class="card-header">
                  <div class="settings-menu">
                    <a href="settings-profile.php">Profile</a>
                    <a href="settings-application.php">Application</a>
                    <a href="#">Security</a>
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
                          <h4 class="card-title">2-step verification</h4>
                        </div>
                        <div class="card-body">
                          <div class="verify-content">
                            <div class="d-flex align-items-center">
                              <span class="me-3 icon-circle bg-primary text-white"><i class="icofont-ui-touch-phone"></i></span>
                              <div class="primary-number">
                                <p class="mb-0">
                                  <strong><?php if(isset($phone) && $phone != null){echo $phone;}else{echo "+xxx xxxxxxxx60";} ?></strong>
                                </p>
                                <small>Keep your primary phone number up-to-date</small>
                                <br />
                                <span class="text-success">Required</span>
                              </div>
                            </div>
                            <a href="settings-profile.php" class="btn btn-outline-primary">Manage</a>
                          </div>
                          <hr class="dropdown-divider my-4" />
                          <div class="verify-content">
                            <div class="d-flex align-items-center">
                              <span class="me-3 icon-circle bg-primary text-white"><i class="icofont-email"></i></span>
                              <div class="primary-number">
                                <p class="mb-0"><strong><?php if(isset($user_email) && $user_email != null){echo $user_email;}else{echo "hello@example.com";} ?></strong></p>
                                <small>Keep your primary email up-to-date. You can contact us if you need to change your email</small>
                                <br />
                                <span class="text-success">Required</span>
                              </div>
                            </div>
                            <a href="../contact.php" class="btn btn-outline-primary"> Contact</a>
                          </div>
                          <hr class="dropdown-divider my-4" />
                          <div class="verify-content">
                            <div class="d-flex align-items-center">
                              <span
                                class="me-3 icon-circle bg-primary text-white"
                                ><i class="icofont-lock"></i
                              ></span>
                              <div class="primary-number">
                                <p class="mb-0">
                                  <strong>*************</strong>
                                </p>
                                <small>You can change your password to a more secure one</small>
                                <br />
                                <span class="text-success">Required</span>
                              </div>
                            </div>
                            <a href="user-profile.php" class="btn btn-outline-primary"> Manage </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-12">
                      <div class="card no-shadow h-unset">
                        <div class="card-header">
                          <h4 class="card-title">Identity verification</h4>
                        </div>
                        <div class="card-body">
                          <div class="verify-content">
                            <div class="d-flex align-items-center">
                              <span
                                class="me-3 icon-circle bg-primary text-white"
                                ><i class="icofont-id"></i
                              ></span>
                              <div class="primary-number">
                                <p class="mb-0">xxx xxxxx xxx40</p>
                                <small>Govt. Issued ID for KYC validation</small>
                                <br />
                                <span class="text-success">Required</span>
                              </div>
                            </div>
                            <button class="btn btn-outline-primary" data-toggle="modal" data-target="#idCardModal"> Manage </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-12">
                      <div class="card no-shadow h-unset">
                        <div class="card-header">
                          <h4 class="card-title">
                            Use 2-step verification to secure your transactions (in Beta)
                          </h4>
                        </div>
                        <div class="card-body">
                          <form action="#">
                            <div class="col-12">
                              <div class="form-check form-switch mb-3">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="s1"
                                  checked
                                />
                                <label class="form-check-label" for="s1">Any amount of cryptocurrency
                                  <b class="text-success">Most secure</b></label>
                              </div>
                              <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" id="s2" checked />
                                <label class="form-check-label" for="s2"
                                  >Over 0.9999 BTC per day</label
                                >
                              </div>

                              <div class="form-check form-switch mb-3">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="s3"
                                  
                                />
                                <label class="form-check-label" for="s3"
                                  >Never
                                  <b class="text-danger">Least secure</b></label
                                >
                              </div>
                            </div>

                            <div class="col-12">
                              <button type="button" class="btn btn-success" onclick="toastr.info('Your selected was recorded','Notice');">Save</button>
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

    <!-- Modal -->
    <div class="modal fade" id="idCardModal" tabindex="-1" aria-labelledby="idCardModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="idCardModalLabel">
              Upload your ID card
            </h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="update-profile.php" class="identity-upload" method="post" enctype="multipart/form-data">
              <div class="identity-content">
                <span>(Driving License or any Government Issued ID card)</span>
                <p>
                  Uploading your ID helps as ensure the safety and security of
                  your founds
                </p>
              </div>

              <div class="form-group mb-3">
                <label class="me-sm-2">Fullname </label>
                <div class="file-upload-wrapper" data-text="front.jpg">
                  <input type="text" class="form-control" name="fullname" value="<?php if(isset($firstname) && isset($lastname)){echo $firstname . '&nbsp;' . $lastname ;} ?>" readonly />
                </div>
              </div>

              <div class="form-group mb-3">
                <label class="me-sm-2">Email address </label>
                <div class="file-upload-wrapper" data-text="front.jpg">
                  <input type="text" class="form-control" name="emailAddress" value="<?php if(isset($user_email) && $user_email!=null){echo $user_email;} ?>" readonly hidden />
                </div>
              </div>

              <div class="form-group mb-3">
                <label class="me-sm-2">Upload Front ID </label>
                <span class="float-right">Accepts only .png, .jpg, and .jpeg files with size of less than 1MB</span>
                <div class="file-upload-wrapper" data-text="front.jpg">
                  <input id="fileInput" name="front_id" type="file" class="file-upload-field" accept="image/png, image/jpg, image/jpeg" required />
                </div>
              </div>
              <div class="form-group mb-3">
                <label class="me-sm-2">Upload Back ID </label>
                <span class="float-right">Accepts only .png, .jpg, and .jpeg files with size of less than 1MB</span>
                <div class="file-upload-wrapper" data-text="back.jpg">
                  <input id="fileInput2" name="back_id" type="file" class="file-upload-field" accept="image/png, image/jpg, image/jpeg" required />
                </div>
              </div>
      
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" name="govt-id-verification">Submit</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    </div>

    <script>
     // Function to check file size
    function validateFileSize(fileInput) {
        if (fileInput.files[0].size > 1048576) {
            alert("File is too big! 1 MB is the maximum file size allowed.");
            fileInput.value = ""; // Clear the input field
        }
    }

    // Get both file input elements
    const uploadField1 = document.getElementById("fileInput1");
    const uploadField2 = document.getElementById("fileInput2");

    // Attach the onchange event to both inputs
    uploadField1.onchange = function() {
        validateFileSize(this);
    };

    uploadField2.onchange = function() {
        validateFileSize(this);
    };
    </script>
    

    <?php include "include/footer.php"; ?>

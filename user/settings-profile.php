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
            <div class="col-xxl-12 col-xl-12">
              <div class="page-title">
                <h4>Profile</h4>
              </div>
              <div class="card h-unset">
                <div class="card-header">
                  <div class="settings-menu">
                    <a href="#">Profile</a>
                    <a href="settings-application.php">Application</a>
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
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                      <div class="card no-shadow">
                        <div class="card-header">
                          <h4 class="card-title">Photo</h4>
                        </div>
                        <div class="card-body">
                          <form action="upload-profile-picture.php" method="post" enctype="multipart/form-data">
                            <div class="row g-3">
                              <div class="col-xxl-12">
                                <div class="d-flex align-items-center">
                                  <img class="me-3 rounded-circle me-0 me-sm-3" src="<?php if(isset($profilePicUrl)){echo htmlspecialchars($profilePicUrl);}?>" alt="no photo" width="55" height="55" title="User Display Photo" />
                                  <div class="media-body">
                                    <h5 class="mb-0">Upload new photo and save</h5>
                                    <p class="mb-0">Max file size is 512kb</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xxl-12">
                                <div class="form-file">
                                  <input type="file" class="form-file-input" id="customFile" accept="image/*" name="profilePic" title="Select an image" />
                                  <label class="form-file-label" for="customFile">
                                    <span class="form-file-text">Choose file...</span>
                                    <span class="form-file-button">Browse</span>
                                  </label>
                                </div>
                              </div>
                              <div class="col-xxl-12">
                              <input type="submit" class="btn btn-success waves-effect" name="upload" value="Save" title="Upload image" /> 
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                      <div class="card no-shadow">
                        <div class="card-header">
                          <h4 class="card-title">Locked Profile</h4>
                        </div>
                        <div class="card-body">
                          <form action="#">
                            <div class="row g-3">
                              <div class="col-xxl-12">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="(Email unchanged)" value="<?php if(isset($user_email) && $user_email!=null){echo $user_email;}?>" disabled />
                              </div>
                              <div class="col-xxl-12">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" placeholder="(Username unchanged)" value="<?php if(isset($userName) && $userName!=null){echo $userName;} ?>" disabled />
                              </div>
                              <div class="col-xxl-12">
                                <label class="form-label">Password</label>
                                <input type="text" class="form-control" value="(Password unchanged)" disabled />
                              </div>
                              <small class="mt-2 mb-0 d-block">You may change your password from your account home page.</small>
                              <div class="col-12">
                                <button class="btn btn-success waves-effect" disabled> Locked Data </button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-12">
                      <div class="card no-shadow">
                        <div class="card-header">
                          <h4 class="card-title">Personal Information</h4>
                          <span>View and update your unlocked data</span>
                        </div>
                        <div class="card-body">
                          <form class="personal_validate" action="update-profile.php" method="post" name="userEditProfileForm">
                            <div class="row g-4">
                              <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" name="firstname" value="<?php if(isset($firstname)){echo $firstname;} ?>" placeholder="Firstname" />
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="lastname" value="<?php if(isset($lastname)){echo $lastname;} ?>" placeholder="Lastname" />
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" placeholder="123 Central Square, Brooklyn" name="address" value="<?php if(isset($address)){echo $address;} ?>" />
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" value="<?php if(isset($city)){echo $city;} ?>" name="city" placeholder="Your state or region" />
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <label class="form-label">Country</label>
                                <select class="form-control" id="exampleFormControlSelect2" name="country">
                                  <?php include "../include/selectCountry.html";?>
                                </select>
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <label class="form-label">Phone</label>
                                <input type="tel" class="form-control" name="phone" value="<?php if(isset($phone)){echo $phone;} ?>" placeholder="Your Phone number" pattern="^\+?\d{10,15}$" title="Format: +12345678901 or 1234567890" />
                                <small>If you must fill out this field, then you must fill in this format (e.g +XXXXXXXXXXXXX)</small>
                              </div>
                              <div class="col-12">
                              <h6 class="two">Account Features (in Beta)</h6>
                              </div>
                              <div class="col-xxl-6 col-xl-6 col-lg-6">
                                  <h6>level 1</h6>
                                  <ul>
                                    <li><strong>Deposit assets</strong>&nbsp;<input class="form-check-input" type="checkbox" role="switch" checked />
                                    </li>
                                    <li><strong>Withdraw assets:</strong>&nbsp;<span class="text">Enabled $1,000/day</span>
                                    </li>
                                    <li><strong>Card purchases</strong>&nbsp;<input class="form-check-input" type="checkbox" role="switch" checked />
                                    </li>
                                    <li><strong>Bank deposit</strong>&nbsp;<input class="form-check-input" type="checkbox" role="switch" checked />
                                    </li>
                                  </ul>
                              </div>

                              <div class="col-xxl-6 col-xl-6 col-lg-6">
                              
                                <h6>level 2</h6>
                                <ul>
                                  <li><strong>Fiat and Spot wallet</strong>&nbsp;<input class="form-check-input" type="checkbox" role="switch" />
                                  </li>
                                  <li><strong>Margin wallet:</strong>&nbsp;<span class="text">Enabled 100x Leverage</span>
                                  </li>
                                </ul>
                              </div>
                              <small class="mt-2 mb-0 d-block">Enable two factor authencation on the security page</small>
                              <div class="col-12">
                                <button type="submit" class="btn btn-success pl-5 pr-5 waves-effect" name="updateProfile">Save</button>
                              </div>
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

<div class="header-right">
                  <div class="dark-light-toggle" onclick="themeToggle()">
                    <span class="dark"><i class="icofont-moon"></i></span>
                    <span class="light"><i class="icofont-sun-alt"></i></span>
                  </div>
                  <div class="notification dropdown">
                    <div class="notify-bell" data-toggle="dropdown">
                      <span><i class="icofont-alarm"></i></span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right notification-list">
                      <h4>Announcements</h4>
                      <div class="lists">
                        <a href="#" class="">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon success"><i class="icofont-check"></i></span>
                            <div>
                              <p>Account created successfully</p>
                              <span><?php if(isset($reg_date)){echo '<strong>Registered</strong>&nbsp;'.$reg_date;} ?></span>
                            </div>
                          </div>
                        </a>
                        <a href="#" class="">
                          <div class="d-flex align-items-center">
                            <span class="me-3 icon fail"
                              ><i class="icofont-close"></i
                            ></span>
                            <div>
                              <p>2FA verification not completed</p>
                              <span><strong>Available soon</strong></span>
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
                              <span><?= '<strong>Confirmed</strong>&nbsp;'.date('Y-m-j h:i:H');?></span>
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
                              <span><?= date('Y-m-j h:i:H');?></span>
                            </div>
                          </div>
                        </a>

                        <a href="./settings-activity.php"
                          >More <i class="icofont-simple-right"></i
                        ></a>
                      </div>
                    </div>
                  </div>

                  <div class="profile_log dropdown">
                    <div class="user" data-toggle="dropdown">
                      <span class="thumb">
                      <div class="initials-circle">
                          <?= htmlspecialchars($initials); ?>
                          <span class="position-absolute bottom-0 start-90 end-10 translate-right p-1 bg-success border border-light rounded-circle" title="Online">
                      </div>
                      </span>
                      <span class="arrow"
                        ><i class="icofont-angle-down"></i
                      ></span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right">
                      <div class="user-email">
                        <div class="user">
                          <span class="thumb"><img src="<?php if(isset($profilePicUrl) && $profilePicUrl !=null){echo $profilePicUrl;}else{echo'./images/profile/2.png';} ?>" alt="no file" title="User profile photo"
                          /></span>

                          <div class="user-info">
                            <h5><?php if(isset($firstname) && isset($lastname)){echo $firstname . '&nbsp;'. $lastname;} ?></h5>
                            <span><?php if(isset($user_email)){echo $user_email;} ?></span>
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
                      <a href="profile.php" class="dropdown-item">
                        <i class="icofont-ui-user"></i>Profile
                      </a>
                      <a href="wallet.php" class="dropdown-item">
                        <i class="icofont-wallet"></i>Wallet
                      </a>
                      <a href="settings-profile.php" class="dropdown-item">
                        <i class="icofont-ui-settings"></i> Setting
                      </a>
                      <a href="settings-activity.php" class="dropdown-item">
                        <i class="icofont-history"></i> Activity
                      </a>
                      <a href="lock.php" class="dropdown-item">
                        <i class="icofont-lock"></i>Lock
                      </a>
                      <a href="include/logout.php" class="dropdown-item logout">
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
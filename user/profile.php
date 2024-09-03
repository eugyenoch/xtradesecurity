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
                    <span>XTrade Security&nbsp;<i class="icofont-user"></i>&nbsp;Profile</span>
                    </a>
                  </div>
                  <?php include './include/search-crypto.php';?>
                </div>
                <?php include "include/profileHeadRight.php";?>

      <?php include "include/sidebar.php";?>

      <div class="content-body">
        <div class="container">
          <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6">
              <div class="card welcome-profile">
                <div class="card-body">
                <img id="blah" src="<?php if(isset($profilePicUrl)){echo htmlspecialchars($profilePicUrl);}?>" alt="no file" title="Display Photo" /> 
                  <?php if(isset($firstname) && isset($lastname)): ?>
                  <h4>Welcome,  <?= $firstname .'&nbsp;'.$lastname; ?>!</h4>
                  <h6 class="name position-relative" title="Display Name">
                  <?php if(isset($userName)){echo '@'. $userName;} ?>
                <span class="position-absolute top-0 start-90 translate-right p-1 bg-success border border-light rounded-circle" title="Online">
                  <span class="visually-hidden">Online</span>
                </span>
                  </h4>
                  <?php endif; ?>
                  <p>
                    <span><?php if(isset($user_email)){echo '<strong>Email:</strong>&nbsp;'. $user_email;} ?></span><br>
                    <span> <?php if(isset($total_p2p_count)&& $total_p2p_count!=null){
                      echo "<strong>P2P Trades:</strong>&nbsp;<span title='Your P2P Trade Count. Refer to the P2P section for more details'>". $total_p2p_count ."</span>";}
                      else{echo "<strong>P2P Trades:</strong>&nbsp;<span title='No P2P trades available for your account'><i class='icofont-close-squared-alt'></i></span>";} ?>
                    </span> <br>
                    <span><?php $subscriptionStatus = isSubscribedToNewsletter($con, $user_subscribed_email); if($subscriptionStatus){
                      echo '<strong>Newsletter Status:</strong>&nbsp;'. $subscriptionStatus;}?>
                    </span>       
                   </p>
                   <ul>
                    <li>
                      <a href="#">
                        <span class="verified"><i class="icofont-check-alt"></i></span>Verify account</a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="not-verified"><i class="icofont-close-line"></i></span>Two-factor authentication (2FA)</a>
                    </li>
                    <li>
                      <a href="#"><span class="verified"><i class="icofont-exclamation"></i></span>Subscribe to updates</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Download App</h4>
                </div>
                <div class="card-body">
                  <div class="app-link">
                    <h5>Get Verified On Our Mobile App (available soon)</h5>
                    <p>
                    Remember to verify yourself and fill out our KYC to use the full potential of XTrade Security. <br>In the future, verifying your identity on our mobile app will be more secure,
                      faster, and reliable.
                    </p>
                    <a href="#" class="btn btn-primary">
                      <img src="./images/android.svg" alt="" />
                    </a>
                    <br />
                    <div class="mt-3"></div>
                    <a href="#" class="btn btn-primary">
                      <img src="./images/apple.svg" alt="" />
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">User Information</h4>
                  <a href="./settings-profile.php" class="btn btn-primary"
                    >Edit</a
                  >
                </div>
                <div class="card-body">
                  <form class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                      <div class="user-info">
                        <span>USER ID</span>
                        <h4><?php if(isset($affid)){echo $affid;} ?></h4>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                      <div class="user-info">
                        <span>EMAIL ADDRESS</span>
                        <h4><?php if(isset($user_email)){echo $user_email;} ?></h4>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                      <div class="user-info">
                        <span>PHONE</span>
                        <h4><?php if(isset($phone)){echo $phone;} ?></h4>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                      <div class="user-info">
                        <span>COUNTRY OF RESIDENCE</span>
                        <h4><?php if(isset($country)){echo $country;} ?></h4>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                      <div class="user-info">
                        <span>TYPE</span>
                        <h4>Personal</h4>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                      <div class="user-info">
                        <span>JOINED SINCE</span>
                        <h4><?php if(isset($reg_date)){echo $reg_date;} ?></h4>
                      </div>
                    </div>
                    
                  </form>
                </div>
              </div>
            </div>

            <div class="col-xxl-8 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">VERIFY & UPGRADE</h4>
                </div>
                <div class="card-body">
                  <h5>
                    Account Status :
                    <span class="text-success">Active <i class="icofont-verification-check"></i></span>
                  </h5>
                  <p>
                  Account verification is intended to do several things, but the most basic is to ensure the identity and capability of the account holder.
                  <br>For XTrade Security users, account verification also activates funding, trading, and withdrawal.
                  </p>
                  <a href="#" class="btn btn-primary" type="button" onclick="toastr.info('Your account is verified already. Fund your account and begin trading','Notice');">
                    Check Verification Status
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Earn Commission</h4>
                </div>
                <div class="card-body">
                  <p>Refer your friends using your referral code and earn commisions off their trades and trading fees.</p>
                  <input type="text" class="form-control" value="<?php if(isset($affid)){echo $affid;} ?>" id="myInput" disabled />
                  <a href="#" class="btn btn-primary" onclick="myFunction()"> Copy Referral Code</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include "include/footer.php"; ?>
<?php
include '../function.php'; 
checkAdminLogin();

//This PHPDoc annotation is to help IntelliSense understand the type of $con
/** @var mysqli $con */

// Call the function to get the total number of users
$totalUsers = getTotalUsers($con);

// Call the function to get the total number of verified users
$totalVerifiedUsers = getVerifiedUsers($con);

// Call the function to get the total number of verified users
$totalReferrals = getTotalReferrals($con);

// Call the function to get the total number of wallets
$totalWallets = getTotalWallets($con);

// Call the function to get the total number of newsletter subscribers
$totalSubscribers = getTotalSubscribers($con);

// Call the function to get the total number of P2P Transactions
$totalP2P = getTotalP2P($con);

// Call the function to get the total number of users
$totalAdmins = getTotalAdmins($con);

// Call the function to get the total number of fund amount
$totalFunding = getTotalFundAmount($con);
// Format the total fund amount as currency
$formattedTotalFundAmount = number_format($totalFunding, 2);

// Call the function to get the total number of fund profit
$totalFundProfit = getTotalFundProfit($con);
// Format the total withdraw amount as currency
$formattedTotalFundProfit = number_format($totalFundProfit, 2);


// Call the function to get the total number of withdrawn amount
$totalWithdraw = getTotalWithdrawAmount($con);
// Format the total withdraw amount as currency
$formattedTotalWithdrawAmount = number_format($totalWithdraw, 2);


// Call the function to get the total number of transaction amount
$totalTransaction = getTotalTransactionAmount($con);
// Format the total withdraw amount as currency
$formattedTotalTransactionAmount = number_format($totalTransaction, 2);

// Call the function to get the total number of transaction profit
$totalTransactionProfit = getTotalTransactionProfit($con);
// Format the total withdraw amount as currency
$formattedTotalTransactionProfit = number_format($totalTransactionProfit, 2);

//Call the function to get the total site balance
$totalSiteBalance = getTotalSiteBalance($con) ?? 0.00;
$formattedTotalSiteBalance = number_format($totalSiteBalance, 2);

// Fetch admin details from the database
$adminEmail = $_SESSION['admin_session'];
$stmt = $con->prepare("SELECT firstname, lastname, phone, user_email, userName, address, city, country, phone, photo, reg_date FROM admin WHERE user_email = ? OR userName = ? ");
$stmt->bind_param("ss", $adminEmail, $adminEmail);
$stmt->execute();
$stmt->bind_result($firstname, $lastname, $phone, $user_email, $userName, $address, $city, $country, $phone, $photoPath, $reg_date);
$stmt->fetch();
$stmt->close();

// Set the URL of the profile picture
$profilePicUrl = !empty($photoPath) ? $photoPath : '';

?>
<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>
  <body class="body header-fixed">
    <!-- Header -->
    <header id="header_main" class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="header__body d-flex justify-content-between">
              <div class="header__left">
              <div class="logo">
                  <a class="light" href="../index.php">
                    <img
                      id="site-logo"
                      src="../assets/images/logo/favicon.png"
                      alt=""
                      width="25"
                      height="25"
                      data-retina="../assets/images/logo/favicon@2x.png"
                      data-width="25"
                      data-height="25"
                    />
                    <big><strong>xTradeSecurity</strong></big>
                  </a>
                  <a class="dark" href="../index.php">
                    <img
                      src="../assets/images/logo/favicon.png"
                      alt=""
                      width="25"
                      height="25"
                      data-retina="../assets/images/logo/favicon@2x.png"
                      data-width="25"
                      data-height="25"
                    />
                    <big><strong>xTradeSecurity</strong></big>
                  </a>
              </div>
                <div class="left__main">
                <?php include "include/nav.php";?>
                  <!-- /#main-nav -->
                </div>
              </div>

              <?php include "include/headerRight.php";?>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end Header -->

    <!-- PageTitle -->
    <section class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3 class="heading">Admin Dashboard</h3>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumb">
              <li><a href="user-profile.php">Profile</a></li>
              <li><p class="fs-18">/</p></li>
              <li><p class="fs-18">User</p></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- End PageTitle -->

    <section class="user-profile flat-tabs">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-md-12">
            <div class="user-info center">
              <form action="upload-profile-picture.php" method="post" enctype="multipart/form-data">
                
              <div class="avt">
              <img id="blah" src="<?php echo htmlspecialchars($profilePicUrl); ?>" alt="no file" title="Display Photo" /> 
                <input type="file" class="custom-file-input" accept="image/*" id="imgInp" name="profilePic" title="Select an image" /> 
              </div>
              <input type="submit" class="btn" name="upload" value="Upload" title="Upload image" /> 
            </form>
            <?php if(isset($firstname) && isset($lastname)): ?>
              <h6 class="name position-relative">
                <?= $firstname .'&nbsp;'.$lastname; ?>
                <span class="position-absolute top-0 start-90 translate-right p-2 bg-success border border-light rounded-circle" title="Online">
                  <span class="visually-hidden">Online</span>
                </span>
            </h6>
            <?php endif; ?>
             <p><?php if(isset($userName)){echo '@'. $userName;} ?></p>
              <p><?php if(isset($adminEmail)){echo 'Email:&nbsp;'. $adminEmail;} ?></p>
              <p><?php if(isset($reg_date)){echo 'Registered:&nbsp;'.$reg_date;} ?></p>
            </div>
            <ul class="menu-tab">
            <li class="active">
                <h6 class="fs-16"><i class="fa fa-user-circle text-warning" aria-hidden="true"></i>&nbsp;Dashboard</h6>
              </li>
              <li>
                <h6 class="fs-16"><i class="fa fa-user-edit text-warning" aria-hidden="true"></i>&nbsp;User Profile</h6>
              </li>
              <li>
                <h6 class="fs-16"><i class="fa fa-users text-warning" aria-hidden="true"></i>&nbsp;Users and Referrals</h6>
              </li>
              <li>
                <h6 class="fs-16"><i class="fa fa-key text-warning" aria-hidden="true"></i>&nbsp; API Keys</h6>
              </li>
              <li>
                <h6 class="fs-16"><i class="fa fa-server text-warning" aria-hidden="true"></i>&nbsp; 2FA</h6>
              </li> 
              <li>
                <h6 class="fs-16"><i class="fa fa-lock text-warning" aria-hidden="true"></i>&nbsp;Change Password</h6>
              </li>
              <li>
                <h6 class="fs-16"><i class="fa fa-wallet text-warning" aria-hidden="true"></i>&nbsp;Manage Wallets</h6>
              </li>
              <li>
                <h6 class="fs-16"><i class="fa fa-credit-card text-warning" aria-hidden="true"></i>&nbsp;Funding Requests</h6>
              </li>
              <li>
                <h6 class="fs-16"><i class="fa fa-credit-card-alt text-warning" aria-hidden="true"></i>&nbsp;Withdrawal Requests</h6>
              </li>
              <li>
                <h6 class="fs-16"><i class="fa fa-line-chart text-warning" aria-hidden="true"></i>&nbsp;Exchange</h6>
              </li>
              <li>
                <h6 class="fs-16"><i class="fa fa-piggy-bank text-warning" aria-hidden="true"></i>&nbsp;Investments</h6>
              </li>
              <li>
                <h6 class="fs-16"><i class="fa fa-exchange text-warning" aria-hidden="true"></i>&nbsp;Transfers</h6>
              </li>
              <li>
                <h6 class="fs-16"><i class="fa fa-newspaper text-warning" aria-hidden="true"></i>&nbsp;Newsletter</h6>
              </li>
              <li>
                <h6 class="fs-16"><i class="fa fa-sign-out text-warning" aria-hidden="true"></i>&nbsp;
                <a href="include/logout.php" title="logout of this account"> Logout </a>
                </h6>
              </li>
            </ul>
          </div>
          <div class="col-xl-9 col-md-12">
            <div class="content-tab">

              <!-- Dashboard section -->
            <div class="content-inner dashboard">
            <div class="card border border-0">
              <div class="card-body">
                <big><strong>Manager Summary Cards</strong></big><div class='py-1'></div>
                <?php if(isset($formattedTotalSiteBalance) && $formattedTotalSiteBalance!=null){ 
                  echo "<span title='Total site balance as at today' class='p-1 rounded bg-warning'><strong>Total Site Balance $".$formattedTotalSiteBalance . '</strong></span>';
                  } ?>
              </div>
            </div>
                <div class="row">
                    <div class="col-md-4">
                      <div class="shadow p-4 mb-2 bg-primary text-white">
                        <p class="lead">
                          <i class="fa fa-users" aria-hidden="true"></i>&nbsp;Users<?php if(isset($totalUsers) && $totalUsers!=null){echo "&nbsp;<span class='badge bg-warning text-primary' title='Total users'>".$totalUsers ."</strong>";} ?></p></div>
                    </div>

                    <div class="col-md-4">
                      <div class="shadow p-4 mb-3 bg-primary text-white"><p class="lead"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Active Users<?php if(isset($totalVerifiedUsers) && $totalVerifiedUsers!=null){echo "&nbsp;<span class='badge bg-warning text-primary' title='Total verified users'>". $totalVerifiedUsers ."</span>";} ?></p></div>
                    </div>

                    <div class="col-md-4">
                      <div class="shadow p-4 mb-3 bg-primary text-white"><p class="lead"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Total Referrals<?php if(isset($totalReferrals) && $totalReferrals!=null){echo "&nbsp;<span class='badge bg-warning text-primary' title='Total referrals'>". $totalReferrals ."</span>";} ?></p></div>
                    </div>

                    <div class="col-md-4">
                      <div class="shadow p-4 mb-3 bg-primary text-white"><p class="lead"><i class="fa fa-wallet" aria-hidden="true"></i>&nbsp;Total Wallets<?php if(isset($totalWallets) && $totalWallets!=null){echo "&nbsp;<span class='badge bg-warning text-primary' title='Total wallets'>". $totalWallets ."</span>";} ?></p></div>
                    </div>

                    <div class="col-md-4">
                      <div class="shadow p-4 mb-3 bg-primary text-white"><p class="lead"><i class="fa fa-newspaper" aria-hidden="true"></i>&nbsp;Subscribers<?php if(isset($totalSubscribers) && $totalSubscribers!=null){echo "&nbsp;<span class='badge bg-warning text-primary' title='Total newsletter subscribers'>". $totalSubscribers ."</span>";} ?></p></div>
                    </div>

                    <div class="col-md-4">
                      <div class="shadow p-4 mb-3 bg-primary text-white"><p class="lead"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Site Managers<?php if(isset($totalAdmins) && $totalAdmins!=null){echo "&nbsp;<span class='badge bg-warning text-primary' title='Total site admins'>".$totalAdmins ."</strong>";} ?></p></div>
                      </div>

                    <div class="col-md-4">
                      <div class="shadow p-4 mb-3 bg-primary text-white"><p class="lead"><i class="fa fa-usd" aria-hidden="true"></i>&nbsp;Funds<?php if(isset($formattedTotalFundAmount) && $formattedTotalFundAmount!=null){echo "&nbsp;<span class='badge bg-warning text-primary' title='Total funding from fund account options'>$".$formattedTotalFundAmount ."</strong>";} ?></p></div>
                    </div>

                    <div class="col-md-4">
                      <div class="shadow p-4 mb-3 bg-primary text-white"><p class="lead"><i class="fa fa-usd" aria-hidden="true"></i>&nbsp;Investments<?php if(isset($formattedTotalTransactionAmount) && $formattedTotalTransactionAmount!=null){echo "&nbsp;<span class='badge bg-warning text-primary' title='Total investments made'>$".$formattedTotalTransactionAmount ."</strong>";} ?></p></div>
                    </div>

                    <div class="col-md-4">
                      <div class="shadow p-4 mb-3 bg-primary text-white"><p class="lead"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;P2P<?php if(isset($totalP2P) && $totalP2P!=null){echo "&nbsp;<span class='badge bg-warning text-primary' title='Total P2P transaction count'>".$totalP2P ."</strong>";} ?></p></div>
                    </div>

                    <div class="col-md-4">
                      <div class="shadow p-4 mb-3 bg-primary text-white"><p class="lead"><i class="fa fa-usd" aria-hidden="true"></i>&nbsp;Interest<?php if(isset($formattedTotalFundProfit) && $formattedTotalFundProfit!=null){echo "&nbsp;<span class='badge bg-warning text-primary' title='Total funding profits added'>$".$formattedTotalFundProfit ."</strong>";} ?></p></div>
                      </div>
                    
                    <div class="col-md-4">
                      <div class="shadow p-4 mb-3 bg-primary text-white"><p class="lead"><i class="fa fa-usd" aria-hidden="true"></i>&nbsp;Profit<?php if(isset($formattedTotalTransactionProfit) && $formattedTotalTransactionProfit!=null){echo "&nbsp;<span class='badge bg-warning text-primary' title='Total investment profits added'>$".$formattedTotalTransactionProfit ."</strong>";} ?></p></div>
                      </div>

                    <div class="col-md-4">
                      <div class="shadow p-4 mb-3 bg-primary text-white"><p class="lead"><i class="fa fa-usd" aria-hidden="true"></i>&nbsp;Withdrawals<?php if(isset($formattedTotalWithdrawAmount) && $formattedTotalWithdrawAmount!=null){echo "&nbsp;<span class='badge bg-warning text-primary' title='Total withdrawals requested'>$".$formattedTotalWithdrawAmount ."</strong>";} ?></p></div>
                      </div>      
                  </div>

                  <canvas id="userChart" width="400" height="200"></canvas>
                  <canvas id="moneyChart" width="400" height="200"></canvas>
                 
                <!-- ADMIN TABLE -->
            <div class="main" style="max-width:100% !important;">
                <div class="card-body">
                <p class="lead h6">Managers and Admins</p>
                <div class="table-responsive">
                <table class="table caption-top table-striped table-hover responsive-table" id="adminTable">
                  <caption><strong>Admins Table</strong></caption>
                  <thead>
                      <tr class="table-secondary">
                      <th>S/N</th>
                          <th>Fullname</th>
                          <th>Email</th>
                          <th>Username</th>
                          <th>Address</th>
                          <th>City</th>
                          <th>Country</th>
                          <th>Phone</th>
                          <th>Photo</th>
                          <th>Reg.Date</th>
                          <th>Delete</th>
                      </tr>
                  </thead>
                  <tfoot>
                  <tr class="table-secondary">
                          <th>S/N</th>
                          <th>Fullname</th>
                          <th>Email</th>
                          <th>Username</th>
                          <th>Address</th>
                          <th>City</th>
                          <th>Country</th>
                          <th>Phone</th>
                          <th>Photo</th>
                          <th>Reg.Date</th>
                          <th>Delete</th>
                      </tr>
                  </tfoot>
                 <tbody>
                  <?php $sql_admins = "SELECT * FROM admin WHERE id_no != 1"; $sql_admins_exec = $con->query($sql_admins);$serial_number = 1;
                if ($sql_admins_exec->num_rows > 0): ?>
                <?php foreach($sql_admins_exec as $admins_info): ?>
                    <tr>
                        <td class="coin-name"><?= $serial_number; ?></td>
                        <td class="coin-name"><?= $admins_info['firstname'] . '&nbsp;'. $admins_info['lastname']; ?></td>
                        <td class="coin-name"><?= $admins_info['user_email']; ?></td>
                        <td class="coin-name"><?= $admins_info['userName']; ?></td>
                        <td class="coin-name"><?= $admins_info['address']; ?></td>
                        <td class="coin-name"><?= $admins_info['city']; ?></td>
                        <td class="coin-name"><?= $admins_info['country']; ?></td>
                        <td class="coin-name"><?= $admins_info['phone']; ?></td>
                        <td class="coin-name">
                            <?php if (isset($admins_info['photo']) && $admins_info['photo'] !== null): ?>
                                <img src="<?= $admins_info['photo']; ?>" alt="profile photo" width="40px" height="40px">
                            <?php endif; ?>
                        </td>
                        <td class="coin-name"><?= $admins_info['reg_date']; ?></td>
                        <td class="coin-name">
                            <a href="confirmOperation.php?adm=<?= $admins_info['id_no']; ?>" class="dt-type-md">
                                <span class="btn btn-outline-danger badge badge-outline badge-danger badge-md">Delete</span>
                            </a>
                        </td>
                    </tr>
                <?php $serial_number++; endforeach; ?>
            <?php else: ?>
                 </tbody>
                <tr>
                    <!-- <td colspan="8"><center>No user information found</center></td> -->
                </tr>
            <?php endif; ?>
        </tbody>
                 
                </table>
                </div>
                </div>
                </div>
                <div class="mt-4"></div>
                <div class="card">
                <h5 class="card-header">System Overview</h5>
                <div class="card-body">
                  <h6 class="card-title">Hello <?php if(isset($firstname) && $firstname!=null){echo $firstname;}else{echo "Administrator";} ?>!</h6>
                  <p class="card-text">You have access to all the tools and resources to manage the platform efficiently. Use the navigation menu to manage users, monitor transactions, and oversee the system's performance. For detailed insights, check out the reports section.<br>
                      You can also add a new admin and manager to aid in the running of the system.<br>
                  <a type="button" href="add-admin.php" class="btn btn-outline-warning">Add New Manager&nbsp;<i class="fa fa-user-circle" aria-hidden="true"></i></a>
                  </p>
                </div>
              </div>

              </div>  
 <!-- Profile section -->
              <div class="content-inner profile">
                <form action="update-profile.php" method="post" name="adminEditProfileForm">
                  <h4>User Profile Management</h4>
                  <h6>View and edit your profile infomation</h6>
                  <div class="form-group d-flex s1">
                    <input type="text" class="form-control" name="firstname" value="<?php if(isset($firstname)){echo $firstname;} ?>" placeholder="Firstname" />
                    <input type="text" class="form-control" name="lastname" value="<?php if(isset($lastname)){echo $lastname;} ?>" placeholder="Lastname" />
                  </div>
                  <div class="form-group d-flex s1">
                    <input type="text" class="form-control" name="userName" value="<?php if(isset($userName)){echo $userName;} ?>" placeholder="username" title="This field cannot be edited" disabled />
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="<?php if(isset($user_email)){echo $user_email;} ?>" title="This field cannot be edited" placeholder="email" disabled />
                    
                  </div>
                  <div class="form-group d-flex s1">
                   <div class="sl">
                      <input type="tel" class="form-control" name="phone" value="<?php if(isset($phone)){echo $phone;} ?>" placeholder="Your Phone number" pattern="^\+?\d{10,15}$" title="Format: +12345678901 or 1234567890" />
                      <br><small>If you must fill out this field, then you must fill in this format (e.g +XXXXXXXXXXXXX)</small>
                    </div>
                  </div>

                  <div class="form-group d-flex">
                    <select class="form-control" id="exampleFormControlSelect2" name="country">
                    <?php include "../include/selectCountry.html";?>
                    </select>
                    <div class="sl">
                    <input type="text" class="form-control" value="<?php if(isset($city)){echo $city;} ?>" name="city" placeholder="Your state or region" />
                      
                    </div>
                    <input class="form-control" placeholder="address" name="address" type="text" value="<?php if(isset($address)){echo $address;} ?>" />
                  </div>

                  <h6 class="two">Features (in Beta)</h6>
                  <div class="bt d-flex">
                    <div class="left">
                      <h6>level 1</h6>
                      <ul>
                        <li>
                          <p>Deposit assets</p>
                          <input type="checkbox" class="check-box__switcher" checked />
                        </li>
                        <li>
                          <p>Withdraw assets</p>
                          <p class="text">Enabled $1,000/day</p>
                        </li>
                        <li>
                          <p>Card purchases</p>
                          <input type="checkbox" class="check-box__switcher" checked />
                        </li>
                        <li>
                          <p>Bank deposit</p>
                          <input type="checkbox" class="check-box__switcher" checked />
                        </li>
                      </ul>
                    </div>
                    <div class="right">
                      <h6>level 2</h6>
                      <ul>
                        <li>
                          <p>Fiat and Spot wallet</p>
                          <input type="checkbox" class="check-box__switcher" />
                        </li>
                        <li>
                          <p>Margin wallet</p>
                          <p class="text">Enabled 100x Leverage</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <button type="submit" class="btn-action" name="updateProfile"> Update Profile</button>
                </form>
              </div>

              <div class="content-inner referrals">
                <h6>User Management System</h6>
                <h4>Manage<span>&nbsp;Users and Affiliates</span></h4>
                <div class="main" style="max-width:100% !important;">
                <div class="card-body">
                <div class="table-responsive">
                <table class="table caption-top table-striped table-hover responsive-table" id="userTable">
                  <caption><strong>Users Table</strong></caption>
                  <thead>
                      <tr class="table-secondary">
                      <th>S/N</th>
                          <th>Fullname</th>
                          <th>Email</th>
                          <th>Username</th>
                          <th>Address</th>
                          <th>City</th>
                          <th>Country</th>
                          <th>Phone</th>
                          <th>Photo</th>
                          <th>refId</th>
                          <th>Status</th>
                          <th>Reg.Date</th>
                          <th>Delete</th>
                      </tr>
                  </thead>
                  <tfoot>
                  <tr class="table-secondary">
                          <th>S/N</th>
                          <th>Fullname</th>
                          <th>Email</th>
                          <th>Username</th>
                          <th>Address</th>
                          <th>City</th>
                          <th>Country</th>
                          <th>Phone</th>
                          <th>Photo</th>
                          <th>refId</th>
                          <th>Status</th>
                          <th>Reg.Date</th>
                          <th>Delete</th>
                      </tr>
                  </tfoot>
                 <tbody>
                  <?php $sql_users = "SELECT * FROM users"; $sql_users_exec = $con->query($sql_users);$serial_number = 1;
                if ($sql_users_exec->num_rows > 0): ?>
                <?php foreach($sql_users_exec as $users_info): ?>
                    <tr>
                        <td class="coin-name"><?= $serial_number; ?></td>
                        <td class="coin-name"><?= $users_info['firstname'] . '&nbsp;'. $users_info['lastname']; ?></td>
                        <td class="coin-name"><?= $users_info['user_email']; ?></td>
                        <td class="coin-name"><?= $users_info['userName']; ?></td>
                        <td class="coin-name"><?= $users_info['address']; ?></td>
                        <td class="coin-name"><?= $users_info['city']; ?></td>
                        <td class="coin-name"><?= $users_info['country']; ?></td>
                        <td class="coin-name"><?= $users_info['phone']; ?></td>
                        <td class="coin-name">
                            <?php if (isset($users_info['photo']) && $users_info['photo'] !== null): ?>
                                <img src="<?= $users_info['photo']; ?>" alt="profile photo" width="40px" height="40px">
                            <?php endif; ?>
                        </td>
                        <td class="coin-name"><?= $users_info['affid']; ?></td>
                        <td class="coin-name">
                            <?php if (isset($users_info['is_verified']) && $users_info['is_verified'] == 1): ?>
                                <span class="bg-warning rounded p-1">Active</span>
                            <?php endif; ?>
                            <?php if (isset($users_info['is_verified']) && $users_info['is_verified'] == 0): ?>
                                <span class="bg-info rounded p-1">Inactive</span>
                            <?php endif; ?>
                        </td>
                        <td class="coin-name"><?= $users_info['reg_date']; ?></td>
                        <td class="coin-name">
                            <a href="confirmOperation.php?du=<?= $users_info['id_no']; ?>" class="dt-type-md">
                                <span class="btn btn-outline-danger badge badge-outline badge-danger badge-md">Delete</span>
                            </a>
                        </td>
                    </tr>
                <?php $serial_number++; endforeach; ?>
            <?php else: ?>
                 </tbody>
                <tr>
                    <!-- <td colspan="8"><center>No user information found</center></td> -->
                </tr>
            <?php endif; ?>
        </tbody>
                 
                </table>
                </div>
                </div>
                </div>

            <!-- Referral Table -->
            <div class="main" style="max-width:100% !important;">
                <div class="card-body">
                <div class="table-responsive">
                <table class="table caption-top table-striped table-hover responsive-table" id="refTable">
                  <caption><strong>Referral Table</strong></caption>
                  <thead>
                      <tr class="table-secondary">
                      <th>S/N</th>
                          <th>Referrer Username</th>
                          <th>User Referred</th>
                          <th>Referal Date</th>
                          <th>Delete</th>
                      </tr>
                  </thead>
                  <tfoot>
                  <tr class="table-secondary">
                  <th>S/N</th>
                          <th>Referrer Username</th>
                          <th>User Referred</th>
                          <th>Referal Date</th>
                          <th>Delete</th>
                      </tr>
                  </tfoot>
                 <tbody>
                  <?php $sql_refs = "SELECT * FROM referral"; $sql_ref_exec = $con->query($sql_refs);$serial_number = 1;
                if ($sql_ref_exec->num_rows > 0): 
                  foreach($sql_ref_exec as $ref_info):
                      // Fetch the affid from the users table based on the referrer
                      $referrer = $ref_info['referrer'];
                      $sql_user = "SELECT affid FROM users WHERE userName = '$referrer'"; // Assuming 'username' is the column to match
                      $sql_user_exec = $con->query($sql_user);
                      $user_affid = "";
                      
                      if ($sql_user_exec->num_rows > 0) {
                          $user_info = $sql_user_exec->fetch_assoc();
                          $user_affid = $user_info['affid'];
                      }?>
                    <tr>
                        <td class="coin-name"><?= $serial_number; ?></td>
                        <td class="coin-name"><?= $ref_info['referrer']; ?>
                        <br><?php if (!empty($user_affid)) { echo 'Ref ID: ' . $user_affid; } ?>
                      </td>
                        <td class="coin-name"><?= $ref_info['user_referred']; ?>
                        <br><?php if (!empty($ref_info['user_referred_affid'])) { echo 'Ref ID: ' . $ref_info['user_referred_affid']; } ?>
                      </td>
                        <td class="coin-name"><?= $ref_info['date']; ?></td>
                        <td class="coin-name">
                            <a href="confirmOperation.php?ref=<?= $ref_info['id']; ?>" class="dt-type-md">
                                <span class="btn btn-outline-danger badge badge-outline badge-danger badge-md">Delete</span>
                            </a>
                        </td>
                    </tr>
                <?php $serial_number++; endforeach; ?>
            <?php else: ?>
                 </tbody>
                <tr>
                    <!-- <td colspan="8"><center>No user information found</center></td> -->
                </tr>
            <?php endif; ?>
        </tbody>
                 
                </table>
                </div>
                </div>
                </div>

              </div>
              <div class="content-inner api">
                <h6>Enable API access on your account to generate keys (in beta).</h6>
                <h4>API Access is <span>Disabled</span></h4>
                <p class="mail">
                  <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M20 5H4C3.44772 5 3 5.44772 3 6V18C3 18.5523 3.44772 19 4 19H20C20.5523 19 21 18.5523 21 18V6C21 5.44772 20.5523 5 20 5ZM4 3C2.34315 3 1 4.34315 1 6V18C1 19.6569 2.34315 21 4 21H20C21.6569 21 23 19.6569 23 18V6C23 4.34315 21.6569 3 20 3H4Z"
                      fill="#23262F"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M5.2318 7.35984C5.58537 6.93556 6.21593 6.87824 6.64021 7.2318L11.3598 11.1648C11.7307 11.4739 12.2694 11.4739 12.6402 11.1648L17.3598 7.2318C17.7841 6.87824 18.4147 6.93556 18.7682 7.35984C19.1218 7.78412 19.0645 8.41468 18.6402 8.76825L13.9206 12.7013C12.808 13.6284 11.192 13.6284 10.0795 12.7013L5.35984 8.76825C4.93556 8.41468 4.87824 7.78412 5.2318 7.35984Z"
                      fill="#23262F"
                    />
                  </svg>
                  <?php if(isset($adminEmail)){echo $adminEmail;} ?>
                </p>
                <div class="main">
                  <h6>Enable API keys</h6>
                  <p>Enter your password and 2FA code to Enable the API keys</p>

                  <div class="refe">
                    <div class="form-group">
                      <p>Your Password</p>
                      <input class="form-control" type="password" placeholder="Password" />
                    </div>
                    <div class="form-group">
                      <p>2FA Code</p>
                      <input class="form-control" type="text" placeholder="2FA code" value="<?php echo mt_rand(10000,99999);?>" disabled />
                    </div>
                  </div>
                  <a href="#" class="btn-action">Enable API keys</a>
                </div>
              </div>

              <div class="content-inner api">
                <h4>2FA <span class="color-danger">Disabled</span> (coming soon)</h4>
                <p>
                  If you want to turn on 2FA, input your account password and
                  the six-digit code provided by the  Google Authenticator app
                  below, then click <strong>"Enable 2FA"</strong>.
                </p>

                <div class="main">
                  <h6>Disable 2FA</h6>
                  <p>
                    Enter your password and 2FA code to enable the 2FA
                    verification
                  </p>

                  <div class="refe">
                    <div class="form-group">
                      <p>Your Password</p>
                      <input class="form-control" type="password" placeholder="Password" />
                    </div>
                    <div class="form-group">
                      <p>2FA Code</p>
                      <input class="form-control" type="text" placeholder="2FA code" value="<?php echo mt_rand(10000,99999); ?>" disabled />
                    </div>
                  </div>
                  <a href="#" class="btn-action">Enable 2FA verification</a>
                </div>
              </div>
              <div class="content-inner profile change-pass">
                <h4>Change Password</h4>
                <h6>Use this form to change your password to a new one</h6>
                <form action="change-password.php" method="post" name="adminChangePasswordForm">
                  <div class="form-group">
                    <div>
                      <label>Old Password<span>*</span>:</label>
                      <input type="password" class="form-control"  placeholder="old password" name="oldPassword" required />
                    </div>
                    <div>
                      <label>2FA Code<span>*</span>:</label>
                      <input type="text" class="form-control" value="<?php echo mt_rand(10000,99999);?>" disabled />
                    </div>
                  </div>
                  <div class="form-group">
                    <div>
                      <label>New Password<span>*</span>:</label>
                      <input type="password" class="form-control" placeholder="new password"  name="newPassword" required />
                    </div>
                    <div>
                      <label>Confirm Password<span>*</span>:</label>
                      <input type="password" class="form-control" placeholder="confirm password"  name="confirmPassword" required />
                    </div>
                  </div>
                  <button type="submit" class="btn-action" name="changePassword">Change Password</button>
                </form>
               
              </div>

              <div class="content-inner wallets" id="wallet">
                <h6>Wallet and Addresses</h6>
                <h4>Wallet Management<span>&nbsp;System</span></h4>
                <p>
                This page show you all the addresses that have been made for your website: from here you can add and edit addresses. This page is for record and editing purposes and is intended for admin use only.
                </p>
                <div class="main">
                <div class="card-body">
                <div class="table-responsive">
                <table class="table caption-top caption-top table-striped table-hover responsive-table" id="walletTable">
                  <caption>Wallets and Accounts Table</caption>
                  <thead>
                      <tr class="table-secondary">
                          <th>Id No</th>
                          <th>Wallet</th>
                          <th>Address</th>
                          <th>QR Code</th>
                          <th>Date Created</th>
                          <th>Delete Wallet</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr class="table-secondary">
                        <th>Id No</th>
                          <th>Wallet</th>
                          <th>Address</th>
                          <th>QR Code</th>
                          <th>Date Created</th>
                          <th>Delete Wallet</th>
                      </tr>
                  </tfoot>
                 <tbody>
                  <?php $sql_addresses = "SELECT * FROM wallet_addresses WHERE wallet_owner='admin'"; $sql_addresses_exec = $con->query($sql_addresses);$serial_number = 1;
                    //foreach($sql_addresses_exec as $addresses_info){extract($addresses_info);
                if ($sql_addresses_exec->num_rows > 0): ?>
                <?php foreach($sql_addresses_exec as $addresses_info): ?>
                    <tr>
                        <td class="coin-name"><?= $serial_number; ?></td>
                        <td class="coin-name">
                            <?= 
                                htmlspecialchars($addresses_info['wallet']) 
                                . (!empty($addresses_info['wallet_tag']) 
                                    ? '<br><span><small><strong>Tag:</strong> ' . htmlspecialchars($addresses_info['wallet_tag']) . '</small></span>' 
                                    : '')
                            ?>
                        </td>
                        <td class="coin-name"><?= $addresses_info['address']; ?></td>
                        <td class="coin-name">
                            <?php if (isset($addresses_info['qrcode']) && $addresses_info['qrcode'] !== null): ?>
                                <img src="../assets/user-uploads/<?= $addresses_info['qrcode']; ?>" alt="QRCode" width="40px" height="40px">
                            <?php endif; ?>
                        </td>
                        <td class="coin-name"><?= $addresses_info['date_created']; ?></td>
                        <td class="coin-name">
                            <a href="confirmOperation.php?dwa=<?= $addresses_info['id_no']; ?>" class="dt-type-md">
                                <span class="btn btn-outline-danger badge badge-outline badge-danger badge-md">Delete</span>
                            </a>
                        </td>
                    </tr>
                <?php $serial_number++; endforeach; ?>
            <?php else: ?>
                 </tbody>
                <tr>
                    <td colspan="8">No wallet information found</td>
                </tr>
            <?php endif; ?>
        </tbody>
                 
                </table>
                </div>
                </div>
                </div>
            <!-- add new wallet form -->
                <div class="mt-3">
                <div class="row">
                    <form action="walletProcessor.php" method="post" enctype="multipart/form-data">  
                      <fieldset>
                    <legend>Add New Receiving Wallet</legend>            
                    <div class="table-responsive">
                    <table class="table caption-top table-striped table-hover responsive-table">
                      <tr>
                        <th>Select Currency<span class='text-danger'>*</span></th>
                        <th>Wallet address or number<span class='text-danger'>*</span></th>
                        <th>Wallet Tag (e.g BTC wallet 1)</th>
                        <th>QR Code (if available)</th>
                      </tr>
                      <tr>
                          <td class="">         
                            <input title="Select wallet" list="selectCurrency" class="form-control form-control-line" type="text" name="newWallet" placeholder="Select wallet" required />
                            <datalist id="selectCurrency"><?php include "../include/selectCurrency.html";?></datalist>
                          </td>
                          <td>
                              <input title="Enter wallet address or number" class="form-control form-control-line" type="text" name="newAddress" placeholder="Wallet address or number" required />
                          </td>
                          <td>
                              <input title="Enter wallet tag: e.g BTC wallet 1" class="form-control form-control-line" type="text" name="newWalletTag" placeholder="Wallet Tag" />
                          </td>
                          <td>
                              <input class="form-control form-control-line" type="file" name="qrcode" accept="image/*" title="Select an image" />
                          </td>
                      </tr>
                      <tr>
                          <td colspan="4">
                            <input class="btn btn-outline-primary" type="submit" name="addNewAddress" value="Add New Wallet" />
                          </td>
                      </tr>
                  </table>
                    </div>
                  </fieldset>
                  </form>
                  </div>
                </div>
              </div>
            <!-- FUND SECTION BEGINS -->
              <div class="content-inner funding" id="funding">
                <h6>Funding Requests</h6>
                <h4>Fund Management<span>&nbsp;System</span></h4>
                <p>
                This page show you all the funding requests that have been made on your website using the fund account button. From here you can approve, add and edit funds. 
                This page is for record and editing purposes and is intended for admin use only.
                </p>
                <div class="main">
                <div class="card-body">
                <div class="table-responsive">
                <table class="table caption-top table-striped table-hover responsive-table" id="fundTable">
                  <thead>
                      <tr class="table-secondary">
                          <th>ID</th>
                          <th>Email</th>
                          <th>Fullname</th>
                          <th>Amount</th>
                          <th>Profit</th>
                          <th>Proof</th>
                          <th>Comment</th>
                          <th>Status</th>
                          <th>Date</th>
                          <th>Lock</th>
                          <th>Lock Duration</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr class="table-secondary">
                      <th>ID</th>
                          <th>Email</th>
                          <th>Fullname</th>
                          <th>Amount</th>
                          <th>Profit</th>
                          <th>Proof</th>
                          <th>Comment</th>
                          <th>Status</th>
                          <th>Date</th>
                          <th>Lock</th>
                          <th>Lock Duration</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tr>
                  </tfoot>
                 <tbody>
                  <?php $sql_funds = "SELECT * FROM fund"; $sql_funds_exec = $con->query($sql_funds);//$serial_number = 1;
                if ($sql_funds_exec->num_rows > 0): ?>
                <?php foreach($sql_funds_exec as $funds_info): ?>
                    <tr>
                        <td class="coin-name"><?= $funds_info['ftxn']; ?></td>
                        <td class="coin-name"><?= $funds_info['user_email']; ?></td>
                        <td class="coin-name"><?= $funds_info['firstname'] . '&nbsp;' . $funds_info['lastname']; ?></td>
                        <td class="coin-name">
                        <?php if (!empty($funds_info['fund_amount'])): ?>
                                              <?= number_format($funds_info['fund_amount'],2) . ' ' . $funds_info['fund_currency']; ?>
                                          <?php endif; ?>
                        </td>
                        <td class="coin-name">
                                  <?php if (!empty($funds_info['fund_profit'])): ?>
                                              <?= number_format($funds_info['fund_profit'],2) . ' ' . $funds_info['fund_currency']; ?>
                                          <?php endif; ?>
                        </td>
                        <td class="coin-name">
                            <?php if (isset($funds_info['fund_proof']) && $funds_info['fund_proof'] !== null): ?>
                                <img src="<?= '../assets/user-uploads/' . $funds_info['fund_proof']; ?>" alt="Funding proof" width="40px" height="40px">
                            <?php endif; ?>
                        </td>
                        <td class="coin-name"><?= $funds_info['fund_comment']; ?></td>
                              <td class="coin-name">
                                  <span><strong><?= $funds_info['fund_status']; ?></strong></span><br>
                                  <?php if ($funds_info['fund_status'] === 'pending'): ?>
                                      <a href="confirmOperation.php?afr=<?= $funds_info['id_no']; ?>">
                                          <span type="submit" class="btn btn-outline-info badge badge-outline badge-danger badge-md">Approve</span>
                                      </a>
                                  <?php elseif ($funds_info['fund_status'] === 'approved'): ?>
                                      <a href="confirmOperation.php?dfr=<?= $funds_info['id_no']; ?>">
                                          <span type="submit" class="btn btn-outline-warning badge badge-outline badge-danger badge-md">Disapprove</span>
                                      </a>
                                  <?php endif; ?>
                              </td>
                        <td class="coin-name"><?= $funds_info['fund_request_date']; ?></td>
                        <td>
                          <?php if(isset($funds_info['is_locked']) && $funds_info['is_locked'] ==='yes'):?> 
                          <span class="badge bg-info">Yes</span>
                          <?php elseif(isset($funds_info['is_locked']) && $funds_info['is_locked'] ==='no'):?> 
                            <span class="badge bg-info">No</span>
                            <?php else: ?>
                              <span class="badge bg-info">Unlocked</span>
                          <?php endif; ?>
                        </td>

                        <td><?php if(isset($funds_info['lock_duration']) && isset($funds_info['lock_duration']) != NULL ):?> 
                          <span class="badge bg-info"><?= $funds_info['lock_duration'] . 'Year(s)'; ?></span>
                          <?php else: ?>
                            <span class="badge bg-info">Unlocked</span>
                          <?php endif; ?>
                        </td>
                      <td class="coin-name">
                          <button type="button" class="edit-btn btn btn-outline-secondary badge badge-outline badge-danger badge-md">Edit</button>
                      </td>
                        <td class="coin-name">
                            <a href="confirmOperation.php?fr=<?= $funds_info['id_no']; ?>" class="dt-type-md">
                                <span class="btn btn-outline-danger badge badge-outline badge-danger badge-md">Delete</span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; //$serial_number++; ?>
            <?php else: ?>
                 </tbody>
                <tr>
                    <!-- <td colspan="8">No funding information found</td> -->
                </tr>
            <?php endif; ?>
        </tbody>     
                </table>
                </div>
                </div>
                </div>
              </div>
                <!-- FUND SECTION ENDS -->


                <!-- WITHDRAW SECTION BEGINS -->
              <div class="content-inner withdraw" id="withdraw">
                <h6>Withdrawal Requests</h6>
                <h4>Fund Management<span>&nbsp;System</span></h4>
                <p>
                This page show you all the withdrawal requests that have been made on your website using the withdraw button. From here you can approve and edit withdraw requests. 
                This page is for record and editing purposes and is intended for admin use only.
                </p>
                <div class="main">
                <div class="card-body">
                <div class="table-responsive">
                <table class="table caption-top table-striped table-hover responsive-table" id="withdrawTable">
                  <thead>
                      <tr class="table-secondary">
                          <th>ID</th>
                          <th>Email</th>
                          <th>Fullname</th>
                          <th>Amount</th>
                          <th>Wallet</th>
                          <th>Status</th>
                          <th>Date</th>
                          <th>Delete</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr class="table-secondary">
                          <th>ID</th>
                          <th>Email</th>
                          <th>Fullname</th>
                          <th>Amount</th>
                          <th>Wallet</th>
                          <th>Status</th>
                          <th>Date</th>
                          <th>Delete</th>
                      </tr>
                  </tfoot>
                 <tbody>
                  <?php $sql_withdraws = "SELECT * FROM withdraw"; $sql_withdraws_exec = $con->query($sql_withdraws);//$serial_number = 1;
                if ($sql_withdraws_exec->num_rows > 0): ?>
                <?php foreach($sql_withdraws_exec as $withdraws_info): ?>
                    <tr>
                        <td class="coin-name"><?= $withdraws_info['wtxn']; ?></td>
                        <td class="coin-name"><?= $withdraws_info['user_email']; ?></td>
                        <td class="coin-name"><?= $withdraws_info['firstname'] . '&nbsp;' . $withdraws_info['lastname']; ?></td>
                        <td class="coin-name"><?= $withdraws_info['withdraw_amount'] . $withdraws_info['withdraw_currency']; ?></td>
                        <td class="coin-name"><?= $withdraws_info['withdraw_address']; ?></td>
                              <td class="coin-name">
                                  <span><strong><?= $withdraws_info['withdraw_status'] ?></strong></span><br>
                                  <?php if ($withdraws_info['withdraw_status'] === 'pending'): ?>
                                      <a href="confirmOperation.php?awr=<?= $withdraws_info['id_no']; ?>">
                                          <span type="submit" class="btn btn-outline-info badge badge-outline badge-danger badge-md">Approve</span>
                                      </a>
                                  <?php elseif ($withdraws_info['withdraw_status'] === 'approved'): ?>
                                      <a href="confirmOperation.php?dwr=<?= $withdraws_info['id_no']; ?>">
                                          <span type="submit" class="btn btn-outline-warning badge badge-outline badge-danger badge-md">Disapprove</span>
                                      </a>
                                  <?php endif; ?>
                              </td>
                        <td class="coin-name"><?= $withdraws_info['withdraw_request_date']; ?></td>
                        <td class="coin-name">
                            <a href="confirmOperation.php? wr=<?= $withdraws_info['id_no']; ?>" class="dt-type-md">
                                <span class="btn btn-outline-danger badge badge-outline badge-danger badge-md">Delete</span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; //$serial_number++; ?>
            <?php else: ?>
                 </tbody>
                <tr>
                    <!-- <td colspan="8">No withdrawl information found</td> -->
                </tr>
            <?php endif; ?>
        </tbody>     
                </table>
                </div>
                </div>
                </div>
              </div>
                <!-- WITHDRAW SECTION ENDS -->

                 <!-- EXCHANGE TRANSACTION SECTION BEGINS -->
              <div class="content-inner transaction" id="exchange">
                <h6>Exchange Transactions </h6>
                <h4>XTrade Exchange<span>&nbsp;System</span></h4>
                <p>
                This page show you all the transaction requests, related to exchange buy/sell actions, that have been made on your website. From here you can mark as win or loose
                This page is for record and editing purposes and is intended for admin use only.
                </p>
                <div class="main">
                <div class="card-body">
                <div class="table-responsive">
                <table class="table caption-top table-striped table-hover responsive-table" id="exchangeTable">
                  <thead>
                      <tr class="table-secondary">
                        <th>ID</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Order</th>
                        <th>Order Price</th>
                        <th>Order Quantity</th>
                        <th>Order Percentage</th>
                        <th>Final Value</th>
                        <th>Status</th>
                        <th>Timestamp</th>
                        <th>Actions</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr class="table-secondary">
                      <th>ID</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Order</th>
                        <th>Order Price</th>
                        <th>Order Quantity</th>
                        <th>Order Percentage</th>
                        <th>Final Value</th>
                        <th>Status</th>
                        <th>Timestamp</th>
                        <th>Actions</th>
                      </tr>
                  </tfoot>
                 <tbody>
                  <?php $sql_exchanger = "SELECT * FROM exchanger"; $sql_exchanger_exec = $con->query($sql_exchanger);//$serial_number = 1;
                if ($sql_exchanger_exec->num_rows > 0): ?>
                <?php foreach($sql_exchanger_exec as $exchanger_info): ?>
                    <tr>
                        <td class="coin-name"><?= $exchanger_info['txn']; ?></td>
                        <td class="coin-name">
                          <?= $exchanger_info['email']; ?>
                        </td>
                        <td class="coin-name">
                            <?= $exchanger_info['username'] ?>
                            <?php if (!empty($exchanger_info['firstname']) || !empty($exchanger_info['lastname'])): ?>
                                <br><small><strong>Fullname:&nbsp;</strong><?= $exchanger_info['firstname'] ."&nbsp;". $exchanger_info['lastname']; ?></small>
                            <?php endif; ?>
                        </td>
                        <td class="coin-name">
                        <?php if (!empty($exchanger_info['order_type']) || !empty($exchanger_info['order_method'])): ?>
                                <small><strong>Type:&nbsp;</strong>
                                <?= $exchanger_info['order_type'] ."<br><strong>Method:</strong>&nbsp;".$exchanger_info['order_method']; ?></small>
                            <?php endif; ?>
                        </td>
                        <td class="coin-name"><?= number_format($exchanger_info['order_price'], 2) . $exchanger_info['order_currency']; ?></td>
                        <td class="coin-name"><?= number_format($exchanger_info['order_quantity'], 2) . $exchanger_info['exchanged_currency']; ?></td>
                        <td class="coin-name"> <?php if (!empty($exchanger_info['order_quantity_percentage'])): ?>
                            <?= round($exchanger_info['order_quantity_percentage'] * 100) . '%'; ?>
                          <?php endif; ?>
                        </td>
                        <td class="coin-name"> <?php if (!empty($exchanger_info['order_value'])): ?>
                            <?= number_format($exchanger_info['order_value'],2) . $exchanger_info['order_currency']; ?>
                          <?php endif; ?>
                        </td>
                        <td class="coin-name">
                            <span class='fs-6'><strong><?= $exchanger_info['order_status'] ?></strong></span><br>
                            <?php if ($exchanger_info['order_status'] === 'ongoing'): ?>
                                <a href="confirmOperation.php?exW=<?= $exchanger_info['id']; ?>">
                                    <span type="submit" class="btn btn-outline-success badge badge-outline badge-success badge-md">Mark Win</span>
                                </a> <br>
                                <a href="confirmOperation.php?exL=<?= $exchanger_info['id']; ?>">
                                    <span type="submit" class="btn btn-outline-danger badge badge-outline badge-danger badge-md">Mark Loose</span>
                                </a>
                            <?php endif; ?>
                        </td>
                        <td class="coin-name"><?= $exchanger_info['created_at']; ?></td>
                        <td class="coin-name">
                            <a title="Delete Transaction:&nbsp;<?=$exchanger_info['txn'];?>" href="confirmOperation.php?exDel=<?= $exchanger_info['id']; ?>" class="dt-type-md">
                                <span class="btn btn-outline-danger badge badge-outline badge-danger badge-md">Delete</span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; //$serial_number++; ?>
            <?php else: ?>
                 </tbody>
                <tr>
                    <td colspan="8">No exchange transactions information found</td>
                </tr>
            <?php endif; ?>
        </tbody>     
                </table>
                </div>
                </div>
                </div>
              </div>
                <!-- EXCHANGE TRANSACTION SECTION ENDS -->

                <!-- INVESTMENT TRANSACTION SECTION BEGINS -->
              <div class="content-inner transaction" id="transaction">
                <h6>Investment Subscription Requests</h6>
                <h4>Fund Management<span>&nbsp;System</span></h4>
                <p>
                This page show you all the transaction requests, related to investment, that have been made on your website. From here you can approve and edit these investments
                This page is for record and editing purposes and is intended for admin use only.
                </p>
                <div class="main">
                <div class="card-body">
                <div class="table-responsive">
                <table class="table caption-top table-striped table-hover responsive-table" id="transactionTable">
                  <thead>
                      <tr class="table-secondary">
                        <th>ID</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Package</th>
                        <th>Amount</th>
                        <th>Duration</th>
                        <th>Interest</th>
                        <th>Profit</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr class="table-secondary">
                        <th>ID</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Package</th>
                        <th>Amount</th>
                        <th>Duration</th>
                        <th>Interest</th>
                        <th>Profit</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                  </tfoot>
                 <tbody>
                  <?php $sql_transactions = "SELECT * FROM transaction"; $sql_transactions_exec = $con->query($sql_transactions);//$serial_number = 1;
                if ($sql_transactions_exec->num_rows > 0): ?>
                <?php foreach($sql_transactions_exec as $transactions_info): ?>
                    <tr>
                        <td class="coin-name"><?= $transactions_info['txn']; ?></td>
                        <td class="coin-name"><?= $transactions_info['user_email']; ?></td>
                        <td class="coin-name">
                            <?= $transactions_info['userName'] ?>
                            <?php if (!empty($transactions_info['trole'])): ?>
                                <br><small><strong>Role:&nbsp;</strong><?= $transactions_info['trole']; ?></small>
                            <?php endif; ?>
                        </td>
                        <td class="coin-name"><?= $transactions_info['tpackage']; ?></td>
                        <td class="coin-name"><?= $transactions_info['tamount'] . $transactions_info['tcurrency']; ?></td>
                        <td class="coin-name"> <?php if (!empty($transactions_info['tduration'])): ?>
                            <?= $transactions_info['tduration']; ?>&nbsp;days
                          <?php endif; ?>
                        </td>
                        <td class="coin-name"> <?php if (!empty($transactions_info['tinterest'])): ?>
                            <?= round($transactions_info['tinterest'] * 100) . '%'; ?>
                          <?php endif; ?>
                        </td>
                        <td class="coin-name"> <?php if (!empty($transactions_info['tprofit'])): ?>
                            <?= $transactions_info['tprofit'] . $transactions_info['tcurrency']; ?>
                          <?php endif; ?>
                        </td>
                        <td class="coin-name">
                            <span class='fs-6'><strong><?= $transactions_info['tstatus'] ?></strong></span><br>
                            <?php if ($transactions_info['tstatus'] === 'pending'): ?>
                                <a href="confirmOperation.php?atr=<?= $transactions_info['id_no']; ?>">
                                    <span type="submit" class="btn btn-outline-info badge badge-outline badge-danger badge-md">Approve</span>
                                </a>
                            <?php elseif ($transactions_info['tstatus'] === 'approved'): ?>
                                <a href="confirmOperation.php?dtr=<?= $transactions_info['id_no']; ?>">
                                    <span type="submit" class="btn btn-outline-warning badge badge-outline badge-danger badge-md">Disapprove</span>
                                </a>
                            <?php endif; ?>
                        </td>
                        <td class="coin-name"><?= $transactions_info['transact_date']; ?></td>
                      <td class="coin-name">
                          <button type="button" 
                                  class="edit-transaction btn btn-outline-secondary badge badge-outline badge-danger badge-md"
                                  title="Edit Transaction:&nbsp;<?=$transactions_info['txn'];?>" 
                                  data-toggle="modal" 
                                  data-target="#editTransactionModal" >Edit</button>
                      </td>
                        <td class="coin-name">
                            <a title="Delete Transaction:&nbsp;<?=$transactions_info['txn'];?>" href="confirmOperation.php?tr=<?= $transactions_info['id_no']; ?>" class="dt-type-md">
                                <span class="btn btn-outline-danger badge badge-outline badge-danger badge-md">Delete</span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; //$serial_number++; ?>
            <?php else: ?>
                 </tbody>
                <tr>
                    <!-- <td colspan="8">No transaction information found</td> -->
                </tr>
            <?php endif; ?>
        </tbody>     
                </table>
                </div>
                </div>
                </div>
              </div>
                <!-- INVESTMENT TRANSACTION SECTION ENDS -->


                 <!-- TRANSFER SECTION BEGINS -->
              <div class="content-inner transaction" id="transaction">
                <h6>Transfer Requests</h6>
                <h4>Fund Management<span>&nbsp;System</span></h4>
                <p>
                This page show you all the transfer requests, related to user fund transfers and P2P transfers, that have been made on your website. From here you can approve and edit these transfers
                This page is for record and editing purposes and is intended for admin use only.
                </p>
                <div class="main">
                <div class="card-body">
                <div class="table-responsive">
                <table class="table caption-top table-striped table-hover responsive-table" id="transactionTable">
                  <thead>
                      <tr class="table-secondary">
                        <th>ID</th>
                        <th>Sender Email</th>
                        <th>Sender Wallet</th>
                        <th>Recipient Email</th>
                        <th>Recipient Wallet</th>
                        <th>Amount Sent</th>
                        <th>Amount Received</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th>Delete</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr class="table-secondary">
                      <th>ID</th>
                        <th>Sender Email</th>
                        <th>Sender Wallet</th>
                        <th>Recipient Email</th>
                        <th>Recipient Wallet</th>
                        <th>Amount Sent</th>
                        <th>Amount Received</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th>Delete</th>
                      </tr>
                  </tfoot>
                  <tbody>
                  <?php $sql_transfers = "SELECT * FROM peer_transfer"; $sql_transfers_exec = $con->query($sql_transfers); 
                  if($sql_transfers_exec->num_rows > 0): ?>
                <?php foreach($sql_transfers_exec as $transfers_info): 
                      ?>
                    <tr>
                        <td class="coin-name"><?= htmlspecialchars($transfers_info['ptxn']); ?></td>
                        <td class="coin-name"><?= htmlspecialchars($transfers_info['seller_email']) . '<br>@'. htmlspecialchars($transfers_info['seller_username']); ?></td>
                        <td class="coin-name"><?= $transfers_info['seller_wallet']; ?></td>
                        <td class="coin-name"><?= $transfers_info['buyer_email'] . '<br>@'. $transfers_info['buyer_username']; ?></td>
                        <td class="coin-name"><?= $transfers_info['buyer_wallet']; ?></td>
                        <td class="coin-name"><?= number_format($transfers_info['seller_amount'],2) . $transfers_info['first_currency']; ?></td>
                        <td class="coin-name"><?= number_format($transfers_info['buyer_amount'],2) . $transfers_info['second_currency']; ?></td>
                        <td class="coin-name"><?= $transfers_info['prole']; ?></td>
                        <td class="coin-name">
                        <span class='fs-6'><strong><?= $transfers_info['pstatus'] ?></strong></span><br>
                            <?php if ($transfers_info['pstatus'] === 'pending'): ?>
                                <a href="confirmOperation.php?atrade=<?= urlencode($transfers_info['id_no']); ?>">
                                    <span class="btn btn-outline-info badge badge-outline badge-danger badge-md">Approve</span>
                                </a>
                            <?php elseif ($transfers_info['pstatus'] === 'approved'): ?>
                                <a href="confirmOperation.php?dtrade=<?= urlencode($transfers_info['id_no']); ?>">
                                    <span class="btn btn-outline-warning badge badge-outline badge-danger badge-md">Disapprove</span>
                                </a>
                            <?php endif; ?>
                        </td>

                        <td class="coin-name"><?= $transfers_info['recipient_message']; ?></td>
                        <td class="coin-name"><?= $transfers_info['peer_transact_date']; ?></td>
                        <td class="coin-name">
                            <a title="Delete Transaction:&nbsp;<?=$transfers_info['ptxn'];?>" href="confirmOperation.php?trade=<?= $transfers_info['id_no']; ?>" class="dt-type-md">
                                <span class="btn btn-outline-danger badge badge-outline badge-danger badge-md">Delete</span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php else: ?>
                 </tbody>
                <tr>
                    <!-- <td colspan="8">No transfer information found</td> -->
                </tr>
            <?php endif; ?>
        </tbody>     
                </table>
                </div>
                </div>
                </div>
              </div>
                <!-- TRANSFER SECTION ENDS -->

                <!-- NEWSLETTER SECTION BEGINS -->
              <div class="content-inner newsletter" id="newsletter">
                <h6>Newsletter Subscriptions</h6>
                <h4>View Your Newsletter<span>&nbsp;Subscribers</span></h4>
                <p>
                This page show you all newsletter subscription requests, that have been made by filling out the newsletter subscription form on your website. From here you can manage these subscriptions. 
                This page is for record and editing purposes and is intended for admin use only.
                </p>
                <div class="main">
                <div class="card-body">
                <div class="table-responsive">
                <table class="table caption-top table-striped table-hover responsive-table" id="newsletterTable">
                  <thead>
                      <tr class="table-secondary">
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Date</th>
                          <th>Delete</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr class="table-secondary">
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Date</th>
                          <th>Delete</th>
                      </tr>
                  </tfoot>
                 <tbody>
                  <?php $sql_news = "SELECT * FROM newsletter"; $sql_news_exec = $con->query($sql_news); $serial_number = 1;
                if ($sql_news_exec->num_rows > 0): ?>
                <?php foreach($sql_news_exec as $news_info): ?>
                    <tr>
                        <td class="coin-name"><?= $serial_number; ?></td>
                        <td class="coin-name"><?= $news_info['fullname']; ?></td>
                        <td class="coin-name"><?= $news_info['email_address']; ?></td>
                        <td class="coin-name"><?= $news_info['registration_date']; ?></td>
                        <td class="coin-name">
                            <a href="confirmOperation.php?dnews=<?= $news_info['id']; ?>" class="dt-type-md">
                                <span class="btn btn-outline-danger badge badge-outline badge-danger badge-md">Delete</span>
                            </a>
                        </td>
                    </tr>
                <?php $serial_number++; endforeach; ?>
            <?php else: ?>
                 </tbody>
                <tr>
                    <!-- <td colspan="8">No newsletter subscription found</td> -->
                </tr>
            <?php endif; ?>
           
        </tbody>     
                </table>
                </div>
                </div>
                </div>
                <!-- NEWSLETTER SECTION ENDS -->
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- MODALFORMS -->
 <?php include "modalForms.php"; ?>
    <section class="section-sale">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="block-text">
              <h4 class="heading">Admin Manager</h4>
              <p class="desc">
                Need a new admin? Use the add admin button to add new admin or manager to your website.
              </p>
            </div>
          </div>
          <div class="col-md-5">
            <div class="button">
              <a href="add-admin.php">Add Admin</a>
            </div>
          </div>
        </div>
      </div>
    </section>

  <?php include "../include/footer.php"; ?>

    <script src="../app/js/aos.js"></script>
    <script src="../app/js/jquery.min.js"></script>
    <script src="../app/js/jquery.easing.js"></script>
    <script src="../app/js/popper.min.js"></script>
    <script src="../app/js/bootstrap.min.js"></script>
    <script src="../app/js/app.js"></script>
    <script src="../app/js/jquery.peity.min.js"></script>

    <script src="../app/js/switchmode.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

    <script src="../app/js/datepickerpluigin.js"></script>
    <script src="../app/js/datepicker.js"></script>

      <script src="../app/js/coindata.js"></script>
      <!--Toastr-->
    <script type="text/javascript" src="../app/js/toastr.min.js"></script>

            <!--ChartJS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

      <!-- Datatable JS -->
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
      
      <!-- DataTables Buttons extension JS -->
      <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>

      <!-- JSZip (for exporting to Excel, needed by Buttons) -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js"></script>

      <!-- PDFMake (for exporting to PDF, needed by Buttons) -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

      <!-- DataTables Buttons for Excel, PDF, and Print -->
      <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
      
      <!--Custom JS for copy text -->
    <script type="text/javascript" src="../app/js/custom-scripts.js"></script>

    <script>
      imgInp.onchange = (evt) => {
        const [file] = imgInp.files;
        if (file) {
          blah.src = URL.createObjectURL(file);
        }
      };

      //DataTables
    $(document).ready(function() {
    $('#walletTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {extend: 'print', text: 'Print', className: 'btn btn-primary text-white'},{extend: 'copy', text: 'Copy', className: 'btn btn-primary text-white'},
          {extend: 'excel', text: 'Excel', className: 'btn btn-primary text-white'},{extend: 'csv', text: 'CSV', className: 'btn btn-primary text-white'},
          {extend: 'pdf', text: 'PDF', className: 'btn btn-primary text-white'},{extend: 'pageLength', text:'Show', className: 'btn btn-primary text-white'}
        ]
    });
    $('#userTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {extend: 'print', text: 'Print', className: 'btn btn-primary text-white'},{extend: 'copy', text: 'Copy', className: 'btn btn-primary text-white'},
          {extend: 'excel', text: 'Excel', className: 'btn btn-primary text-white'},{extend: 'csv', text: 'CSV', className: 'btn btn-primary text-white'},
          {extend: 'pdf', text: 'PDF', className: 'btn btn-primary text-white'},{extend: 'pageLength', text:'Show', className: 'btn btn-primary text-white'}
        ]
    });
    $('#refTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {extend: 'print', text: 'Print', className: 'btn btn-primary text-white'},{extend: 'copy', text: 'Copy', className: 'btn btn-primary text-white'},
          {extend: 'excel', text: 'Excel', className: 'btn btn-primary text-white'},{extend: 'csv', text: 'CSV', className: 'btn btn-primary text-white'},
          {extend: 'pdf', text: 'PDF', className: 'btn btn-primary text-white'},{extend: 'pageLength', text:'Show', className: 'btn btn-primary text-white'}
        ]
    });
    $('#adminTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {extend: 'print', text: 'Print', className: 'btn btn-primary text-white'},{extend: 'copy', text: 'Copy', className: 'btn btn-primary text-white'},
          {extend: 'excel', text: 'Excel', className: 'btn btn-primary text-white'},{extend: 'csv', text: 'CSV', className: 'btn btn-primary text-white'},
          {extend: 'pdf', text: 'PDF', className: 'btn btn-primary text-white'},{extend: 'pageLength', text:'Show', className: 'btn btn-primary text-white'}
        ]
    });
    $('#fundTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {extend: 'print', text: 'Print', className: 'btn btn-primary text-white'},{extend: 'copy', text: 'Copy', className: 'btn btn-primary text-white'},
          {extend: 'excel', text: 'Excel', className: 'btn btn-primary text-white'},{extend: 'csv', text: 'CSV', className: 'btn btn-primary text-white'},
          {extend: 'pdf', text: 'PDF', className: 'btn btn-primary text-white'},{extend: 'pageLength', text:'Show', className: 'btn btn-primary text-white'}
        ]
    });
    $('#withdrawTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {extend: 'print', text: 'Print', className: 'btn btn-primary text-white'},{extend: 'copy', text: 'Copy', className: 'btn btn-primary text-white'},
          {extend: 'excel', text: 'Excel', className: 'btn btn-primary text-white'},{extend: 'csv', text: 'CSV', className: 'btn btn-primary text-white'},
          {extend: 'pdf', text: 'PDF', className: 'btn btn-primary text-white'},{extend: 'pageLength', text:'Show', className: 'btn btn-primary text-white'}
        ]
    });
    $('#transactionTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {extend: 'print', text: 'Print', className: 'btn btn-primary text-white'},{extend: 'copy', text: 'Copy', className: 'btn btn-primary text-white'},
          {extend: 'excel', text: 'Excel', className: 'btn btn-primary text-white'},{extend: 'csv', text: 'CSV', className: 'btn btn-primary text-white'},
          {extend: 'pdf', text: 'PDF', className: 'btn btn-primary text-white'},{extend: 'pageLength', text:'Show', className: 'btn btn-primary text-white'}
        ]
    });
    $('#exchangeTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {extend: 'print', text: 'Print', className: 'btn btn-primary text-white'},{extend: 'copy', text: 'Copy', className: 'btn btn-primary text-white'},
          {extend: 'excel', text: 'Excel', className: 'btn btn-primary text-white'},{extend: 'csv', text: 'CSV', className: 'btn btn-primary text-white'},
          {extend: 'pdf', text: 'PDF', className: 'btn btn-primary text-white'},{extend: 'pageLength', text:'Show', className: 'btn btn-primary text-white'}
        ]
    });
    $('#newsletterTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {extend: 'print', text: 'Print', className: 'btn btn-primary text-white'},{extend: 'copy', text: 'Copy', className: 'btn btn-primary text-white'},
          {extend: 'excel', text: 'Excel', className: 'btn btn-primary text-white'},{extend: 'csv', text: 'CSV', className: 'btn btn-primary text-white'},
          {extend: 'pdf', text: 'PDF', className: 'btn btn-primary text-white'},{extend: 'pageLength', text:'Show', className: 'btn btn-primary text-white'}
        ]
    });
    $('#tradeTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {extend: 'print', text: 'Print', className: 'btn btn-primary text-white'},{extend: 'copy', text: 'Copy', className: 'btn btn-primary text-white'},
          {extend: 'excel', text: 'Excel', className: 'btn btn-primary text-white'},{extend: 'csv', text: 'CSV', className: 'btn btn-primary text-white'},
          {extend: 'pdf', text: 'PDF', className: 'btn btn-primary text-white'},{extend: 'pageLength', text:'Show', className: 'btn btn-primary text-white'}
        ]
    });
    $('#p2pTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {extend: 'print', text: 'Print', className: 'btn btn-primary text-white'},{extend: 'copy', text: 'Copy', className: 'btn btn-primary text-white'},
          {extend: 'excel', text: 'Excel', className: 'btn btn-primary text-white'},{extend: 'csv', text: 'CSV', className: 'btn btn-primary text-white'},
          {extend: 'pdf', text: 'PDF', className: 'btn btn-primary text-white'},{extend: 'pageLength', text:'Show', className: 'btn btn-primary text-white'}
        ]
    });
});

    </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById("editModal");
    var span = document.getElementsByClassName("close")[0];

    document.querySelectorAll('.edit-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            var row = button.closest('tr');
            document.getElementById('ftxn').value = row.cells[0].innerText.trim();
            document.getElementById('editEmail').value = row.cells[1].innerText.trim();
            document.getElementById('editAmount').value = parseFloat(row.cells[3].innerText.replace(/[^0-9.]/g, '').trim()); // Ensure this is a number
            document.getElementById('editCurrency').value = row.cells[3].innerText.slice(-4).trim(); // Assuming the last 3 characters are the currency
            document.getElementById('editProfit').value = parseFloat(row.cells[4].innerText.trim()); // Ensure this is a number

            modal.style.display = "block";
        });
    });

    span.addEventListener('click', function() {
        modal.style.display = "none";
    });

    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });
});

    </script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
    // Get all edit buttons
    var editButtons = document.querySelectorAll('.edit-transaction');

    // Add click event listener to each edit button
    editButtons.forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();

            // Get the row data
            var row = this.closest('tr');
            var txn = row.cells[0].textContent;
            var email = row.cells[1].textContent;
            var package = row.cells[3].textContent;
            var amountWithCurrency = row.cells[4].textContent;
            var amount = amountWithCurrency.replace(/[^\d.-]/g, '');
            var currency = amountWithCurrency.replace(/[\d.-]/g, '');
            var interest = row.cells[6].textContent.replace('%', '') / 100;
            var profit = row.cells[7].textContent.replace(/[^\d.-]/g, '');

            // Populate the modal form
            document.getElementById('txn').value = txn;
            document.getElementById('transactionEmail').value = email;
            document.getElementById('package').value = package;
            document.getElementById('transactionAmount').value = amount;
            document.getElementById('transactionCurrency').value = currency;
            document.getElementById('transactionInterest').value = interest;
            document.getElementById('transactionProfit').value = profit;

            // Open the modal
            var modal = new bootstrap.Modal(document.getElementById('editTransactionModal'));
            modal.show();
        });
    });
});
</script> 

<script>
  //FOR USER CHART
        var totalUsers = <?php if(!empty($totalUsers)){echo $totalUsers;} else{echo 0;}; ?>;
        var totalVerifiedUsers = <?php if(!empty($totalVerifiedUsers)){echo $totalVerifiedUsers;} else{echo 0;}; ?>;
        var totalAdmins = <?php if(!empty($totalAdmins)){echo $totalAdmins;} else{echo 0;}; ?>;
        var totalSubscribers = <?php if(!empty($totalSubscribers)){echo $totalSubscribers;} else{echo 0;};?>;
        var totalReferrals = <?php if(!empty($totalReferrals)){echo $totalReferrals;} else{echo 0;}; ?>;

        var ctx = document.getElementById('userChart').getContext('2d');
        var userChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Users', 'Verified Users','Referrals','Email Subscribers','Site Managers'],
                datasets: [{
                    label: 'User Management',
                    data: [totalUsers, totalVerifiedUsers, totalReferrals, totalSubscribers, totalAdmins],
                    backgroundColor: [
                    'rgba(54, 162, 235, 0.5)',
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
</script>
<script>
         //FOR MONEY CHART
        var totalFunding = <?php if(!empty($totalFunding)){echo $totalFunding;} else{echo 0;}; ?>;
        var totalProfit = <?php if(!empty($totalFundProfit)){echo $totalFundProfit;} else{echo 0;}; ?>;
        var totalTransaction = <?php if(!empty($totalTransaction)){echo $totalTransaction;} else{echo 0;};?>;
        var totalInterest = <?php if(!empty($totalTransactionProfit)){echo $totalTransactionProfit;} else{echo 0;}; ?>;
        var totalWithdraw = <?php if(!empty($totalWithdraw)){echo $totalWithdraw;} else{echo 0;}; ?>;
        var totalSiteBalance = <?php if(!empty($totalSiteBalance)){echo $totalSiteBalance;} else{echo 0;}; ?>;
        

        var ctx2 = document.getElementById('moneyChart').getContext('2d');
        var moneyChart = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Funding','Profit','Investments','Interest','Withdrawal','Site Balance'],
                datasets: [{
                    label: 'Finance Management ($)',
                    data: [totalFunding, totalProfit, totalTransaction, totalInterest, totalWithdraw, totalSiteBalance],
                    backgroundColor: [
                     'rgba(255, 0, 0, 0.4)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    
  </body>
</html>
<?php

if(isset($toast)){
    if($toast==='success'){
      echo "<script>toastr.success('You will be redirected shortly', 'Success');</script>";
    }

    if($toast==='Subsuccess'){
     echo "<script>toastr.success('You were subscribed successfully', 'Success');</script>";
    }

    if($toast==='Subfail'){
      echo "<script>toastr.error('A problem was encountered while performing that operation', 'Error');</script>";
    }

    if($toast==='fail'){
      echo "<script>toastr.error('We cannot log you in', 'Error')</script>";
    }
  }
  $con->close();
?>
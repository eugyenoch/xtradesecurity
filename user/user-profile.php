<?php
include '../function.php'; 
checkUserLogin();

// Fetch current prices
$currentPrices = fetchCryptoData('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum,tether,binancecoin&vs_currencies=usd');
// Fetch historical price data for the past 30 days
$historicalData = fetchCryptoData('https://api.coingecko.com/api/v3/coins/bitcoin/market_chart?vs_currency=usd&days=30');

//This PHPDoc annotation is to help IntelliSense understand the type of $con
/** @var mysqli $con */

// Fetch user details from the database
$userEmail = $_SESSION['user_session'];
$stmt = $con->prepare("SELECT firstname, lastname, phone, user_email, userName, address, city, country, phone, photo, affid, reg_date, is_verified FROM users WHERE user_email = ? OR userName = ? ");
$stmt->bind_param("ss", $userEmail, $userEmail);
$stmt->execute();
$stmt->bind_result($firstname, $lastname, $phone, $user_email, $userName, $address, $city, $country, $phone, $photoPath, $affid, $reg_date, $is_verified);
$stmt->fetch();
$stmt->close();

// Set the URL of the profile picture
$profilePicUrl = !empty($photoPath) ? $photoPath : '';

// Optionally, store these values in session variables to access them on other pages
$_SESSION['user_firstname'] = $firstname;
$_SESSION['user_lastname'] = $lastname;
$_SESSION['user_email'] = $user_email;
$_SESSION['user_username'] = $userName;
$_SESSION['user_profile_pic'] = $profilePicUrl;

//SECTION TO CALL SPECIFIC USER INFORMATION
// Call the function to check if the logged in user is subscribed to newsletter
$user_subscribed_email = $user_email; // The actual email of the currently subscribed user

//Call the function to check user referral count
$user_referrer_count = $_SESSION['user_session'];
$total_referrals = countUserReferrals($con, $user_referrer_count);

//Call the function to check user P2P count
$user_p2p_count = $_SESSION['user_session'];
$total_p2p_count = countUserP2PTrades($con, $user_p2p_count);

//Get all fund data from currently logged in user
$funds = fetchFunds($con, $userEmail);
?>
<!DOCTYPE html>
<html lang="en">
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
                    <a href="index.html" class="">
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
            <div class="col-xxl-6 col-xl-6 col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="invite-content">
                    <h4>Invite a friend and get referral</h4>
                    <p>
                    Earn rewards by inviting friends to XTrade Security. You will receive rewards when they： 1.Buy Crypto 2.Finish Trading Tasks.
                    3.Sign up; gain recognition when they sign up.
                    </p>
                    
                    <div class="copy-link">
                      <form action="#">
                        <div class="input-group">
                          <input
                            type="text"
                            class="form-control"
                            value="https://www.xtradesecurity.com/?affid=<?php if(isset($affid)){echo $affid;} ?>"
                            id="myInput"
                          />
                          <span class="input-group-text c-pointer" onclick="myFunction()">Copy</span>
                        </div>
                      </form>
                    </div>

                    <!-- <div class="social-share-link">
                                        <a href="#"><span><i class="icofont-facebook"></i></span></a>
                                        <a href="#"><span><i class="icofont-twitter"></i></span></a>
                                        <a href="#"><span><i class="icofont-whatsapp"></i></span></a>
                                        <a href="#"><span><i class="icofont-telegram"></i></span></a>
                                    </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="invite-content">
                    <h4>Account Security</h4>
                    <p>
                     Get started on your account security and API keys (for developers). <br>Take advantage of the several get started points available through your dashboard.
                    </p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tfa" tabindex="-1">2FA (coming soon)</a>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#apiKey" tabindex="-1">API Keys(coming soon)</a>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#changePassword" tabindex="-1">Change Password</a>
                  </div>
                </div>
              </div>
            </div> 

            <div class="col-xxl-4 col-xl-4 col-lg-6">
              <div class="price-widget bg-btc">
                <a href="price-details.html">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc BTC-alt"></i>
                      <span>Bitcoin</span>
                    </div>
                    <h5><?php if ($currentPrices !== null){echo '$'.$currentPrices['bitcoin']['usd'];}else{echo "Fetching prices...";} ?></h5>
                  </div>
                  <div id="chart"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6">
              <div class="price-widget bg-eth">
                <a href="price-details.html">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc ETH-alt"></i>
                      <span>Ethereum</span>
                    </div>
                    <h5><?php if ($currentPrices !== null){echo '$'.$currentPrices['ethereum']['usd'];}else{echo "Fetching prices...";}  ?></h5>
                  </div>
                  <div id="chart2"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6">
              <div class="price-widget bg-usdt">
                <a href="price-details.html">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc USDT-alt"></i>
                      <span>Tether</span>
                    </div>
                    <h5><?php if ($currentPrices !== null){echo '$'.$currentPrices['tether']['usd'];}else{echo "Fetching prices...";} ?></h5>
                  </div>
                  <div id="chart3"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-lg-6">
              <div class="card welcome-profile">
                <div class="card-body">
                <form action="upload-profile-picture.php" method="post" enctype="multipart/form-data">
                
                <div class="avt">
                <img id="blah" src="<?php if(isset($profilePicUrl)){echo htmlspecialchars($profilePicUrl);} else{echo './images/profile/2.png" alt="" />';}?>" alt="no file" title="Display Photo" /> 
                <input type="file" class="custom-file-input" accept="image/*" id="imgInp" name="profilePic" title="Select an image" /> 
                </div>
                <input type="submit" class="btn" name="upload" value="Upload" title="Upload image" /> 
              </form>
                 
                  <?php if(isset($firstname) && isset($lastname)): ?>
                  <h4>Welcome,  <?= $firstname .'&nbsp;'.$lastname; ?>!</h4>
                  <h6 class="name position-relative" title="Display Name">
                  <?php if(isset($userName)){echo '@'. $userName;} ?>
                <span class="position-absolute top-0 start-90 translate-right p-2 bg-success border border-light rounded-circle" title="Online">
                  <span class="visually-hidden">Online</span>
                </span>
                  </h6>
                  <?php endif; ?>
                  <p><?php if(isset($user_email)){echo '<strong>Email:</strong>&nbsp;'. $user_email;} ?></p>
              <p><?php if(isset($affid)){echo '<strong>Referral Code:</strong>&nbsp;'.$affid;} ?></p>
              <p><?php if(isset($reg_date)){echo '<strong>Registered:</strong>&nbsp;'.$reg_date;} ?></p>
                  <p>
                    Remember to verify yourself and fill out our KYC to use the full potential of XTrade Security.
                  </p>

                  <ul>
                    <li>
                      <a href="#">
                        <span class="verified"
                          ><i class="icofont-check-alt"></i
                        ></span>
                        Verify account
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="not-verified"
                          ><i class="icofont-close-line"></i
                        ></span>
                        Two-factor authentication (2FA)
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="not-verified"
                          ><i class="icofont-close-line"></i
                        ></span>
                        Deposit money
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Quick Trade</h4>
                </div>
                <div class="card-body">
                  <form
                    method="post"
                    name="myform"
                    class="currency_validate trade-form row g-3"
                  >
                    <div class="col-12">
                      <label class="form-label">You Send</label>
                      <div class="input-group">
                        <select class="form-select" name="method">
                          <option value="bank">USD</option>
                          <option value="master">Euro</option>
                        </select>
                        <input
                          type="text"
                          name="currency_amount"
                          class="form-control"
                          placeholder="0.0214 BTC"
                        />
                      </div>
                    </div>

                    <div class="col-12">
                      <label class="form-label">You get</label>
                      <div class="input-group">
                        <select class="form-select" name="method">
                          <option value="bank">BTC</option>
                          <option value="master">ETH</option>
                        </select>
                        <input
                          type="text"
                          name="currency_amount"
                          class="form-control"
                          placeholder="0.0214 BTC"
                        />
                      </div>
                    </div>

                    <p class="mb-0">
                      1 USD ~ 0.000088 BTC
                      <a href="#">Expected rate <br />No extra fees</a>
                    </p>

                    <button
                      type="submit"
                      name="submit"
                      class="btn btn-success btn-block"
                    >
                      Exchange Now
                    </button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-xxl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Balance</h4>
                </div>
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                      <div class="balance-chart">
                        <div id="balance-chart"></div>
                        <h4>Total Balance = $ 5360</h4>
                      </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                      <ul class="balance-widget">
                        <li>
                          <div class="icon-title">
                            <i class="cc BTC"></i>
                            <span>Bitcoin</span>
                          </div>
                          <div class="text-end">
                            <h5>0.000242 BTC</h5>
                            <span>0.125 USD</span>
                          </div>
                        </li>
                        <li>
                          <div class="icon-title">
                            <i class="cc USDT"></i>
                            <span>Tether</span>
                          </div>
                          <div class="text-end">
                            <h5>0.000242 USDT</h5>
                            <span>0.125 USD</span>
                          </div>
                        </li>
                        <li>
                          <div class="icon-title">
                            <i class="cc XTZ"></i>
                            <span>Tezos</span>
                          </div>
                          <div class="text-end">
                            <h5>0.000242 XTZ</h5>
                            <span>0.125 USD</span>
                          </div>
                        </li>
                        <li>
                          <div class="icon-title">
                            <i class="cc XMR"></i>
                            <span>Monero</span>
                          </div>
                          <div class="text-end">
                            <h5>0.000242 XMR</h5>
                            <span>0.125 USD</span>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-8 col-xl-8">
              <div class="card dashboard-select">
                <div class="card-header">
                  <h4 class="card-title home-chart">Analytics</h4>
                  <select
                    class="form-select d-none"
                    name="report-type"
                    id="report-select"
                  >
                    <option value="1">Bitcoin</option>
                    <option value="2">Litecoin</option>
                  </select>
                </div>
                <div class="card-body">
                  <div class="home-chart-height">
                    <div id="chartx"></div>
                    <div class="row">
                      <div
                        class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6"
                      >
                        <div class="chart-price-value">
                          <span>24hr Volume</span>
                          <h5>$236,368.00</h5>
                        </div>
                      </div>
                      <div
                        class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6"
                      >
                        <div class="chart-price-value">
                          <span>Marketcap</span>
                          <h5>$236.025B USD</h5>
                        </div>
                      </div>
                      <div
                        class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6"
                      >
                        <div class="chart-price-value">
                          <span>24hr Volume</span>
                          <h5>56.3 BTC</h5>
                        </div>
                      </div>
                      <div
                        class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6"
                      >
                        <div class="chart-price-value">
                          <span>All Time High</span>
                          <h5>$236,368.00</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Trade Balances</h4>
                </div>
                <div class="card-body">
                  <ul class="balance-widget trade-balance">
                    <li>
                      <h5>Trade Balance</h5>
                      <div class="text-end">
                        <h5>$0.0000</h5>
                        <span>Total margin currency balance.</span>
                      </div>
                    </li>
                    <li>
                      <h5>Equity</h5>
                      <div class="text-end">
                        <h5>$0.0000</h5>
                        <span
                          >Trade balance combined with unrealized
                          profit/loss</span
                        >
                      </div>
                    </li>
                    <li>
                      <h5>Used Margin</h5>
                      <div class="text-end">
                        <h5>$0.0000</h5>
                        <span>Total margin amount used in open positions.</span>
                      </div>
                    </li>
                    <li>
                      <h5>Free Margin</h5>
                      <div class="text-end">
                        <h5>$0.0000</h5>
                        <span
                          >Usable margin balance. Equal to equity minus.</span
                        >
                      </div>
                    </li>
                    <li>
                      <h5>Margin Level</h5>
                      <div class="text-end">
                        <h5>$0.0000</h5>
                        <span>Percentage ratio of equity to used margin.</span>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Position Valuation</h4>
                </div>
                <div class="card-body">
                  <ul class="balance-widget position-value">
                    <li>
                      <h5>Opening Cost</h5>
                      <div class="text-end">
                        <h5>$0.0000</h5>
                        <span>Original cost of all open positions.</span>
                      </div>
                    </li>
                    <li>
                      <h5>Current Valuation</h5>
                      <div class="text-end">
                        <h5>$0.0000</h5>
                        <span>Paper valuation of all open positions.</span>
                      </div>
                    </li>
                    <li>
                      <h5>Profit</h5>
                      <div class="text-end">
                        <h5>$0.0000 (0,00%)</h5>
                        <span>Paper profit of all open positions..</span>
                      </div>
                    </li>
                    <li>
                      <h5>Loss</h5>
                      <div class="text-end">
                        <h5>$0.0000 (0,00%)</h5>
                        <span>Paper loss of all open positions.</span>
                      </div>
                    </li>
                    <li>
                      <h5>Fees</h5>
                      <div class="text-end">
                        <h5>$0.0000</h5>
                        <span>Current Fee</span>
                      </div>
                    </li>
                    <li>
                      <h5>Current Valuation</h5>
                      <div class="text-end">
                        <h5>$0.0000</h5>
                        <span>Paper valuation of all open positions.</span>
                      </div>
                    </li>
                    <li>
                      <h5>Profit</h5>
                      <div class="text-end">
                        <h5>$0.0000 (0,00%)</h5>
                        <span>Paper profit of all open positions..</span>
                      </div>
                    </li>
                    <li>
                      <h5>Loss</h5>
                      <div class="text-end">
                        <h5>$0.0000 (0,00%)</h5>
                        <span>Paper loss of all open positions.</span>
                      </div>
                    </li>
                    <li>
                      <h5>Fees</h5>
                      <div class="text-end">
                        <h5>$0.0000</h5>
                        <span>Current Fee</span>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xxl-8 col-xl-8">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Transaction</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive transaction-table">
                    <table class="table table-striped responsive-table">
                      <thead>
                        <tr>
                          <th>Ledger ID</th>
                          <th>Date</th>
                          <th>Type</th>
                          <th>Currency</th>
                          <th>Amount</th>
                          <th>Fee</th>
                          <th>Balance</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>523640</td>
                          <td>January 15</td>
                          <td>
                            <span class="danger-arrow"
                              ><i class="icofont-arrow-down"></i> Sell</span
                            >
                          </td>
                          <td class="coin-name">
                            <i class="cc BTC"></i> Bitcoin
                          </td>
                          <td class="text-danger">-0.000242 BTC</td>
                          <td>0.02%</td>
                          <td><strong>0.25484 BTC</strong></td>
                        </tr>
                        <tr>
                          <td>523640</td>
                          <td>January 15</td>
                          <td>
                            <span class="success-arrow"
                              ><i class="icofont-arrow-up"></i>Buy</span
                            >
                          </td>
                          <td class="coin-name">
                            <i class="cc LTC"></i> Litecoin
                          </td>
                          <td class="text-success">-0.000242 BTC</td>
                          <td>0.02%</td>
                          <td><strong> 0.25484 LTC</strong></td>
                        </tr>
                        <tr>
                          <td>523640</td>
                          <td>January 15</td>
                          <td>
                            <span class="success-arrow"
                              ><i class="icofont-arrow-up"></i>Buy</span
                            >
                          </td>
                          <td class="coin-name">
                            <i class="cc XRP"></i> Ripple
                          </td>
                          <td class="text-success">-0.000242 BTC</td>
                          <td>0.02%</td>
                          <td><strong> 0.25484 LTC</strong></td>
                        </tr>
                        <tr>
                          <td>523640</td>
                          <td>January 15</td>
                          <td>
                            <span class="success-arrow"
                              ><i class="icofont-arrow-up"></i>Buy</span
                            >
                          </td>
                          <td class="coin-name">
                            <i class="cc DASH"></i> Dash
                          </td>
                          <td class="text-success">-0.000242 BTC</td>
                          <td>0.02%</td>
                          <td><strong> 0.25484 LTC</strong></td>
                        </tr>
                        <tr>
                          <td>523640</td>
                          <td>January 15</td>
                          <td>
                            <span class="success-arrow"
                              ><i class="icofont-arrow-up"></i>Buy</span
                            >
                          </td>
                          <td class="coin-name">
                            <i class="cc LTC"></i> Litecoin
                          </td>
                          <td class="text-success">-0.000242 BTC</td>
                          <td>0.02%</td>
                          <td><strong> 0.25484 LTC</strong></td>
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

    <?php include "modalForms.php"; ?>

    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="./vendor/basic-table/jquery.basictable.min.js"></script>
    <script src="./js/plugins/basic-table-init.js"></script>

    <script src="./vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="./js/plugins/perfect-scrollbar-init.js"></script>

    <script src="./vendor/apexchart/apexcharts.min.js"></script>
    <script src="./js/dashboard.js"></script>
    <script src="./js/plugins/apex-price.js"></script>

    <script src="./vendor/slick/slick.min.js"></script>
    <script src="./js/plugins/slick-init.js"></script>
    <script src="./js/scripts.js"></script>
  </body>
</html>

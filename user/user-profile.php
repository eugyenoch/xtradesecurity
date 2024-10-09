
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
                      <span>XTrade Security&nbsp;<i class="icofont-user"></i>&nbsp;Dashboard</span>
                    </a>
                  </div>
                  <?php include './include/search-crypto.php';?>
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
                    Earn rewards by inviting friends to XTrade Security using your referal code. You will receive rewards when they：1.Buy Crypto 2.Finish Trading Tasks.
                   Also gain recognition when they sign up.
                    </p>                    
                    <div class="copy-link">
                      <form action="#">
                        <div class="input-group">
                          <input type="text" class="form-control" value="<?php if(isset($affid)){echo $affid;} ?>" id="myInput" disabled />
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
                     Get started on your account security and API keys (for developers).<br>Take advantage of the several get started points, available through your dashboard to secure your account.
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
                <a href="price.php">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc BTC-alt"></i>
                      <span>Bitcoin</span>
                    </div>
                    <h5><?php if( $currentPrices['bitcoin']['usd'] !== null){echo '$'.$currentPrices['bitcoin']['usd'];}else{echo "Fetching prices...";} ?></h5>
                  </div>
                  <div id="chart"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6">
              <div class="price-widget bg-eth">
                <a href="price.php">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc ETH-alt"></i>
                      <span>Ethereum</span>
                    </div>
                    <h5><?php if($currentPrices['ethereum']['usd'] !== null){echo '$'.$currentPrices['ethereum']['usd'];}else{echo "Fetching prices...";}  ?></h5>
                  </div>
                  <div id="chart2"></div>
                </a>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6">
              <div class="price-widget bg-usdt">
                <a href="price.php">
                  <div class="price-content">
                    <div class="icon-title">
                      <i class="cc USDT-alt"></i>
                      <span>Tether</span>
                    </div>
                    <h5><?php if($currentPrices['tether']['usd'] !== null){echo '$'.$currentPrices['tether']['usd'];}else{echo "Fetching prices...";} ?></h5>
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
                <img id="blah" src="<?php if(isset($profilePicUrl)){echo htmlspecialchars($profilePicUrl);}?>" alt="no file" title="Display Photo" /> 
                <input type="file" class="custom-file-input" accept="image/*" id="imgInp" name="profilePic" title="Select an image" /> 
                </div>
                <input type="submit" class="btn" name="upload" value="Upload" title="Upload image" /> 
              </form>
                 
                  <?php if(isset($firstname) && isset($lastname)): ?>
                  <h4>Welcome,  <?= $firstname .'&nbsp;'.$lastname; ?>!</h4>
                  <h6 class="name position-relative" title="Display Name">
                  <?php if(isset($userName)){echo '@'. $userName;} ?>
                <span class="position-absolute top-0 start-90 translate-right p-1 bg-success border border-light rounded-circle" title="Online">
                  <span class="visually-hidden">Online</span>
                </span>
                  </h6>
                  <?php endif; ?>
                  <p>
                    <span><?php if(isset($user_email)){echo '<strong>Email:</strong>&nbsp;'. $user_email;} ?></span><br>
                    <span><?php if(isset($phone)){echo '<strong>Phone:</strong>&nbsp;'. $phone;} ?></span><br>
                    <span><?php if(isset($affid)){echo '<strong>Referral Code:</strong>&nbsp;'.$affid;} ?></span><br>
                    <span><?php if(isset($reg_date)){echo '<strong>Registered:</strong>&nbsp;'.$reg_date;} ?></span><br>
                    <span> <?php if(isset($total_p2p_count)&& $total_p2p_count!=null){
                      echo "<strong>P2P Trades:</strong>&nbsp;<span title='Your P2P Trade Count. Refer to the P2P section for more details'>". $total_p2p_count ."</span>";}
                      else{echo "<strong>P2P Trades:</strong>&nbsp;<span title='No P2P trades available for your account'><i class='icofont-close-squared-alt'></i></span>";} ?>
                    </span> <br>
                    <span> <?php if(isset($total_order_count)&& $total_order_count!=null){
                      echo "<strong>Order Book:</strong>&nbsp;<span title='Your Order Book Items. Refer to the exchange for more details'>". $total_order_count ."</span>";}
                      else{echo "<strong>Order Book:</strong>&nbsp;<span title='No entry available for your account'><i class='icofont-close-squared-alt'></i></span>";} ?>
                    </span> <br>
                    <span><?php $subscriptionStatus = isSubscribedToNewsletter($con, $user_subscribed_email); if($subscriptionStatus){
                      echo '<strong>Newsletter Status:</strong>&nbsp;'. $subscriptionStatus;}?>
                    </span>       
                   </p>
                  <p>Remember to verify yourself and fill out KYC to use the full potential of XTrade Security.</p>
                  <ul>
                    <li>
                      <a href="#">
                        <span class="verified"><i class="icofont-check-alt"></i></span>Account Verified</a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="not-verified"><i class="icofont-close-line"></i></span>Two-factor authentication (2FA)</a>
                    </li>
                    <li>
                      <a href="settings-security.php">
                        <span class="not-verified"><i class="icofont-exclamation"></i></span>Fill out KYC</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Trivial Crypto Game</h4>
                </div>
                <div class="card-body">
                <script src="https://widgets.coingecko.com/gecko-random-coin-widget.js"></script>
                <gecko-random-coin-widget locale="en" transparent-background="true"></gecko-random-coin-widget>
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
                        <canvas id="moneyChart" width="200" height="170"></canvas>
                        <h5><?php if(isset($_SESSION['user_session'])) {$userBalance = calculateUserTotalBalance();
                            echo "Total Balance:&nbsp;<span title='Total Balance (TB) as approved'>". $userBalance ."</span>";
                        } else {
                            echo "Total Balance:&nbsp;<span title='Total Balance (TB) as approved'>$0.00</span>";
                        }?></h5>
                      </div>
                      <div>
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#fundAccount" tabindex="-1">Fund Account</button>
                      <button type="button" class="btn btn-secondary position-relative top-100 start-0" data-toggle="modal" data-target="#lockFund" tabindex="-1">Earn 199% APY</button>
                      </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                      <ul class="balance-widget">
                        <li>
                          <div class="icon-title">
                            <i class="cc USDT"></i>
                            <span>Total Approved Funds</span>
                          </div>
                          <div class="text-end">
                            <h5><?php if(isset($_SESSION['user_session'])) {$totalFunded = getTotalApprovedFundAmount();
                            echo "<span title='Total Approved Funded (TAF)'>". $totalFunded ."</span>";
                        } else {
                            echo "<span title='Total Approved Funded (TAF)'>$0.00</span>";
                        }?></h5>
                           <span><a href="wallet.php" title="Wallet">more</a></span>
                          </div>
                        </li>
                        <li>
                          <div class="icon-title">
                            <i class="cc USDT"></i>
                            <span>Total Approved Investments</span>
                          </div>
                          <div class="text-end">
                            <h5> <?php if(isset($_SESSION['user_session'])) {$totalInvestment = getTotalApprovedTransactionAmount();
                            echo "&nbsp;<span title='Total Approved Investments (TAI)'>". $totalInvestment ."</span>";
                        } else {
                            echo "&nbsp;<span title='Total Approved Investments (TAI)'>$0.00</span>";
                        }?></h5>
                            <span><a href="wallet.php" title="Wallet">more</a></span>
                          </div>
                        </li>
                        <li>
                          <div class="icon-title">
                            <i class="cc USDT"></i>
                            <span>Total Investment Profits</span>
                          </div>
                          <div class="text-end">
                            <h5> <?php if(isset($_SESSION['user_session'])) {$totalInvestmentProfit = getTotalApprovedTransactionProfit();
                            echo "&nbsp;<span title='Total Approved Investments Profit (TAIP)'>". $totalInvestmentProfit ."</span>";
                        } else {
                            echo "&nbsp;<span title='Total Approved Investments Profit (TAIP)'>$0.00</span>";
                        }?></h5>
                            <span><a href="wallet.php" title="Wallet">more</a></span>
                          </div>
                        </li>
                        <li>
                          <div class="icon-title">
                            <i class="cc USDT"></i>
                            <span>Total Withdrawn</span>
                          </div>
                          <div class="text-end">
                            <h5> <?php if(isset($_SESSION['user_session'])) {$totalWithdrawn = getTotalApprovedWithdrawAmount();
                            echo "&nbsp;<span title='Total Approved Withdrawal (TAW)'>". $totalWithdrawn ."</span>";
                        } else {
                            echo "&nbsp;<span title='Total Approved Withdrawal (TAW)'>$0.00</span>";
                        }?></h5>
                            <span><a href="wallet.php" title="Wallet">more</a></span>
                          </div>
                        </li>
                      </ul>
                      <a href="wallet.php" type="button" class="btn btn-success position-relative top-100 start-50">View More</a>
                    </div> 
                    
                    <div class="mt-4">
                    <button type="button" class="btn btn-secondary position-relative top-100 start-0" data-toggle="modal" data-target="#commission" tabindex="-1">Pay Commissions</button>
                      </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-8 col-xl-8">
              <div class="card dashboard-select">
                <div class="card-header">
                  <h4 class="card-title home-chart">Market Analytics</h4>
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
                    <!-- <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                      <script type="text/javascript">
                        new TradingView.widget({
                          container_id: "technical-analysis",
                          width: "100%",
                          height: 600,
                          symbol: "BITSTAMP:BTCUSD",
                          interval: "D",
                          timezone: "exchange",
                          theme: "red",
                          style: "1",
                          toolbar_bg: "#23262F",
                          withdateranges: true,
                          hide_side_toolbar: false,
                          allow_symbol_change: true,
                          save_image: false,
                          hideideas: true,
                          studies: [
                            "ROC@tv-basicstudies",
                            "StochasticRSI@tv-basicstudies",
                            "MASimple@tv-basicstudies",
                          ],
                          show_popup_button: true,
                          popup_width: "1000",
                          popup_height: "650",
                        });
                      </script> -->
                      <script src="https://widgets.coingecko.com/gecko-coin-compare-chart-widget.js"></script>
                  <gecko-coin-compare-chart-widget locale="en" dark-mode="true" transparent-background="true" coin-ids="notcoin,dogs-2,simon-s-cat,zano,the-open-network,orderly-network,fetch-ai,sun-token,ethereum,popcat,render-token,kaspa,solana,pepe,sui" initial-currency="usd"></gecko-coin-compare-chart-widget>
                    <div class="row">
                      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="chart-price-value">
                          <span>24hr Volume</span>
                          <h5>$136,368.00</h5>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="chart-price-value">
                          <span>Marketcap</span>
                          <h5>$236.025M USD</h5>
                        </div>
                      </div>
                      <div
                        class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6"
                      >
                        <div class="chart-price-value">
                          <span>Most Traded Asset</span>
                          <h5>Tether (USDT)</h5>
                        </div>
                      </div>
                      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="chart-price-value">
                          <span>All Time High</span>
                          <h5>$216,368.00 USD</h5>
                        </div>
                      </div>
                    </div><br>
                    <center><a href="trade.php" class="btn btn-primary">Trade on XTrade Exchange</a></center>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Trading News</h4>
                </div>
                <div class="card-body">
                    <!-- TradingView Widget BEGIN -->
                  <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="trade.php"><span class="blue-text link-opacity-100-hover">Trade on XTRADE Exchange</span></a></div>
                      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                      {
                      "feedMode": "all_symbols",
                      "isTransparent": true,
                      "displayMode": "regular",
                      "width": "100%",
                      "height": "100%",
                      "colorTheme": "light",
                      "locale": "en"
                    }
                      </script>
                  </div>
                  <!-- TradingView Widget END -->
                 
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4">
              <div class="card" style="overflow-y: auto;">
                <div class="card-header">
                  <h4 class="card-title">Position Valuation and Trade Balances (available soon)</h4>
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
                        <span>Trade balance combined with unrealized profit/loss</span>
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
                        <span>Usable margin balance. Equal to equity minus.</span>
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
            <div class="col-xxl-8 col-xl-8">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Referral Network Information</h4>
                </div>
                
                <div class="card-body">
                <div class="mb-3">
                      <div class="shadow p-4 bg-primary text-white"><p class="lead"><i class="icofont-users-social"></i>&nbsp;Total Referrals
                      <?php if(isset($total_referrals)&& $total_referrals!=null){echo "&nbsp;<span class='badge bg-warning text-primary' title='Your Network Count (NC)'>". $total_referrals ."</span>";} ?>
                    </p></div>
                    </div>
                  <div class="table-responsive transaction-table">
                  <table class="table caption-top table-striped table-hover responsive-table" id="refTable">
                  <caption><strong>Referral Table</strong></caption>
                  <thead>
                      <tr class="table-primary">
                           <th>S/N</th>
                          <th>Referral</th>
                          <th>Referral ID</th>
                          <th>Date Registered</th>
                      </tr>
                  </thead>
                  <tfoot>
                  <tr class="table-primary">
                          <th>S/N</th>
                          <th>Referral</th>
                          <th>Referral ID</th>
                          <th>Date Registered</th>
                      </tr>
                  </tfoot>
                 <tbody>
                  <?php $sql_refs = "SELECT * FROM referral WHERE referrer = '$userEmail' OR referrer_email = '$userEmail'"; 
                  $sql_ref_exec = $con->query($sql_refs);$serial_number = 1;
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
                        <td class="coin-name">
                          <?php if(isset($ref_info['user_referred']) && $ref_info['user_referred']!=null){echo '@'.$ref_info['user_referred'];} ?>
                        </td>
                        <td><?php if (!empty($ref_info['user_referred_affid'])) { echo $ref_info['user_referred_affid']; } ?></td>
                        <td class="coin-name"><?= $ref_info['date']; ?></td>
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
          </div>
        </div>
      </div>
    </div>
    
    <?php include "modalForms.php"; ?>
    <?php include "include/footer.php"; ?>
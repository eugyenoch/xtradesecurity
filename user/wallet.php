
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
                        <span>XTrade Security&nbsp;<i class="icofont-wallet"></i>&nbsp;Wallet</span>
                    </a>
                  </div>
                  <?php include './include/search-crypto.php';?>
                </div>


                <?php include "include/profileHeadRight.php";?>
      <?php include "include/sidebar.php";?>

      <div class="content-body">
        <div class="container">
          <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="wallet-widget card">
                <h5 title="User Total Balance (TB)">Balance</h5>
                <h3><span class="text-primary">
                <?php if(isset($_SESSION['user_session'])) {$userBalance = calculateUserTotalBalance();
                            echo "&nbsp;<span title='Total Balance (TB) as approved'>". $userBalance ."</span>";
                        } else {echo "&nbsp;<span title='Total Balance (TB) as approved'>$0.00</span>";}?>
                        </span> <sub>USD</sub></h3>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="wallet-widget card">
                <h5 title="Total Approved Fund (TAF)">Fundings</h5>
                <h3><span class="text-success">
                <?php if(isset($_SESSION['user_session'])){$totalFunded = getTotalApprovedFundAmount();
                            echo "&nbsp;<span title='Total Approved Funded (TAF)'>". $totalFunded ."</span>";
                        } else {
                            echo "&nbsp;<span title='Total Approved Funded (TAF)'>$0.00</span>";
                        }?>
                </span> <sub>USD</sub></h3>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="wallet-widget card">
                <h5 title="Total Approved Fund Interest (TAFI)">Interests</h5>
                <h3><span class="text-warning">
                <?php if(isset($_SESSION['user_session'])) {$totalInterest =  getTotalApprovedFundInterest();
                            echo "<span title='Total Approved Fund Interest (TAFI)'>". $totalInterest ."</span>";
                        } else {
                            echo "<span title='Total Approved Fund Interest (TAFI)'>$0.00</span>";
                        }?>
                </span> <sub>USD</sub></h3>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="wallet-widget card">
                <h5>Profits</h5>
                <h3> <?php if(isset($_SESSION['user_session'])) {$totalInvestmentProfit = getTotalApprovedTransactionProfit();
                            echo "&nbsp;<span title='Total Approved Investments Profit (TAIP)'>". $totalInvestmentProfit ."</span>";
                        } else {
                            echo "&nbsp;<span title='Total Approved Investments Profit (TAIP)'>$0.00</span>";
                        }?>
                </span> <sub>USD</sub></h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xxl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Wallets and Banks</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-sm responsive-table" id="userWalletTable">
                    <caption>Wallet Information Table</caption>
                      <thead>
                        <tr>
                          <th>Coin</th>
                          <th>Wallet Address</th>
                          <th>QR Code</th>
                          <th>Date Added</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <?php $sql_addresses_user = "SELECT * FROM wallet_addresses WHERE wallet_owner='$user_email'"; $sql_addresses_execs = $con->query($sql_addresses_user);$serial_number = 1;
                    //foreach($sql_addresses_exec as $addresses_info){extract($addresses_info);
                if ($sql_addresses_execs->num_rows > 0): ?>
                <?php foreach($sql_addresses_execs as $addresses_infos): ?>
                      <tbody>
                        <tr>
                          <td>
                            <div class="coin-name">
                              <i class="cc USDT"></i>
                            </div>
                          </td>
                          <td>
                          <?= 
                                htmlspecialchars($addresses_infos['address']) 
                                . (!empty($addresses_infos['wallet_tag']) 
                                    ? '<br><span><small><strong>Tag:</strong> ' . htmlspecialchars($addresses_infos['wallet_tag']) . '</small></span>' 
                                    : '')
                            ?>
                          </td>
                          <td>
                            <?php if (isset($addresses_infos['qrcode']) && $addresses_infos['qrcode'] !== null): ?>
                                <img src="../assets/user-uploads/<?= $addresses_infos['qrcode']; ?>" alt="QRCode" width="30px" height="30px">
                            <?php endif; ?>
                        </td>
                        <td class="coin-name"><?= $addresses_infos['date_created']; ?></td>
                        <td class="coin-name">
                            <a href="confirmOperation.php?dwa=<?= $addresses_infos['id_no']; ?>" class="dt-type-md">
                                <span class="btn btn-outline-danger badge badge-outline badge-danger badge-md">Delete</span>
                            </a>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php else: ?>
                          </tbody>
                          <tr>
                              <td colspan="8">No wallet information found</td>
                          </tr>
                      <?php endif; ?>
                      </tbody>
                    </table>
                  </div>

                  <div class="table-responsive">
                    <table class="table table-striped table-sm responsive-table" #userBankTable>
                      <caption>Bank Information Table</caption>
                    <thead>
                        <tr>
                        <th>Account Name</th>
                          <th>Account Number</th>
                          <th>Sortcode</th>
                          <th>Swiftcode</th>
                          <th>Bank Name</th>
                          <th>Date Added</th>
                        </tr>
                      </thead>
                      <?php $sql_bank_user = "SELECT * FROM bank_accounts WHERE account_owner='$user_email'"; $sql_bank_execs = $con->query($sql_bank_user);
                    //foreach($sql_addresses_exec as $addresses_info){extract($addresses_info);
                if ($sql_bank_execs->num_rows > 0): ?>
                <?php foreach($sql_bank_execs as $bank_infos): ?>
                      <tbody>
                        <tr>
                        <td><?php if(!empty($bank_infos['account_name'])){echo htmlentities($bank_infos['account_name']);}else{echo "N/A";}?></td>
                        <td><?php if(!empty($bank_infos['account_number'])){echo htmlentities($bank_infos['account_number']);}else{echo "N/A";} ?></td>
                        <td><?php if(!empty($bank_infos['sortcode'])){echo htmlentities($bank_infos['sortcode']);}else{echo "N/A";} ?></td>
                        <td><?php if(!empty($bank_infos['swiftcode'])){echo htmlentities($bank_infos['swiftcode']);}else{echo "N/A";} ?></td>
                        <td><?php if(!empty($bank_infos['bank_name'])){echo htmlentities($bank_infos['bank_name']);}else{echo "N/A";} ?></td>
                        <td><?php if(!empty($bank_infos['date_created'])){echo htmlentities($bank_infos['date_created']);}else{echo "N/A";} ?></td>
                        <td class="coin-name">
                            <a href="confirmOperation.php?dba=<?= $bank_infos['id']; ?>" class="dt-type-md">
                                <span class="btn btn-outline-danger badge badge-outline badge-danger badge-md">Delete</span>
                            </a>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php else: ?>
                          </tbody>
                          <tr>
                              <td colspan="8">No bank information found</td>
                          </tr>
                      <?php endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
            </div>

            <div class="col-xxl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Balances</h4>
                </div>
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                      <div class="balance-chart">
                        <canvas id="moneyChart" width="200" height="150"></canvas>
                        <canvas id="moneyPie" width="200" height="150"></canvas>
                        <h5><?php if(isset($_SESSION['user_session'])) {$userBalance = calculateUserTotalBalance();
                            echo "Available Balance:&nbsp;<span title='Total Balance (TB) as approved'>". $userBalance ."</span>";
                        } else {
                            echo "Available Balance:&nbsp;<span title='Total Balance (TB) as approved'>$0.00</span>";
                        }?></h5>

                      <h5>
                        <?php if(isset($_SESSION['user_session'])) {$userLockedBalance =  getTotalApprovedLockedFundAmount();
                                    echo "<i class='icofont-lock'></i>Locked Balance:&nbsp;<span title='Total Locked Balance (TLB) as approved'>". $userLockedBalance ."</span>";
                                } else {echo "<i class='icofont-lock'></i>Locked Balance:&nbsp;<span title='Total Locked Balance (TLB) as approved'>$0.00</span>";}?>
                            </h5>
                      </div>
                      <div>
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#transferFund" tabindex="-1">Transfer Fund</button>
                      <button type="button" class="btn btn-secondary position-relative top-100 start-0" data-toggle="modal" data-target="#withdrawFund" tabindex="-1">Withdraw</button>
                     
                    </div>
                  </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                      <ul class="balance-widget">
                        <li>
                          <div class="icon-title">
                            <i class="cc USDT"></i>
                            <span class="fs-6">Total Approved Funded</span>
                          </div>
                          <div class="text-end">
                            <h6><?php if(isset($_SESSION['user_session'])) {$totalFunded = getTotalApprovedFundAmount();
                            echo "<span title='Total Approved Funded (TAF)'>". $totalFunded ."</span>";
                        } else {
                            echo "<span title='Total Approved Funded (TAF)'>$0.00</span>";
                        }?></h6>
                          </div>
                        </li>
                        <li>
                          <div class="icon-title">
                            <i class="cc USDT"></i>
                            <span class="fs-6">Total Approved Fund Interest</span>
                          </div>
                          <div class="text-end">
                            <h6><?php if(isset($_SESSION['user_session'])) {$totalInterest =  getTotalApprovedFundInterest();
                            echo "<span title='Total Approved Fund Interest (TAFI)'>". $totalInterest ."</span>";
                        } else {
                            echo "<span title='Total Approved Fund Interest (TAFI)'>$0.00</span>";
                        }?></h6>
                          </div>
                        </li>
                        <li>
                          <div class="icon-title">
                            <i class="cc USDT"></i>
                            <span class="fs-6">Total Approved Investments</span>
                          </div>
                          <div class="text-end">
                            <h6> <?php if(isset($_SESSION['user_session'])) {$totalInvestment = getTotalApprovedTransactionAmount();
                            echo "&nbsp;<span title='Total Approved Investments (TAI)'>". $totalInvestment ."</span>";
                        } else {
                            echo "&nbsp;<span title='Total Approved Investments (TAI)'>$0.00</span>";
                        }?></h6>
                          </div>
                        </li>
                        <li>
                          <div class="icon-title">
                            <i class="cc USDT"></i>
                            <span class="fs-6">Total Investment Profits</span>
                          </div>
                          <div class="text-end">
                            <h6> <?php if(isset($_SESSION['user_session'])) {$totalInvestmentProfit = getTotalApprovedTransactionProfit();
                            echo "&nbsp;<span title='Total Approved Investments Profit (TAIP)'>". $totalInvestmentProfit ."</span>";
                        } else {
                            echo "&nbsp;<span title='Total Approved Investments Profit (TAIP)'>$0.00</span>";
                        }?></h6>
                          </div>
                        </li>
                        <li>
                          <div class="icon-title">
                            <i class="cc USDT"></i>
                            <span class="fs-6">Total Withdrawn</span>
                          </div>
                          <div class="text-end">
                            <h6> <?php if(isset($_SESSION['user_session'])) {$totalWithdrawn = getTotalApprovedWithdrawAmount();
                            echo "&nbsp;<span title='Total Approved Withdrawal (TAW)'>". $totalWithdrawn ."</span>";
                        } else {
                            echo "&nbsp;<span title='Total Approved Withdrawal (TAW)'>$0.00</span>";
                        }?></h6>
                          </div>
                        </li>

                        <li>
                          <div class="icon-title">
                            <i class="cc USDT"></i>
                            <span class="fs-6">Total Transfers Sent</span>
                          </div>
                          <div class="text-end">
                            <h6> <?php if(isset($_SESSION['user_session'])) {$totalTransferSent = getTotalApprovedTransferForSeller();
                            echo "&nbsp;<span title='Total Transfers Sent (TTS) for internal transfers'>". $totalTransferSent ."</span>";
                        } else {
                            echo "&nbsp;<span title='Total Transfers Sent (TTS) for internal transfers'>$0.00</span>";
                        }?></h6>
                          </div>
                        </li>

                        <li>
                          <div class="icon-title">
                            <i class="cc USDT"></i>
                            <span class="fs-6">Total Transfers Received</span>
                          </div>
                          <div class="text-end">
                            <h6> <?php if(isset($_SESSION['user_session'])) {$totalTransferReceived = getTotalApprovedTransferForBuyer();
                            echo "&nbsp;<span title='Total Transfers Received (TTR) for internal transfers'>". $totalTransferReceived ."</span>";
                        } else {
                            echo "&nbsp;<span title='Total Transfers Received (TTR) for internal transfers'>$0.00</span>";
                        }?></h6>
                          </div>
                        </li>
                      </ul>
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#transferFund" tabindex="-1">Transfer Fund</button>
                    
                    <button type="button" class="btn btn-secondary position-relative top-100 start-0 mb-1" data-toggle="modal" data-target="#lockFund" tabindex="-1">Earn 199% APY</button>
                    <button type="button" class="btn btn-secondary position-relative top-100 start-0" data-toggle="modal" data-target="#commission" tabindex="-1">Pay Commissions</button>
                     
                    </div> 
                    <div class="mt-4"></div>
                    <h6><span title="Fetched Wallet Address" id="walletAddress"></span>&nbsp;&nbsp;<span title="Fetched Wallet Balance" id="walletBalance"></span></h6> 
                    <!-- <span id="walletDetails"></span> -->
                       </div>
                       <div>
                      <a href="#" id="connectWalletButton" type="button" class="btn btn-success position-relative top-100 start-0">Import External Wallet</a>
                      </div>
                </div>
                
              </div>
            </div>

            <div class="col-xxl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Deposit Summary</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table class="table table-striped table-hover responsive-table" id="fundTable">
                      <caption><strong>Profits are for locked funds only</strong></caption>
                      <thead>
                          <tr class="table-secondary">  
                              <th>TXN ID</th>
                              <th>Amount</th>
                              <th>Profit</th>
                              <th>Date</th>
                              <th>Locked</th>
                              <th>Duration</th>
                              <th>Unlock Date</th>
                              <th>Status</th>
                              <th>Payment proof</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr class="table-secondary">  
                              <th>TXN ID</th>
                              <th>Amount</th>
                              <th>Profit</th>
                              <th>Date Added/Approved</th>
                              <th>Locked</th>
                              <th>Duration</th>
                              <th>Unlock Date</th>
                              <th>Status</th>
                              <th>Payment proof</th>
                          </tr>
                      </tfoot>
                      <tbody>
                      <?php if (!empty($funds)): ?>
                        <?php foreach ($funds as $funds_info): ?>
                                  <tr>  
                                      <td><?= $funds_info['ftxn']; ?></td>
                                      <td><?= number_format($funds_info['fund_amount'],2) . ' ' . $funds_info['fund_currency']; ?></td>
                                      <td>
                                          <?php if (!empty($funds_info['fund_profit'])): ?>
                                              <?= number_format($funds_info['fund_profit'],2) . ' ' . $funds_info['fund_currency']; ?>
                                          <?php else: ?>
                                              <?= ' 0.00 ' . $funds_info['fund_currency']; ?>
                                          <?php endif; ?>
                                      </td>
                                     
                                      <td><?= $funds_info['fund_request_date']; ?></td>
                                      <td><?php if(isset($funds_info['is_locked']) && $funds_info['is_locked'] ==='yes'):?> 
                                        <span class="badge bg-info">Yes</span>
                                        <?php elseif(isset($funds_info['is_locked']) && $funds_info['is_locked'] ==='no'):?> 
                                          <span class="badge bg-info">No</span>
                                          <?php else: ?>
                                            <span class="badge bg-info">Unlocked</span>
                                        <?php endif; ?>
                                      </td>

                                      <td><?php if(isset($funds_info['lock_duration']) && $funds_info['lock_duration'] != NULL ):?> 
                                        <span class="badge bg-info"><?= $funds_info['lock_duration'] . '&nbsp;Year(s)'; ?></span>
                                        <?php else: ?>
                                          <span class="badge bg-info">Unlocked</span>
                                        <?php endif; ?>
                                      </td>
                                      <td></td>
                                      <td class="coin-name">
                                          <?php if ($funds_info['fund_status'] === 'pending'): ?>
                                              <span class="badge bg-warning text-black"><?= $funds_info['fund_status']; ?></span>
                                          <?php elseif ($funds_info['fund_status'] === 'approved'): ?>
                                              <span class="badge bg-success"><?= $funds_info['fund_status']; ?></span>
                                          <?php else: ?>
                                              <?= $funds_info['fund_status']; ?>
                                          <?php endif; ?>
                                      </td>
                                      <td>
                                      <?php if(!isset($funds_info['fund_proof']) || !isset($funds_info['fund_comment'])): ?>
                                        <a type="button" 
                                                class="btn btn-outline-secondary badge badge-outline badge-danger badge-md text-black" 
                                                title="Use this link if you need to upload payment proof" 
                                                data-toggle="modal"
                                                data-target="#upload-proof"
                                                data-ftxn="<?= $funds_info['ftxn']; ?>"
                                                tabindex="-1"> 
                                                Submit Proof
                                              </a>
                                        <?php else: ?>
                                          <span><i class="text-success fa fa-check"></i><br>Proof Submitted</span>
                                          <?php endif; ?>
                                    </td>
                                  </tr>
                                  <?php //$serial_number++; 
                              endforeach; 
                          else: ?>
                              <tr>
                                  <td colspan="7">No funding information found</td>
                              </tr>
                          <?php endif; ?>
                      </tbody>
                  </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Withdrawal Summary</h4>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                <table class="table table-striped table-hover responsive-table" id="withdrawTable">
                  <caption><strong>Withdrawal Summary. Only approved requests have been paid-out</strong></caption>
                  <thead>
                      <tr class="table-secondary">
                          <th>TXN ID</th>
                          <th>Amount</th>
                          <th>Receiving address</th>
                          <th>Status</th>
                          <th>Date</th>
                          
                      </tr>
                  </thead>
                  <tfoot>
                      <tr class="table-secondary">
                          <th>TXN ID</th>
                          <th>Amount</th>
                          <th>Receiving address</th>
                          <th>Status</th>
                          <th>Date</th>
                      </tr>
                  </tfoot>
                 <tbody>
                  <?php $sql_withdraws = "SELECT * FROM withdraw WHERE user_email='$userEmail' OR userName='$userEmail'"; 
                  $sql_withdraws_exec = $con->query($sql_withdraws); $serial_number = 1;
                if ($sql_withdraws_exec->num_rows > 0): ?>
                <?php foreach($sql_withdraws_exec as $withdraws_info): ?>
                    <tr>  
                        <td class="coin-name"><?= $withdraws_info['wtxn']; ?></td>
                        <td class="coin-name"><?= number_format($withdraws_info['withdraw_amount'],2) . $withdraws_info['withdraw_currency']; ?></td>
                        <td class="coin-name"><?= $withdraws_info['withdraw_address']; ?></td>
                        <td class="coin-name">
                            <?php if ($withdraws_info['withdraw_status'] === 'pending'): ?>
                                <span class="badge bg-warning text-black"><?= htmlspecialchars($withdraws_info['withdraw_status']); ?></span>
                            <?php elseif ($withdraws_info['withdraw_status'] === 'approved'): ?>
                                <span class="badge bg-success"><?= htmlspecialchars($withdraws_info['withdraw_status']); ?></span>
                            <?php else: ?>
                                <?= htmlspecialchars($withdraws_info['withdraw_status']); ?>
                            <?php endif; ?>
                        </td>
                        <td class="coin-name"><?= $withdraws_info['withdraw_request_date']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                 </tbody>
                <tr>
                    <td colspan="8">No withdrawal information found</td>
                </tr>
            <?php endif; ?>
        </tbody>     
                </table>

                </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Transfers</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table class="table caption-top table-striped table-hover responsive-table" id="userTransferTable">
                  <caption><strong>Transfer Transactions Summary</strong></caption>
                  <thead>
                      <tr class="table-secondary">
                        <th>Transaction ID</th>
                        <th>Sender Email</th>
                        <th>Sender Wallet</th>
                        <th>Recipient Email</th>
                        <th>Recipient Wallet</th>
                        <th>Amount Sent</th>
                        <th>Amount Received</th>
                        <th>Role</th>
                        <th>Message</th>
                        <th>Date</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr class="table-secondary">
                        <th>Transaction ID</th>
                        <th>Sender Email</th>
                        <th>Sender Wallet</th>
                        <th>Recipient Email</th>
                        <th>Recipient Wallet</th>
                        <th>Amount Sent</th>
                        <th>Amount Received</th>
                        <th>Role</th>
                        <th>Message</th>
                        <th>Date</th>
                      </tr>
                  </tfoot>
                 <tbody>
                  <?php $sql_p2p = "SELECT * FROM peer_transfer WHERE seller_email='$userEmail' OR seller_username='$userEmail' OR buyer_email='$userEmail' OR buyer_username='$userEmail'"; 
                  $sql_p2p_exec = $con->query($sql_p2p); 
                if ($sql_p2p_exec->num_rows > 0): ?>
                <?php foreach($sql_p2p_exec as $p2p_info): 
                      ?>
                    <tr>
                        <td class="coin-name"><?= htmlspecialchars($p2p_info['ptxn']); ?></td>
                        <td class="coin-name"><?= htmlspecialchars($p2p_info['seller_email']) . '<br>@'. htmlspecialchars($p2p_info['seller_username']); ?></td>
                        <td class="coin-name"><?= $p2p_info['seller_wallet']; ?></td>
                        <td class="coin-name"><?= $p2p_info['buyer_email'] . '<br>@'. $p2p_info['buyer_username']; ?></td>
                        <td class="coin-name"><?= $p2p_info['buyer_wallet']; ?></td>
                        <td><?= number_format($p2p_info['seller_amount'],2) . $p2p_info['first_currency']; ?></td>
                        <td><?= number_format($p2p_info['buyer_amount'],2) . $p2p_info['second_currency']; ?></td>
                        <td class="coin-name">
                          <?= $p2p_info['prole']; ?><br>
                          <?php if (isset($p2p_info['pstatus']) && $p2p_info['pstatus'] === 'pending'): ?>
                              <span class="badge bg-warning text-black"><?= htmlspecialchars($p2p_info['pstatus']); ?></span>

                          <?php elseif (isset($p2p_info['pstatus']) && $p2p_info['pstatus'] === 'approved'): ?>
                              <span class="badge bg-success"><?= htmlspecialchars($p2p_info['pstatus']); ?></span>

                          <?php elseif (isset($p2p_info['pstatus']) && $p2p_info['pstatus'] === 'auto approved'): ?>
                                <span class="badge bg-success"><?= htmlspecialchars($p2p_info['pstatus']); ?></span>
                                
                          <?php endif; ?>
                      </td>
                        <td class="coin-name"><?= $p2p_info['recipient_message']; ?></td>
                        <td class="coin-name"><?= $p2p_info['peer_transact_date']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                 </tbody>
                <tr>
                    <td colspan="8">No transfer information found</td>
                </tr>
            <?php endif; ?>
        </tbody>     
                </table>
                  </div>
                </div>
              </div>
            </div>

           

                <div class="col-xxl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Investments</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table class="table caption-top table-striped table-hover responsive-table" id="userInvestmentTable">
                  <caption><strong>Investment Transactions Summary</strong></caption>
                  <thead>
                      <tr class="table-secondary">
                        <th>Transaction ID</th>
                        <th>Package</th>
                        <th>Amount</th>
                        <th>Duration</th>
                        <th>Interest</th>
                        <th>Profit</th>
                        <th>Status</th>
                        <th>Date</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr class="table-secondary">
                        <th>Transaction ID</th>
                        <th>Package</th>
                        <th>Amount</th>
                        <th>Duration</th>
                        <th>Interest</th>
                        <th>Profit</th>
                        <th>Status</th>
                        <th>Date</th>
                      </tr>
                  </tfoot>
                 <tbody>
                  <?php $sql_transactions = "SELECT * FROM transaction WHERE user_email='$userEmail' OR userName='$userEmail'"; 
                  $sql_transactions_exec = $con->query($sql_transactions); 
                if ($sql_transactions_exec->num_rows > 0): ?>
                <?php foreach($sql_transactions_exec as $transactions_info): 
                      ?>
                    <tr>
                        <td class="coin-name"><?= $transactions_info['txn']; ?></td>
                        <td class="coin-name"><?= $transactions_info['tpackage']; ?></td>
                        <td class="coin-name"><?= number_format($transactions_info['tamount'],2) . $transactions_info['tcurrency']; ?></td>
                        <td class="coin-name"> <?php if (!empty($transactions_info['tduration'])): ?>
                            <?= $transactions_info['tduration']; ?>&nbsp;days
                          <?php endif; ?>
                        </td>
                        <td class="coin-name"> <?php if (!empty($transactions_info['tinterest'])): ?>
                            <?= round($transactions_info['tinterest'] * 100) . '%'; ?>
                          <?php endif; ?>
                        </td>
                        <td class="coin-name">
                        <?php if (!empty($transactions_info['tprofit'])): ?>
                            <?= number_format($transactions_info['tprofit']) . $transactions_info['tcurrency']; ?>
                            <?php else: ?>
                              <?= '<span title="Profit reflects 30days after approval date">0.00</span>' . $transactions_info['tcurrency']; ?>
                          <?php endif; ?>
                        </td>
                        <td class="coin-name">
                            <?php if ($transactions_info['tstatus'] === 'pending'): ?>
                                <span class="badge bg-warning text-black"><?= htmlspecialchars($transactions_info['tstatus']); ?></span>
                            <?php elseif ($transactions_info['tstatus'] === 'approved'): ?>
                                <span class="badge bg-success"><?= htmlspecialchars($transactions_info['tstatus']); ?></span>
                            <?php else: ?>
                                <?= "<i class='fa fa-times' aria-hidden='true'></i>"; ?>
                            <?php endif; ?>
                        </td>
                        <td class="coin-name"><?= $transactions_info['transact_date']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                 </tbody>
                <tr>
                    <td colspan="8">No investment information found</td>
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

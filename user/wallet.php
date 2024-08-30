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
                    <a href="../index.php">
                      <img src="../assets/images/logo/favicon.png" alt="icon image" title="XTrade Security LTD" />
                        <span>XTrade Security&nbsp;<i class="icofont-wallet"></i>&nbsp;Wallet</span>
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
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="wallet-widget card">
                <h5 title="User Total Balance (TB)">Total Balance</h5>
                <h2><span class="text-primary">
                <?php if(isset($_SESSION['user_session'])) {$userBalance = calculateUserTotalBalance();
                            echo "&nbsp;<span title='Total Balance (TB) as approved'>". $userBalance ."</span>";
                        } else {echo "&nbsp;<span title='Total Balance (TB) as approved'>$0.00</span>";}?>
                        </span> <sub>USD</sub></h2>
                <p>= <?php if(isset($_SESSION['user_session'])){$userBalance = calculateUserTotalBalance(); echo $userBalance . 'USDT';}?> </p>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="wallet-widget card">
                <h5 title="Total Approved Fund (TAF)">Total Approved Fund</h5>
                <h2><span class="text-success">
                <?php if(isset($_SESSION['user_session'])){$totalFunded = getTotalApprovedFundAmount();
                            echo "&nbsp;<span title='Total Approved Funded (TAF)'>". $totalFunded ."</span>";
                        } else {
                            echo "&nbsp;<span title='Total Approved Funded (TAF)'>$0.00</span>";
                        }?>
                </span> <sub>USD</sub></h2>
                <p>= <?php if(isset($_SESSION['user_session'])){$totalFunded = getTotalApprovedFundAmount(); echo $totalFunded .'USDT';}?></p>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="wallet-widget card">
                <h5>Pending Balance</h5>
                <h2><span class="text-warning">0.000</span> <sub>USD</sub></h2>
                <p>= 0.000000 BTC</p>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="wallet-widget card">
                <h5>Locked Balance</h5>
                <h2><span class="text-danger">0.000</span> <sub>USD</sub></h2>
                <p>= 0.000000 BTC</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xxl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Wallet Addresses</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped responsive-table">
                      <thead>
                        <tr>
                          <th>Coin Name</th>
                          <th>Address</th>
                          <th>QR</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="coin-name">
                              <i class="cc BTC"></i>
                              <span>Bitcoin</span>
                            </div>
                          </td>
                          <td>35Hb5B6qJa5ntYaNFN3hGYXdAjh919g2VH</td>
                          <td>
                            <img
                              class="qr-img"
                              src="./images/qr.svg"
                              alt=""
                              width="40"
                            />
                          </td>
                        </tr>
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
                        <canvas id="moneyChart" width="200" height="100"></canvas>
                        <h5><?php if(isset($_SESSION['user_session'])) {$userBalance = calculateUserTotalBalance();
                            echo "Total Balance:&nbsp;<span title='Total Balance (TB) as approved'>". $userBalance ."</span>";
                        } else {
                            echo "Total Balance:&nbsp;<span title='Total Balance (TB) as approved'>$0.00</span>";
                        }?></h5>
                      </div>
                      <div>
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#fundAccount" tabindex="-1">Fund Account</button>
                      <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#withdrawFund" tabindex="-1">Withdraw Fund</button>
                      </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                      <ul class="balance-widget">
                        <li>
                          <div class="icon-title">
                            <i class="cc USDT"></i>
                            <span>Total Approved Funds (TAF)</span>
                          </div>
                          <div class="text-end">
                            <h5><?php if(isset($_SESSION['user_session'])) {$totalFunded = getTotalApprovedFundAmount();
                            echo "<span title='Total Approved Funded (TAF)'>". $totalFunded ."</span>";
                        } else {
                            echo "<span title='Total Approved Funded (TAF)'>$0.00</span>";
                        }?></h5>
                          </div>
                        </li>
                        <li>
                          <div class="icon-title">
                            <i class="cc USDT"></i>
                            <span>Total Approved Fund Interest (TAFI)</span>
                          </div>
                          <div class="text-end">
                            <h5><?php if(isset($_SESSION['user_session'])) {$totalInterest =  getTotalApprovedFundInterest();
                            echo "<span title='Total Approved Fund Interest (TAFI)'>". $totalInterest ."</span>";
                        } else {
                            echo "<span title='Total Approved Fund Interest (TAFI)'>$0.00</span>";
                        }?></h5>
                          </div>
                        </li>
                        <li>
                          <div class="icon-title">
                            <i class="cc USDT"></i>
                            <span>Total Approved Investments (TAI)</span>
                          </div>
                          <div class="text-end">
                            <h5> <?php if(isset($_SESSION['user_session'])) {$totalInvestment = getTotalApprovedTransactionAmount();
                            echo "&nbsp;<span title='Total Approved Investments (TAI)'>". $totalInvestment ."</span>";
                        } else {
                            echo "&nbsp;<span title='Total Approved Investments (TAI)'>$0.00</span>";
                        }?></h5>
                          </div>
                        </li>
                        <li>
                          <div class="icon-title">
                            <i class="cc USDT"></i>
                            <span>Total Investment Profits (TAIP)</span>
                          </div>
                          <div class="text-end">
                            <h5> <?php if(isset($_SESSION['user_session'])) {$totalInvestmentProfit = getTotalApprovedTransactionProfit();
                            echo "&nbsp;<span title='Total Approved Investments Profit (TAIP)'>". $totalInvestmentProfit ."</span>";
                        } else {
                            echo "&nbsp;<span title='Total Approved Investments Profit (TAIP)'>$0.00</span>";
                        }?></h5>
                          </div>
                        </li>
                        <li>
                          <div class="icon-title">
                            <i class="cc USDT"></i>
                            <span>Total Withdrawn (TAW)</span>
                          </div>
                          <div class="text-end">
                            <h5> <?php if(isset($_SESSION['user_session'])) {$totalWithdrawn = getTotalApprovedWithdrawAmount();
                            echo "&nbsp;<span title='Total Approved Withdrawal (TAW)'>". $totalWithdrawn ."</span>";
                        } else {
                            echo "&nbsp;<span title='Total Approved Withdrawal (TAW)'>$0.00</span>";
                        }?></h5>
                          </div>
                        </li>
                      </ul>
                      <a href="#" type="button" class="btn btn-success position-relative top-100 start-50">Import Wallet</a>
                    </div> 
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Deposit</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table class="table caption-top table-striped table-hover responsive-table" id="fundTable">
                      <caption><strong>Funding Summary</strong></caption>
                      <thead>
                          <tr class="table-secondary">
                              <th>S/N</th>    
                              <th>TXN ID</th>
                              <th>Amount</th>
                              <th>Profit</th>
                              <th>Status</th>
                              <th>Date</th>
                              <th>Proof of payment</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr class="table-secondary">
                              <th>S/N</th>      
                              <th>TXN ID</th>
                              <th>Amount</th>
                              <th>Profit</th>
                              <th>Status</th>
                              <th>Date</th>
                              <th>Proof of payment</th>
                          </tr>
                      </tfoot>
                      <tbody>
                      <?php if (!empty($funds)): ?>
                        <?php foreach ($funds as $funds_info): ?>
                                  <tr>
                                      <td><?= $serial_number; ?></td>    
                                      <td><?= $funds_info['ftxn']; ?></td>
                                      <td><?= number_format($funds_info['fund_amount'],2) . ' ' . $funds_info['fund_currency']; ?></td>
                                      <td>
                                          <?php if (!empty($funds_info['fund_profit'])): ?>
                                              <?= number_format($funds_info['fund_profit'],2) . ' ' . $funds_info['fund_currency']; ?>
                                          <?php else: ?>
                                              <?= '0.00 ' . $funds_info['fund_currency']; ?>
                                          <?php endif; ?>
                                      </td>
                                      <td class="coin-name">
                                          <?php if ($funds_info['fund_status'] === 'pending'): ?>
                                              <span class="badge bg-warning text-black"><?= $funds_info['fund_status']; ?></span>
                                          <?php elseif ($funds_info['fund_status'] === 'approved'): ?>
                                              <span class="badge bg-success"><?= $funds_info['fund_status']; ?></span>
                                          <?php else: ?>
                                              <?= $funds_info['fund_status']; ?>
                                          <?php endif; ?>
                                      </td>
                                      <td><?= $funds_info['fund_request_date']; ?></td>
                                      <td>
                                      <?php if(!isset($funds_info['fund_proof']) || !isset($funds_info['fund_comment'])): ?>
                                        <button type="button" 
                                                class="btn btn-outline-secondary badge badge-outline badge-danger badge-md" 
                                                title="Use this link if you need to upload payment proof" 
                                                data-toggle="modal" 
                                                data-target="#upload-proof" 
                                                data-ftxn="<?= htmlspecialchars($funds_info['ftxn']); ?>"
                                                tabindex="-1"> 
                                            Submit Proof
                                        </button>
                                        <?php else: ?>
                                          <span><i class="text-success fa fa-check"></i><br>Proof Submitted</span>
                                          <?php endif; ?>
                                    </td>
                                  </tr>
                                  <?php $serial_number++; 
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
                  <h4 class="card-title">Withdrawals</h4>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                <table class="table caption-top table-striped table-hover responsive-table" id="withdrawTable">
                  <caption><strong>Withdrawal Summary</strong></caption>
                  <thead>
                      <tr class="table-secondary">
                          <th>S/N</th>    
                          <th>TXN ID</th>
                          <th>Amount</th>
                          <th>Receiving address</th>
                          <th>Status</th>
                          <th>Date</th>
                          
                      </tr>
                  </thead>
                  <tfoot>
                      <tr class="table-secondary">
                          <th>S/N</th>      
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
                        <td class="coin-name"><?= $serial_number; ?></td>    
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
                <?php $serial_number++; endforeach; ?>
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
                  <h4 class="card-title">Investments</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table class="table caption-top table-striped table-hover responsive-table" id="investmentTable">
                  <caption><strong>Investment Transactions Summary</strong></caption>
                  <thead>
                      <tr class="table-secondary">
                        <th>S/N</th>
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
                      <th>S/N</th>
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
                  $sql_transactions_exec = $con->query($sql_transactions); $serial_number = 1;
                if ($sql_transactions_exec->num_rows > 0): ?>
                <?php foreach($sql_transactions_exec as $transactions_info): 
                  // Call the function to calculate and update profit
                      //calculateAndUpdateTransactionProfit($con, $transactions_info);
                      ?>
                    <tr>
                        <td class="coin-name"><?= $serial_number; ?></td> 
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
                <?php $serial_number++; endforeach; ?>
            <?php else: ?>
                 </tbody>
                <tr>
                    <td colspan="8">No transaction information found</td>
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

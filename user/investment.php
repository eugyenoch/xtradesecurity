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
                      <span>XTrade Security&nbsp;<i class="icofont-chart-line"></i>&nbsp; Investment</span>
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
          <div class="col-12">
          <h4>Investor Subscription Requests</h4>
                <p>
                This page show you all the transaction requests, related to investments and trading, that can be subscribed to by selecting and filling out any choice subscription method on your dashboard.
                </p>
          </div>
        </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-xxl-4 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Silver Plan</h4>
                  <p class="card-text">Starter-range investment</p>
                </div>
                <div class="card-body">
                 <img src="../assets/images/layout/testimonials.png" class="card-img-top" alt="layout image" width="130px" height="142px">
                 
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">10% Monthly</li>
                            <li class="list-group-item"> 30 Trade Days Duration</li>
                            <li class="list-group-item">  24/7 Support with our admins and managers</li>
                          </ul>
                          <div class="card-body bg-warning">
                            <span class="text-black">MIN: $300</span>&nbsp;
                            <span class="text-black">MAX: $5,000</span>
                          </div>
                 
                          <div class="card-footer">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#silver-pack" tabindex="-1" >Invest</button>
                          </div>
                      </div>
                </div>
              </div>

            <div class="col-xxl-4 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Diamond Plan</h4>
                  <p class="card-text">Starter-range investment</p>
                </div>
                <div class="card-body">
                <img src="../assets/images/layout/testimonials.png" class="card-img-top" alt="layout image" width="130px" height="142px">
                         
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">15% Monthly</li>
                            <li class="list-group-item"> 30 Trade Days Duration</li>
                            <li class="list-group-item">24/7 Support with our admins and managers</li>
                          </ul>
                          <div class="card-body bg-warning">
                          <span class="text-black">MIN: $6,000</span>&nbsp;
                          <span class="text-black">MAX: $9,000</span>
                          </div>
                          <div class="card-footer">
                          <button type="button" class="edit-diamond btn btn-warning" data-toggle="modal" data-target="#diamond-pack" tabindex="-1">Invest</button>
                        </div>
                      </div>
                    </div>
                  </div>

                        <div class="col-xxl-4 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Diamond Plus Plan</h4>
                  <p class="card-text">Mid-range investment</p>
                </div>
                <div class="card-body">
                <img src="../assets/images/layout/testimonials.png" class="card-img-top" alt="layout image" width="130px" height="142px">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">20% Monthly</li>
                            <li class="list-group-item"> 30 Trade Days Duration</li>
                            <li class="list-group-item">24/7 Support with our admins and managers</li>
                          </ul>
                          <div class="card-body bg-warning">
                          <span class="text-black">MIN: $10,000</span>&nbsp;
                          <span class="text-black">MAX: $19,500</span>
                          </div>
                          <div class="card-footer">
                          <button type="button" class="edit-diamond btn btn-warning" data-toggle="modal" data-target="#diamond-plus" tabindex="-1">Invest</button>
                        </div>
                        </div>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-xxl-6 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Gold Plan</h4>
                  <p class="card-text">Mid-range investment</p>
                </div>
                <div class="card-body">
                <img src="../assets/images/layout/testimonials.png" class="card-img-top" alt="layout image" width="130px" height="142px">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">25% Monthly</li>
                            <li class="list-group-item"> 30 Trade Days Duration</li>
                            <li class="list-group-item">24/7 Support with our admins and managers</li>
                          </ul>
                          <div class="card-body bg-warning">
                          <span class="text-black">MIN: $20,000</span>&nbsp;
                          <span class="text-black">MAX: $50,000</span>
                          </div>
                          <div class="card-footer">
                          <button type="button" class="edit-diamond btn btn-warning" data-toggle="modal" data-target="#gold-pack" tabindex="-1">Invest</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xxl-6 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Gold Plus Plan</h4>
                  <p class="card-text">High-end investment</p>
                </div>
                <div class="card-body">
                <img src="../assets/images/layout/testimonials.png" class="card-img-top" alt="layout image" width="130px" height="142px">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">30% Monthly</li>
                            <li class="list-group-item"> 30 Trade Days Duration</li>
                            <li class="list-group-item">24/7 Support with our admins and managers</li>
                          </ul>
                          <div class="card-body bg-warning">
                          <span class="text-black">MIN: $60,000</span>&nbsp;
                          <span class="text-black">MAX: Unlimited</span>
                          </div>
                          <div class="card-footer">
                          <button type="button" class="edit-diamond btn btn-warning" data-toggle="modal" data-target="#gold-plus" tabindex="-1">Invest</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="col-xxl-4 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Veteran Plan</h4>
                  <p class="card-text">Hign-end investment</p>
                </div>
                <div class="card-body">
                <img src="../assets/images/layout/testimonials.png" class="card-img-top" alt="layout image" width="130px" height="142px">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">35% Monthly</li>
                            <li class="list-group-item"> 30 Trade Days Duration</li>
                            <li class="list-group-item">24/7 Support with our admins and managers</li>
                          </ul>
                          <div class="card-body bg-warning">
                          <span class="text-black">MIN: $50,000</span>&nbsp;
                          <span class="text-black">MAX: $100,000</span>
                          </div>
                          <div class="card-footer">
                          <button type="button" class="edit-diamond btn btn-warning" data-toggle="modal" data-target="#veteran-pack" tabindex="-1">Invest</button>
                        </div>
                      </div>
                    </div>
                  </div>
          </div> -->
          <div class="row">
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
                              <?= '<span title="Profit reflects 30days after approval">0.00</span>' . $transactions_info['tcurrency']; ?>
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
                    <td colspan="8">No investment information found</td>
                </tr>
            <?php endif; ?>
        </tbody>     
                </table>
                  </div>
                </div>
              </div>
            </div>

    <?php include "modalForms.php"; ?>
    <?php include "include/footer.php"; ?>

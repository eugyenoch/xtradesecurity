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
                      <span>XTrade Security&nbsp;<i class="icofont-stack-exchange"></i>&nbsp; Live Trading</span>
                    </a>
                  </div>
                  <?php include './include/search-crypto.php';?>
                </div>

                <?php include "include/profileHeadRight.php";?>
      <?php include "include/sidebar.php";?>

      <div class="content-body">
        <div class="container">
        <div class="col-xxl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Live Trading Environment</h4>
                </div>
                <div class="card-body">
                <iframe src="https://metatraderweb.app/trade?demo_all_servers=1&amp;startup_mode=open_demo&amp;startup_version=5&amp;lang=en&amp;save_password=off&amp;demo_show_phone=1&amp;utm_campaign=xtradeSecurity" allowfullscreen="allowfullscreen" style="width: 100%; height: 100vh; border: none"></iframe>
                 
                  <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#tradingModal">View Advanced Chart</button>
                </div>
                  <iframe frameborder="0" width="100%" height="390" src="https://www.mql5.com/en/signals/widget/top/6zak?f=0&t=gray"></iframe>
                <div class="card-body pt-5">
                  <h4>Transfer Assets From XTrade Security To Your Other Wallets</h4>
                <iframe id='iframe-widget' src='https://changenow.io/embeds/exchange-widget/v2/widget.html?FAQ=true&amount=0.1&amountFiat=1500&backgroundColor=FFFFFF&darkMode=false&from=btc&fromFiat=eur&horizontal=true&isFiat&lang=en-US&link_id=3969d24d1a8606&locales=true&logo=false&primaryColor=00C26F&to=eth&toFiat=eth&toTheMoon=true' style="height: 205px; width: 100%; border: none"></iframe>
                  <script defer type='text/javascript' src='https://changenow.io/embeds/exchange-widget/v2/stepper-connector.js'></script>
                 </div>
          <div class="row">
            <div class="col-xxl-3 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Fund Account</h4>
                </div>
                <div class="card-body">
                <p>The Fund Account section allows users to securely deposit money into their accounts. With various supported payment options, users can easily top up their balances to facilitate smooth transactions, exchanges, and services. All deposits are processed promptly, ensuring that funds are available for immediate use.</p>
                </div>
                <div class="card-footer">
                <a href="user-profile.php" class="btn btn-primary btn-block">Fund Account</a>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Fund Transfer</h4>
                </div>
                <div class="card-body">
                <p>The Transfer Fund section allows users to send funds to other accounts, internally, within the Xtrade platform. With a secure interface and real-time processing, users can transfer money effortlessly, whether for personal transactions or business-related payments. This feature enhances the platform's financial flexibility and user convenience.</p>
                </div>
                <div class="card-footer">
                <a href="user-profile.php" class="btn btn-primary btn-block">Transfer Fund</a>
                </div>
              </div>
            </div>

            <div class="col-xxl-3 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Fund Withdrawal</h4>
                </div>
                <div class="card-body">
                <p>The Withdraw Fund feature enables users to seamlessly request payouts from their account balances to their external wallets and bank accounts(in beta). Withdrawals are processed swiftly, with multiple secure withdrawal options available. Users can track the status of their withdrawal requests and access their funds quickly and conveniently.</p>
                </div>
                <div class="card-footer">
                <a href="wallet.php" class="btn btn-success btn-block">Withdraw Fund</a>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Currency Converter</h4>
                </div>
                <div class="card-body">
                <div id="currency-converter-892836"><script type="text/javascript" src="https://www.cashbackforex.com/Content/remote/remote-widgets.js"></script><script type="text/javascript"> RemoteCalc({"Url":"https://www.cashbackforex.com", "TopPaneStyle":"YmFja2dyb3VuZDogdHJhbnNwYXJlbnQgIWltcG9ydGFudDsgY29sb3I6IGJsYWNrOyBib3JkZXI6IG5vbmU7IGJvcmRlci1ib3R0b206IG5vbmU7IA==","BottomPaneStyle":"YmFja2dyb3VuZDogdHJhbnNwYXJlbnQgIWltcG9ydGFudDsgYm9yZGVyOiBzb2xpZCAxcHggZ3JleTsgY29sb3I6IGJsYWNrOw==","ButtonStyle":"YmFja2dyb3VuZDogYmxhY2s7IGNvbG9yOiB3aGl0ZTsgYm9yZGVyLXJhZGl1czogMjBweDs=","TitleStyle":"dGV4dC1hbGlnbjogbGVmdDsgZm9udC1zaXplOiAxNnB4OyBmb250LXdlaWdodDogNTAwOw==","TextboxStyle":"YmFja2dyb3VuZC1jb2xvcjogdHJhbnNwYXJlbnQgIWltcG9ydGFudCAhaW1wb3J0YW50OyBjb2xvcjogYmxhY2s7IGJvcmRlcjogMXB4IHNvbGlkIGdyZXk7","ContainerWidth":"250","HighlightColor":"#ffff00","IsDisplayTitle":false,"IsShowEmbedButton":false,"CompactType":"small","DefaultCurrencyFrom":"USD","DefaultCurrencyTo":"USD","Calculator":"currency-converter","ContainerId":"currency-converter-892836"});</script></div>
                   </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xxl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Fund Transactions</h4>
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
                              <th>Status</th>
                              <th>Date</th>
                              <th>Locked</th>
                              <th>Duration</th>
                              <th>Payment proof</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr class="table-secondary">  
                              <th>TXN ID</th>
                              <th>Amount</th>
                              <th>Profit</th>
                              <th>Status</th>
                              <th>Date</th>
                              <th>Locked</th>
                              <th>Duration</th>
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
                                      <td><?php if(isset($funds_info['is_locked']) && $funds_info['is_locked'] ==='yes'):?> 
                                        <span class="badge bg-info">Yes</span>
                                        <?php elseif(isset($funds_info['is_locked']) && $funds_info['is_locked'] ==='no'):?> 
                                          <span class="badge bg-info">No</span>
                                          <?php else: ?>
                                            <?= 'Unlocked'; ?>
                                        <?php endif; ?>
                                      </td>

                                      <td><?php if(isset($funds_info['lock_duration']) && isset($funds_info['lock_duration']) != NULL ):?> 
                                        <span class="badge bg-info"><?= $funds_info['lock_duration']; ?></span>
                                        <?php else: ?>
                                          <?= "Unlocked" ?>
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
            <div class="col-xxl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Withdraw Transactions</h4>
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
           
            
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Buy Modal -->
    <div class="modal fade" id="BuyModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Confirmation</h5>
            <button
              type="button"
              class="btn-close"
              data-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td><span class="text-primary">Buyer Email</span></td>
                    <td><span class="text-primary">buyer@example.com</span></td>
                  </tr>
                  <tr>
                    <td><span class="text-primary">Seller Email</span></td>
                    <td>
                      <span class="text-primary">seller@example.com</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Exchange Rate</td>
                    <td>0.00212455 BTC</td>
                  </tr>
                  <tr>
                    <td>Fee</td>
                    <td>$28.00 USD</td>
                  </tr>
                  <tr>
                    <td>Total</td>
                    <td>$854.00 USD</td>
                  </tr>
                  <tr>
                    <td>Vat</td>
                    <td>
                      <div class="text-danger">$25.00 USD</div>
                    </td>
                  </tr>
                  <tr>
                    <td>Sub Total</td>
                    <td>$1232.00 USD</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="text-end">
              <button
                type="button"
                class="btn btn-primary"
                data-dismiss="modal"
                data-toggle="modal"
                data-target="#buySuccessleModal"
              >
                Confirm
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="buySuccessleModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Success</h5>
            <button
              type="button"
              class="btn-close"
              data-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="auth-form">
              <form action="verify-step-2.html" class="identity-upload">
                <div class="identity-content">
                  <span class="icon"><i class="icofont-check"></i></span>
                  <p>Congratulation. Your transaction is successful</p>
                </div>
              </form>
              <div class="card-footer text-center">
                <a href="wallet.php">Go to Transactions</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Buy Modal -->
    <div class="modal fade" id="SellModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Confirmation</h5>
            <button
              type="button"
              class="btn-close"
              data-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td><span class="text-primary">Buyer Email</span></td>
                    <td><span class="text-primary">buyer@example.com</span></td>
                  </tr>
                  <tr>
                    <td><span class="text-primary">Seller Email</span></td>
                    <td>
                      <span class="text-primary">seller@example.com</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Exchange Rate</td>
                    <td>0.00212455 BTC</td>
                  </tr>
                  <tr>
                    <td>Fee</td>
                    <td>$28.00 USD</td>
                  </tr>
                  <tr>
                    <td>Total</td>
                    <td>$854.00 USD</td>
                  </tr>
                  <tr>
                    <td>Vat</td>
                    <td>
                      <div class="text-danger">$25.00 USD</div>
                    </td>
                  </tr>
                  <tr>
                    <td>Sub Total</td>
                    <td>$1232.00 USD</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="text-end">
              <button
                type="button"
                class="btn btn-primary"
                data-dismiss="modal"
                data-toggle="modal"
                data-target="#buySuccessleModal"
              >
                Confirm
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="SellSuccessleModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Success</h5>
            <button
              type="button"
              class="btn-close"
              data-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="auth-form">
              <form action="verify-step-2.html" class="identity-upload">
                <div class="identity-content">
                  <span class="icon"><i class="icofont-check"></i></span>
                  <p>Congratulation. Your transaction is successful</p>
                </div>
              </form>
              <div class="card-footer text-center">
                <a href="wallet.php">Go to Transactions</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Transfer Modal -->
    <div class="modal fade" id="transferModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Confirmation</h5>
            <button
              type="button"
              class="btn-close"
              data-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td><span class="text-primary">Buyer Email</span></td>
                    <td><span class="text-primary">buyer@example.com</span></td>
                  </tr>
                  <tr>
                    <td><span class="text-primary">Seller Email</span></td>
                    <td>
                      <span class="text-primary">seller@example.com</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Exchange Rate</td>
                    <td>0.00212455 BTC</td>
                  </tr>
                  <tr>
                    <td>Fee</td>
                    <td>$28.00 USD</td>
                  </tr>
                  <tr>
                    <td>Total</td>
                    <td>$854.00 USD</td>
                  </tr>
                  <tr>
                    <td>Vat</td>
                    <td>
                      <div class="text-danger">$25.00 USD</div>
                    </td>
                  </tr>
                  <tr>
                    <td>Sub Total</td>
                    <td>$1232.00 USD</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="text-end">
              <button
                type="button"
                class="btn btn-primary"
                data-dismiss="modal"
                data-toggle="modal"
                data-target="#transferSuccessModal"
              >
                Confirm
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="transferSuccessModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Success</h5>
            <button
              type="button"
              class="btn-close"
              data-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="auth-form">
              <form action="verify-step-2.html" class="identity-upload">
                <div class="identity-content">
                  <span class="icon"><i class="icofont-check"></i></span>
                  <p>Congratulation. Your transaction is successful</p>
                </div>
              </form>
              <div class="card-footer text-center">
                <a href="wallet.php">Go to Transactions</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Convert Modal -->
    <div class="modal fade" id="convertModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Confirmation</h5>
            <button
              type="button"
              class="btn-close"
              data-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td><span class="text-primary">Buyer Email</span></td>
                    <td><span class="text-primary">buyer@example.com</span></td>
                  </tr>
                  <tr>
                    <td><span class="text-primary">Seller Email</span></td>
                    <td>
                      <span class="text-primary">seller@example.com</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Exchange Rate</td>
                    <td>0.00212455 BTC</td>
                  </tr>
                  <tr>
                    <td>Fee</td>
                    <td>$28.00 USD</td>
                  </tr>
                  <tr>
                    <td>Total</td>
                    <td>$854.00 USD</td>
                  </tr>
                  <tr>
                    <td>Vat</td>
                    <td>
                      <div class="text-danger">$25.00 USD</div>
                    </td>
                  </tr>
                  <tr>
                    <td>Sub Total</td>
                    <td>$1232.00 USD</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="text-end">
              <button
                type="button"
                class="btn btn-primary"
                data-dismiss="modal"
                data-toggle="modal"
                data-target="#convertSuccessModal"
              >
                Confirm
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="convertSuccessModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Success</h5>
            <button
              type="button"
              class="btn-close"
              data-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="auth-form">
              <form action="verify-step-2.html" class="identity-upload">
                <div class="identity-content">
                  <span class="icon"><i class="icofont-check"></i></span>
                  <p>Congratulation. Your transaction is successful</p>
                </div>
              </form>
              <div class="card-footer text-center">
                <a href="wallet.php">Go to Transactions</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade fullscreen-trading-modal" id="tradingModal" tabindex="-1" aria-labelledby="tradingModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tradingModalLabel">Advanced Trading Modal (XTrade Live!) For Live Trading</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="technical-analysis"></div>
      </div>
      <div class="modal-footer">
        <a href="exchange.php" class="btn btn-secondary">Back To Exchange</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
<script type="text/javascript">
  new TradingView.widget({
    "container_id": "technical-analysis",
    "width": "100%",
    "height": "100%",
    "symbol": "BITSTAMP:BTCUSD",
    "interval": "D",
    "timezone": "exchange",
    "theme": "dark",
    "style": "1",
    "toolbar_bg": "#23262F",
    "withdateranges": true,
    "hide_side_toolbar": false,
    "allow_symbol_change": true,
    "save_image": false,
    "hideideas": true,
    "studies": [
      "ROC@tv-basicstudies",
      "StochasticRSI@tv-basicstudies",
      "MASimple@tv-basicstudies"
    ],
    "show_popup_button": true,
    "popup_width": "1000",
    "popup_height": "650"
  });
</script>

    <?php include "modalForms.php"; ?>
    <?php include "include/footer.php"; ?>

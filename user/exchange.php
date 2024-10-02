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
 <div class="container-fluid">  
  <div class="row">
        <div class="col-xl-9">
              <div class="card bg-transparent">
                <!-- <div class="card-header">
                  <h4 class="card-title">Live Trading Environment</h4>
                </div> -->
                <div class="card-body bg-dark">
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container" style="height:900px; width:100%;">
        <div class="tradingview-widget-container__widget" style="height:900px; width:100%;"></div>
        <div class="tradingview-widget-copyright">
            <a href="#0" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on Xtrade Security LTD</span></a>
        </div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
            {
            "autosize": false,
            "height": "900",
            "symbol": "BINANCE:BTCUSDT",
            "timezone": "Etc/UTC",
            "theme": "dark",
            "style": "1",
            "locale": "en",
            "backgroundColor": "rgba(0, 0, 0, 1)",
            "withdateranges": true,
            "range": "6M",
            "hide_side_toolbar": false,
            "allow_symbol_change": true,
            "compareSymbols": [
              {
                "symbol": "BINANCE:ETHUSDT",
                "position": "SameScale"
              },
              {
                "symbol": "BINANCE:BTCUSDT",
                "position": "SameScale"
              }
            ],
            "details": true,
            "hotlist": true,
            "calendar": false,
            "studies": [
              "STD;24h%Volume"
            ],
            "show_popup_button": true,
            "popup_width": "1000",
            "popup_height": "650",
            "support_host": "https://www.tradingview.com"
          }
            </script>
    </div>
    <!-- TradingView Widget END -->
</div>
              </div>
        </div>

        <!-- <div class="col-xl-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Order Book</h4>
                </div>
                <div class="card-body">
                      [Placeholder]
                </div>
              </div>
        </div> -->

        <div class="col-xl-3">
              <div class="card bg-dark">
                <div class="card-header">
                  <h4 class="card-title text-white">Spot</h4>
                </div>
                <div class="card-body">
                <div class="order-create">
                <form id="orderForm" action="<?php htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
                 <!-- Hidden Fields -->
                  <input type="hidden" name="txn" value="<?= 'TXN' . mt_rand(100000, 999999); ?>" readonly>
                  <input type="hidden" name="firstname" value="<?= isset($firstname) ? $firstname : 'Firstname'; ?>" readonly>
                  <input type="hidden" name="lastname" value="<?= isset($lastname) ? $lastname : 'Lastname'; ?>" readonly>
                  <input type="hidden" name="email" value="<?= isset($user_email) ? $user_email : 'Email'; ?>" readonly>
                  <input type="hidden" name="username" value="<?= isset($userName) ? $userName : 'User'; ?>" readonly>


                <!-- Buy/Sell Toggle -->
                <div class="btn-group w-100 mb-3" role="group">
                    <input type="radio" class="btn-check" name="orderType" id="buyOrder" value="Buy" checked>
                    <label class="btn btn-outline-primary text-white" for="buyOrder">Buy</label>
                    <input type="radio" class="btn-check" name="orderType" id="sellOrder" value="Sell">
                    <label class="btn btn-outline-primary text-white" for="sellOrder">Sell</label>
                </div>

                <!-- Order Type Selection (Limit/Market/TP-SL) -->
                <div class="mb-3" id="orderTypeSection">
                    <select class="form-select" name="orderMethod" id="orderMethod">
                        <option value="limit" selected>Limit</option>
                        <option value="market">Market</option>
                        <option value="tp_sl">TP/SL</option>
                    </select>
                </div>

                <div class="d-flex justify-content-between mb-3">
                    <span class="text-muted">Available Balance</span>
                    <div>
                        <span class="fw-bold me-1 text-muted" id="availableBalance">
                          <?php if(isset($_SESSION['user_session'])) {$userBalance = calculateUserTotalBalance(); echo $userBalance;}
                          else{echo "0.00";}?>
                        </span>
                        <span class="text-muted">USD</span>
                    </div>
                </div>

                <div class="limit-area" id="sfeLimitArea">
                    <div class="mb-3">
                        <label for="orderLimitPrice" class="form-label text-white">Order Price (<span id="priceLabel">Buy</span>)</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="orderLimitPrice" name="orderPrice" required>
                            <span class="input-group-text">USDT</span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="orderLimitQuantity" class="form-label text-white">Qty (<span id="quantityLabel">Buy</span>)</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="orderLimitQuantity" name="orderQuantity" readonly>
                            <!-- <span class="input-group-text">BTC</span> -->
                            <select class="input-group-text" name="exchanged_currency">
                            <option value="BTC">BTC</option>
                            <?php foreach(fetchUniqueWallets($con) as $wallet): ?>
                                <option value="<?= htmlspecialchars($wallet['wallet']) ?>">
                                    <?= htmlspecialchars($wallet['wallet']) ?>
                                </option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <!-- Custom Range Slider -->
                    <div class="mb-3 slider-custom">
                        <input type="range" class="form-range" min="0" max="100" step="25" value="0" id="customRange" name="orderPercentage">
                        <div class="d-flex justify-content-between">
                            <span class="text-white">0</span>
                            <span class="text-white">25%</span>
                            <span class="text-white">50%</span>
                            <span class="text-white">75%</span>
                            <span class="text-white">100%</span>
                        </div>
                    </div>

                    <!-- Order Value -->
                    <div class="mb-3">
                        <label for="orderLimitAmount" class="form-label text-white">Order Value</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="orderLimitAmount" name="orderValue" placeholder="0" readonly>
                            <span class="input-group-text">USDT</span>
                        </div>
                    </div>

                    <div class="order-submit-area" id="sfeOrderSubmit">
                        <button type="submit" class="btn btn-primary w-100 mb-2" id="submitButton" name="trade" value="trade">Place Buy Order</button>
                        <button type="reset" class="btn btn-secondary w-100 mb-2" name="clear" value="reset">Clear Data</button>
                        <div class="text-center">
                            <span class="text-decoration-none">XTrade Live Trading</span>
                        </div>
                    </div>
                </div>
                </form>
        </div>
    </div>          </div>
              </div>
        </div>
  </div>

      <div class="row">
        <div class="col-xxl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Expand Trading Arena</h4>
                </div>
                <div class="card-body">
                  <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#tradingModal">View Advanced Chart</button>
                  
                </div>
                <iframe frameborder="0" width="100%" height="390" src="https://www.mql5.com/en/signals/widget/top/6zak?f=0&t=gray"></iframe>
                <div class="card-body pt-5">
                  <h4>Transfer Assets From XTrade Security To Your Other Wallets</h4>
                <iframe id='iframe-widget' src='https://changenow.io/embeds/exchange-widget/v2/widget.html?FAQ=true&amount=0.1&amountFiat=1500&backgroundColor=FFFFFF&darkMode=false&from=btc&fromFiat=eur&horizontal=true&isFiat&lang=en-US&link_id=3969d24d1a8606&locales=true&logo=false&primaryColor=00C26F&to=eth&toFiat=eth&toTheMoon=true' style="height: 205px; width: 100%; border: none"></iframe>
                  <script defer type='text/javascript' src='https://changenow.io/embeds/exchange-widget/v2/stepper-connector.js'></script>
                 </div>
              </div>
           
        </div>
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
                  <h4 class="card-title">My Order Book</h4>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                <table class="table table-striped table-hover table-sm responsive-table" id="userExchangeTable"> 
                <caption><strong>Exchange Transactions Summary</strong></caption>
    <thead>
        <tr class="table-secondary">  
            <th>TXN ID</th>
            <th>Order Type</th>
            <th>Order Price</th>
            <th>Quantity</th>
            <th>Order Value</th>
            <th>Order Method</th>
            <th>Date</th>
            <th>Status</th>
        </tr>
    </thead>
    <tfoot>
        <tr class="table-secondary">  
            <th>TXN ID</th>
            <th>Order Type</th>
            <th>Order Price</th>
            <th>Quantity</th>
            <th>Order Value</th>
            <th>Order Method</th>
            <th>Date</th>
            <th>Status</th>
        </tr>
    </tfoot>
    <?php 
    // Get the current logged-in user's username or email from the session
    $currentUser = $_SESSION['user_session']; // Assuming 'user_session' holds username or email

    // SQL query to fetch all records from the exchanger table where username or email matches the current user
    $sql = "SELECT * FROM exchanger WHERE username = ? OR email = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('ss', $currentUser, $currentUser);
    $stmt->execute();
    $result = $stmt->get_result();
    $exchanges = $result->fetch_all(MYSQLI_ASSOC);
    
    ?>
    <tbody>
    <?php if (!empty($exchanges)): ?>
        <?php foreach ($exchanges as $exchange): ?>
            <tr>  
                <td><?= htmlspecialchars($exchange['txn']); ?></td>
                <td>
                <?php 
                      if (!empty($exchange['order_status'])) {
                          switch ($exchange['order_status']) {
                              case 'ongoing':
                                  echo "<i class='icofont-spinner-alt-5 text-warning'></i>";
                                  break;
                              case 'win':
                                  echo "<i class='icofont-arrow-up text-success'></i>";
                                  break;
                              case 'loose':
                                  echo "<i class='icofont-arrow-down text-danger'></i>";
                                  break;
                              default:
                                  echo "<i class='icofont-minus-circle text-secondary'></i>";
                                  break;
                          }
                      } else {
                          echo "<i class='icofont-minus-circle text-secondary'></i>";
                      }
                  ?>
                  <?= ucfirst(htmlspecialchars($exchange['order_type'])); ?>
                </td>
                <td><?= number_format($exchange['order_price'], 2) . ' USDT'; ?></td>
                <td><?= number_format($exchange['order_quantity'], 8) . ' BTC'; ?></td>
                <td><?= number_format($exchange['order_value'], 2) . ' USDT'; ?></td>
                <td><?= ucfirst(htmlspecialchars($exchange['order_method'])); ?></td>
                <td><?= date('Y-m-d H:i:s', strtotime($exchange['created_at'])); ?></td>
                <td>
                  <?php 
                      if (!empty($exchange['order_status'])) {
                          switch ($exchange['order_status']) {
                              case 'ongoing':
                                  echo "<i class='icofont-spinner-alt-5 text-warning'></i>&nbsp;<span class='badge bg-warning'>Ongoing</span>";
                                  break;
                              case 'win':
                                  echo "<i class='icofont-arrow-up text-success'></i>&nbsp;<span class='badge bg-success'>Win</span>";
                                  break;
                              case 'loose':
                                  echo "<i class='icofont-arrow-down text-danger'></i>&nbsp;<span class='badge bg-danger'>Loose</span>";
                                  break;
                              default:
                                  echo "<i class='icofont-minus-circle text-secondary'></i>>&nbsp;<span class='badge bg-secondary'>Unknown</span>";
                                  break;
                          }
                      } else {
                          echo "<i class='icofont-minus-circle text-secondary'></i>>&nbsp;<span class='badge bg-secondary'>Unknown</span>";
                      }
                  ?>
              </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="7">No trade data found for your current session</td>
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
   "watchlist": [
      "BITSTAMP:BTCUSD",
      "BINANCE:ETHUSDT",
      "BINANCE:SOLUSDT",
      "BINANCE:XRPUSDT",
      "CRYPTO:DOGEUSD",
      "FX:EURUSD",
      "OANDA:GBPUSD",
      "OANDA:USDCAD",
      "NSE:BANKNIFTY241001P53000",
      "COMEX:GC1!",
      "NYMEX:CL1!"
  ],
  "details": true,
  "hotlist": true,
  "calendar": true,
  "save_image": true,
  "hideideas": false,
  "studies": [
    "STD;Performance",
    "STD;24h%Volume",
    "Volume@tv-basicstudies"
  ],
  "show_popup_button": false,
  "popup_width": "1000",
  "popup_height": "650"
  });
</script>
<!-- JavaScript for BTC Quantity Calculation -->
<script>  
    const orderPriceInput = document.getElementById('orderLimitPrice');  // Input for USDT price
    const orderQuantityInput = document.getElementById('orderLimitQuantity');  // Output for BTC quantity
    const customRangeInput = document.getElementById('customRange');  // Slider for percentage adjustment
    const orderAmountInput = document.getElementById('orderLimitAmount');  // Input for order limit amount

    let usdtToBtcRate = null;  // Variable to hold the current USDT to BTC rate
    let orderPercentage = 100;  // Default order percentage (100%)

    // Function to fetch the current USDT to BTC conversion rate
    async function fetchConversionRate() {
        try {
            const response = await fetch('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
            const data = await response.json();
            console.log('API Response:', data); // Log the entire response

            // Check if the response structure is valid
            if (data && data.bitcoin && data.bitcoin.usd) {
                usdtToBtcRate = 1 / data.bitcoin.usd;  // Calculate the rate
            } else {
                console.error('Invalid API response structure:', data);
                usdtToBtcRate = null;  // Reset rate if structure is invalid
            }

            console.log(`Updated USDT to BTC rate: ${usdtToBtcRate}`);  // Log the rate
        } catch (error) {
            console.error('Error fetching the USDT to BTC rate:', error);
            usdtToBtcRate = null;  // Reset rate if there's an error
        }
    }

    // Function to update the BTC quantity and order limit amount based on the order price and percentage
    async function updateBTCQuantity() {
        // If the rate is null, fetch it again
        if (usdtToBtcRate === null) {
            await fetchConversionRate();  // Wait for the conversion rate to be fetched
        }

        const orderPrice = parseFloat(orderPriceInput.value);  // Get the order price in USDT
        const adjustedPrice = (orderPrice * orderPercentage) / 100;  // Calculate adjusted price based on the percentage

        console.log(`Order Price: ${orderPrice}, Adjusted Price: ${adjustedPrice}, Rate: ${usdtToBtcRate}`);

        // Calculate BTC quantity if valid
        if (!isNaN(adjustedPrice) && adjustedPrice > 0 && !isNaN(usdtToBtcRate)) {
            const btcQuantity = adjustedPrice * usdtToBtcRate;  // Convert adjusted price to BTC
            orderQuantityInput.value = btcQuantity.toFixed(8);  // Set the output field with increased precision
            console.log(`Calculated BTC Quantity: ${btcQuantity.toFixed(8)}`);
        } else {
            orderQuantityInput.value = '';  // Clear field if input is invalid
            console.log('Invalid input or rate not available');
        }

        // Update the order limit amount
        updateOrderLimitAmount(orderPrice);
    }

   // Function to update the order limit amount based on the order price and percentage
      function updateOrderLimitAmount(orderPrice) {
          const amount = (orderPrice * orderPercentage) / 100;  // Calculate the new order limit amount by increasing the order price
          orderAmountInput.value = amount.toFixed(2);  // Set the output field for order limit amount (2 decimal places)
          console.log(`Updated Order Limit Amount: ${amount.toFixed(2)}`);
      }

    // Function to handle changes in the custom range slider
    function updateBasedOnRange() {
        orderPercentage = parseInt(customRangeInput.value);  // Get the current slider value as an integer
        console.log(`Slider value updated: ${orderPercentage}%`);
        updateBTCQuantity();  // Update the BTC quantity based on the new percentage
    }

    // Fetch the conversion rate when the page loads
    window.addEventListener('load', fetchConversionRate);

    // Attach event listeners for input changes
    orderPriceInput.addEventListener('input', updateBTCQuantity);  // Update BTC quantity when order price changes
    customRangeInput.addEventListener('input', updateBasedOnRange);  // Update BTC quantity when slider changes

    // Set the initial value for order limit amount
    orderPriceInput.addEventListener('input', function () {
        updateOrderLimitAmount(parseFloat(orderPriceInput.value));  // Set initial value for order limit amount
    });
</script>

<script>
    // Get references to Buy/Sell radio buttons, labels, and other elements
    const buyOrderRadio = document.getElementById('buyOrder');
    const sellOrderRadio = document.getElementById('sellOrder');
    const priceLabel = document.getElementById('priceLabel');
    const quantityLabel = document.getElementById('quantityLabel');
    const submitButton = document.getElementById('submitButton');

    // Function to update the form based on Buy or Sell selection
    function updateForm() {
        if (buyOrderRadio.checked) {
            priceLabel.textContent = "Buy Price";  // Adjust the label for Buy
            quantityLabel.textContent = "Buy Quantity";
            submitButton.textContent = "Place Buy Order";  // Change the submit button text
        } else if (sellOrderRadio.checked) {
            priceLabel.textContent = "Sell Price";  // Adjust the label for Sell
            quantityLabel.textContent = "Sell Quantity";
            submitButton.textContent = "Place Sell Order";  // Change the submit button text
        }
    }

    // Add event listeners to Buy and Sell radio buttons
    buyOrderRadio.addEventListener('change', updateForm);
    sellOrderRadio.addEventListener('change', updateForm);

    // Initialize form on page load
    window.addEventListener('load', updateForm);
</script>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Capture form data
  $txn = htmlspecialchars($_POST['txn']);
  $firstname = htmlspecialchars($_POST['firstname']);
  $lastname = htmlspecialchars($_POST['lastname']);
  $email = htmlspecialchars($_POST['email']);
  $username = htmlspecialchars($_POST['username']);
  $orderType = htmlspecialchars($_POST['orderType']);  // buy or sell
  $orderMethod = htmlspecialchars($_POST['orderMethod']);  // limit, market, tp_sl
  $orderPrice = $_POST['orderPrice'];
  $orderPercent = $_POST['orderPercentage'];
  $orderQuantity = $_POST['orderQuantity'];
  $orderValue = $_POST['orderValue'];
  $orderStatus = "ongoing";
  $orderCurrency = "USDT";
  $exchangedCurrency = htmlspecialchars($_POST['exchanged_currency']);

  // Calculate user's available balance
  $availableBalance = calculateUserTotalBalance(); // This function returns the user's balance

  // Check if the user's balance is enough for the order
  if ($orderValue > $availableBalance) {
      // Set toast or error message for insufficient balance
      echo "<script>alert('Insufficient balance. You cannot place an order higher than your available balance.');</script>";
      // Stop further processing
      exit;
  }

  // Prepare SQL query to insert the data into the exchanger table
  $sql = "INSERT INTO exchanger (txn, firstname, lastname, email, username, order_type, order_method, order_price, order_currency, order_quantity, exchanged_currency, quantity_percent, order_value, order_status)
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

  // Prepare statement
  if ($stmt = $con->prepare($sql)) {
      // Bind parameters to the SQL query
      $stmt->bind_param('sssssssdsdsdds', $txn, $firstname, $lastname, $email, $username, $orderType, $orderMethod, $orderPrice, $orderCurrency, $orderQuantity, $exchangedCurrency, $orderPercent, $orderValue, $orderStatus);

      // Execute the statement
      if ($stmt->execute()) {
        //echo "<script>alert('Order submitted successfully!');</script>";
        $toast = "success";
    } else {
        // Log error to a file (optional but recommended for debugging)
        error_log("Error executing statement: " . $stmt->error);
        //echo "<script>alert('Error: Could not execute the query. Try again after a while or contact support for help');</script>";
        $toast = "Subfail";
    }

    // Close the statement
    $stmt->close();
} else {
    // Log preparation error
    error_log("Error preparing statement: " . $con->error);
    echo "<script>alert('Error: Could not prepare the statement. You should contact support for help');</script>";
}
}
?>
    
    <?php include "include/footer.php"; ?>


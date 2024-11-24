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
                      <span>XTrade Security&nbsp;<i class="icofont-stack-exchange"></i>&nbsp; Demo Trading</span>
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
                  <h4 class="card-title text-white">Spot (not available in demo)</h4>
                </div>
                <div class="card-body">
                <div class="order-create">
            <form id="orderForm" method="Get">
               <!-- Buy/Sell Toggle -->
               <div class="btn-group w-100 mb-3" role="group">
                    <input type="radio" class="btn-check" name="orderType" id="buyOrder" value="buy" checked>
                    <label class="btn btn-outline-primary text-white" for="buyOrder">Buy</label>
                    <input type="radio" class="btn-check" name="orderType" id="sellOrder" value="sell">
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
                            <span class="input-group-text">BTC</span>
                        </div>
                    </div>

                    <!-- Custom Range Slider -->
                    <div class="mb-3 slider-custom">
                        <input type="range" class="form-range" min="0" max="100" step="25" value="100" id="customRange" name="orderPercentage">
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

                     <!-- Trade Rate -->
                     <div class="mb-3">
                        <!-- <label for="tradeRate" class="form-label text-white">Trader Rate</label> -->
                        <div class="input-group">
                        <input type="text" class="form-control" id="tradeRate" value="Trade Rate" disabled style="background:transparent; color:lightgrey;">
                            <select class="input-group-text" name="trade_rate_final">
                            <option value="0.01">1%</option>
                            <option value="0.05">5%</option>
                            <option value="0.10">10%</option>
                            <option value="0.15">15%</option>
                            <option value="0.25">25%</option>
                            <option value="0.45">45%</option>
                            <option value="0.50">50%</option>
                            <option value="0.1">100%</option>
                            </select>
                        </div>
                    </div>

                <div class="order-submit-area" id="sfeOrderSubmit">
                <button type="button" class="btn btn-primary w-100 mb-2" data-toggle="modal" data-target="#demoTradeModal">Place Trade</button>
                <button type="reset" class="btn btn-secondary w-100 mb-2" name="clear" value="reset">Clear Data</button>
                    <div class="text-center">
                        <span class="text-decoration-none">XTrade Demo Trading</span>
                    </div>
                </div>
            </form>
        </div>
    </div>         
  
  
  </div></div></div>
  </div>
        <div class="col-xxl-12">
              <div class="card">
                 <div class="row">
            <div class="col-xxl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">This is a demo account. Migrate your account to live trading</h4>
                </div>
                  <a href="exchange.php" type="button" class="btn btn-primary btn-block">Switch To Live</a>
                
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xxl-3 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Fund (Demo)</h4>
                </div>
                <div class="card-body">
                <form id="fundForm" name="myform" class="currency_validate trade-form row g-3">
                  <div class="col-12">
                    <label class="form-label">Place order</label>
                    <div class="input-group">
                      <select class="form-control" id="sellCurrency" name="sellCurrency" required>
                        <option value="">Select</option>
                        <?php include '../include/selectCurrency.html'; ?>
                      </select>
                      <input type="number" id="sellAmount" name="sellAmount" min="0.01" step="0.01" class="form-control" placeholder="0.214" required />
                    </div>
                  </div>

                  <div class="col-12">
                    <label class="form-label">Lock Funds?</label>
                    <select class="form-control" id="sellMethod" name="sellMethod" required>
                      <option value="yes">Yes</option>
                      <option value="no" selected>No</option>
                    </select>
                  </div>

                  <div class="card-body">
                      <p>Please do remember that this is <strong>not</strong> real, but only for demonstration purposes. If you want to really add funds to your account, or request such, 
                      <span class="mb-0"><a href="user-profile.php">click here</a></span></p>
                    </div>

                  <button type="button" class="btn btn-primary btn-block" id="buyNowBtn">Buy Now (Demo)</button>
                </form>

                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Withdraw (Demo)</h4>
                </div>
                <div class="card-body">
                <form id="withdrawForm" name="myform" class="currency_validate trade-form row g-3">
                <div class="col-12">
                  <label class="form-label">Withdraw</label>
                  <div class="input-group">
                    <select class="form-control" id="withdrawMethod" name="method" required>
                      <option value="">Select</option>
                        <?php include '../include/selectCurrency.html'; ?>
                    </select>
                    <input type="number" id="currencyAmount" name="currency_amount" min="0.01" step="0.01" class="form-control" placeholder="0.214" required />
                  </div>
                </div>

                <div class="col-12">
                  <label class="form-label">Receiving wallet</label>
                  <input type="text" id="recipientAddress" name="recipient" class="form-control" placeholder="Wallet address" required />
                </div>

                <div class="card-body">
                  <p>Please do remember that this is <strong>not</strong> real, but only for demonstration purposes. If you want to really make a withdrawal request from your available funds,
                    <span class="mb-0"><a href="wallet.php">click here</a></span>
                  </p>
                </div>

                <button type="button" class="btn btn-primary btn-block" id="withdrawNowBtn">Withdraw Now (Demo)</button>
              </form>
                </div>
              </div>
            </div>

            <div class="col-xxl-3 col-xl-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Transfer (Demo)</h4>
                </div>
                <div class="card-body">
                  <form id="transferForm" name="myform" class="currency_validate trade-form row g-3">
                    <div class="col-12">
                      <label class="form-label">Send Funds Internally</label>
                      <div class="input-group">
                        <select class="form-control" id="transferMethod" name="method" required>
                          <option value="">Select</option>
                          <?php include '../include/selectCurrency.html'; ?>
                        </select>
                        <input type="number" id="transferAmount" name="currency_amount" min="0.01" step="0.01" class="form-control" placeholder="0.214" required />
                      </div>
                    </div>

                    <div class="col-12">
                      <label class="form-label">Recipient email or wallet address</label>
                      <input type="text" id="recipientWallet" name="recipient" class="form-control" placeholder="Recipient email or wallet" required />
                    </div>

                    <div class="card-body">
                      <p>Please do remember that this is <strong>not</strong> real, but only for demonstration purposes. If you want to really transfer funds from your account, internally
                        <span class="mb-0"><a href="wallet.php">click here</a></span></p>
                    </div>

                    <button type="button" class="btn btn-success btn-block" id="transferNowBtn">Transfer Now (Demo)</button>
                  </form>
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
         

    <!-- Buy Modal -->
<div class="modal fade" id="BuyModal" tabindex="-1" aria-labelledby="BuyModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="BuyModalLabel">Confirmation (Demo)</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <td>Currency</td>
                <td id="modalCurrency"></td>
              </tr>
              <tr>
                <td>Amount</td>
                <td id="modalAmount"></td>
              </tr>
              <tr>
                <td>Lock Funds</td>
                <td id="modalLockFunds"></td>
              </tr>
              <tr>
                <td>Total</td>
                <td id="modalTotal">$854.00 USD</td> <!-- Can be dynamically updated too -->
              </tr>
              <!-- Add more fields as needed -->
            </tbody>
          </table>
        </div>
        <div class="text-end">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buySuccessModal">Confirm</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
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
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="auth-form">
              <form action="verify-step-2.html" class="identity-upload">
                <div class="identity-content">
                  <span class="icon"><i class="icofont-check"></i></span>
                  <p>Congratulation. Your funding transaction is successful</p>
                </div>
              </form>
              <div class="card-footer text-center">
                <a href="demo-trade.php">Back To Demo</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Withdrawal Modal -->
<div class="modal fade" id="sellModal" tabindex="-1" aria-labelledby="sellModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sellModalLabel">Withdrawal Confirmation (Demo)</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <td>Withdraw Method</td>
                <td id="modalWithdrawMethod"></td>
              </tr>
              <tr>
                <td>Amount</td>
                <td id="modalCurrencyAmount"></td>
              </tr>
              <tr>
                <td>Recipient Wallet</td>
                <td id="modalRecipientAddress"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="text-end">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sellSuccessModal">Confirm</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

    <div class="modal fade" id="sellSuccessModal">
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
                  <p>Congratulation. Your Withdrawal transaction is successful</p>
                </div>
              </form>
              <div class="card-footer text-center">
                <a href="demo-trade.php">Back To Demo</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Transfer Modal -->
<div class="modal fade" id="transferModal" tabindex="-1" aria-labelledby="transferModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="transferModalLabel">Transfer Confirmation (Demo)</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <td>Transfer Method</td>
                <td id="modalTransferMethod"></td>
              </tr>
              <tr>
                <td>Amount</td>
                <td id="modalTransferAmount"></td>
              </tr>
              <tr>
                <td>Recipient Wallet</td>
                <td id="modalRecipientWallet"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="text-end">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#transferSuccessModal">Confirm</button>
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
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
                <a href="demo-trade.php">Back To Demo</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="demoTradeModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Demo Trade Info</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="auth-form">
              <form action="verify-step-2.html" class="identity-upload">
                <div class="identity-content">
                  <span class="icon"><i class="icofont-check"></i></span>
                  <p>Thank you for your trade on the demo. Please use our Live trading center to place a real trade</p>
                </div>
              </form>
              <div class="card-footer text-center">
                <a class="btn btn-primary" data-dismiss="modal" aria-label="Close">Back To Demo</a>&nbsp;&nbsp;<a class="btn btn-primary" href="exchange.php">Trade Live</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<script>
  document.getElementById('buyNowBtn').addEventListener('click', function() {
  // Reference the form
  var forms = document.getElementById('fundForm');

  // Validate the form before showing the modal
  if (forms.checkValidity()) {
    // Capture form values
    var currency = document.getElementById('sellCurrency').value;
    var amount = document.getElementById('sellAmount').value;
    var lockFunds = document.getElementById('sellMethod').value;

    // Update modal with captured values
    document.getElementById('modalCurrency').innerText = currency;
    document.getElementById('modalAmount').innerText = amount;
    document.getElementById('modalLockFunds').innerText = lockFunds;

    // Show the modal
    $('#BuyModal').modal('show');
  } else {
    // If the form is invalid, show validation errors
    forms.reportValidity();
  }
});


document.getElementById('withdrawNowBtn').addEventListener('click', function() {
  // Reference the form
  var form = document.getElementById('withdrawForm');

  // Validate the form before showing the modal
  if (form.checkValidity()) {
    // Capture the form values
    var method = document.getElementById('withdrawMethod').value;
    var amount = document.getElementById('currencyAmount').value;
    var recipient = document.getElementById('recipientAddress').value;

    // Update the modal with captured values
    document.getElementById('modalWithdrawMethod').innerText = method;
    document.getElementById('modalCurrencyAmount').innerText = amount;
    document.getElementById('modalRecipientAddress').innerText = recipient;

    // Show the modal
    $('#sellModal').modal('show');
  } else {
    // If the form is invalid, show validation errors
    form.reportValidity();
  }
});

document.getElementById('transferNowBtn').addEventListener('click', function() {
  // Reference the form
  var form = document.getElementById('transferForm');

  // Validate the form before showing the modal
  if (form.checkValidity()) {
    // Capture the form values
    var method = document.getElementById('transferMethod').value;
    var amount = document.getElementById('transferAmount').value;
    var recipient = document.getElementById('recipientWallet').value;

    // Update the modal with the captured values
    document.getElementById('modalTransferMethod').innerText = method;
    document.getElementById('modalTransferAmount').innerText = amount;
    document.getElementById('modalRecipientWallet').innerText = recipient;

    // Show the modal
    $('#transferModal').modal('show');
  } else {
    // If the form is invalid, show validation errors
    form.reportValidity();
  }
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
    <?php include "include/footer.php"; ?>

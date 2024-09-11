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
        <div class="container">
        <div class="col-xxl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Xtrade Demo Trading Preview</h4>
                </div>
                <div class="card-body">
                <iframe src="https://metatraderweb.app/trade?demo_all_servers=1&amp;startup_mode=open_demo&amp;startup_version=5&amp;lang=en&amp;save_password=on&amp;&amp;utm_campaign=xtradeSecurityDemo" allowfullscreen="allowfullscreen" style="width: 100%; height: 100vh; border: none"></iframe>
                 </div>

                 <div class="row">
            <div class="col-xxl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">This is a demo account. Migrate your account to live trading</h4>
                </div>
                  <a href="exchange.php" type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#tradingModal">Migrate Trading Account</a>
                
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
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buySuccessleModal">Confirm</button>
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
    <?php include "modalForms.php"; ?>
    <?php include "include/footer.php"; ?>

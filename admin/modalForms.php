<!-- Modal for Editing Wallet Information -->
<div class="modal fade" id="editWalletModal" tabindex="-1" aria-labelledby="editWalletModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editWalletModalLabel">Edit Wallet Information</h5>
                <button type="button" class="btn btn-outline-primary close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editWalletForm" action="walletProcessor.php" enctype="multipart/form-data" method="post">
                    <input type="hidden" id="editId" name="id_no" value="<?php ?>">
                    <div class="form-group">
                        <label for="editWallet">Wallet</label>
                        <select class="form-control" id="selectCurrency" name="wallet"><?php include "../include/selectCurrency.html";?></select>
                    </div>
                    <div class="form-group">
                        <label for="editAddress">Address</label>
                        <input type="text" class="form-control" id="editAddress" name="address" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="editQrcode">QR Code</label>
                        <input type="file" class="form-control" id="editQrcode" name="editqrcode">
                        <span><small>Any uploaded file here will replace the already existing file</small></span>
                    </div>
                    <div class="form-group mt-2">
                    <button type="submit" class="btn btn-outline-primary" name="editWalletInfo">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Form for edit fund -->
<div class="modal" id="editModal" aria-labelledby="editFundModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="editFundModalLabel">Edit Funding Record</h6>
                <button type="button" class="close btn btn-outline-primary" data-bs-dismiss="editModal" aria-label="Close" onclick="editModal.style.display = 'none';">
                    &times;
                </button>
                </div>
                    <div class="modal-body">
                    <form id="editForm" method="POST" action="finance.php" name="editFundRequestForm">
                    <div class="form-group">
                    <input type="text" class="form-control" name="funding_txn" id="ftxn" hidden>
                    </div>
                    <div class="form-group">
                    <input type="email" class="form-control" name="funding_email" id="editEmail" hidden>
                    </div>
                    <div class="form-group">
                    <label for="editAmount">Amount</label>
                    <input type="number" step="0.00001" min="0" class="form-control" name="fund_amount" id="editAmount">
                    </div>
                    <div class="form-group">
                    <label for="editCurrency">Currency</label>
                    <input type="text" class="form-control" name="fund_currency" id="editCurrency" disabled>
                    </div>
                    <div class="form-group">
                    <label for="editProfit">Profit</label>
                    <input type="number" step="0.00001" min="0" class="form-control" name="fund_profit" id="editProfit">
                    </div>
                    <div class="form-group mt-2">
                    <button type="submit" class="btn btn-outline-primary" name="updateFund">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    

<!-- Modal Form for edit transaction -->
<div class="modal" id="editTransactionModal" aria-labelledby="editTransactionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="editTransactionModalLabel">Edit Transaction Record</h6>
                <button type="button" class="close btn btn-outline-primary" data-bs-dismiss="editTransactionModal" aria-label="Close">
                    &times;
                </button>
                </div>
                    <div class="modal-body">
                    <form id="editTransactionForm" method="POST" action="finance.php" name="editTransactionForm">
                    <div class="form-group">
                    <input type="text" class="form-control" name="transaction_txn" id="txn">
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" name="transaction_email" id="transactionEmail">
                    </div>
                    <div class="form-group">
                    <input type="email" class="form-control" name="transaction_package" id="package">
                    </div>
                    <div class="form-group">
                    <label for="editAmount">Amount</label>
                    <input type="number" step="0.00001" min="0" class="form-control" name="transaction_amount" id="transactionAmount">
                    </div>
                    <div class="form-group">
                    <label for="editCurrency">Currency</label>
                    <input type="text" class="form-control" name="transaction_currency" id="transactionCurrency" disabled>
                    </div>
                    <div class="form-group">
                    <label for="editCurrency">Interest</label>
                    <input  type="number" step="0.00001" min="0" class="form-control" name="transaction_interest" id="transactionInterest">
                    </div>
                    <div class="form-group">
                    <label for="editProfit">Profit</label>
                    <input type="number" step="0.00001" min="0" class="form-control" name="transaction_profit" id="transactionProfit">
                    </div>
                    <div class="form-group mt-2">
                    <button type="submit" class="btn btn-outline-primary" name="updateTransaction">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    
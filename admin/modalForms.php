 <!--FUND ACCOUNT -->
 <div class="modal fade sho d-bloc" id="" tabindex="-1">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
            <div class="modal-content">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><big>&times;</big></a>
                <div class="popup-body">
                    <form method="POST" action="fund-account.php">
                        <input type="hidden" name="Ftxn" value="<?= 'TXN'.mt_rand(100000,999999);?>">                      
                        <div class="input-item input-with-label">
                            <label class="input-item-label">Select currency to fund</label>
                            <div class="select-wrapper">
                                <select class="input-bordered" name="currency_id">
                                    <?php foreach($sql_addresses_exec as $addresses_info){extract($addresses_info);?>
                                        <option value="<?= $addresses_info['wallet']?>"><?= $addresses_info['wallet']?></option><?php }?>
                                    </select>
                            </div>
                        </div>
                        <div class="input-item input-with-label">
                            <label class="input-item-label">Enter Amount</label>
                            <input class="input-bordered" type="text" placeholder="Amount" name="amount" required />
                        </div>
                        <button type="submit" class="btn btn-dark btn-between" name="fund">
                            Proceed <i class="fa fa-forward"></i>
                        </button>
                    </form>
                </div>
            </div>
            <!-- .modal-content -->
        </div>
        <!-- .modal-dialog -->
    </div>
    <!-- Modal End -->


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
<div id="editModal" class="modal"  tabindex="-1" aria-labelledby="editFundModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="editFundModalLabel">Edit Fund Request</h6>
                <button type="button" class="close btn btn-outline-primary" data-bs-dismiss="editModal" aria-label="Close">
                        &times;
                    </button>
                </div>
                    <div class="modal-body">
                    <form id="editForm" method="POST" action="finance.php" name="editFundRequestForm">
                    <div class="form-group">
                    <input type="text" class="form-control" name="funding_ftxn" id="ftxn" hidden>
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

    <!-- Modal Centered -->
    <!-- WITHDRAWAL FORM-->
    <div class="modal fade" id="withdrawal-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-md modal-dialog-centered">
            <div class="modal-content">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><big>&times;</big></a>
                <div class="popup-body">
                    <form method="POST" action="fund-account.php">  
                       <input type="hidden" name="Wtxn" value="<?= 'TXN'.mt_rand(100000,999999);?>">  
                       <input type="hidden" name="wfirstname" value="<?php if(isset($firstname)){echo $firstname;}else{echo "User";}?>">
                       <input type="hidden" name="wlastname" value="<?php if(isset($lastname)){echo $lastname;}else{echo "User";}?>">               
                      <div class="input-item input-with-label">
                            <label class="input-item-label">Select withdrawal method</label>
                            <div class="select-wrapper">
                                <select class="input-bordered" name="currency_id2">
                                     <?php foreach($sql_addresses_exec as $addresses_info){extract($addresses_info);?>
                                        <option value="<?= $addresses_info['wallets']?>"><?= $addresses_info['wallets']?></option><?php }?>
                        </select><br><small style="color:red;">Only select currency that you own or withdrawal will fail</small>
                            </div>
                        </div>
                        <div class="input-item input-with-label">
                            <label class="input-item-label">Enter Amount</label>
                            <input class="input-bordered" type="text" placeholder="Amount" name="amount2" required value="" /><br><small style="color:red;">Only enter an amount less than you own or withdrawal will fail</small>
                        </div>
                        <div class="input-item input-with-label">
                            <label class="input-item-label">Destination Address</label>
                            <input class="input-bordered" type="text" placeholder="Address" name="address" required value="" />
                        </div>
                        <button type="submit" class="btn btn-dark btn-between" name="withdraw">Proceed <i class="fa fa-forward"></i></button>
                    </form>
                </div>
            </div>
            <!-- .modal-content -->
        </div>
        <!-- .modal-dialog -->
    </div>
    <!-- Modal End -->


   
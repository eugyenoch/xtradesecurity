 <!--UPLOAD PROOF FORM-->
 <div class="modal fade sho d-bloc" id="upload-proof" tabindex="-1" aria-labelledby="uploadProofModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
             <h6 class="modal-title">Upload Payment Proof </h6>
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <span class="border badge bg-warning text-black p-2 fs-2">&times;</span>
                </a>
            </div>
                <div class="modal-body">
                <p><strong>Use this section to upload proof of payment for Transaction ID: <span name="utxn"></span></strong></p>
                <form method="POST" action="finance.php" enctype="multipart/form-data" id="uploadProofForm">
                    <div class="input-item">
                    <input type="hidden" name="utxn" value="">
                    </div>
                    <div class="input-item input-with-label">
                        <label for="formFile" class="input-item-label">Payment Proof</label>
                        <input class="form-control" type="file" accept="image/*" name="imageProof" id="formFile"><br>
                    </div>

                    <div class="input-item input-with-label">
                        <label for="formComment" class="input-item-label">Comment</label>
                        <textarea id="formComment" class="form-control" name="comment" rows="3" placeholder="Not more than 500 words preferably" maxlength="500"></textarea>
                        <small>Anything you will love us to know should go into the comments.</small>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-warning btn-between" name="proofUpload">
                        Proceed <i class="fa fa-forward"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>

                </div>
            </div>
            <!-- .modal-content -->
        </div>
        <!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
 
 <!--SILVER PLAN-->
  <div class="modal fade sho d-bloc" id="silver-pack" tabindex="-1" aria-labelledby="investmentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <span class="border badge bg-warning text-black p-2 fs-2">&times;</span>
                </a>
            </div>
                <div class="modal-body">
                <form method="POST" action="finance.php" id="editSilverModal">
                    <div class="form-group">
                    <input type="hidden" name="email" value="<?php if(isset($user_email) && $user_email!=null){echo $user_email;} ?>">  
                    <input type="hidden" name="user" value="<?php if(isset($userName) && $userName!=null){echo $userName;} ?>">   
                    <input type="hidden" name="stxn" value="<?= 'TXN' . mt_rand(100000, 999999); ?>">    
                    </div>
                        <div class="form-group">
                            <table class="table">
                                <tr>
                                    <th>Silver Pack</th>
                                </tr>
                                <tr>
                                    <td><span>Min Capital: $300</span></td>
                                    <td><span>Max Capital: $1,000</span></td>
                                </tr>
                                <tr>
                                    <td><span>Duration: 30 Trade days</span></td>
                                    <td><span>Interest: 10%</span></td>
                                </tr>
                            </table>
                        </div>

                    <div class="form-group input-item input-with-label">
                        <label class="input-item-label">Input amount to invest</label>
                        <input class="form-control" type="number" name="silver_amount" min="300" max="1000" required>
                        <small>Min amount is $300 and max is $1000. Do not include the currency symbol in this field.</small>
                    </div>

                    <div class="form-group mb-3">
                        <label for="currency_id" class="form-label">Select currency</label>
                        <select class="form-select" id="currency_id" name="currency_id" required>
                            <option value="">Choose a currency</option>
                            <?php foreach(fetchUniqueWallets($con) as $wallet): ?>
                                <option value="<?= htmlspecialchars($wallet['wallet']) ?>">
                                    <?= htmlspecialchars($wallet['wallet']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <small class="text-danger">If you want to buy with your account balance, make sure you have enough balance, or your trade request will not be approved by the admin.</small>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-warning btn-between" name="silver">Proceed <i class="fa fa-forward"></i>
                        </button>
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </form>
                </div>
            </div>
            <!-- .modal-content -->
        </div>
        <!-- .modal-dialog -->
    </div>
    <!-- Modal End -->


    <!--DIAMOND PLAN-->
  <div class="modal fade sho d-bloc" id="diamond-pack" tabindex="-1" aria-labelledby="investmentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <span class="border badge bg-warning text-black p-2 fs-2">&times;</span>
                </a>
        </div>
                <div class="modal-body">
                <form method="POST" action="finance.php" id="editDiamondModal">
                <div class="form-group">
                <input type="hidden" name="email" value="<?php if(isset($user_email) && $user_email!=null){echo $user_email;} ?>">  
                    <input type="hidden" name="user" value="<?php if(isset($userName) && $userName!=null){echo $userName;} ?>">   
                    <input type="hidden" name="dtxn" value="<?= 'TXN' . mt_rand(100000, 999999); ?>">                          
                </div>
                        <div class="input-item input-with-label">
                            <div class="select-wrapper">
                                <table class="table">
                                    <tr>
                                        <th>Diamond Pack</th>
                                    </tr>
                                    <tr>
                                        <td><span>Min Capital: $1,000</span></td>
                                        <td><span>Max Capital: $5,000</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>Duration: 30 Trade days</span></td>
                                        <td><span>Payout: 15%</span></td>
                                    </tr>
                                </table>
                            </div>
                        </div>   

                        <div class="input-item input-with-label">
                            <label class="input-item-label">Input amount to invest</label>
                            <input class="form-control" type="number" name="diamond_amount" min="1000" max="5000" required>
                            <small>Min amount is $1,000 and max is $5,000. Do not include the currency symbol in this field.</small>
                        </div> 

                        <div class="form-group mb-3">
                            <label for="currency_id2" class="form-label">Select currency</label>
                            <select class="form-select" id="currency_id2" name="currency_id" required>
                                <option value="">Choose a currency</option>
                                <?php foreach(fetchUniqueWallets($con) as $wallets): ?>
                                    <option value="<?= htmlspecialchars($wallet['wallet']) ?>">
                                        <?= htmlspecialchars($wallet['wallet']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    
                        <small class="text-danger">If you want to buy with your account balance, make sure you have enough balance, or your trade request will not be approved by the admin.</small>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-warning btn-between" name="diamond">Proceed <i class="fa fa-forward"></i></button>
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </form>

                </div>
            </div>
            <!-- .modal-content -->
        </div>
        <!-- .modal-dialog -->
    </div>
    <!-- Modal End -->

<!--DIAMOND PLUS PLAN-->
<div class="modal fade sho d-bloc" id="diamond-plus" tabindex="-1" aria-labelledby="investmentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <span class="border badge bg-warning text-black p-2 fs-2">&times;</span>
                </a>
        </div>
                <div class="modal-body">
                <form method="POST" action="finance.php" id="editDiamondPlusForm">
                <div class="form-group">
                <input type="hidden" name="dpemail" value="<?php if(isset($user_email) && $user_email!=null){echo $user_email;} ?>">  
                    <input type="hidden" name="dpuser" value="<?php if(isset($userName) && $userName!=null){echo $userName;} ?>">   
                    <input type="hidden" name="dptxn" value="<?= 'TXN' . mt_rand(100000, 999999); ?>">       
                </div>                  

                    <div class="input-item input-with-label">
                        <div class="select-wrapper">
                            <table class="table">
                                <tr>
                                    <th>Diamond Plus Pack</th>
                                </tr>
                                <tr>
                                    <td><span>Min Capital: $5,000</span></td>
                                    <td><span>Max Capital: $10,000</span></td>
                                </tr>
                                <tr>
                                    <td><span>Duration: 30 Trade days</span></td>
                                    <td><span>Payout: 15%</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>   

                    <div class="input-item input-with-label">
                        <label class="input-item-label">Input amount to invest</label>
                        <input class="form-control" type="number" name="diamond_plus_amount" min="5000" max="10000" required>
                        <small>Min amount is $5,000 and max is $10,000. Do not include the currency symbol in this field.</small>
                    </div> 

                    <div class="form-group mb-3">
                        <label for="currency_id2" class="form-label">Select currency</label>
                        <select class="form-select" id="currency_id2" name="dpcurrency_id" required>
                            <option value="">Choose a currency</option>
                            <?php foreach(fetchUniqueWallets($con) as $wallet): ?>
                                <option value="<?= htmlspecialchars($wallet['wallet']) ?>">
                                    <?= htmlspecialchars($wallet['wallet']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <small class="text-danger">If you want to buy with your account balance, make sure you have enough balance, or your trade request will not be approved by the admin.</small>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-warning btn-between" name="diamond_plus">Proceed <i class="fa fa-forward"></i></button>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>

                </div>
            </div>
            <!-- .modal-content -->
        </div>
        <!-- .modal-dialog -->
    </div>
    <!-- Modal End -->

<!--GOLD PLAN-->
<div class="modal fade sho d-bloc" id="gold-pack" tabindex="-1" aria-labelledby="investmentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <span class="border badge bg-warning text-black p-2 fs-2">&times;</span>
                </a>
        </div>
                <div class="modal-body">
                <form method="POST" action="finance.php" id="editGoldForm">
                <div class="form-group">
                <input type="hidden" name="gemail" value="<?php if(isset($user_email) && $user_email!=null){echo $user_email;} ?>">  
                    <input type="hidden" name="guser" value="<?php if(isset($userName) && $userName!=null){echo $userName;} ?>">   
                    <input type="hidden" name="gtxn" value="<?= 'TXN' . mt_rand(100000, 999999); ?>">                        
                </div>
                    <div class="input-item input-with-label">
                        <div class="select-wrapper">
                            <table class="table">
                                <tr>
                                    <th>Gold Pack</th>
                                </tr>
                                <tr>
                                    <td><span>Min Capital: $10,000</span></td>
                                    <td><span>Max Capital: $20,000</span></td>
                                </tr>
                                <tr>
                                    <td><span>Duration: 30 Trade days</span></td>
                                    <td><span>Payout: 20%</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>   

                    <div class="input-item input-with-label">
                        <label class="input-item-label">Input amount to invest</label>
                        <input class="form-control" type="number" name="gold_amount" min="10000" max="20000" required>
                        <small>Min amount is $10,000 and max is $20,000. Do not include the currency symbol in this field.</small>
                    </div> 

                    <div class="form-group mb-3">
                        <label for="currency_id2" class="form-label">Select currency</label>
                        <select class="form-select" id="currency_id2" name="gcurrency_id" required>
                            <option value="">Choose a currency</option>
                            <?php foreach(fetchUniqueWallets($con) as $wallet): ?>
                                <option value="<?= htmlspecialchars($wallet['wallet']) ?>">
                                    <?= htmlspecialchars($wallet['wallet']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                                
                    <small class="text-danger">If you want to buy with your account balance, make sure you have enough balance, or your trade request will not be approved by the admin.</small>
                                
                                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-warning btn-between" name="gold">
                        Proceed <i class="fa fa-forward"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>

                </div>
            </div>
            <!-- .modal-content -->
        </div>
        <!-- .modal-dialog -->
    </div>
    <!-- Modal End -->

<!--GOLD PLUS PLAN-->
<div class="modal fade sho d-bloc" id="gold-plus" tabindex="-1" aria-labelledby="investmentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <span class="border badge bg-warning text-black p-2 fs-2">&times;</span>
                </a>
        </div>
                <div class="modal-body">
                <form method="POST" action="finance.php" id="editGoldPlusForm">
                <div class="form-group">
                <input type="hidden" name="gpemail" value="<?php if(isset($user_email) && $user_email!=null){echo $user_email;} ?>">  
                    <input type="hidden" name="gpuser" value="<?php if(isset($userName) && $userName!=null){echo $userName;} ?>">   
                    <input type="hidden" name="gptxn" value="<?= 'TXN' . mt_rand(100000, 999999); ?>">             
                </div>          

                    <div class="input-item input-with-label">
                        <div class="select-wrapper">
                            <table class="table">
                                <tr>
                                    <th>Gold Plus Pack</th>
                                </tr>
                                <tr>
                                    <td><span>Min Capital: $20,000</span></td>
                                    <td><span>Max Capital: $40,000</span></td>
                                </tr>
                                <tr>
                                    <td><span>Duration: 30 Trade days</span></td>
                                    <td><span>Payout: 20%</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>   

                    <div class="input-item input-with-label">
                        <label class="input-item-label">Input amount to invest</label>
                        <input class="form-control" type="number" name="gold_plus_amount" min="20000" max="40000" required>
                        <small>Min amount is $20,000 and max is $40,000. Do not include the currency symbol in this field.</small>
                    </div> 

                    <div class="form-group mb-3">
                        <label for="currency_id2" class="form-label">Select currency</label>
                        <select class="form-select" id="currency_id2" name="gpcurrency_id" required>
                            <option value="">Choose a currency</option>
                            <?php foreach(fetchUniqueWallets($con) as $wallet): ?>
                                <option value="<?= htmlspecialchars($wallet['wallet']) ?>">
                                    <?= htmlspecialchars($wallet['wallet']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                        
                    <small class="text-danger">If you want to buy with your account balance, make sure you have enough balance, or your trade request will not be approved by the admin.</small>
                               
                                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-warning btn-between" name="gold_plus">
                        Proceed <i class="fa fa-forward"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>

                </div>
            </div>
            <!-- .modal-content -->
        </div>
        <!-- .modal-dialog -->
    </div>
    <!-- Modal End -->


    <!--VETERAN PLAN-->
<div class="modal fade sho d-bloc" id="veteran-pack" tabindex="-1" aria-labelledby="investmentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <span class="border badge bg-warning text-black p-2 fs-2">&times;</span>
                </a>
        </div>
                <div class="modal-body">
                <form method="POST" action="finance.php" id="editVeteranForm">
                <div class="form-group">
                <input type="hidden" name="vemail" value="<?php if(isset($user_email) && $user_email!=null){echo $user_email;} ?>">  
                    <input type="hidden" name="vuser" value="<?php if(isset($userName) && $userName!=null){echo $userName;} ?>">   
                    <input type="hidden" name="vtxn" value="<?= 'TXN' . mt_rand(100000, 999999); ?>">    
                </div>

                    <div class="input-item input-with-label">
                        <div class="select-wrapper">
                            <table class="table">
                                <tr>
                                    <th>Veteran Pack</th>
                                </tr>
                                <tr>
                                    <td><span>Min Capital: $50,000</span></td>
                                    <td><span>Max Capital: $100,000</span></td>
                                </tr>
                                <tr>
                                    <td><span>Duration: 30 Trade days</span></td>
                                    <td><span>Payout: 40%</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="input-item input-with-label">
                        <label class="input-item-label">Input amount to invest</label>
                        <input class="form-control" type="number" name="veteran_amount" min="50000" max="100000" required>
                        <small>Min amount is $50,000 and max is $100,000. Do not include the currency symbol in this field.</small>
                    </div>

                    <div class="form-group mb-3">
                        <label for="currency_id2" class="form-label">Select currency</label>
                        <select class="form-select" id="currency_id2" name="vcurrency_id" required>
                            <option value="">Choose a currency</option>
                            <?php foreach(fetchUniqueWallets($con) as $wallet): ?>
                                <option value="<?= htmlspecialchars($wallet['wallet']) ?>">
                                    <?= htmlspecialchars($wallet['wallet']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <small class="text-danger">If you want to buy with your account balance, ensure you have enough balance, or your trade request will not be approved by admin.</small>
                               
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-warning btn-between" name="veteran">
                        Proceed <i class="fa fa-forward"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>

                </div>
            </div>
            <!-- .modal-content -->
        </div>
        <!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
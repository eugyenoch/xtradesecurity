 <!--UPLOAD PROOF FORM-->
 <div class="modal fade sho d-bloc" id="upload-proof" tabindex="-1" aria-labelledby="uploadProofModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
             <h6 class="modal-title">Upload Payment Proof </h6>
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                <span class="btn-close badge bg-outline-warning p-2 fs-4">&times;</span>
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
  <div class="modal fade" id="silver-pack" tabindex="-1" aria-labelledby="silverInvestmentModalLabel" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                <span class="btn-close badge bg-outline-warning p-2 fs-4">&times;</span>
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
                                    <th>Silver Plan</th>
                                </tr>
                                <tr>
                                    <td><span>Min Capital: $300</span></td>
                                    <td><span>Max Capital: $5,000</span></td>
                                </tr>
                                <tr>
                                    <td><span>Duration: 30 Trade days</span></td>
                                    <td><span>Interest: 10%</span></td>
                                </tr>
                            </table>
                        </div>

                    <div class="form-group input-item input-with-label">
                        <label class="input-item-label">Input amount to invest</label>
                        <input class="form-control" type="number" name="silver_amount" min="300" max="5000" required>
                        <small>Min amount is $300 and max is $5000. Do not include the currency symbol in this field.</small>
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
                    </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-warning" name="silver">Proceed <i class="icofont-curved-double-right"></i>
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
     


    <!--DIAMOND PLAN-->
  <div class="modal fade sho d-bloc" id="diamond-pack" tabindex="-1" aria-labelledby="diamondInvestmentModalLabel" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                <span class="btn-close badge bg-outline-warning p-2 fs-4">&times;</span>
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
                                        <th>Diamond Plan</th>
                                    </tr>
                                    <tr>
                                        <td><span>Min Capital: $6,000</span></td>
                                        <td><span>Max Capital: $9,000</span></td>
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
                            <input class="form-control" type="number" name="diamond_amount" min="6000" max="9000" required>
                            <small>Min amount is $6,000 and max is $9,000. Do not include the currency symbol in this field.</small>
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
                        <button type="submit" class="btn btn-outline-warning" name="diamond">Proceed <i class="icofont-curved-double-right"></i></button>
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
<div class="modal fade sho d-bloc" id="diamond-plus" tabindex="-1" aria-labelledby="diamondPlusInvestmentModalLabel" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <span class="btn-close badge bg-outline-warning p-2 fs-4">&times;</span>
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
                                    <th>Diamond Plus Plan</th>
                                </tr>
                                <tr>
                                    <td><span>Min Capital: $10,000</span></td>
                                    <td><span>Max Capital: $19,500</span></td>
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
                        <input class="form-control" type="number" name="diamond_plus_amount" min="10000" max="19500" required>
                        <small>Min amount is $10,000 and max is $19,500. Do not include the currency symbol in this field.</small>
                    </div> 

                    <div class="form-group mb-3">
                        <label for="currency_id2" class="form-label">Select currency</label>
                        <select class="form-select" id="currency_id3" name="dpcurrency_id" required>
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
                    <button type="submit" class="btn btn-outline-warning btn-between" name="diamond_plus">Proceed <i class="icofont-curved-double-right"></i></button>
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
<div class="modal fade sho d-bloc" id="gold-pack" tabindex="-1" aria-labelledby="goldInvestmentModalLabel" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                <span class="btn-close badge bg-outline-warning p-2 fs-4">&times;</span>
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
                                    <th>Gold Plan</th>
                                </tr>
                                <tr>
                                    <td><span>Min Capital: $20,000</span></td>
                                    <td><span>Max Capital: $50,000</span></td>
                                </tr>
                                <tr>
                                    <td><span>Duration: 30 Trade days</span></td>
                                    <td><span>Payout: 25%</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>   

                    <div class="input-item input-with-label">
                        <label class="input-item-label">Input amount to invest</label>
                        <input class="form-control" type="number" name="gold_amount" min="20000" max="50000" required>
                        <small>Min amount is $20,000 and max is $50,000. Do not include the currency symbol in this field.</small>
                    </div> 

                    <div class="form-group mb-3">
                        <label for="currency_id2" class="form-label">Select currency</label>
                        <select class="form-select" id="currency_id4" name="gcurrency_id" required>
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
                    <button type="submit" class="btn btn-outline-warning btn-between" name="gold">Proceed<i class="icofont-curved-double-right"></i>
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
<div class="modal fade sho d-bloc" id="gold-plus" tabindex="-1" aria-labelledby="goldPlusInvestmentModalLabel" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <span class="btn-close badge bg-outline-warning p-2 fs-4">&times;</span>
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
                                    <th>Gold Plus Plan</th>
                                </tr>
                                <tr>
                                    <td><span>Min Capital: $60,000</span></td>
                                    <td><span>Max Capital: Unlimited</span></td>
                                </tr>
                                <tr>
                                    <td><span>Duration: 30 Trade days</span></td>
                                    <td><span>Payout: 30%</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>   

                    <div class="input-item input-with-label">
                        <label class="input-item-label">Input amount to invest</label>
                        <input class="form-control" type="number" name="gold_plus_amount" min="60000" required>
                        <small>Min amount is $60,000 and max is unlimited. Do not include the currency symbol in this field.</small>
                    </div> 

                    <div class="form-group mb-3">
                        <label for="currency_id2" class="form-label">Select currency</label>
                        <select class="form-select" id="currency_id5" name="gpcurrency_id" required>
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
                    <button type="submit" class="btn btn-outline-warning btn-between" name="gold_plus">Proceed<i class="icofont-curved-double-right"></i>
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
<!-- <div class="modal fade sho d-bloc" id="veteran-pack" tabindex="-1" aria-labelledby="veteranInvestmentModalLabel" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <span class="btn-close badge bg-outline-warning p-2 fs-4">&times;</span>
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
                                    <th>Veteran Plan</th>
                                </tr>
                                <tr>
                                    <td><span>Min Capital: $50,000</span></td>
                                    <td><span>Max Capital: $100,000</span></td>
                                </tr>
                                <tr>
                                    <td><span>Duration: 30 Trade days</span></td>
                                    <td><span>Payout: 35%</span></td>
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
                        <select class="form-select" id="currency_id6" name="vcurrency_id" required>
                            <option value="">Choose a currency</option>
                            <?php //foreach(fetchUniqueWallets($con) as $wallet): ?>
                                <option value="<? //htmlspecialchars($wallet['wallet']) ?>">
                                    <? //htmlspecialchars($wallet['wallet']) ?>
                                </option>
                            <?php //endforeach; ?>
                        </select>
                    </div>

                    <small class="text-danger">If you want to buy with your account balance, ensure you have enough balance, or your trade request will not be approved by admin.</small>
                               
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-warning btn-between" name="veteran"><i class="icofont-curved-double-right"></i>
                    </button>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>

                </div>
            </div> -->
            <!-- .modal-content -->
        <!-- </div> -->
        <!-- .modal-dialog -->
    <!-- </div> -->
    <!-- Modal End -->


     <!--2FA FORM-->

     <div class="modal fade sho d-bloc" id="tfa" tabindex="-1" aria-labelledby="tfaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h6>2FA <span class="color-danger">(Disabled)</span></h6>
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <span class="btn-close badge bg-outline-warning p-2 fs-4">&times;</span>
                </a>
        </div>
                <div class="modal-body">
                <form method="POST" id="edittfaForm">
                <div class="form-group">
                <input type="hidden" name="2faemail" value="<?php if(isset($user_email) && $user_email!=null){echo $user_email;} ?>" readonly>  
                    <input type="hidden" name="2fauser" value="<?php if(isset($userName) && $userName!=null){echo $userName;} ?>" readonly>   
                </div>
                            <p>
                            If you want to turn on 2FA, input your account password and
                            the six-digit code provided by your Authenticator app
                            below, then click <strong>"Enable 2FA Verification"</strong>.
                            </p>

                    <div class="main">
                  <h6>Enable 2FA</h6>
                  <p>Enter your password and 2FA code to enable the 2FA verification</p>

                  <div class="refe">
                    <div class="form-group">
                      <label>Your Password</label>
                      <input class="form-control" name="2fapwd" type="password" placeholder="Password" title="Enter your account password" />
                    </div>
                    <div class="form-group">
                      <label>2FA Code</label>
                      <input class="form-control" type="text" name="2facode" placeholder="2FA code" title="Enter code received from your authenticator app" value="<?php echo mt_rand(100000,999999); ?>" disabled />
                    </div>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-primary" onclick="featureNotAvailable();">Enable 2FA verification</button>
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

     <!--API Keys FORM-->
<div class="modal fade sho d-bloc" id="apiKey" tabindex="-1" aria-labelledby="apiKeyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h6>API Access <span class="color-danger">(Disabled)</span></h6>
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <span class="btn-close badge bg-outline-warning p-2 fs-4">&times;</span>
                </a>
        </div>
                <div class="modal-body">
                <form method="POST" id="editapiKeyForm">
                <div class="form-group">
                <input type="hidden" name="apiemail" value="<?php if(isset($user_email) && $user_email!=null){echo $user_email;} ?>" readonly>  
                    <input type="hidden" name="apiuser" value="<?php if(isset($userName) && $userName!=null){echo $userName;} ?>" readonly>   
                </div>

                <p class="lead">Enable API access on your account to generate API keys (available soon).</p>
               
        
                  <div class="modal-footer">
                  <button type="button" class="btn btn-primary" onclick="featureNotAvailable();">Enable API Keys</button>
                    </div>
                </form>

                </div>
            </div>
            <!-- .modal-content -->
        </div>
        <!-- .modal-dialog -->
    </div>
    <!-- Modal End -->

     <!--Change Password FORM-->
<div class="modal fade sho d-bloc" id="changePassword" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h6>Change Password</span></h6>
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <span class="btn-close badge bg-outline-warning p-2 fs-4">&times;</span>
                </a>
        </div>
                <div class="modal-body">
                <form action="change-password.php" method="post">
                <div class="form-group">
                <input type="hidden" name="cpemail" value="<?php if(isset($user_email) && $user_email!=null){echo $user_email;} ?>" readonly>  
                    <input type="hidden" name="cpuser" value="<?php if(isset($userName) && $userName!=null){echo $userName;} ?>" readonly>   
                </div>
                            <p>Use this form to change your account password to a new one</p>
                            <form action="change-password.php" method="post" name="userChangePasswordForm">
                  <div class="form-group">
                      <label>Old Password<span class="text-danger">*</span></label>
                      <input type="password" class="form-control"  placeholder="old password" name="oldPassword" required />
                    </div>
                    <div class="form-group">
                      <label>2FA Code</label>
                      <input type="text" class="form-control" value="<?php echo mt_rand(100000,999999);?>" disabled />
                    </div>
                  <div class="form-group">
                      <label>New Password<span class="text-danger">*</span><small>(atleast 8 characters, including uppercase letters, lowercase letters, numbers, and special characters)</small></label>
                      <input type="password" class="form-control" placeholder="new password"  title="atleast 8 characters, including uppercase letters, lowercase letters, numbers, and special characters" name="newPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required />
                    </div>
                    <div class="form-group">
                      <label>Confirm Password<span class="text-danger">*</span></label>
                      <input type="password" class="form-control" placeholder="confirm password"  name="confirmPassword" required />
                    </div>
                  <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" name="changePassword">Change Password</button>
                  <button type="reset" class="btn btn-outline-primary" name="resetData">Clear Data</button>
                  </div>
                </form>
                </div>
            </div>
            <!-- .modal-content -->
        </div>
        <!-- .modal-dialog -->
    </div>
    <!-- Modal End -->


     <!--FUND ACCOUNT FORM-->
<div class="modal fade sho d-bloc" id="fundAccount" tabindex="-1" aria-labelledby="fundAccountModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h6>Fund Your Account</span></h6>
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <span class="btn-close badge bg-outline-warning p-2 fs-4">&times;</span>
                </a>
        </div>
                <div class="modal-body">
                    <p>Use this form to deposit funds into your account</p>
                    <form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="fundingRequestForm">
                  <div class="form-group">
                      <input type="hidden" name="ftxn" value="<?= 'TXN' . mt_rand(100000, 999999); ?>" readonly>
                      <input type="hidden" name="ffirstname" value="<?= isset($firstname) ? htmlspecialchars($firstname) : 'User'; ?>" readonly>
                      <input type="hidden" name="flastname" value="<?= isset($lastname) ? htmlspecialchars($lastname) : 'User'; ?>" readonly>
                      <input type="hidden" name="femail" value="<?= isset($user_email) ? htmlspecialchars($user_email) : 'User'; ?>" readonly>
                      <input type="hidden" name="fusername" value="<?= isset($userName) ? htmlspecialchars($userName) : 'User'; ?>" readonly>
                  </div>

                  <div class="form-group mb-3">
                      <label for="famount" class="form-label">Enter Amount</label>
                      <input type="number" class="form-control" id="famount" name="famount" placeholder="Enter amount" min="0" step="0.00001" required>
                  </div>
                        
                  <div class="form-group mb-3">
                      <label for="fcurrency_id" class="form-label">Select currency to fund</label>
                      <select class="form-select" id="fcurrency_id" name="fcurrency_id" required>
                          <option value="">Choose a currency</option>
                          <?php foreach(fetchAllWalletAddresses($con) as $allWallets): ?>
                            <option value="<?= htmlspecialchars($allWallets['wallet']); ?>" 
                                    data-address="<?= htmlspecialchars($allWallets['address']); ?>" 
                                    data-qrcode="<?= htmlspecialchars($allWallets['qrcode']); ?>">
                                <?= htmlspecialchars($allWallets['wallet']); ?>
                                <?php if (!empty($allWallets['wallet_tag'])): ?>
                                    (<?= htmlspecialchars($allWallets['wallet_tag']); ?>)
                                <?php endif; ?>
                            </option>
                        <?php endforeach; ?>
                      </select>
                  </div>
                               
                <div id="walletDetails" style="display: none;">
                    <div class="form-group mb-3">
                        <label for="wallet_address" class="form-label">Wallet Address to pay to</label>
                        <input type="text" class="form-control" id="wallet_address" name="wallet_address" readonly>
                        <button type="button" class="btn btn-outline-secondary mt-2" onclick="copyWalletAddress()">Copy Address</button>
                    </div>
                    <div class="form-group mb-3">
                        <label for="qrcode" class="form-label">QR Code</label><br>
                        <img id="qrcode_image" src="" alt="QR Code" style="max-width: 200px; height:200px;" title="Scan QR code to pay">
                    </div> 
                </div>
                <div class="form-text mb-3">
                       Pay into the wallet address and keep your transaction proof for later, then come back and click proceed to continue.
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="fundButton" name="fundAccount">Proceed <i class="icofont-double-right"></i></button>
                <button type="reset" class="btn btn-outline-primary" name="resetData">Clear Data</button>
                </div>
            </form>
                </div>
            </div>
            <!-- .modal-content -->
        </div>
        <!-- .modal-dialog -->
    </div>
    <!-- Modal End -->

     <!--WITHDRAW FUND FORM-->
<div class="modal fade sho d-bloc" id="withdrawFund" tabindex="-1" aria-labelledby="withdrawFundModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-sm modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h6>Request Withdrawal</span></h6>
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <span class="btn-close badge bg-outline-warning p-2 fs-4">&times;</span>
                </a>
        </div>
                <div class="modal-body">
                <p>Use this form to request withdrawal</p>  
                <form method="POST" action="finance.php" name="withdrawalRequestForm">
                  <div class="form-group">
                      <input type="hidden" name="wtxn" value="<?= 'TXN' . mt_rand(100000, 999999); ?>" readonly>
                      <input type="hidden" name="wfirstname" value="<?php if(isset($firstname)){echo $firstname;}else{echo "User";}?>" readonly>
                      <input type="hidden" name="wlastname" value="<?php if(isset($lastname)){echo $lastname;}else{echo "User";}?>" readonly>  
                      <input type="hidden" name="wemail" value="<?php if(isset($user_email)){echo $user_email;}else{echo "User";}?>" readonly>
                      <input type="hidden" name="wusername" value="<?php if(isset($userName)){echo $userName;}else{echo "User";}?>" readonly>    
                  </div>

                  <div class="form-group mb-3">
                      <label for="amount" class="form-label">Amount</label>
                      <input type="number" class="form-control" id="amount" name="wamount" placeholder="Enter amount" min="0" step="0.00001" required>
                  </div>
                  
                  <div class="form-group mb-3">
                      <label for="currency_id" class="form-label">Select currency</label>
                      <select class="form-select" id="currency_id2" name="wcurrency_id" required>
                          <option value="">Choose a currency</option>
                          <?php foreach(fetchUniqueWallets($con) as $uniqueWallet): ?>
                            <option value="<?= htmlspecialchars($uniqueWallet['wallet']) ?>">
                                <?= htmlspecialchars($uniqueWallet['wallet']); ?>
                            </option>
                        <?php endforeach; ?>
                      </select>
                  </div>

                  <div class="form-group mb-3">
                      <label for="address" class="form-label">Wallet Address</label>
                      <input type="text" class="form-control" id="amount" name="waddress" placeholder="Enter your wallet address" required>
                  </div>
                  <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" name="withdraw">Proceed <i class="icofont-double-right"></i></button>
                  <button type="reset" class="btn btn-outline-primary" name="resetData">Clear Data</button>
                  </div>
              </form>

                </div>
            </div>
            <!-- .modal-content -->
        </div>
        <!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
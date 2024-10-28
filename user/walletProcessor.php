<?php
// Include required files
include "../function.php"; 
checkUserLogin();
use phpmailer\phpmailer\PHPMailer;
use phpmailer\phpmailer\SMTP;
use phpmailer\phpmailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

//Load Composer's autoloader
require '../vendor/autoload.php';

$config = require_once '../emailConfig.php';

// Check if the form was submitted
if (isset($_POST['addNewAddress'])) {
    // Sanitize and extract the user input
    $wallet = sanitize($_POST['cryptocurrency']);; // Default wallet type (could be dynamic if needed)
    $address = sanitize($_POST['newAddress']);
    $walletTag = sanitize($_POST['newWalletTag']);
    $wallet_owner = sanitize($_POST['user']);

    // Handle file upload (optional)
    $qrcode = null;
    if (isset($_FILES['qrcode']) && $_FILES['qrcode']['error'] == UPLOAD_ERR_OK) {
        $upload_dir = '../assets/user-uploads/';
        $qrcode = basename($_FILES['qrcode']['name']);
        $upload_file = $upload_dir . $qrcode;

        // Check file size (must be less than or equal to 512KB)
        if ($_FILES['qrcode']['size'] > 512000) {
            echo "<script>alert('Error: File size exceeds 512KB'); window.location='wallet.php';</script>";
            exit;
        }

        // Check file type (must be JPEG, JPG, or PNG)
        $file_type = strtolower(pathinfo($upload_file, PATHINFO_EXTENSION));
        $allowed_types = ['jpg', 'jpeg', 'png'];
        if (!in_array($file_type, $allowed_types)) {
            echo "<script>alert('Error: Only JPEG, JPG, and PNG files are allowed'); window.location='wallet.php';</script>";
            exit;
        }

        // Move the uploaded file to the desired directory
        if (!move_uploaded_file($_FILES['qrcode']['tmp_name'], $upload_file)) {
            echo "<script>alert('Error: Failed to upload file'); window.location='wallet.php';</script>";
            exit;
        }
    }

    // Prepare and bind the SQL statement
    $stmt = $con->prepare("INSERT INTO wallet_addresses (wallet, address, wallet_tag, qrcode, wallet_owner) VALUES (?, ?, ?, ?, ?)");
    if ($stmt === false) {
        error_log("Error preparing statement: " . $con->error);
        echo "<script>alert('Error: Could not prepare database statement'); window.location='wallet.php';</script>";
        exit;
    }

    $stmt->bind_param("sssss", $wallet, $address, $walletTag, $qrcode, $wallet_owner);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('New wallet created successfully'); window.location='wallet.php';</script>";
    } else {
        echo "<script>alert('Error: Failed to create wallet'); window.location='wallet.php';</script>";
        error_log("Error executing statement: " . $stmt->error);
    }

    // Close the statement
    $stmt->close();
}

//DELETE WALLET
if (isset($_GET['confirmDelete']) && !empty($_GET['confirmDelete'])) {
    $confirmDelete = $con->real_escape_string($_GET['confirmDelete']);
        echo"<script>window.alert('Click the OK button to permanently delete this wallet')</script>";
        $delete_wallet ="DELETE FROM `wallet_addresses` WHERE `id_no`='$confirmDelete'";
        if($con->query($delete_wallet)){echo "<script>window.location='wallet.php'</script>";}
        else{
            echo "<script>alert('Error: We could not perform this operation. Contact support for assistance');window.location='wallet.php';</script>";
        }
       }


//ADD NEW BANK ACCOUNT
// Check if the form was submitted
if (isset($_POST['addBank'])) {
    //Sanitize and extract the user input
    $accountName = sanitize($_POST['account_name']);
    $nubanIban = sanitize($_POST['account_number']);
    $sortcode = sanitize($_POST['sortcode']);
    $swiftCode = sanitize($_POST['swiftcode']);
    $bankName = sanitize($_POST['bank_name']);
    $wallet_owner = isset($_SESSION['user_email']) ? sanitize($_SESSION['user_email']) : null;

    // Check if required fields are filled
    if (empty($accountName)  || empty($nubanIban) || empty($bankName)) {
        echo "<script>alert('Error: Account name, Account number, and Bank name must be provided'); window.location='wallet.php';</script>";
        exit;
    }

    // Prepare and bind the SQL statement
    $stmt = $con->prepare("INSERT INTO bank_accounts (account_name, account_number, sortcode, swiftcode, bank_name, account_owner) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $accountName, $nubanIban, $sortcode, $swiftCode, $bankName, $wallet_owner);

    // Execute the statement and provide feedback
    if ($stmt->execute()) {
        echo "<script>alert('New bank information created successfully'); window.location='wallet.php';</script>";
    } else {
        echo "<script>alert('Error: Failed to add bank account'); window.location='wallet.php';</script>";
    }

    // Close the statement
    $stmt->close();
}

//DELETE BANK
if (isset($_GET['confirmDeleteBank']) && !empty($_GET['confirmDeleteBank'])) {
    $confirmDeleteBank = $con->real_escape_string($_GET['confirmDeleteBank']);
        echo"<script>window.alert('Click the OK button to permanently delete this bank')</script>";
        $delete_bank ="DELETE FROM `bank_accounts` WHERE `id`='$confirmDeleteBank'";
        if($con->query($delete_bank)){echo "<script>window.location='wallet.php'</script>";}
        else{
            echo "<script>alert('Error: We could not perform this operation. Contact support for assistance');window.location='wallet.php';</script>";
        }
}

//UPDATE ORDER STATUS TO CANCELLED
if (isset($_GET['confirmTradeCancel']) && !empty($_GET['confirmTradeCancel'])) {
    $confirmTradeCancel = $con->real_escape_string($_GET['confirmTradeCancel']);
        echo"<script>window.alert('Success: Action carried out successfully. Click the OK button to proceed')</script>";
        $update_user_trade ="UPDATE `exchanger` SET `order_status` = 'cancelled' WHERE `id`='$confirmTradeCancel'";
        if($con->query( $update_user_trade)){echo "<script>window.location='exchange.php'</script>";}
        else{
            echo "<script>alert('Error: We could not perform this operation. Contact support for assistance');window.location='exchange.php';</script>";
        }
}


 //TRANSFER MONEY PROCESSOR
    // Check if the form is submitted
if (isset($_POST['transferFund'])) {
    // Sanitize user inputs
    $senderFirstname = sanitize($_POST['senderFirstname']);
    $senderLastname = sanitize($_POST['senderLastname']);
    $senderUsername = sanitize($_POST['senderUsername']);
    $txnID = sanitize($_POST['txnID']);
    $senderEmail = sanitize($_POST['senderEmail']);
    $senderWallet = sanitize($_POST['senderWallet']);
    $transferCurrency = sanitize($_POST['transferCurreny']);
    $transferAmount = $_POST['transferAmount'];
    $recipient = sanitize($_POST['recipient']);
    $recipientMessage = sanitize($_POST['recipientMessage']);
    $prole = "fund transfer";
    $pstatus = "auto approved";

    // Check if the user's balance is sufficient
    $senderBalance = floatval(preg_replace('/[^\d.]/', '', calculateUserTotalBalance())); // This will return the user's balance

    // Check if the sender has enough balance
    if ($transferAmount > $senderBalance) {
        echo "<script>alert('Error: Insufficient funds. Please, load up on funds and try again!'); window.location='wallet.php';</script>";
        exit;
    }

    // Fetch recipient details from the users table
    $sql = "SELECT user_email, firstname, lastname, asset_address, userName FROM users WHERE user_email = ? OR asset_address = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('ss', $recipient, $recipient); // Bind the recipient email or wallet address
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 0) {
        // No recipient found
        echo "<script>alert('Error: Recipient not found. Please check the recipient email or wallet address.'); window.location='wallet.php';</script>";
        exit;
    }
    
    // Fetch the recipient data
    $recipientData = $result->fetch_assoc();
    $recipientEmail = $recipientData['user_email'];
    $recipientFirstname = $recipientData['firstname'];
    $recipientLastname = $recipientData['lastname'];
    $recipientWallet = $recipientData['asset_address'];
    $recipientUsername = $recipientData['userName'];

    // Deduct balance and update (implement this)
    //$newBalance = $senderBalance - $transferAmount;
    //updateUserBalance($senderUusername, $newBalance); // Implement this function

    // Update the peer_transfer table
    $updateSql = "INSERT INTO peer_transfer (ptxn, seller_email, seller_username, seller_wallet, buyer_email, buyer_username, buyer_wallet, seller_amount, buyer_amount, first_currency, second_currency, prole, recipient_message, pstatus)
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $updateStmts = $con->prepare($updateSql);
    $updateStmts->bind_param(
        'sssssssddsssss',
        $txnID,
        $senderEmail,
        $senderUsername,
        $senderWallet,
        $recipientEmail,
        $recipientUsername,
        $recipientWallet,
        $transferAmount,
        $transferAmount,
        $transferCurrency,
        $transferCurrency,
        $prole,
        $recipientMessage,
        $pstatus
    );
    if ($updateStmts->execute()) {
        // If the database update is successful, send the emails notification to both sender and recipient using PHPMailer
    $mail = new PHPMailer(true);

    try {
         // Server settings
         $mail->isSMTP();
         $mail->Host = $config['smtp']['host'];
         $mail->SMTPAuth = true;
         $mail->Username = $config['smtp']['username'];
         $mail->Password = $config['smtp']['password'];
         $mail->SMTPSecure = $config['smtp']['encryption'];
         $mail->Port = $config['smtp']['port'];

         // Set encryption based on config
         if ($config['smtp']['encryption'] === 'tls') {
             $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
         } elseif ($config['smtp']['encryption'] === 'ssl') {
             $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
         }

        // Sender's Email
        $mail->setFrom($config['email']['from_address'], $config['email']['from_name']);
        
        // Email to Sender
        $mail->addAddress($senderEmail);
        $mail->isHTML(true);
        $mail->Subject = 'Fund Transfer Confirmation';
        $mail->Body    = "Dear $senderFirstname  $senderLastname,<br>
                          Your transfer of $transferAmount $transferCurrency to $recipientFirstname  $recipientLastname was successful.<br>
                          Transaction ID: $txnID<br><br>
                          Thank you for using our service.";

        $mail->send(); // Send the email to the sender

        // Email to Recipient
        $mail->clearAddresses();
        $mail->addAddress($recipientEmail);
        $mail->isHTML(true);
        $mail->Subject = 'You Have Received a Fund Transfer';
        $mail->Body    = "Dear $recipientFirstname &nbsp; $recipientLastname,<br>
                          You have received $transferAmount $transferCurrency from $senderFirstname &nbsp; $senderLastname.<br>
                          Transaction ID: $txnID.<br>
                          Message: $recipientMessage.<br><br>
                          Thank you for using our service.";
        $mail->send(); // Send the email to the recipient

        // If everything is successful
        echo "<script>alert('Transfer successful. Email notifications sent.'); window.location='wallet.php';</script>";
    } catch (Exception $e) {
        // Handle errors in sending email
        error_log("Error: {$mail->ErrorInfo}");
        echo "<script>alert('Transfer successful, Check your dashboard for more info'); window.location='wallet.php';</script>";
    }
} else {
    // Handle database update failure
    echo "<script>alert('Error: Transfer failed. Please try again.'); window.location='wallet.php';</script>";
}
} 
       
     // Close the database connection
     $con->close();
    ?>

    
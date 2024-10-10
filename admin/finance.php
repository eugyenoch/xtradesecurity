<?php
use phpmailer\phpmailer\PHPMailer;
use phpmailer\phpmailer\SMTP;
use phpmailer\phpmailer\Exception;

// Include required files
include "../function.php"; 
checkAdminLogin();
/** @var mysqli $con */

//FUNDING
//DELETE FUNDING REQUESTS
if (isset($_GET['deleteFund']) && !empty($_GET['deleteFund'])) {
    $deleteFund = $con->real_escape_string($_GET['deleteFund']);
    //Prepare statement
    $stmt = $con->prepare("DELETE FROM fund WHERE id_no = ?");
    $stmt->bind_param("s", $deleteFund);

    if ($stmt->execute()) {
        echo "<script>alert('Record deleted successfully'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: The operation could not be performed'); window.location='user-profile.php';</script>";
    }
}

//APPROVE FUND
if (isset($_GET['approveFund']) && !empty($_GET['approveFund'])) {
    $approveFund = $con->real_escape_string($_GET['approveFund']);
    
    // Corrected SQL query
    $approve_fund = "UPDATE fund SET fund_status='approved', approved_at=NOW() WHERE id_no = '$approveFund'";
    
    if ($con->query($approve_fund) === TRUE) {
        echo "<script>alert('Success: Funding Approved'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: The operation could not be performed'); window.location='user-profile.php';</script>";
    }
}


//DISAPPROVE FUND
if (isset($_GET['disapproveFund']) && !empty($_GET['disapproveFund'])) {
    $disapproveFund = $con->real_escape_string($_GET['disapproveFund']);
    
    // Corrected SQL query
    $disapprove_fund = "UPDATE fund SET fund_status='pending', is_locked = 'no', lock_duration = NULL, approved_at=NULL WHERE id_no = '$disapproveFund'";
    
    if ($con->query($disapprove_fund) === TRUE) {
        echo "<script>alert('Success: Funding Disapproved'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: The operation could not be performed'); window.location='user-profile.php';</script>";
    }
}


// UPDATE FUND
if (isset($_POST['updateFund'])) {
    // Retrieve and sanitize user input
    $fund_txn = $_POST['funding_txn'];
    $fund_email = $_POST['funding_email'];
    $fund_amount = sanitize($_POST['fund_amount']);
    $fund_profit = sanitize($_POST['fund_profit']);

   // Update query
   $stmt = $con->prepare("UPDATE fund SET fund_amount = ?, fund_profit = ? WHERE ftxn = ? AND user_email = ?");
    
   // Bind parameters
   // Assuming fund_amount and fund_profit are decimal values, and ftxn is a string.
   // Adjust the parameter types as needed (e.g., "d" for double/decimal, "s" for string).
   $stmt->bind_param("ddss", $fund_amount, $fund_profit, $fund_txn, $fund_email);


    // Execute the statement
    if ($stmt->execute()) {
       echo "<script>alert('Success: Record updated'); window.location='user-profile.php';</script>";
        echo  $stmt->error;
    } else {
       echo "<script>alert('Error: Could not update record'); window.location='user-profile.php';</script>";
        echo $stmt->error;
    }
    
}

//WITHDRAWAL
//DELETE WITHDRAWAL REQUESTS
if (isset($_GET['deleteWithdraw']) && !empty($_GET['deleteWithdraw'])) {
    $deleteWithdraw = $con->real_escape_string($_GET['deleteWithdraw']);
    //Prepare statement
    $stmt = $con->prepare("DELETE FROM withdraw WHERE id_no = ?");
    $stmt->bind_param("s", $deleteWithdraw);

    if ($stmt->execute()) {
        echo "<script>alert('Record deleted successfully'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: The operation could not be performed'); window.location='user-profile.php';</script>";
    }
}

// APPROVE WITHDRAWAL
if (isset($_GET['approveWithdraw']) && !empty($_GET['approveWithdraw'])) {
    $approveWithdraw = $con->real_escape_string($_GET['approveWithdraw']);

    // Fetch user information based on the withdrawal request
    $userQuery = "SELECT user_email, firstname, lastname, withdraw_amount FROM withdraw WHERE id_no = '$approveWithdraw'";
    $userResult = $con->query($userQuery);

    if ($userResult->num_rows > 0) {
        $userInfo = $userResult->fetch_assoc();
        $userEmail = $userInfo['user_email'];
        $userFirstname = $userInfo['firstname'];
        $userLastname = $userInfo['lastname'];
        $withdrawAmount = $userInfo['withdraw_amount'];
        $formatted_withdraw_amount = '$'.number_format($withdrawAmount,2);

        // Update the withdrawal status
        $approve_withdraw = "UPDATE withdraw SET withdraw_status='approved', approved_at=NOW() WHERE id_no = '$approveWithdraw'";
        if ($con->query($approve_withdraw) === TRUE) {

            require '../vendor/phpmailer/phpmailer/src/Exception.php';
            require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
            require '../vendor/phpmailer/phpmailer/src/SMTP.php';

            // Load Composer's autoloader
            require '../vendor/autoload.php';

            $config = require_once '../emailConfig.php';

            // Send verification email
            $mail = new PHPMailer(true);
            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host = $config['smtp']['host'];
                $mail->SMTPAuth = true;
                $mail->Username = $config['smtp']['username'];
                $mail->Password = $config['smtp']['password'];
                $mail->Port = $config['smtp']['port'];

                // Set encryption based on config
                if ($config['smtp']['encryption'] === 'tls') {
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                } elseif ($config['smtp']['encryption'] === 'ssl') {
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                }

                // Recipients
                $mail->setFrom($config['email']['from_address'], $config['email']['from_name']);
                $mail->addAddress($userEmail, $userFirstname . ' ' . $userLastname);

                // Email Content
                $mail->isHTML(true);
                $mail->Subject = 'Withdrawal Notification';
                $mail->Body = "Dear $userFirstname $userLastname,<br><br>Your withdrawal request for the sum of $formatted_withdraw_amount was approved and has been paid to you.<br><br>Best Regards,<br>XTrade Security LTD";
                $mail->AltBody = "Dear $userFirstname $userLastname,\n\nYour withdrawal request for the sum of $formatted_withdraw_amount was approved and has been paid to you.\n\nBest Regards,\nXTrade Security LTD";

                $mail->send();

                // Show success message
                echo "<script>alert('Success: Withdrawal Approved and Email Sent'); window.location='user-profile.php';</script>";

            } catch (Exception $e) {
                // Log error and show partial success message
                error_log("Email sending failed: " . $mail->ErrorInfo);
                echo "<script>alert('Success: Withdrawal Approved, but the email could not be sent.'); window.location='user-profile.php';</script>";
            }

        } else {
            echo "<script>alert('Error: The operation could not be performed'); window.location='user-profile.php';</script>";
        }
    } else {
        echo "<script>alert('Error: No matching withdrawal record found'); window.location='user-profile.php';</script>";
    }
}


//DISAPPROVE WITHDRAWAL
if (isset($_GET['disapproveWithdraw']) && !empty($_GET['disapproveWithdraw'])) {
    $disapproveWithdraw = $con->real_escape_string($_GET['disapproveWithdraw']);
    $disapprove_withdraw = "UPDATE withdraw SET withdraw_status='pending', approved_at=NULL WHERE id_no = '$disapproveWithdraw'";
    if ($con->query($disapprove_withdraw) === TRUE) {
        echo "<script>alert('Success: Withdrawal Disapproved'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: The operation could not be performed'); window.location='user-profile.php';</script>";
    }
}


//TRANSACTION
//DELETE TRANSACTION REQUESTS
if (isset($_GET['deleteTransaction']) && !empty($_GET['deleteTransaction'])) {
    $deleteTransaction = $con->real_escape_string($_GET['deleteTransaction']);
    //Prepare statement
    $stmt = $con->prepare("DELETE FROM transaction WHERE id_no = ?");
    $stmt->bind_param("s", $deleteTransaction);

    if ($stmt->execute()) {
        echo "<script>alert('Success: Transaction deleted successfully'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: The operation could not be performed'); window.location='user-profile.php';</script>";
    }
}

//APPROVE TRANSACTION
if (isset($_GET['approveTransaction']) && !empty($_GET['approveTransaction'])) {
    $approveTransaction = $con->real_escape_string($_GET['approveTransaction']);
    $approve_transaction ="UPDATE transaction SET tstatus='approved', approved_at=NOW() WHERE id_no = '$approveTransaction'";
    if ($con->query($approve_transaction) === TRUE) {
        echo "<script>alert('Success:Transaction Approved'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: The operation could not be performed'); window.location='user-profile.php';</script>";
    }
}

//DISAPPROVE TRANSACTION
if (isset($_GET['disapproveTransaction']) && !empty($_GET['disapproveTransaction'])) {
    $disapproveTransaction = $con->real_escape_string($_GET['disapproveTransaction']);
    $disapprove_transaction = "UPDATE transaction SET tstatus='pending', approved_at=NULL WHERE id_no = '$disapproveTransaction'";
    if ($con->query($disapprove_transaction) === TRUE) {
        echo "<script>alert('Success: Transaction Disapproved'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: The operation could not be performed'); window.location='user-profile.php';</script>";
    }
}

// UPDATE TRANSACTION
if (isset($_POST['updateTransaction'])) {
    // Retrieve and sanitize user input
    $transaction_txn = $_POST['transaction_txn'];
    $transaction_email= $_POST['transaction_email'];
    $transaction_amount = sanitize($_POST['transaction_amount']);
    $transaction_profit = sanitize($_POST['transaction_profit']);

    // Remove any '%' symbol for interest if present
    // $percentageInput = str_replace('%', '', $percentageInput);

    // Convert to decimal
   // $decimalValue = $percentageInput / 100;

   // Update query
   $stmt = $con->prepare("UPDATE transaction SET tamount = ?, tprofit = ? WHERE txn = ? AND user_email = ?");
    
   // Bind parameters
   // Assuming fund_amount and fund_profit are decimal values, and ftxn is a string.
   // Adjust the parameter types as needed (e.g., "d" for double/decimal, "s" for string).
   $stmt->bind_param("ddss", $transaction_amount, $transaction_profit, $transaction_txn, $transaction_email);


    // Execute the statement
    if ($stmt->execute()) {
       echo "<script>alert('Success: Transaction updated'); window.location='user-profile.php';</script>";
        echo  $stmt->error;
    } else {
       echo "<script>alert('Error: Could not update transaction'); window.location='user-profile.php';</script>";
        echo $stmt->error;
    }
    
}

//TRADE
//DELETE TRADE OR TRANSFER REQUEST
if (isset($_GET['deleteTrade']) && !empty($_GET['deleteTrade'])) {
    $deleteTrade = $con->real_escape_string($_GET['deleteTrade']);
    //Prepare statement
    $stmt = $con->prepare("DELETE FROM peer_transfer WHERE id_no = ?");
    $stmt->bind_param("s", $deleteTrade);

    if ($stmt->execute()) {
        echo "<script>alert('Success: Transaction deleted successfully'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: The operation could not be performed'); window.location='user-profile.php';</script>";
    }
}

//APPROVE TRADE OR TRANSFER
if (isset($_GET['approveTrade']) && !empty($_GET['approveTrade'])) {
    $approveTrade = $con->real_escape_string($_GET['approveTrade']);
    $approve_trade ="UPDATE peer_transfer SET pstatus='approved', approved_at=NOW() WHERE id_no = '$approveTrade'";
    if ($con->query($approve_trade) === TRUE) {
        echo "<script>alert('Success:Transaction Approved'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: The operation could not be performed'); window.location='user-profile.php';</script>";
    }
}

//DISAPPROVE TRANSACTION
if (isset($_GET['disapproveTrade']) && !empty($_GET['disapproveTrade'])) {
    $disapproveTrade = $con->real_escape_string($_GET['disapproveTrade']);
    $disapprove_trade = "UPDATE peer_transfer SET pstatus='pending', approved_at=NULL WHERE id_no = '$disapproveTrade'";
    if ($con->query($disapprove_trade) === TRUE) {
        echo "<script>alert('Success: Transaction Disapproved'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: The operation could not be performed'); window.location='user-profile.php';</script>";
    }
}


//EXCHANGE TRANSACTION
//DELETE EXCHANGE TRANSACTION REQUEST
if (isset($_GET['deleteExchange']) && !empty($_GET['deleteExchange'])) {
    $deleteExchange = $con->real_escape_string($_GET['deleteExchange']);
    //Prepare statement
    $stmt = $con->prepare("DELETE FROM exchanger WHERE id = ?");
    $stmt->bind_param("s", $deleteExchange);

    if ($stmt->execute()) {
        echo "<script>alert('Success: Exchange transaction deleted successfully'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: The operation could not be performed'); window.location='user-profile.php';</script>";
    }
}

//MARK EXCHANGE TRANSACTION AS WIN
if (isset($_GET['approveExchange']) && !empty($_GET['approveExchange'])) {
    $approveExchange = $con->real_escape_string($_GET['approveExchange']);
    $approve_exchange ="UPDATE exchanger SET order_status='win', approved_at=NOW() WHERE id = '$approveExchange'";
    if ($con->query($approve_exchange) === TRUE) {
        echo "<script>alert('Success: Exchange transaction marked as win'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: The operation could not be performed'); window.location='user-profile.php';</script>";
    }
}

//MARK EXCHANGE TRANSACTION AS LOOSE
if (isset($_GET['disapproveExchange']) && !empty($_GET['disapproveExchange'])) {
    $disapproveExchange = $con->real_escape_string($_GET['disapproveExchange']);
    $disapprove_exchange = "UPDATE exchanger SET order_status='loose', approved_at=NULL WHERE id = '$disapproveExchange'";
    if ($con->query($disapprove_exchange) === TRUE) {
        echo "<script>alert('Success: Exchange transaction marked as loose'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: The operation could not be performed'); window.location='user-profile.php';</script>";
    }
}


// UPDATE EXCHANGE
if (isset($_POST['updateExchange'])) {
    // Retrieve and sanitize user input
    $EXtxn = $_POST['exchange_txn'];
    $EXemail= $_POST['exchange_email'];
    $EXamount = $_POST['exchange_amount'];
    // Remove any '%' symbol for interest if present
    // $percentageInput = str_replace('%', '', $percentageInput);

    // Convert to decimal
   // $decimalValue = $percentageInput / 100;

   // Update query
   $stmt = $con->prepare("UPDATE exchanger SET profit = ? WHERE txn = ? AND email = ?");
    
   // Bind parameters
   // Assuming fund_amount and fund_profit are decimal values, and ftxn is a string.
   // Adjust the parameter types as needed (e.g., "d" for double/decimal, "s" for string).
   $stmt->bind_param("dss", $EXamount, $EXtxn, $EXemail);


    // Execute the statement
    if ($stmt->execute()) {
       echo "<script>alert('Success: Transaction updated'); window.location='user-profile.php';</script>";
        echo  $stmt->error;
    } else {
       echo "<script>alert('Error: Could not update transaction'); window.location='user-profile.php';</script>";
        echo $stmt->error;
    }
    
}
     // Close the database connection
     $con->close();
?>
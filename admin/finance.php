<?php
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
    $approve_fund ="UPDATE fund SET fund_status='approved' WHERE id_no = '$approveFund'";
    if ($con->query($approve_fund) === TRUE) {
        echo "<script>alert('Success: Funding Approved'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: The operation could not be performed'); window.location='user-profile.php';</script>";
    }
}

//DISAPPROVE FUND
if (isset($_GET['disapproveFund']) && !empty($_GET['disapproveFund'])) {
    $disapproveFund = $con->real_escape_string($_GET['disapproveFund']);
    $disapprove_fund = "UPDATE fund SET fund_status='pending' WHERE id_no = '$disapproveFund'";
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

//APPROVE WITHDRAWAL
if (isset($_GET['approveWithdraw']) && !empty($_GET['approveWithdraw'])) {
    $approveWithdraw = $con->real_escape_string($_GET['approveWithdraw']);
    $approve_withdraw ="UPDATE withdraw SET withdraw_status='approved' WHERE id_no = '$approveWithdraw'";
    if ($con->query($approve_withdraw) === TRUE) {
        echo "<script>alert('Success: Withdrawal Approved'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: The operation could not be performed'); window.location='user-profile.php';</script>";
    }
}

//DISAPPROVE WITHDRAWAL
if (isset($_GET['disapproveWithdraw']) && !empty($_GET['disapproveWithdraw'])) {
    $disapproveWithdraw = $con->real_escape_string($_GET['disapproveWithdraw']);
    $disapprove_withdraw = "UPDATE withdraw SET withdraw_status='pending' WHERE id_no = '$disapproveWithdraw'";
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
    $approve_transaction ="UPDATE transaction SET tstatus='approved' WHERE id_no = '$approveTransaction'";
    if ($con->query($approve_transaction) === TRUE) {
        echo "<script>alert('Success:Transaction Approved'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: The operation could not be performed'); window.location='user-profile.php';</script>";
    }
}

//DISAPPROVE TRANSACTION
if (isset($_GET['disapproveTransaction']) && !empty($_GET['disapproveTransaction'])) {
    $disapproveTransaction = $con->real_escape_string($_GET['disapproveTransaction']);
    $disapprove_transaction = "UPDATE transaction SET tstatus='pending' WHERE id_no = '$disapproveTransaction'";
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
    $approve_trade ="UPDATE peer_transfer SET pstatus='approved' WHERE id_no = '$approveTrade'";
    if ($con->query($approve_trade) === TRUE) {
        echo "<script>alert('Success:Transaction Approved'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: The operation could not be performed'); window.location='user-profile.php';</script>";
    }
}

//DISAPPROVE TRANSACTION
if (isset($_GET['disapproveTrade']) && !empty($_GET['disapproveTrade'])) {
    $disapproveTrade = $con->real_escape_string($_GET['disapproveTrade']);
    $disapprove_trade = "UPDATE peer_transfer SET pstatus='pending' WHERE id_no = '$disapproveTrade'";
    if ($con->query($disapprove_trade) === TRUE) {
        echo "<script>alert('Success: Transaction Disapproved'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: The operation could not be performed'); window.location='user-profile.php';</script>";
    }
}


     // Close the database connection
     $con->close();
?>
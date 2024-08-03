<?php
// Include required files
include "../function.php"; 
checkAdminLogin();

//DELETE FUNDING REQUESTS
if (isset($_GET['deleteFund']) && !empty($_GET['deleteFund'])) {
    $deleteFund = $con->real_escape_string($_GET['deleteFund']);
    //Prepare statement
    $stmt = $con->prepare("DELETE FROM fund WHERE id_no = ?");
    $stmt->bind_param("s", $deleteFund);

    if ($stmt->execute()) {
        echo "<script>alert('Record deleted successfully'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: We could not perform this operation'); window.location='user-profile.php';</script>";
    }
}

//APPROVE FUND
if (isset($_GET['approveFund']) && !empty($_GET['approveFund'])) {
    $approveFund = $con->real_escape_string($_GET['approveFund']);
    $approve_fund ="UPDATE fund SET fund_status='approved' WHERE id_no = '$approveFund'";
    if ($con->query($approve_fund) === TRUE) {
        echo "<script>alert('Success: Funding Approved'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: We could not perform this operation'); window.location='user-profile.php';</script>";
    }
}

//DISAPPROVE FUND
if (isset($_GET['disapproveFund']) && !empty($_GET['disapproveFund'])) {
    $disapproveFund = $con->real_escape_string($_GET['disapproveFund']);
    $disapprove_fund = "UPDATE fund SET fund_status='pending' WHERE id_no = '$disapproveFund'";
    if ($con->query($disapprove_fund) === TRUE) {
        echo "<script>alert('Success: Funding Disapproved'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: We could not perform this operation'); window.location='user-profile.php';</script>";
    }
}

// UPDATE FUND
if (isset($_POST['updateFund'])) {
    // Retrieve and sanitize user input
    $fund_ftxn = $_POST['funding_ftxn'];
    $fund_email = $_POST['funding_email'];
    $fund_amount = sanitize($_POST['fund_amount']);
    $fund_profit = sanitize($_POST['fund_profit']);

   // Update query
   $stmt = $con->prepare("UPDATE fund SET fund_amount = ?, fund_profit = ? WHERE ftxn = ? AND user_email = ?");
    
   // Bind parameters
   // Assuming fund_amount and fund_profit are decimal values, and ftxn is a string.
   // Adjust the parameter types as needed (e.g., "d" for double/decimal, "s" for string).
   $stmt->bind_param("ddss", $fund_amount, $fund_profit, $fund_ftxn, $fund_email);


    // Execute the statement
    if ($stmt->execute()) {
       echo "<script>alert('Success: Record updated'); window.location='user-profile.php';</script>";
        echo  $stmt->error;
    } else {
       echo "<script>alert('Error: Could not update record'); window.location='user-profile.php';</script>";
        echo $stmt->error;
    }
    
}


//DELETE WITHDRAWAL REQUESTS
if (isset($_GET['deleteWithdraw']) && !empty($_GET['deleteWithdraw'])) {
    $deleteWithdraw = $con->real_escape_string($_GET['deleteWithdraw']);
    //Prepare statement
    $stmt = $con->prepare("DELETE FROM withdraw WHERE id_no = ?");
    $stmt->bind_param("s", $deleteWithdraw);

    if ($stmt->execute()) {
        echo "<script>alert('Record deleted successfully'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: We could not perform this operation'); window.location='user-profile.php';</script>";
    }
}

//APPROVE WITHDRAWAL
if (isset($_GET['approveWithdraw']) && !empty($_GET['approveWithdraw'])) {
    $approveWithdraw = $con->real_escape_string($_GET['approveWithdraw']);
    $approve_withdraw ="UPDATE withdraw SET withdraw_status='approved' WHERE id_no = '$approveWithdraw'";
    if ($con->query($approve_withdraw) === TRUE) {
        echo "<script>alert('Success: Withdrawal Approved'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: We could not perform this operation'); window.location='user-profile.php';</script>";
    }
}

//DISAPPROVE WITHDRAWAL
if (isset($_GET['disapproveWithdraw']) && !empty($_GET['disapproveWithdraw'])) {
    $disapproveWithdraw = $con->real_escape_string($_GET['disapproveWithdraw']);
    $disapprove_withdraw = "UPDATE withdraw SET withdraw_status='pending' WHERE id_no = '$disapproveWithdraw'";
    if ($con->query($disapprove_withdraw) === TRUE) {
        echo "<script>alert('Success: Withdrawal Disapproved'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: We could not perform this operation'); window.location='user-profile.php';</script>";
    }
}

    
     // Close the database connection
     $con->close();
?>
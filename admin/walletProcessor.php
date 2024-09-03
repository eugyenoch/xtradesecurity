<?php
// Include required files
include "../function.php"; 
checkAdminLogin();

/** @var mysqli $con */
// Check if the form was submitted
if (isset($_POST['addNewAddress'])){
    // Sanitize and extract the user input
    $wallet = sanitize($_POST['newWallet']);
    $address = sanitize($_POST['newAddress']);
    $walletTag = sanitize($_POST['newWalletTag']);
    $wallet_owner = "admin";
    
    // Handle file upload (optional)
    $qrcode = null;
    if (isset($_FILES['qrcode']) && $_FILES['qrcode']['error'] == UPLOAD_ERR_OK) {
        $upload_dir = '../assets/user-uploads/';
        $qrcode = basename($_FILES['qrcode']['name']);
        $upload_file = $upload_dir . $qrcode;
        
        // Check file size (must be less than or equal to 512KB)
        if ($_FILES['qrcode']['size'] > 512000) {
            echo "<script>alert('Error: File size exceeds 512KB'); window.location='user-profile.php';</script>";
            exit;
        }
        
        // Check file type (must be JPEG, JPG, or PNG)
        $file_type = strtolower(pathinfo($upload_file, PATHINFO_EXTENSION));
        $allowed_types = array('jpg', 'jpeg', 'png');
        if (!in_array($file_type, $allowed_types)) {
            echo "<script>alert('Error: Only JPEG, JPG, and PNG files are allowed'); window.location='user-profile.php';</script>";
            exit;
        }
        
        // Move the uploaded file to the desired directory
        if (!move_uploaded_file($_FILES['qrcode']['tmp_name'], $upload_file)) {
            echo "<script>alert('Error: Failed to upload file'); window.location='user-profile.php';</script>";
            exit;
        }
    }
    
    // Prepare and bind
    $stmt = $con->prepare("INSERT INTO wallet_addresses (wallet, address, wallet_tag, qrcode, wallet_owner) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $wallet, $address, $walletTag, $qrcode, $wallet_owner);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('New wallet created successfully'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: Failure to create wallet'); window.location='user-profile.php';</script>";//$stmt->error;
    }
    
    // Close the statement
    $stmt->close();
}

//DELETE WALLET
if (isset($_GET['confirmDelete']) && !empty($_GET['confirmDelete'])) {
    $confirmDelete = $con->real_escape_string($_GET['confirmDelete']);
        echo"<script>window.alert('Click the OK button to permanently delete this wallet')</script>";
        $delete_wallet ="DELETE FROM `wallet_addresses` WHERE `id_no`='$confirmDelete'";
        if($con->query($delete_wallet)){echo "<script>window.location='user-profile.php'</script>";}
        else{
            echo "<script>alert('Error: We could not perform this operation');window.location='user-profile.php';</script>";
        }
       }
    
     // Close the database connection
     $con->close();
    ?>
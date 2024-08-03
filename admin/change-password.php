<?php
    // Include required files
    include "../function.php"; 
    checkAdminLogin();

// Check if the user is logged in
if (!isset($_SESSION['admin_session']) || empty($_SESSION['admin_session'])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST['changePassword'])){
    // Sanitize and extract user inputs
    $adminEmail = $_SESSION['admin_session'];
    $oldPassword = $_POST['oldPassword'];
    $newPassword = sanitize($_POST['newPassword']);
    $confirmPassword = sanitize($_POST['confirmPassword']);

    // Verify if new password and confirm password match
    if ($newPassword !== $confirmPassword) {
        echo "<scrip>alert('Error: New password and confirm password do not match!'); window.location='user-profile.php';</script>";
        exit;
    }

    // Verify old password
    $stmt = $con->prepare("SELECT user_pass FROM admin WHERE user_email = ?");
    $stmt->bind_param("s", $adminEmail);
    $stmt->execute();
    $stmt->bind_result($hashedOldPassword);
    $stmt->fetch();
    $stmt->close();

    if (md5($oldPassword) !== $hashedOldPassword) {
        echo "<script>alert('Error: Old password is incorrect!'); window.location='user-profile.php';</script>";
        exit;
    }

    // Hash the new password
    $hashedNewPassword = md5($newPassword);

    // Update the password in the database
    $stmt = $con->prepare("UPDATE admin SET user_pass = ? WHERE user_email = ?");
    $stmt->bind_param("ss", $hashedNewPassword, $adminEmail);

    if ($stmt->execute()) {
        echo "<script>alert('Success: Password changed successfully!'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: Could not update password!'); window.location='user-profile.php';</script>";
    }

    $stmt->close();
    $con->close();
}
?>

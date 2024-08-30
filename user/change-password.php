<?php
    // Include required files
    include "../function.php"; 
    checkUserLogin();

    /** @var mysqli $con  */

if (isset($_POST['changePassword'])){
    // Sanitize and extract user inputs
    $userEmail = $_SESSION['user_session'];
    $oldPassword = $_POST['oldPassword'];
    $newPassword = sanitize($_POST['newPassword']);
    $confirmPassword = sanitize($_POST['confirmPassword']);

    // Verify if new password and confirm password match
    if ($newPassword !== $confirmPassword) {
        echo "<script>alert('Error: New password and confirm password do not match!'); window.location='user-profile.php';</script>";
        exit;
    }

    // Verify old password
    $stmt = $con->prepare("SELECT user_pass FROM users WHERE user_email = ?");
    $stmt->bind_param("s", $userEmail);
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
    $stmt = $con->prepare("UPDATE users SET user_pass = ? WHERE user_email = ?");
    $stmt->bind_param("ss", $hashedNewPassword, $userEmail);

    if ($stmt->execute()) {
        echo "<script>alert('Success: Password changed successfully!'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: Could not update password!'); window.location='user-profile.php';</script>";
    }

    $stmt->close();
    $con->close();
}
?>
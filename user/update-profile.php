<?php
include '../function.php';
checkUserLogin();

/** @var mysqli $con */

    // Check if the user is logged in
    if (!isset($_SESSION['user_session']) || empty($_SESSION['user_session'])) {
        header("Location: login.php");
        exit;
    }

    $userEmail = $_SESSION['user_session'];
    $firstname = $lastname = $userName = $address = $city = $country = $phone = "";

    if (isset($_POST['updateProfile'])) {
        // Sanitize and extract user inputs
        $firstname = sanitize($_POST['firstname']);
        $lastname = sanitize($_POST['lastname']);
        $address = sanitize($_POST['address']);
        $city = sanitize($_POST['city']);
        $country = $_POST['country'];
        $phone = sanitize($_POST['phone']);

        // Update the user details in the database
        $stmt = $con->prepare("UPDATE users SET firstname = ?, lastname = ?, address = ?, city = ?, country = ?, phone = ? WHERE user_email = ? OR userName = ?");
        $stmt->bind_param("ssssssss", $firstname, $lastname, $address, $city, $country, $phone, $userEmail, $userEmail);

        if ($stmt->execute()) {
           echo "<script>alert('Success: Profile updated successfully!'); window.location='user-profile.php';</script>;";
        } else {
           echo "<script>alert('Error: Could not update profile!'); window.location='user-profile.php';</script>;";
        }
        $stmt->close();

    } else {
        // Fetch user details from the database
        $stmt = $con->prepare("SELECT firstname, lastname, userName, address, city, country, phone FROM users WHERE user_email = ? OR userName = ?");
        $stmt->bind_param("ss", $userEmail, $userEmail);
        $stmt->execute();
        $stmt->bind_result($firstname, $lastname, $userName, $address, $city, $country, $phone);
        $stmt->fetch();
        $stmt->close();
    }
    $con->close();
    ?>
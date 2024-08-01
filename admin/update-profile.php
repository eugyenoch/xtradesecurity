<?php
    // Include required files
    include "../function.php"; 

    // Check if the user is logged in
    if (!isset($_SESSION['admin_session']) || empty($_SESSION['admin_session'])) {
        header("Location: login.php");
        exit;
    }

    $adminEmail = $_SESSION['admin_session'];
    $firstname = $lastname = $userName = $address = $city = $country = $phone = "";

    if (isset($_POST['updateProfile'])) {
        // Sanitize and extract user inputs
        $firstname = sanitize($_POST['firstname']);
        $lastname = sanitize($_POST['lastname']);
        $userName = sanitize($_POST['userName']);
        $address = sanitize($_POST['address']);
        $city = sanitize($_POST['city']);
        $country = $_POST['country'];
        //$dialCode = $_POST['dialCode'];
        $phone = $_POST['phone'];

        // $newPhone = $dialCode . $phone;

        // Update the admin details in the database
        $stmt = $con->prepare("UPDATE admin SET firstname = ?, lastname = ?, userName = ?, address = ?, city = ?, country = ?, phone = ? WHERE user_email = ?");
        $stmt->bind_param("ssssssss", $firstname, $lastname, $userName, $address, $city, $country, $phone, $adminEmail);

        if ($stmt->execute()) {
           echo "<script>alert('Success: Profile updated successfully!'); window.location='user-profile.php';</script>;";
        } else {
           echo "<script>alert('Error: Could not update profile!'); window.location='user-profile.php';</script>;";
        }
        $stmt->close();

    } else {
        // Fetch admin details from the database
        $stmt = $con->prepare("SELECT firstname, lastname, userName, address, city, country, phone FROM admin WHERE user_email = ?");
        $stmt->bind_param("s", $adminEmail);
        $stmt->execute();
        $stmt->bind_result($firstname, $lastname, $userName, $address, $city, $country, $phone);
        $stmt->fetch();
        $stmt->close();
    }
    $con->close();
    ?>
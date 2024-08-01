<?php
// Start the session and include required files
include "../function.php";

// Check if the user is logged in
if (!isset($_SESSION['admin_session']) || empty($_SESSION['admin_session'])) {
    header("Location: login.php");
    exit;
}

// Handle the file upload
if (isset($_POST['upload'])) {
    // Check if a file was uploaded
    if (isset($_FILES['profilePic']) && $_FILES['profilePic']['error'] == UPLOAD_ERR_OK) {
        // Define the upload directory and file path
        $uploadDir = '../assets/user-uploads/';
        $fileTmpName = $_FILES['profilePic']['tmp_name'];
        $fileName = basename($_FILES['profilePic']['name']);
        $filePath = $uploadDir . $fileName;

        // Validate the file type (only images)
        $fileType = mime_content_type($fileTmpName);
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($fileType, $allowedTypes)) {
            die("Error: Only JPG, PNG, and GIF files are allowed.");
        }

        // Move the uploaded file to the designated directory
        if (move_uploaded_file($fileTmpName, $filePath)) {
            // Update the database with the new profile picture path
            $adminEmail = $_SESSION['admin_session'];
            $filePath = $con->real_escape_string($filePath);
            
            $stmt = $con->prepare("UPDATE admin SET photo = ? WHERE user_email = ?");
            $stmt->bind_param("ss", $filePath, $adminEmail);

            if ($stmt->execute()) {
                echo "<script>alert('Profile picture uploaded successfully!'); window.location='user-profile.php';</script>";
            } else {
                echo "<script>alert('Error updating profile picture in the database.'); window.location='user-profile.php';</script>";
            }

            $stmt->close();
        } else {
            echo "<script>alert('Error moving the uploaded file'); window.location='user-profile.php';</script>";
        }
    } else {
        echo "<script>alert('Error uploading the file. Ensure you have selected a file first'); window.location='user-profile.php';</script>";
    }
}

// Close the database connection
$con->close();
?>

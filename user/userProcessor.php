<?php
// Include required files
include "../function.php"; 
checkUserLogin();

/** @var mysqli $con */
//DELETE USER
if (isset($_GET['confirmDelete']) && !empty($_GET['confirmDelete'])) {
    $confirmDelete = $con->real_escape_string($_GET['confirmDelete']);
    $delete_user = "DELETE FROM `users` WHERE `id_no` = '$confirmDelete'";

    if ($con->query($delete_user) === TRUE) {
        echo "<script>alert('User deleted successfully'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: We could not perform this operation'); window.location='user-profile.php';</script>";
    }
}

//DELETE REF
if (isset($_GET['deleteRef']) && !empty($_GET['deleteRef'])) {
    $deleteRef = $con->real_escape_string($_GET['deleteRef']);
    $delete_ref = "DELETE FROM `referral` WHERE `id` = '$deleteRef'";

    if ($con->query($delete_ref) === TRUE) {
        echo "<script>alert('Affiliate deleted successfully'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: We could not perform this operation'); window.location='user-profile.php';</script>";
    }
}

//DELETE ADMIN
if (isset($_GET['deleteAdm']) && !empty($_GET['deleteAdm'])) {
    $deleteAdm = $con->real_escape_string($_GET['deleteAdm']);
    $delete_adm = "DELETE FROM `admin` WHERE `id_no` = '$deleteAdm'";

    if ($con->query($delete_adm) === TRUE) {
        echo "<script>alert('Admin deleted successfully'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: We could not perform this operation'); window.location='user-profile.php';</script>";
    }
}


 //DELETE NEWSLETTER SUBSCRIBER
if (isset($_GET['deleteNewsletter']) && !empty($_GET['deleteNewsletter'])) {
    $deleteNewsletter = $con->real_escape_string($_GET['deleteNewsletter']);
    $stmt = $con->prepare("DELETE FROM `newsletter` WHERE `id` = ?");
    $stmt->bind_param("s", $deleteNewsletter);

    if ($stmt->execute()) {
        echo "<script>alert('Subscriber deleted successfully'); window.location='user-profile.php';</script>";
    } else {
        echo "<script>alert('Error: We could not perform this operation'); window.location='user-profile.php';</script>";
    }
}   
     // Close the database connection
     $con->close();

     ?>
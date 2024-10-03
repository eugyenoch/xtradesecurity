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




if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['govt-id-verification'])) {
    $fullname = $_POST['fullname'];
    $emailAddress = $_POST['emailAddress'];
    $to = "customer@xtradesecurity.com";
    $subject = "ID Card Upload for KYC";
    $message = "{$fullname} with email address {$emailAddress}, has uploaded their ID card for KYC verification.";
    

    // Boundary for file attachment
    $boundary = md5(time());

    // Headers
    $headers = "From: no-reply@xtradesecurity.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

    // Message body
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($message));

    // Handle Front ID file
    if (isset($_FILES['front_id']) && $_FILES['front_id']['error'] == UPLOAD_ERR_OK) {
        $frontId = $_FILES['front_id']['tmp_name'];
        $frontIdName = $_FILES['front_id']['name'];
        $frontIdType = $_FILES['front_id']['type'];
        $frontIdContent = chunk_split(base64_encode(file_get_contents($frontId)));

        $body .= "--$boundary\r\n";
        $body .= "Content-Type: $frontIdType; name=\"$frontIdName\"\r\n";
        $body .= "Content-Disposition: attachment; filename=\"$frontIdName\"\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= $frontIdContent;
    }

    // Handle Back ID file
    if (isset($_FILES['back_id']) && $_FILES['back_id']['error'] == UPLOAD_ERR_OK) {
        $backId = $_FILES['back_id']['tmp_name'];
        $backIdName = $_FILES['back_id']['name'];
        $backIdType = $_FILES['back_id']['type'];
        $backIdContent = chunk_split(base64_encode(file_get_contents($backId)));

        $body .= "--$boundary\r\n";
        $body .= "Content-Type: $backIdType; name=\"$backIdName\"\r\n";
        $body .= "Content-Disposition: attachment; filename=\"$backIdName\"\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= $backIdContent;
    }

    // Final boundary
    $body .= "--$boundary--";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        // Redirect to the success modal
        header('Location: success.php');
        exit;
    } else {
        echo "<script>alert('Error: Failed to send ID card. Please try again.'); window.location='user-profile.php'</script>";
    }
} else {
    echo "<script>alert('Error: Invalid Request. Try again after some time'); window.location='user-profile.php'</script>";
}
    ?>


<?php
// NOT USED
if (isset($_POST['KYCUpload'])) {
    // Capture form data
    $idType = $_POST['id_type'];
    $country = $_POST['country'];

    // File upload configurations
    $targetDir = "uploads/kyc_docs/"; // Directory to save uploaded files
    $frontCard = $_FILES['frontCard']['name'];
    $backCard = $_FILES['backCard']['name'];

    $frontCardTmp = $_FILES['frontCard']['tmp_name'];
    $backCardTmp = $_FILES['backCard']['tmp_name'];

    // Generate unique filenames for the uploaded files
    $frontCardNewName = uniqid() . '_' . basename($frontCard);
    $backCardNewName = uniqid() . '_' . basename($backCard);

    $frontCardTarget = $targetDir . $frontCardNewName;
    $backCardTarget = $targetDir . $backCardNewName;

    // Validate and move the uploaded files to the target directory
    if (move_uploaded_file($frontCardTmp, $frontCardTarget) && move_uploaded_file($backCardTmp, $backCardTarget)) {
        // Files uploaded successfully, proceed to save data into the database

        // Prepare SQL query to update the users table
        $sql = "UPDATE users SET id_type = ?, country = ?, id_front = ?, id_back = ? WHERE username = ? OR email = ?";

        if ($stmt = $con->prepare($sql)) {
            // Bind parameters to the SQL query
            // Assuming that you have the current user's username stored in session or a similar mechanism
            $stmt->bind_param('ssssss', $idType, $country, $frontCardNewName, $backCardNewName, $_SESSION['user_session'], $_SESSION['user_session']);

            // Execute the query
            if ($stmt->execute()) {
                echo "<script>alert('KYC submission successful!');</script>";
            } else {
                echo "<script>alert('Error: Could not submit KYC. Please try again.');</script>";
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "<script>alert('Error: Could not prepare the database statement.');</script>";
        }
    } else {
        echo "<script>alert('Error: Could not upload files. Please try again.');</script>";
    }
}
?>

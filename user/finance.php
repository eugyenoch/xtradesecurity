<?php
// Include required files
include "../function.php"; 
checkUserLogin();

//SCRIPT FOR THE REQUEST WITHDRAWAL FORM
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form is submitted
if(isset($_POST['withdraw'])){
  //Extract variables from user input
  $wtxn = $_POST['wtxn'];
  $wemail = $_POST['wemail'];
  $wusername = $_POST['wusername']; 
  $wfirstname = $_POST['wfirstname'];
  $wlastname = $_POST['wlastname']; 
  $wcurrency = $_POST['wcurrency_id'];
  $wamount = floatval($_POST['wamount']);
  $waddress = sanitize($_POST['waddress']);

  // Insert data into the withdraw table
  $stmt = $con->prepare("INSERT INTO withdraw (wtxn, user_email, userName, firstname, lastname, withdraw_currency, withdraw_amount, withdraw_address) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssssds", $wtxn, $wemail, $wusername, $wfirstname, $wlastname, $wcurrency, $wamount, $waddress);
  if ($stmt->execute()) {
    // Success message
    echo "<script>alert('Success: Withdrawal request submitted successfully and pending approval'); window.location='user-profile.php';</script>";
} else {
    // Error message
    echo "<script>alert('Error: There was an error with your request, please try again after a while ');window.location='user-profile.php';</script>";
}

$stmt->close();
 }
}

//THE SUBSCRIPTION PLANS
// Silver subscription
if (isset($_POST['silver'])) {
    // Extract and sanitize variables from user input
    $email = sanitize($_POST['email']);
    $user = sanitize($_POST['user']);
    $stxn = sanitize($_POST['stxn']);
    $currency = sanitize($_POST['currency_id']);
    $amount = sanitize($_POST['silver_amount']);
    $interest = 0.10;
    $package = "Silver";

    // Check if the user's balance is sufficient
    $userBalance = floatval(preg_replace('/[^\d.]/', '', calculateUserTotalBalance())); // This will return the user's balance

    if ($userBalance >= $amount) {
        // Prepare SQL statement using prepared statements
        $sql_starter_update = $con->prepare("INSERT INTO transaction (txn, user_email, userName, tpackage, tamount, tcurrency, tinterest) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $sql_starter_update->bind_param("ssssdsd", $stxn, $email, $user, $package, $amount, $currency, $interest);

        // Execute the query
        if ($sql_starter_update->execute()) {
            echo "<script>alert('Your request is pending approval. Do not resubmit request.')</script>";
            echo "<script>location.href='user-profile.php'</script>";
        } else {
            echo "<script>alert('There was an error processing your request. Please try again later.')</script>";
            echo "<script>location.href='user-profile.php'</script>";            
        }

        // Close the prepared statement
        $sql_starter_update->close();
    } else {
        echo "<script>alert('Insufficient balance. Your current balance is $" . number_format($userBalance, 2) . "')</script>";
        echo "<script>location.href='user-profile.php'</script>";
    }
} else {
    echo "<script>alert('Your request is pending. Note: if you have insufficient balance, this request will fail.')</script>";
    echo "<script>location.href='user-profile.php'</script>";
}



// Diamond subscription
if (isset($_POST['diamond'])) {
    // Extract and sanitize variables from user input
    $email = sanitize($_POST['email']);
    $user = sanitize($_POST['user']);
    $dtxn = sanitize($_POST['dtxn']);
    $currency = sanitize($_POST['currency_id']);
    $amount = sanitize($_POST['diamond_amount']);
    $interest = 0.15;
    $package = "Diamond";

    // Check if the user's balance is sufficient
    $userBalance = floatval(preg_replace('/[^\d.]/', '', calculateUserTotalBalance())); // This will return the user's balance

    if ($userBalance >= $amount) {
        // Prepare SQL statement using prepared statements
        $sql_diamond_update = $con->prepare("INSERT INTO transaction (txn, user_email, userName, tpackage, tamount, tcurrency, tinterest) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $sql_diamond_update->bind_param("ssssdsd", $dtxn, $email, $user, $package, $amount, $currency, $interest);

        // Execute the query
        if ($sql_diamond_update->execute()) {
            echo "<script>alert('Your request is pending approval. Do not resubmit request.')</script>";
            echo "<script>location.href='user-profile.php'</script>";
        } else {
            echo "<script>alert('There was an error processing your request. Please try again later.')</script>";
            echo "<script>location.href='user-profile.php'</script>";            
        }

        // Close the prepared statement
        $sql_diamond_update->close();
    } else {
        echo "<script>alert('Insufficient balance. Your current balance is $" . number_format($userBalance, 2) . "')</script>";
        echo "<script>location.href='user-profile.php'</script>";
    }
} else {
    echo "<script>alert('Your request is pending. Note: if you have insufficient balance, this request will fail.')</script>";
    echo "<script>location.href='user-profile.php'</script>";
    
}


// Diamond Plus subscription
if (isset($_POST['diamond_plus'])) {
    // Extract and sanitize variables from user input
    $email = sanitize($_POST['dpemail']);
    $user = sanitize($_POST['dpuser']);
    $dptxn = sanitize($_POST['dptxn']);
    $currency = sanitize($_POST['dpcurrency_id']);
    $amount = sanitize($_POST['diamond_plus_amount']);
    $interest = 0.20;
    $package = "Diamond Plus";

    // Check if the user's balance is sufficient
    $userBalance = floatval(preg_replace('/[^\d.]/', '', calculateUserTotalBalance())); // This will return the user's balance

    if ($userBalance >= $amount) {
        // Prepare SQL statement using prepared statements
        $sql_starter_update = $con->prepare("INSERT INTO transaction (txn, user_email, userName, tpackage, tamount, tcurrency, tinterest) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $sql_starter_update->bind_param("ssssdsd", $dptxn, $email, $user, $package, $amount, $currency, $interest);

        // Execute the query
        if ($sql_starter_update->execute()) {
            echo "<script>alert('Your request is pending approval. Do not resubmit request.')</script>";
            echo "<script>location.href='user-profile.php'</script>";
        } else {
            echo "<script>alert('There was an error processing your request. Please try again later.')</script>";
            echo "<script>location.href='user-profile.php'</script>";            
        }

        // Close the prepared statement
        $sql_starter_update->close();
    } else {
        echo "<script>alert('Insufficient balance. Your current balance is $" . number_format($userBalance, 2) . "')</script>";
        echo "<script>location.href='user-profile.php'</script>";
    }
} else {
    echo "<script>alert('Your request is pending. Note: if you have insufficient balance, this request will fail.')</script>";
    echo "<script>location.href='user-profile.php'</script>";
}



   // Gold subscription
if (isset($_POST['gold'])) {
    // Extract and sanitize variables from user input
    $email = sanitize($_POST['gemail']);
    $user = sanitize($_POST['guser']);
    $gtxn = sanitize($_POST['gtxn']);
    $currency = sanitize($_POST['gcurrency_id']);
    $amount = sanitize($_POST['gold_amount']);
    $interest = 0.25;
    $package = "Gold";

    // Check if the user's balance is sufficient
    $userBalance = floatval(preg_replace('/[^\d.]/', '', calculateUserTotalBalance())); // This will return the user's balance

    if ($userBalance >= $amount) {
        // Prepare SQL statement using prepared statements
        $sql_starter_update = $con->prepare("INSERT INTO transaction (txn, user_email, userName, tpackage, tamount, tcurrency, tinterest) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $sql_starter_update->bind_param("ssssdsd", $gtxn, $email, $user, $package, $amount, $currency, $interest);

        // Execute the query
        if ($sql_starter_update->execute()) {
            echo "<script>alert('Your request is pending approval. Do not resubmit request.')</script>";
            echo "<script>location.href='user-profile.php'</script>";
        } else {
            echo "<script>alert('There was an error processing your request. Please try again later.')</script>";
            echo "<script>location.href='user-profile.php'</script>";            
        }

        // Close the prepared statement
        $sql_starter_update->close();
    } else {
        echo "<script>alert('Insufficient balance. Your current balance is $" . number_format($userBalance, 2) . "')</script>";
        echo "<script>location.href='user-profile.php'</script>";
    }
} else {
    echo "<script>alert('Your request is pending. Note: if you have insufficient balance, this request will fail.')</script>";
    echo "<script>location.href='user-profile.php'</script>";
}

   // Gold Plus subscription
if (isset($_POST['gold_plus'])) {
    // Extract and sanitize variables from user input
    $email = sanitize($_POST['gpemail']);
    $user = sanitize($_POST['gpuser']);
    $gptxn = sanitize($_POST['gptxn']);
    $currency = sanitize($_POST['gpcurrency_id']);
    $amount = sanitize($_POST['gold_plus_amount']);
    $interest = 0.30;
    $package = "Gold Plus";

    // Check if the user's balance is sufficient
    $userBalance = floatval(preg_replace('/[^\d.]/', '', calculateUserTotalBalance())); // This will return the user's balance

    if ($userBalance >= $amount) {
        // Prepare SQL statement using prepared statements
        $sql_starter_update = $con->prepare("INSERT INTO transaction (txn, user_email, userName, tpackage, tamount, tcurrency, tinterest) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $sql_starter_update->bind_param("ssssdsd", $gptxn, $email, $user, $package, $amount, $currency, $interest);

        // Execute the query
        if ($sql_starter_update->execute()) {
            echo "<script>alert('Your request is pending approval. Do not resubmit request.')</script>";
            echo "<script>location.href='user-profile.php'</script>";
        } else {
            echo "<script>alert('There was an error processing your request. Please try again later.')</script>";
            echo "<script>location.href='user-profile.php'</script>";            
        }

        // Close the prepared statement
        $sql_starter_update->close();
    } else {
        echo "<script>alert('Insufficient balance. Your current balance is $" . number_format($userBalance, 2) . "')</script>";
        echo "<script>location.href='user-profile.php'</script>";
    }
} else {
    echo "<script>alert('Your request is pending. Note: if you have insufficient balance, this request will fail.')</script>";
    echo "<script>location.href='user-profile.php'</script>";
}

    // Veteran subscription
if (isset($_POST['veteran'])) {
    // Extract and sanitize variables from user input
    $email = sanitize($_POST['vemail']);
    $user = sanitize($_POST['vuser']);
    $vtxn = sanitize($_POST['vtxn']);
    $currency = sanitize($_POST['vcurrency_id']);
    $amount = sanitize($_POST['veteran_amount']);
    $interest = 0.35;
    $package = "Veteran";

    // Check if the user's balance is sufficient
    $userBalance = floatval(preg_replace('/[^\d.]/', '', calculateUserTotalBalance())); // This will return the user's balance

    if ($userBalance >= $amount) {
        // Prepare SQL statement using prepared statements
        $sql_starter_update = $con->prepare("INSERT INTO transaction (txn, user_email, userName, tpackage, tamount, tcurrency, tinterest) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $sql_starter_update->bind_param("ssssdsd", $vtxn, $email, $user, $package, $amount, $currency, $interest);

        // Execute the query
        if ($sql_starter_update->execute()) {
            echo "<script>alert('Your request is pending approval. Do not resubmit request.')</script>";
            echo "<script>location.href='user-profile.php'</script>";
        } else {
            echo "<script>alert('There was an error processing your request. Please try again later.')</script>";
            echo "<script>location.href='user-profile.php'</script>";            
        }

        // Close the prepared statement
        $sql_starter_update->close();
    } else {
        echo "<script>alert('Insufficient balance. Your current balance is $" . number_format($userBalance, 2) . "')</script>";
        echo "<script>location.href='user-profile.php'</script>";
    }
} else {
    echo "<script>alert('Your request is pending. Note: if you have insufficient balance, this request will fail.')</script>";
    echo "<script>location.href='user-profile.php'</script>";
}

//FILE UPLOAD PROOF SOLUTION
if (isset($_POST['proofUpload'])){
    $errors = [];
    $file_tmp = $_FILES['imageProof']['tmp_name'];
    $file_name = $_FILES['imageProof']['name'];
    $file_size = $_FILES['imageProof']['size'];
    $file_type = $_FILES['imageProof']['type'];
    $fcomment = sanitize($_POST['comment']);
    $utxn = sanitize($_POST['utxn']);

    // Extract file extension
    $file_name_sanitizer = explode('.', $file_name);
    $file_ext = strtolower(end($file_name_sanitizer));

    // Allowed file extensions
    $extensions = ["jpg", "jpeg", "png"];

    // Validate file extension
    if (!in_array($file_ext, $extensions)) {
        $errors[] = "Extension not allowed, please choose a JPEG, JPG, or PNG file.";
        echo "<script>alert('Only JPEG, JPG, and PNG files are allowed.')</script>";
    }

    // Validate file size
    if ($file_size > 500000) { // 500KB limit
        $errors[] = 'File size must be less than 500KB.';
        echo "<script>alert('File size should be less than 500KB.')</script>";
    }

    // Proceed if no errors
    if (empty($errors)) {
        // Generate a unique file name to avoid overwriting existing files
        $unique_file_name = uniqid() . '.' . $file_ext;

        // Move the uploaded file to the 'uploads' directory
        if (move_uploaded_file($file_tmp, "../assets/user-uploads/" . $unique_file_name)) {
            // Prepare SQL statement to update the fund record
            $sql_insert_fproof = $con->prepare("UPDATE fund SET fund_proof = ?, fund_comment = ? WHERE ftxn = ?");
            $sql_insert_fproof->bind_param("sss", $unique_file_name, $fcomment, $utxn);

            // Execute the query and check for success
            if ($sql_insert_fproof->execute()) {
                echo "<script>alert('Proof submitted successfully.')</script>";
                echo "<script>location.href='user-profile.php'</script>";
            } else {
                error_log("Database error: " . $con->error);
                echo "<script>alert('Failed to update the database. Please try again.')</script>";
                echo "<script>location.href='user-profile.php'</script>";
            }

            // Close the prepared statement
            $sql_insert_fproof->close();
        } else {
            echo "<script>alert('Failed to submit proof of payment. Please try again.')</script>";
            echo "<script>location.href='user-profile.php'</script>";
        }
    } else {
        // Log errors if any exist
        foreach ($errors as $error) {
            error_log("File upload error: " . $error);
        }
    }
} else {
    echo "<script>alert('We are experiencing a technical glitch. Please try again later.')</script>";
    echo "<script>location.href='user-profile.php'</script>";
}

     // Close the database connection
     $con->close();
?>
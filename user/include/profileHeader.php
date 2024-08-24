<?php
include '../function.php'; 
checkUserLogin();

// Fetch current prices
$currentPrices = fetchCryptoData('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum,tether,binancecoin&vs_currencies=usd');
// Fetch historical price data for the past 30 days
$historicalData = fetchCryptoData('https://api.coingecko.com/api/v3/coins/bitcoin/market_chart?vs_currency=usd&days=30');

//This PHPDoc annotation is to help IntelliSense understand the type of $con
/** @var mysqli $con */

// Fetch user details from the database
$userEmail = $_SESSION['user_session'];
$stmt = $con->prepare("SELECT firstname, lastname, phone, user_email, userName, address, city, country, phone, photo, affid, reg_date, is_verified FROM users WHERE user_email = ? OR userName = ? ");
$stmt->bind_param("ss", $userEmail, $userEmail);
$stmt->execute();
$stmt->bind_result($firstname, $lastname, $phone, $user_email, $userName, $address, $city, $country, $phone, $photoPath, $affid, $reg_date, $is_verified);
$stmt->fetch();
$stmt->close();

// Set the URL of the profile picture
$profilePicUrl = !empty($photoPath) ? $photoPath : '';

// Optionally, store these values in session variables to access them on other pages
$_SESSION['user_firstname'] = $firstname;
$_SESSION['user_lastname'] = $lastname;
$_SESSION['user_email'] = $user_email;
$_SESSION['user_username'] = $userName;
$_SESSION['user_profile_pic'] = $profilePicUrl;

//SECTION TO CALL SPECIFIC USER INFORMATION
// Call the function to check if the logged in user is subscribed to newsletter
$user_subscribed_email = $user_email; // The actual email of the currently subscribed user

//Call the function to check user referral count
$user_referrer_count = $_SESSION['user_session'];
$total_referrals = countUserReferrals($con, $user_referrer_count);

//Call the function to check user P2P count
$user_p2p_count = $_SESSION['user_session'];
$total_p2p_count = countUserP2PTrades($con, $user_p2p_count);

//Get all fund data from currently logged in user
$funds = fetchFunds($con, $userEmail);

// Extract and combine the initials
$firstInitial = substr($firstname, 0, 1);
$lastInitial = substr($lastname, 0, 1);
$initials = $firstInitial . $lastInitial;

// At the top of your PHP file
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fcurrency_id']) || isset($_POST['fcurrency_id1']) || isset($_POST['fcurrency_id2']) || isset($_POST['fcurrency_id3']) || isset($_POST['fcurrency_id4']) || isset($_POST['fcurrency_id5']) || isset($_POST['fcurrency_id6'])) {
  $selected_currency = $_POST['fcurrency_id'];

// Fetch wallet address and QR code from database
$stmt = $con->prepare("SELECT address, qrcode FROM wallet_addresses WHERE wallet = ?");
$stmt->bind_param("s", $selected_currency);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    $wallet_address = $row['address'];
    $qrcode_image = $row['qrcode'];
} else {
    $wallet_address = "";
    $qrcode_image = "";
}
$stmt->close();
}

//Script for requesting funding
if (isset($_POST['fundAccount'])) {
//Extract variables from user input
$ftxn = $_POST['ftxn'];
$femail = $_POST['femail'];
$fusername = $_POST['fusername']; 
$ffirstname = $_POST['ffirstname'];
$flastname = $_POST['flastname']; 
$fcurrency = $_POST['fcurrency_id'];
$famount = floatval($_POST['famount']);

// Insert data into the fund table
$stmt = $con->prepare("INSERT INTO fund (user_email, userName, ftxn, firstname, lastname, fund_currency, fund_amount) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssd", $femail, $fusername, $ftxn, $ffirstname, $flastname, $fcurrency, $famount);
if ($stmt->execute()) {
// Success message
echo "<script>alert('Success: Funding request submitted successfully and pending approval');</script>";
} else {
// Error message
echo "<script>alert('Error: There was an error with your request, please try again after a while ');</script>";
}

$stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>XTrade Security - Digital Assets Exchange, Wallet, and Trading Platform</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./images/favicon.png"
    />
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="./vendor/slick/slick.css" />
    <!-- <link rel="stylesheet" type="text/css" href="./vendor/slick/slick-theme.css" /> -->
    <link rel="stylesheet" href="./css/style.css" />
     <!--Toastr-->
     <link rel="stylesheet" type="text/css" href="../app/dist/toastr.min.css">

      <!-- Data table -->
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
      <!-- DataTables Buttons CSS -->
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.7/css/buttons.dataTables.min.css">
      
    <style>
    /* Styling for the circular div */
        .initials-circle {
            width: 40px; /* Set the size of the circle */
            height: 40px;
            background-color: lightgrey; /* Background color of the circle */
            color: black; /* Text color */
            border-radius: 50%; /* Make the div circular */
            display: flex; /* Center the initials */
            align-items: center;
            justify-content: center;
            font-size: 15px; /* Font size for initials */
            font-weight: bold; /* Bold text */
            text-transform: uppercase; /* Ensure initials are uppercase */
        }
  </style>
  </head>
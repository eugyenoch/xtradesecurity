<?php
include '../function.php'; 
checkUserLogin();
// Fetch current prices
$currentPrices = fetchCryptoData('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum,tether,ripple,litecoin,cardano,eos,monero,tezos,nem,neo,dash,ethereum-classic,digibyte,decred,binancecoin&vs_currencies=usd');
// Fetch historical price data for the past 30 days
//$historicalData = fetchCryptoData('https://api.coingecko.com/api/v3/coins/bitcoin/market_chart?vs_currency=usd&days=30');

//This PHPDoc annotation is to help IntelliSense understand the type of $con
/** @var mysqli $con */

// Fetch user details from the database
$userEmail = $_SESSION['user_session'];
$stmt = $con->prepare("SELECT firstname, lastname, phone, user_email, userName, address, city, country, phone, photo, affid, asset_address, reg_date, is_verified FROM users WHERE user_email = ? OR userName = ? ");
$stmt->bind_param("ss", $userEmail, $userEmail);
$stmt->execute();
$stmt->bind_result($firstname, $lastname, $phone, $user_email, $userName, $address, $city, $country, $phone, $photoPath, $affid, $asset_address, $reg_date, $is_verified);
$stmt->fetch();
$stmt->close();

// Set the URL of the profile picture
$profilePicUrl = !empty($photoPath) ? $photoPath : '';

// Optionally, store these values in session variables to access them on other pages
$_SESSION['user_firstname'] = $firstname;
$_SESSION['user_lastname'] = $lastname;
$_SESSION['user_email'] = $user_email;
$_SESSION['user_username'] = $userName;
$_SESSION['asset_address'] = $asset_address;
$_SESSION['start_time'] = date("Y-m-d H:i:s");
$_SESSION['user_profile_pic'] = $profilePicUrl;
$_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
$_SESSION['ip_address'] = get_user_ip();
//$_SESSION['near'] = "Your Location Logic Here"; // You might use a service like GeoIP to determine this
$_SESSION['current'] = true; // Logic to determine if the current session is active

// Example usage
$userIp = get_user_ip();

// Browser info from previous response
$shortBrowserInfo = get_browser_info($_SERVER['HTTP_USER_AGENT']);

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
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo/favicon.png" />
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="./vendor/slick/slick.css" />
    <!-- <link rel="stylesheet" type="text/css" href="./vendor/slick/slick-theme.css" /> -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
     <!--Toastr-->
     <link rel="stylesheet" type="text/css" href="../app/dist/toastr.min.css" />
      <!-- Data table -->
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css" />
      <!-- DataTables Buttons CSS -->
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.7/css/buttons.dataTables.min.css" />
      
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
         /* Custom styles for DataTables buttons */
         button.dt-button{
          background-color: #007bff; /* Button background color */
          color: white; /* Button text color */
          border: 1px solid #007bff; /* Button border color */
          padding: 8px 12px; /* Padding around the button */
          border-radius: 4px; /* Rounded corners */
          font-size: 14px; /* Font size */
          cursor: pointer;
          margin: 2px; /* Space between buttons */
      }

      /* Hover effect */
      button.dt-button:hover {
          background-color: #0056b3; /* Darker shade on hover */
          border-color: #0056b3; /* Darker border on hover */
      }

      /* Active effect */
      button.dt-button:active {
          background-color: #004085; /* Even darker shade when clicked */
          border-color: #003366; /* Darker border when clicked */
      }

      /* Disabled button state */
      button.dt-button.disabled {
          background-color: #cccccc;
          border-color: #cccccc;
          color: #666666;
          cursor: not-allowed;
      }

   /* Style the dropdown button */
    .dt-button-collection {
    position: absolute;
    display: inline-block;
    background: none; /* Light background */
    transition: background-color 0.2s ease; /* Smooth hover effect */
    border: 1px solid #dee2e6; /* Border color */
    padding: 0.5rem 1rem; /* Padding */
    border-radius: 0.25rem; /* Rounded corners */
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); /* Subtle shadow */
 }

  /* Style the dropdown items */
  button.dt-button.button-page-length{
    display: block !important;
    width: 100%;
  }

  /* Style Google Translate */
  .goog-te-gadget {
    font-family: Roboto, 'Open Sans', sans-serif !important;
    text-transform: uppercase;
  }
  .goog-te-gadget-simple  {
    background-color: rgba(255,255,255,0.20) !important;
    border: 1px solid rgba(255,255,255,0.50) !important;
    padding: 8px !important;
    border-radius: 4px !important;
    font-size: 1rem !important;
    line-height:2rem !important;
    display: inline-block;
    cursor: pointer;
    zoom: 1;
  }
  .goog-te-menu2 {
    max-width: 100%;
  }
  .goog-te-menu-value {
    color: #fff !important;
      &:before {
      font-family: 'Material Icons';
      content: "\E927";
      margin-right: 16px;
      font-size: 2rem;
      vertical-align: -10px;
      } 
  }
  .goog-te-menu-value span:nth-child(5) {
    display:none;
  }
  .goog-te-menu-value span:nth-child(3) {
    border:none!important;
    font-family: 'Material Icons';
    &:after {
      font-family: 'Material Icons';
      content: "\E5C5";
      font-size: 1.5rem;
      vertical-align: -6px;
    }  
  }

  .translate-wrapper {
    display: flex;
    justify-content: center;
    width: 100%;
  }
  .goog-te-gadget-icon {
    background-image: url('https://upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/1200px-Flag_of_the_United_States.svg.png') !important;
      background-position: 0px 0px;
      height: 32px !important;
      width: 32px !important;
      margin-right: 8px !important;
      display: inline-block;
      vertical-align: middle;
  }

  .modal-backdrop {
/* bug fix - no overlay */    
display: none;}

.copiedText {
    color: green;
    font-weight: bold;
    transition: color 0.3s ease;
}

  </style>
</head>
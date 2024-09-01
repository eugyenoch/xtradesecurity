<?php
require_once('config.php');

/**
 * Fetch unique wallets from the wallet_addresses table.
 *
 * @param mysqli $con The database connection object.
 * @return array The array of unique wallets.
 */

//Function to fetch crypto data
function fetchCryptoData($url) {
    $ch = curl_init();    
    // Set curl options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: application/json',
        'Content-Type: application/json'
    ]);
    
    // Execute curl request and fetch response
    $response = curl_exec($ch);
    
    // Check for curl errors
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
        return null;
    }
    
    // Close curl session
    curl_close($ch);
    
    // Decode the JSON response
    return json_decode($response, true);
  }

// This is for sanitizing our inputs...
function sanitize($input) {
    $input = htmlentities(htmlspecialchars(strip_tags(trim($input))));
    return $input;
}

// This is a function for blocking url hackers
function blockUrlHackers($url) {
    if (!isset($_SESSION['admin_id'])) {
        header("Location: $url");
    }
}

// This function is for resisting unauthenticated users
function authenticate($url) {
    if (!isset($_SESSION['user_id'])) {
        header("Location: $url");
        exit();
    }
}

function defaultTime(){
    date_default_timezone_set("Africa/Lagos");
    echo "The time is " . date("d/m/Y h:i:sa");
}

function set_login_cookies($name, $value, $expire, $path = "/", $domain = "", $secure = true, $httponly = true) {
    setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);
}

function generateRandomNumber() {
    // Generate a random 7-digit number
    $randomNumber = random_int(1000000, 9999999);
    return $randomNumber;
}

// Check if an admin is logged in
function checkAdminLogin() {
    if (!isset($_SESSION['admin_session'])) {
        header("Location: login.php");
        exit();
    }
}

// Check if a user is logged in
function checkUserLogin() {
    if (!isset($_SESSION['user_session'])) {
        header("Location: login.php");
        exit();
    }
}

// Function to verify reCAPTCHA
function verifyReCaptcha($recaptcha_response) {
    $recaptcha_secret = '6Ld5Px8qAAAAABT4wTXKHJNpXt6-iEROX-VqoSwr';
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_data = [
        'secret' => $recaptcha_secret,
        'response' => $recaptcha_response
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($recaptcha_data),
        ],
    ];
    $context = stream_context_create($options);
    $captchaResult = file_get_contents($recaptcha_url, false, $context);
    return json_decode($captchaResult)->success;
}

// Function to handle unverified users
function handleUnverifiedUser($user_email) {
    $_SESSION['unverified_email'] = $user_email;
    echo "<script>alert('Important Notice: You are not validated. Please check your welcome email or click OK to generate new token'); window.location='userverify.php';</script>";
    exit;
  }

  //SUM TOTAL NUMBER OF USERS
  function getTotalUsers($con) {
    // Prepare and execute the SQL query to count the number of users
    $stmt = $con->prepare("SELECT COUNT(*) as total_users FROM users");
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->fetch_assoc();

    // Return the total number of users
    return $userCount['total_users'];
}

//SUM TOTAL NUMBER OF VERIFIED USERS
function getVerifiedUsers($con) {
    // Prepare and execute the SQL query to count the number of verified users
    $stmt = $con->prepare("SELECT COUNT(*) as verified_users FROM users WHERE is_verified = 1");
    $stmt->execute();
    $result = $stmt->get_result();
    $verifiedCount = $result->fetch_assoc();

    // Return the total number of verified users
    return $verifiedCount['verified_users'];
}


 //SUM TOTAL NUMBER OF REFERRALS
 function getTotalReferrals($con) {
    // Prepare and execute the SQL query to count the number of users
    $stmt = $con->prepare("SELECT COUNT(*) as total_referrals FROM referral");
    $stmt->execute();
    $result = $stmt->get_result();
    $refCount = $result->fetch_assoc();

    // Return the total number of users
    return $refCount['total_referrals'];
}

//SUM TOTAL NUMBER OF NEWSLETTER SUBSCRIBERS
function getTotalSubscribers($con) {
    // Prepare and execute the SQL query to count the number of users
    $stmt = $con->prepare("SELECT COUNT(*) as total_subscribers FROM newsletter");
    $stmt->execute();
    $result = $stmt->get_result();
    $subscriberCount = $result->fetch_assoc();

    // Return the total number of users
    return $subscriberCount['total_subscribers'];
}

//SUM TOTAL NUMBER OF WALLETS
function getTotalWallets($con) {
    // Prepare and execute the SQL query to count the number of users
    $stmt = $con->prepare("SELECT COUNT(*) as total_wallets FROM wallet_addresses");
    $stmt->execute();
    $result = $stmt->get_result();
    $walletCount = $result->fetch_assoc();

    // Return the total number of users
    return $walletCount['total_wallets'];
}

//SUM TOTAL NUMBER OF P2P TRANSACTIONS
function getTotalP2P($con) {
    // Prepare and execute the SQL query to count the number of users
    $stmt = $con->prepare("SELECT COUNT(*) as total_p2p FROM peer_transfer");
    $stmt->execute();
    $result = $stmt->get_result();
    $p2pCount = $result->fetch_assoc();

    // Return the total number of users
    return $p2pCount['total_p2p'];
}

 //SUM TOTAL NUMBER OF ADMINS
 function getTotalAdmins($con) {
    // Prepare and execute the SQL query to count the number of users
    $stmt = $con->prepare("SELECT COUNT(*) as total_admin FROM admin");
    $stmt->execute();
    $result = $stmt->get_result();
    $adminCount = $result->fetch_assoc();

    // Return the total number of users
    return $adminCount['total_admin'];
}

//GET TOTAL FUND AMOUNT
function getTotalFundAmount($con) {
    $sql = "SELECT SUM(fund_amount) as total FROM fund WHERE fund_status='approved'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['total'];
    } else {
        return "$0.00"; // Return $0.00 if no records are found
    }
}

//GET TOTAL FUND PROFITandBONUSES
function getTotalFundProfit($con) {
    $sql = "SELECT SUM(fund_profit) as total FROM fund";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['total'];
    } else {
        return "$0.00"; // Return $0.00 if no records are found
    }
}


//GET TOTAL WITHDRAW AMOUNT
function getTotalWithdrawAmount($con) {
    $sql = "SELECT SUM(withdraw_amount) as total FROM withdraw WHERE withdraw_status='approved'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['total'];
    } else {
        return "$0.00"; // Return $0.00 if no records are found
    }
}

//GET TOTAL TRANSACTION AMOUNT
function getTotalTransactionAmount($con) {
    $sql = "SELECT SUM(tamount) as total FROM transaction WHERE tstatus='approved'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['total'];
    } else {
        return "$0.00"; // Return $0.00 if no records are found
    }
}

//GET TOTAL TRANSACTION PROFITandBONUSES
function getTotalTransactionProfit($con) {
    $sql = "SELECT SUM(tprofit) as total FROM transaction";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['total'];
    } else {
        return "$0.00"; // Return $0.00 if no records are found
    }
}
//GET SITE TOTAL BALANCE
function getTotalSiteBalance($con) {
    $totalFundAmount = getTotalFundAmount($con);
    $totalTransactionAmount = getTotalTransactionAmount($con);
    $totalFundProfits = getTotalFundProfit($con);
    $totalTransactionProfit = getTotalTransactionProfit($con);
    $totalWithdrawAmount = getTotalWithdrawAmount($con);

    // Calculate the total site balance
    $totalSiteBalance = $totalFundAmount 
                       + $totalFundProfits
                       + $totalTransactionProfit
                       - $totalTransactionAmount  
                       - $totalWithdrawAmount;

    return $totalSiteBalance;
}


function isSubscribedToNewsletter($con, $user_subscribed_email) {
    // Prepare the SQL statement to check if the email exists in the newsletter table
    $stmt = $con->prepare("SELECT email_address FROM newsletter WHERE email_address = ?");
    $stmt->bind_param("s", $user_subscribed_email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Determine the subscription status and return the appropriate HTML
    $subscriptionStatus = '';

    // Check if the email was found in the newsletter table
    if ($result->num_rows > 0) {
         $subscriptionStatus = "&nbsp;<span title='You are subscribed to our newsletter'><i class='icofont-tick-boxed'></i></span>";
    } else {
        $subscriptionStatus = "&nbsp;<span title='You are not subscribed to our newsletter'><i class='icofont-close-squared-alt'></i></span>";
    }

    // Close the statement
    $stmt->close();

    // Return the subscription status
    return $subscriptionStatus;
}

//COUNT AFFILIATES OF THE CURRENTLY LOGGED IN USER
function countUserReferrals($con, $user_referrer_count) {
    // Prepare the SQL statement to count the referrals
    $stmt = $con->prepare("SELECT COUNT(*) as total_affiliates FROM referral WHERE referrer = ? OR referrer_email = ?");
    $stmt->bind_param("ss", $user_referrer_count, $user_referrer_count);
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch the result and return the referral count
    $row = $result->fetch_assoc();
    $referral_count = $row['total_affiliates'];

    // Close the statement
    $stmt->close();

    return $referral_count;
}

//Fetch Unique Wallets
function fetchUniqueWallets($con) {
    $wallets = [];
    $sql = "SELECT DISTINCT wallet FROM wallet_addresses";
    $result = $con->query($sql);
    
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $wallets[] = $row; // Store the entire row including the wallet key
        }
    } else {
        error_log("Error fetching unique wallets: " . $con->error);
    }
    
    return $wallets;
}


// Fetch all wallet addresses
function fetchAllWalletAddresses($con) {
    $walletAddresses = [];
    $sql = "SELECT * FROM wallet_addresses";
    $result = $con->query($sql);
    
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $walletAddresses[] = $row;
        }
    } else {
        error_log("Error fetching wallet addresses: " . $con->error);
    }
    
    return $walletAddresses;
}


//GET TOTAL APPROVED WITHDRAWAL FOR A SINGLE USER
function getTotalApprovedWithdrawAmount() {
    // Assuming you have a database connection established
    global $con;

    // Get the logged-in user's email or username from session
    $userEmail = isset($_SESSION['user_session']) ? $_SESSION['user_session'] : null;

    // Prepare the SQL query
    $sql = "SELECT SUM(withdraw_amount) AS total_withdrawn FROM withdraw WHERE (user_email = ? OR userName = ?) AND withdraw_status = 'approved'";

    // Prepare and execute the statement
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $userEmail, $userEmail);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // Close the statement
    $stmt->close();

    // Return the total amount or 0 if no results found
    return "$" . number_format($row['total_withdrawn'] ?? 0, 2);
}

//GET TOTAL APPROVED FUNDING FOR A SINGLE USER
function getTotalApprovedFundAmount() {
    // Assuming you have a database connection established
    global $con;

    // Get the logged-in user's email or username from session
    $userEmail = isset($_SESSION['user_session']) ? $_SESSION['user_session'] : null;

    // Prepare the SQL query
    $sql = "SELECT SUM(fund_amount) AS total_funded FROM fund WHERE (user_email = ? OR userName = ?) AND fund_status = 'approved'";

    // Prepare and execute the statement
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $userEmail, $userEmail);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // Close the statement
    $stmt->close();

    // Return the total amount or 0 if no results found
    return "$" . number_format($row['total_funded'] ?? 0, 2);
}

//GET TOTAL APPROVED FUNDING INTEREST EARNED FOR A SINGLE USER
function getTotalApprovedFundInterest() {
    // Assuming you have a database connection established
    global $con;

    // Get the logged-in user's email or username from session
    $userEmail = isset($_SESSION['user_session']) ? $_SESSION['user_session'] : null;

    // Prepare the SQL query
    $sql = "SELECT SUM(fund_profit) AS total_interest FROM fund WHERE (user_email = ? OR userName = ?) AND fund_status = 'approved'";

    // Prepare and execute the statement
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $userEmail, $userEmail);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // Close the statement
    $stmt->close();

    // Return the total amount or 0 if no results found
    return "$" . number_format($row['total_interest'] ?? 0, 2);
}

//GET TOTAL APPROVED INVESTMENT(TRANSACTION) FOR A SINGLE USER
function getTotalApprovedTransactionAmount() {
    // Assuming you have a database connection established
    global $con;

    // Get the logged-in user's email or username from session
    $userEmail = isset($_SESSION['user_session']) ? $_SESSION['user_session'] : null;

    // Prepare the SQL query
    $sql = "SELECT SUM(tamount) AS total_invested FROM transaction WHERE (user_email = ? OR userName = ?) AND tstatus = 'approved'";

    // Prepare and execute the statement
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $userEmail, $userEmail);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // Close the statement
    $stmt->close();

    // Return the total amount or 0 if no results found
    return "$" . number_format($row['total_invested'] ?? 0, 2);
}

//GET TOTAL APPROVED INVESTMENT(TRANSACTION) PROFIT FOR A SINGLE USER
function getTotalApprovedTransactionProfit() {
    // Assuming you have a database connection established
    global $con;

    // Get the logged-in user's email or username from session
    $userEmail = isset($_SESSION['user_session']) ? $_SESSION['user_session'] : null;

    // Prepare the SQL query
    $sql = "SELECT SUM(tprofit) AS total_invested_profit FROM transaction WHERE (user_email = ? OR userName = ?) AND tstatus = 'approved'";

    // Prepare and execute the statement
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $userEmail, $userEmail);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // Close the statement
    $stmt->close();

    // Return the total amount or 0 if no results found
    return "$" . number_format($row['total_invested_profit'] ?? 0, 2);
}

//COUNT P2P TRADES OF THE CURRENTLY LOGGED IN USER
function countUserP2PTrades($con, $user_p2p_count) {
    // Prepare the SQL statement to count the referrals
    $stmt = $con->prepare("SELECT COUNT(*) as total_p2p_trades FROM peer_transfer WHERE seller_email = ? OR seller_username = ? OR buyer_email = ? OR buyer_username = ?");
    $stmt->bind_param("ssss", $user_p2p_count, $user_p2p_count, $user_p2p_count, $user_p2p_count);
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch the result and return the referral count
    $row = $result->fetch_assoc();
    $referral_count = $row['total_p2p_trades'];

    // Close the statement
    $stmt->close();

    return $referral_count;
}

//CALCULATE USER TOTAL BALANCE
function calculateUserTotalBalance() {
    // Define an array of functions to call and their corresponding labels
    $balanceComponents = [
        'Funded' => 'getTotalApprovedFundAmount',
        'Investment' => 'getTotalApprovedTransactionAmount',
        'InvestmentProfit' => 'getTotalApprovedTransactionProfit',
        'Withdrawn' => 'getTotalApprovedWithdrawAmount'
    ];

    $balanceValues = [];
    
    // Calculate each component of the balance
    foreach ($balanceComponents as $key => $func) {
        if (function_exists($func)) {
            // Call the function and ensure the result is numeric
            $result = $func();
            // Ensure the result is stripped of formatting and converted to a float
            $balanceValues[$key] = floatval(preg_replace('/[^\d.]/', '', $result));
        } else {
            error_log("Function $func does not exist.");
            $balanceValues[$key] = 0;
        }
    }

    // Calculate the total balance
    $totalBalance = $balanceValues['Funded'] 
                  + $balanceValues['InvestmentProfit'] 
                  - $balanceValues['Investment'] 
                  - $balanceValues['Withdrawn'];
                  
    // Return the total balance formatted as a currency
    return "$" . number_format($totalBalance, 2);
}

//Fetch all from funds for currently logged in user
function fetchFunds($con, $userEmail) {
    $sql_funds = "SELECT * FROM fund WHERE user_email = ? OR userName = ?";
    $stmt = $con->prepare($sql_funds);
    $stmt->bind_param('ss', $userEmail, $userEmail);
    $stmt->execute();
    $result = $stmt->get_result();

    $funds = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $funds[] = $row;
        }
    }

    $stmt->close();
    return $funds;
}

function calculateAndUpdateTransactionProfit($con, $transactions_info) {
    // Check if the transaction status is 'approved'
    if ($transactions_info['tstatus'] === 'approved') {
        // Calculate the date difference between today and the approval date
        $current_date = new DateTime();
        $approval_date = new DateTime($transactions_info['approval_date']);
        $date_diff = $current_date->diff($approval_date)->days;

        // Check if 30 days have passed since approval
        if ($date_diff >= 30) {
            // Check if the profit has already been calculated
            if ($transactions_info['tprofit'] === null || $transactions_info['tprofit'] == 0) {
                // Calculate the profit
                $approved_amount = $transactions_info['tamount'];
                $interest = $transactions_info['tinterest'];
                $profit = $approved_amount * $interest;

                // Prepare the SQL statement to update the tprofit column
                $stmt = $con->prepare("UPDATE transaction SET tprofit = ? WHERE txn = ?");
                $stmt->bind_param("ds", $profit, $transactions_info['txn']);

                // Execute the update statement and log any errors
                if (!$stmt->execute()) {
                    error_log("Error updating profit for transaction " . $transactions_info['txn'] . ": " . $stmt->error);
                }

                // Close the statement
                $stmt->close();

                // Log the successful update
                error_log("Profit calculated and updated for transaction " . $transactions_info['txn']);
            } else {
                // Log that the profit was already calculated
                error_log("Profit already calculated for transaction " . $transactions_info['txn']);
            }
        } else {
            // Log that 30 days have not yet passed
            error_log("30 days have not yet passed since approval for transaction " . $transactions_info['txn']);
        }
    } else {
        error_log("Transaction " . htmlspecialchars($transactions_info['txn']) . " is not approved. No profit calculated.");
    }
}

//Get the users browser information
function get_browser_info($userAgent) {
    $browser = "Unknown Browser";
    $version = "";

    if (preg_match('/MSIE/i', $userAgent) && !preg_match('/Opera/i', $userAgent)) {
        $browser = "Internet Explorer";
        $version = "MSIE";
    } elseif (preg_match('/Firefox/i', $userAgent)) {
        $browser = "Mozilla Firefox";
    } elseif (preg_match('/Chrome/i', $userAgent)) {
        $browser = "Google Chrome";
    } elseif (preg_match('/Safari/i', $userAgent)) {
        $browser = "Apple Safari";
    } elseif (preg_match('/Opera/i', $userAgent)) {
        $browser = "Opera";
    } elseif (preg_match('/Netscape/i', $userAgent)) {
        $browser = "Netscape";
    }

    // Extract the version number
    preg_match('/' . $browser . '[\/ ]?([0-9.]*)/', $userAgent, $matches);
    if (isset($matches[1])) {
        $version = $matches[1];
    }

    return $browser . " " . $version;
}

// Example usage
$shortBrowserInfo = get_browser_info($_SERVER['HTTP_USER_AGENT']);

//GET USER IP
function get_user_ip() {
    // Check if it's a shared internet IP (usually proxies)
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    // Check if the IP is passed from a proxy
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    // Default remote address
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    // In case the IP is a comma-separated list, take the first one (which is the user's IP)
    return explode(',', $ip)[0];
}

// Example usage
$userIp = get_user_ip();


?>
<?php
require_once('config.php');

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

function isLoggedIn(){
    if (isset($_SESSION['email'])) {
        return true;
    }else{
        return false;
    }
}

function set_login_cookies($name, $value, $expire, $path = "/", $domain = "", $secure = true, $httponly = true) {
    setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);
}

// Check if an admin is logged in
function checkAdminLogin() {
    if (!isset($_SESSION['admin_session'])) {
        header("Location: login.php");
        exit();
    }
}
?>
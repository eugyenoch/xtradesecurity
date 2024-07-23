<?php
require_once('config.php');

function fetchCryptoData($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Check for curl errors
    if (curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
        return null;
    }

    // Check for HTTP response code
    if ($httpCode != 200) {
        echo "Failed to fetch data. HTTP Status Code: $httpCode";
        return null;
    }

    curl_close($ch);
    return json_decode($data, true);
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

// function isAdmin(){
//     if (isset($_SESSION['email']) && $_SESSION['user']['user_type'] == 'admin' ){
//         return true;
//     }else{
//         return false;
//     }
// }
?>
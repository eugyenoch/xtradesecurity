<?php
// PHP SESSIONS

// Start the session
session_start();

// Assign default session ID to a custom variable
$sessID = session_id();

// Echo session ID - intended for troubleshooting (commented out by default)
// echo $sessID;

// Empty variables to be used for different session purposes
$user_session_email = "";
$user_session = "";
$admin_session = "";

// Check if this is the first time the session is being created

// Optionally, you can set session cookie parameters for additional security
// session_set_cookie_params([
//     'lifetime' => 3600, // Cookie lifetime in seconds
//     'path' => '/',
//     'domain' => 'xtradesecurity.com', // Adjust to your domain
//     'secure' => true, // Only send cookies over HTTPS
//     'httponly' => true, // Prevent JavaScript access to cookies
//     'samesite' => 'Strict', // Adjust to 'Lax' or 'None' as needed
// ]);
?>

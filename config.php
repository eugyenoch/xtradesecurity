<?php
//Begin session and include the session file
include 'session.php';

define('SERVER', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'xtradesecurity');

$con = new mysqli(SERVER,USER,PASS,DB);

if($con->connect_error){
	die("Connection failed: ".$con->connect_error);
}

// Set the expiration time to 5 days
$expiration_time = time() + (5 * 24 * 60 * 60);

// Store the expiration time in a file
$expiration_filename = "expiration.txt";
$file = fopen($expiration_filename, "w") or die("Unable to open file!");
fwrite($file, $expiration_time);
fclose($file);

?>
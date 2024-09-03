<?php
// Include required files
include "../function.php"; 
checkUserLogin();

//CONFIRM WALLET DELETE
  if (isset($_GET['dwa']) && !empty($_GET['dwa'])) {
    $dwa = $con->real_escape_string($_GET['dwa']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to permanently delete this wallet?')) {
                window.location.href = 'walletProcessor.php?confirmDelete=" . $dwa . "';
            } else {
                window.location.href = 'wallet.php';
            }
          </script>";
  }


?>
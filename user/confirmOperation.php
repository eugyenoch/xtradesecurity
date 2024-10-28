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

//CONFIRM Bank DELETE
if (isset($_GET['dba']) && !empty($_GET['dba'])) {
  $dba = $con->real_escape_string($_GET['dba']);

  // Confirm deletion with the user
  echo "<script>
          if (confirm('Are you sure you want to permanently delete this record?')) {
              window.location.href = 'walletProcessor.php?confirmDeleteBank=" . $dba . "';
          } else {
              window.location.href = 'wallet.php';
          }
        </script>";
}


//CONFIRM Bank DELETE
if (isset($_GET['ops']) && !empty($_GET['ops'])) {
  $ops = $con->real_escape_string($_GET['ops']);

  // Confirm deletion with the user
  echo "<script>
          if (confirm('Are you sure you want to cancel this trade?')) {
              window.location.href = 'walletProcessor.php?confirmTradeCancel=" . $ops . "';
          } else {
              window.location.href = 'wallet.php';
          }
        </script>";
}

?>
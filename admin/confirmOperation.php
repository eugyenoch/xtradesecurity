<?php
// Include required files
include "../function.php"; 
checkAdminLogin();

//CONFIRM USER DELETE
if (isset($_GET['du']) && !empty($_GET['du'])) {
    $du = $con->real_escape_string($_GET['du']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to permanently delete this user?')) {
                window.location.href = 'userProcessor.php?confirmDelete=" . $du . "';
            } else {
                window.location.href = 'user-profile.php';
            }
          </script>";
  }

  //CONFIRM REFERRAL DELETE
  if (isset($_GET['ref']) && !empty($_GET['ref'])) {
    $ref = $con->real_escape_string($_GET['ref']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to permanently delete this affiliate?')) {
                window.location.href = 'userProcessor.php?deleteRef=" . $ref . "';
            } else {
                window.location.href = 'user-profile.php';
            }
          </script>";
  }

  //CONFIRM ADMIN DELETE
  if (isset($_GET['adm']) && !empty($_GET['adm'])) {
    $adm = $con->real_escape_string($_GET['adm']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to permanently delete this admin?')) {
                window.location.href = 'userProcessor.php?deleteAdm=" . $adm . "';
            } else {
                window.location.href = 'user-profile.php';
            }
          </script>";
  }

//CONFIRM WALLET DELETE
  if (isset($_GET['dwa']) && !empty($_GET['dwa'])) {
    $dwa = $con->real_escape_string($_GET['dwa']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to permanently delete this wallet?')) {
                window.location.href = 'walletProcessor.php?confirmDelete=" . $dwa . "';
            } else {
                window.location.href = 'user-profile.php';
            }
          </script>";
  }

//CONFIRM FUND REQUEST DELETE
if (isset($_GET['fr']) && !empty($_GET['fr'])) {
    $fr = $con->real_escape_string($_GET['fr']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to permanently delete this record?')) {
                window.location.href = 'finance.php?deleteFund=" . $fr . "';
            } else {
                window.location.href = 'user-profile.php';
            }
          </script>";
  }

  //CONFIRM FUND REQUEST APPROVE
if (isset($_GET['afr']) && !empty($_GET['afr'])) {
    $afr = $con->real_escape_string($_GET['afr']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to approve this record?')) {
                window.location.href = 'finance.php?approveFund=" . $afr . "';
            } else {
                window.location.href = 'user-profile.php';
            }
          </script>";
  }

  //CONFIRM FUND REQUEST DISAPPROVE
if (isset($_GET['dfr']) && !empty($_GET['dfr'])) {
    $dfr = $con->real_escape_string($_GET['dfr']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to permanently disapprove this record?')) {
                window.location.href = 'finance.php?disapproveFund=" . $dfr . "';
            } else {
                window.location.href = 'user-profile.php';
            }
          </script>";
  }

//CONFIRM WITHDRAW REQUEST DELETE
if (isset($_GET['wr']) && !empty($_GET['wr'])) {
    $wr = $con->real_escape_string($_GET['wr']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to permanently delete this record?')) {
                window.location.href = 'finance.php?deleteWithdraw=" . $wr . "';
            } else {
                window.location.href = 'user-profile.php';
            }
          </script>";
  }

   //CONFIRM WITHDRAW REQUEST APPROVE
if (isset($_GET['awr']) && !empty($_GET['awr'])) {
    $awr = $con->real_escape_string($_GET['awr']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to approve this record?')) {
                window.location.href = 'finance.php?approveWithdraw=" . $awr . "';
            } else {
                window.location.href = 'user-profile.php';
            }
          </script>";
  }

   //CONFIRM WITHDRAW REQUEST DISAPPROVE
   if (isset($_GET['dwr']) && !empty($_GET['dwr'])) {
    $dwr = $con->real_escape_string($_GET['dwr']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to disapprove this record?')) {
                window.location.href = 'finance.php?disapproveWithdraw=" . $dwr . "';
            } else {
                window.location.href = 'user-profile.php';
            }
          </script>";
  }


  //CONFIRM TRANSACTION REQUEST DELETE
if (isset($_GET['tr']) && !empty($_GET['tr'])) {
    $tr = $con->real_escape_string($_GET['tr']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to permanently delete this record?')) {
                window.location.href = 'finance.php?deleteTrade=" . $tr . "';
            } else {
                window.location.href = 'user-profile.php';
            }
          </script>";
  }

//CONFIRM TRADE REQUEST DELETE
if (isset($_GET['trade']) && !empty($_GET['trade'])) {
    $trade = $con->real_escape_string($_GET['trade']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to permanently delete this record?')) {
                window.location.href = 'finance.php?deleteTrade=" . $trade . "';
            } else {
                window.location.href = 'user-profile.php';
            }
          </script>";
  }
?>
<?php
// Include required files
include "../function.php"; 
checkAdminLogin();
/** @var mysqli $con */

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
            if (confirm('This is an admin! Are you sure you want to permanently delete this admin?')) {
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

  //FUNDING
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

  //WITHDRAWALS
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

//TRANSACTIONS
  //CONFIRM TRANSACTION REQUEST DELETE
if (isset($_GET['tr']) && !empty($_GET['tr'])) {
    $tr = $con->real_escape_string($_GET['tr']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to permanently delete this record?')) {
                window.location.href = 'finance.php?deleteTransaction=" . $tr . "';
            } else {
                window.location.href = 'user-profile.php';
            }
          </script>";
  }


    //CONFIRM TRANSACTION REQUEST APPROVE
if (isset($_GET['atr']) && !empty($_GET['atr'])) {
    $atr = $con->real_escape_string($_GET['atr']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to approve this record?')) {
                window.location.href = 'finance.php?approveTransaction=" . $atr . "';
            } else {
                window.location.href = 'user-profile.php';
            }
          </script>";
  }

   //CONFIRM TRANSACTION REQUEST DISAPPROVE
   if (isset($_GET['dtr']) && !empty($_GET['dtr'])) {
    $dtr = $con->real_escape_string($_GET['dtr']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to disapprove this record?')) {
                window.location.href = 'finance.php?disapproveTransaction=" . $dtr . "';
            } else {
                window.location.href = 'user-profile.php';
            }
          </script>";
  }

//TRADE
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

  //CONFIRM TRADE REQUEST APPROVE
if (isset($_GET['atrade']) && !empty($_GET['atrade'])) {
    $atrade = $con->real_escape_string($_GET['atrade']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to approve this record?')) {
                window.location.href = 'finance.php?approveTrade=" . $atrade . "';
            } else {
                window.location.href = 'user-profile.php';
            }
          </script>";
  }

   //CONFIRM TRADE REQUEST DISAPPROVE
   if (isset($_GET['dtrade']) && !empty($_GET['dtrade'])) {
    $dtrade = $con->real_escape_string($_GET['dtrade']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to disapprove this record?')) {
                window.location.href = 'finance.php?disapproveTrade=" . $dtrade . "';
            } else {
                window.location.href = 'user-profile.php';
            }
          </script>";
  }


  //NEWSLETTER
 //CONFIRM NEWSLETTER SUBSCRIBER REQUEST DELETE
if (isset($_GET['dnews']) && !empty($_GET['dnews'])) {
    $dnews = $con->real_escape_string($_GET['dnews']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to permanently delete this subscriber?')) {
                window.location.href = 'userProcessor.php?deleteNewsletter=" . $dnews . "';
            } else {
                window.location.href = 'user-profile.php';
            }
          </script>";
  }


  //EXCHANGE
//CONFIRM EXCHANGE TRANSACTION DELETE
if (isset($_GET['exDel']) && !empty($_GET['exDel'])) {
    $exDel = $con->real_escape_string($_GET['exDel']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to permanently delete this record?')) {
                window.location.href = 'finance.php?deleteExchange=" .  $exDel . "';
            } else {
                window.location.href = 'user-profile.php';
            }
          </script>";
  }

  //CONFIRM EXCHANGE TRANSACTION MARK WIN
if (isset($_GET['exW']) && !empty($_GET['exW'])) {
    $exW = $con->real_escape_string($_GET['exW']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to approve this record?')) {
                window.location.href = 'finance.php?approveExchange=" . $exW . "';
            } else {
                window.location.href = 'user-profile.php';
            }
          </script>";
  }

   //CONFIRM EXCHANGE TRANSACTION MARK LOOSE
   if (isset($_GET['exL']) && !empty($_GET['exL'])) {
    $exL = $con->real_escape_string($_GET['exL']);
  
    // Confirm deletion with the user
    echo "<script>
            if (confirm('Are you sure you want to disapprove this record?')) {
                window.location.href = 'finance.php?disapproveExchange=" . $exL . "';
            } else {
                window.location.href = 'user-profile.php';
            }
          </script>";
  }


?>
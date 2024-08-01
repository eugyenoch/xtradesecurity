<?php
//PHP COOKIES
//Set a cookie - all cookies are set for 30days
    if(isset($_POST['checkbox'])){
        set_login_cookies("Email", $_POST['userEmail'], time() + (86400 * 30));
        set_login_cookies("pwd", $_POST['pwd'], time() + (86400 * 30));

    // if(isset($_GET['ewa']) && $_GET['ewa']!==null){   
    //     setcookie("wallet",$_GET['ewa']);
    //     header("Refresh:0.5,url=change-wallet.php");
    // }

    //  if(isset($_GET['eqc']) && $_GET['eqc']!==null){   
    //     setcookie("qrCode",$_GET['eqc']);
    //     header("Refresh:0.5,url=change-wallet.php");
    // }

    // if(isset($currency) && $currency!==null){
    //     setcookie("currency",$currency);
     }


    if(isset($_POST['phoneCheckbox'])){
        set_login_cookies("DialCode", $_POST['dialCode'], time() + (86400 * 30));
        set_login_cookies("Phone", $_POST['userPhone'], time() + (86400 * 30));
        set_login_cookies("pwd2", $_POST['pwd2'], time() + (86400 * 30));
        }


    if(isset($_POST['adminCheckbox'])){
        set_login_cookies("Email", $_POST['adminEmail'], time() + (86400 * 30));
        set_login_cookies("pwd", $_POST['pwd'], time() + (86400 * 30));
        }

        if (isset($_POST['adminPhoneCheckbox'])) {
            set_login_cookies("DialCode", $_POST['dialCode'], time() + (86400 * 30));
            set_login_cookies("AdminPhone", $_POST['adminPhone'], time() + (86400 * 30));
            set_login_cookies("pwd2", $_POST['pwd2'], time() + (86400 * 30));
        }
?>
<!DOCTYPE html>
<html lang="en">

<?php include "include/profileHeader.php";?>

<body>
    <div id="preloader"><i>.</i><i>.</i><i>.</i></div>

    <div id="main-wrapper">

        <div class="verification section-padding">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-xl-5 col-md-6">
                        <div class="mini-logo text-center my-4">
                            <a href="./intro.html"><img src="./images/logo.png" alt=""></a>
                            <h4 class="card-title mt-3">Verify your Email</h4>
                        </div>
                        <div class="auth-form card">
                            <div class="card-body">
                                <form action="verify-step-2.html" class="identity-upload">
                                    <div class="identity-content">
                                        <span class="icon"><i class="icofont-email"></i></span>
                                        <p>We sent verification email to <strong
                                                class="text-dark">example@email.com</strong>. Click the link inside to
                                            get started!</p>
                                        <a href="index.html">Go to Dashboard</a>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <a href="signup.html">Email didn't arrive?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="./js/scripts.js"></script>
    <script>

    </script>
</body>

</html>
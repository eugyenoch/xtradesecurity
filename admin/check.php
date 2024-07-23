<?php
//Require my functions.php file
include('../function.php');

//Build the login script
if(isset($_POST['confirm'])){
//Extract the user input and assign to variables
$user = sanitize($_POST['user']);

//Search DB for the entered data above
$sql_check = "SELECT * FROM admin WHERE user_email = '$user'";

//Execute the mysqli query
$sqlDo = $con->query($sql_check);

//count the number of rows that contain the data
$rowCount = mysqli_num_rows($sqlDo);

//Check if there is no matching row with the user data
if($rowCount<=0){
$toast = "fail";
}
else{
$toast = "success";
header("Refresh:2,url=change-password.php?em=$user");
}
}
else{
//header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Admin Area | Confirm Email Address</title>
<link href="css/styles.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
<div id="layoutAuthentication_content">
<main>
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-5">
<div class="card shadow-lg border-0 rounded-lg mt-5">
<div class="card-header"><h4 class="text-center font-weight-light my-4">Admin Password Recovery</h4></div>
<div class="card-body">
    <div class="small mb-3 text-muted"><p><small>Confirm your registered email address and if found, you will be re-directed to update your password effectively.</small></p></div>
    <form action="<?php htmlentities($_SERVER['PHP_SELF']);?>" method="post" name="adminCheckForm">
        <div class="form-floating mb-3">
            <input class="form-control" id="inputEmail" type="email" placeholder="username" name="user" title="Enter your registered email address" required />
            <label for="inputEmail">Email address</label>
        </div>
        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
            <a class="small" href="login.php">Return to login</a>
            <a type="submit" class="btn btn-primary" name="confirm" role="button">Confirm</a>
        </div>
    </form>
</div>
<div class="card-footer text-center py-3">
    <div class="small">Not admin? <a href="../login.php">Login Here!</a></div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
<div id="layoutAuthentication_footer">
<footer class="py-4 bg-light mt-auto">
<div class="container-fluid px-4">
<?php include "adminFooter.php";?>
</div>
</div>
</footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</body>
</html>
<?php
if(isset($toast) && $toast==='success'){
echo "<script>toastr.success('You will be redirected shortly', 'Success')</script>";
}

if(isset($toast) && $toast==='fail'){
echo "<script>toastr.error('We cannot log you in', 'Wrong credentials')</script>";
}
$con->close();
?>
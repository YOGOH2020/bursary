<html>
<head>
    <title>Staff Login</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="logo">
    <img src="images/logo.png" alt="Logo" width="200" height="200">
</div>
<div class="heading">
    <h4 class="text-center">BURSARY MANAGEMENT INFORMATION SYSTEM (BMIS) - STAFF LOGIN</h4>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form method="post" action="">
                <br>
                <input type="text" name="uname" class="form-control" placeholder="* Username" required>
                <br>
                <input type="password" name="password" class="form-control" placeholder="* Password" required>
                <br>
                <select name="county" id="county" class="form-control" required>
                    <option value="">=========Select County=========</option>
                    <option value="Nairobi">Nairobi</option>
                    <option value="Kisumu">Kisumu</option>
                    <option value="Siaya">Siaya</option>
                    <option value="Busia">Busia</option>
                    <option value="Kisii">Kisii</option>
                    <option value="Migori">Migori</option>
                </select>
                <br>
                <div class="buttons">
                    <input type="submit" name="submit" value="Login" class="btn btn-outline-primary">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="index.php" class="btn btn-primary">Applicant Login</a>
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>
<?php
session_start();

if(isset($_POST['submit'])){
    include 'db_connect.php';

    $username = mysqli_real_escape_string($db,$_POST['uname']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $county = mysqli_real_escape_string($db,$_POST['county']);

    $qry=mysqli_query($db,"SELECT * FROM users WHERE username='$username' AND passwd='$password' AND county='$county'");
    $row = mysqli_fetch_array($qry,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($qry);

    // If result matched $username,$password and $usertype, table row must be 1 row

    if($count == 1) {

        if (!empty($username) && !empty($password) && !empty($county=='Nairobi')){
            header("LOCATION:sysadmin_dashboard.php");
        }

        else if(!empty($username) && !empty($password) && $county=='Kisumu'){
            header("LOCATION:kisumu_dashboard.php");
        }

        else if(!empty($username) && !empty($password) && $county=='Siaya'){
            header("LOCATION:siaya_dashboard.php");
        }

        else if(!empty($username) && !empty($password) && $county=='Busia'){
            header("LOCATION:busia_dashboard.php");
        }

        else if(!empty($username) && !empty($password) && $county=='Kisii'){
            header("LOCATION:kisii_dashboard.php");
        }

        else if(!empty($username) && !empty($password) && $county=='Migori'){
            header("LOCATION:migori_dashboard.php");
        }

    }else {
        header("LOCATION:login_error.php");
    }
}
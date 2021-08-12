<html>
<head>
    <title>Success</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="logo">
    <img src="images/logo.png" alt="Logo" width="100" height="100">
</div>
<div class="heading">
    <h2 class="text-center">Success</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <?php

            $conn=mysqli_connect("localhost","root","","lipiadb");
            if (!$conn)
            {
                die("Connection Failed : " . mysqli_connect_error());
            }
            $sql="insert into users(first_name,middle_name,last_name,county,username,passwd,user_group)
values ('$_POST[fname]','$_POST[mname]','$_POST[lname]','$_POST[county]','$_POST[uname]','$_POST[password]','$_POST[ugroup]')";
            if($conn->query($sql) == true)
            {
                print "<p>New User Added Successfully.</p>";
                print "<a href='register_user.php' class='btn btn-outline-primary'>Add New</a>";
            }
            else
            {
                print "User not added.";
            }
            mysqli_close($conn);
            ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>
<html>
<head>
    <title>Applicant Registration Successful</title>
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
    <h3 class="text-center">Applicant Registration Successful</h3>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <?php

            $conn=mysqli_connect("localhost","root","","lipiadb");
            if (!$conn)
            {
                die("Connection Failed : " . mysqli_connect_error());
            }
            $firstname = mysqli_real_escape_string($conn, $_POST['fname']);
            $middlename = mysqli_real_escape_string($conn, $_POST['mname']);
            $lastname = mysqli_real_escape_string($conn, $_POST['lname']);
            $email_address = mysqli_real_escape_string($conn, $_POST['emailaddress']);
            $county_origin = mysqli_real_escape_string($conn, $_POST['county']);
            $user_name = mysqli_real_escape_string($conn, $_POST['uname']);
            $pass = mysqli_real_escape_string($conn, $_POST['password']);
            $user_group = mysqli_real_escape_string($conn, $_POST['ugroup']);

            $sql="insert into applicants(first_name,middle_name,last_name,email,county,username,passwd,ugroup)
values ('$firstname','$middlename','$lastname','$email_address','$county_origin','$user_name','$pass','$user_group')";
            if ($conn->query($sql) == true)
            {
                print "<p class='text-justify'>Thank you for your registration. You will receive a confirmation email within the next 24 Hours with your login credentials to apply for your bursary.</p>";
                print "<a href='register_applicant.php' class='btn btn-primary'>New Applicant</a>";
            }
            else
            {
                print "<p class='text-justify'>Applicant Registration Failed. Please try again.</p>";
                print "<a href='register_applicant.php' class='btn btn-danger'>Please Try Again</a>";
            }
            mysqli_close($conn);
            ?>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
</body>
</html>
<html>
<head>
    <title>Approval Status</title>
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
    <h3 class="text-center">Approval Status</h3>
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

            $applicantid = mysqli_real_escape_string($conn, $_POST['applicantid']);
            $firstname = mysqli_real_escape_string($conn, $_POST['fname']);
            $middlename = mysqli_real_escape_string($conn, $_POST['mname']);
            $lastname = mysqli_real_escape_string($conn, $_POST['lname']);
            $email = mysqli_real_escape_string($conn, $_POST['emailaddress']);
            $county = mysqli_real_escape_string($conn, $_POST['county']);
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $pass = mysqli_real_escape_string($conn, $_POST['password']);
            $usergroup = mysqli_real_escape_string($conn, $_POST['usergroup']);
            $status = mysqli_real_escape_string($conn, $_POST['status']);
            $approvaldate = mysqli_real_escape_string($conn, $_POST['approvaldate']);

            $sql="insert into applicant_approvals(applicant_id,first_name,middle_name,last_name,email,county,username,passwd,ugroup,status,approval_date)
values ('$applicantid','$firstname','$middlename','$lastname','$email','$county','$username','$pass','$usergroup','$status','$approvaldate')";

            if ($conn->query($sql) == true)
            {
                print "<p class='text-justify'>Applicant Approved / Declined Successfully</p>";
                print "<a href='search_applicant_approve.php' class='btn btn-outline-danger'>Next Approval</a>";
            }
            else{
                print "<p class='text-justify'>Applicant not approved / Declined.</p>";
                print "<a href='search_applicant_approve.php' class='btn btn-danger'>Try Again</a>";
            }
            mysqli_close($conn);
            ?>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
</body>
</html>
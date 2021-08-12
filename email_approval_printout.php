<html>
<head>
    <title>Email Approval Printout</title>
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
    <h3 class="text-center">Enter Applicant ID to print Bursary Application</h3>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form action="bursary_application_printout.php" method="post">
                <input type="email" name="emailAddress" class="form-control" placeholder="* Email Address Here" required>
                <br>
                <button type="submit" class="btn btn-primary">Print Bursary Application</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="logout.php" class="btn btn-outline-dark">Login</a>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
</body>
</html>
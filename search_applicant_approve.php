<html>
<head>
    <title>Locate Applicant to Approve</title>
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
    <h3 class="text-center">Locate Applicant to Approve</h3>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form action="applicant_approvals.php" method="post">
                <br>
                <input type="number" name="applicantid" class="form-control" placeholder="* Applicant ID" required>
                <br>
                <div class="buttons">
                    <input type="submit" name="submit" value="Search" class="btn btn-outline-danger">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="sysadmin_dashboard.php" class="btn btn-outline-primary">Dashboard</a>
                </div>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
</body>
</html>
<html>
<head>
    <title>Create Applicant Account</title>
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
<div class="heading-applicant">
    <h2 class="text-center">Create Applicant Account</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="new_applicant.php" method="post">
                <br>
                <input type="text" name="fname" class="form-control" placeholder="* First Name" required>
                <br>
                <input type="text" name="mname" class="form-control" placeholder="* Middle Name" required>
                <br>
                <input type="text" name="lname" class="form-control" placeholder="* Last Name" required>
                <br>
                <input type="email" name="emailaddress" class="form-control" placeholder="* Email Address" required>
                <br>
                <select name="county" id="county" class="form-control" required>
                    <option value="">=====Select County=====</option>
                    <option value="Kisumu">Kisumu</option>
                    <option value="Siaya">Siaya</option>
                    <option value="Busia">Busia</option>
                    <option value="Kisii">Kisii</option>
                    <option value="Migori">Migori</option>
                </select>
                <br>
                <input type="text" name="uname" class="form-control" placeholder="* Username" required>
                <br>
                <input type="password" name="password" class="form-control" placeholder="* Password" required>
                <br>
                <select name="ugroup" id="ugroup" class="form-control" required>
                    <option value="">=====Select User Group=====</option>
                    <option value="Applicant">Applicant</option>
                </select>
                <br>
                <div class="buttons">
                    <button class="btn btn-primary" type="submit">Register</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="index.php" class="btn btn-outline-danger">Login</a>
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>
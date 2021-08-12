<html>
<head>
    <title>Kisumu County Dashboard</title>
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
    <h2 class="text-center">Kisumu County Dashboard</h2>
</div>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand active" href="#"></a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler justify-content-center" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse justify-content-center navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="bursary_application_Kisumu.php">Bursary Application</a>
            </li>

            <!-- Dropdown -->
<!--            <li class="nav-item dropdown">-->
<!--                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">-->
<!--                    Users-->
<!--                </a>-->
<!--                <div class="dropdown-menu">-->
<!--                    <a class="dropdown-item" href="register_user.php">Register User</a>-->
<!--                    <a class="dropdown-item" href="#">Approve User</a>-->
<!--                    <a class="dropdown-item" href="#">Login</a>-->
<!--                </div>-->
<!--            </li>-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Reports
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="bursary_applications_date_kisumu.php">Bursary Applications By Date</a>
                    <a class="dropdown-item" href="bursary_applications_kisumu_county.php">Bursary Applications By County</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>
</body>
</html>
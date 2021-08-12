<?php
$conn=mysqli_connect("localhost","root","","lipiadb");

if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}

$sql="SELECT * FROM bursary_applicants where email_address='$_POST[emailAddress]'";
$result=$conn->query($sql);

if ($result->num_rows > 0)
{
    while ($row=$result->fetch_assoc())
    {
        ?>

        <html>
        <head>
            <title>Bursary Application Printot</title>
            <link rel="icon" href="images/logo.png">
            <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
            <link rel="stylesheet" href="css/custom.css">
            <script src="bootstrap/js/jquery-3.4.0.js"></script>
            <script src="bootstrap/js/popper.min.js"></script>
            <script src="bootstrap/js/bootstrap.js"></script>
        </head>
        <body>
        <hr>
        <div class="logo">
            <img src="images/logo.png" alt="Logo" width="150" height="150">
        </div>
        <hr>
        <div class="heading">
            <h3 class="text-center">Bursary Application Form</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5 class="text-center"><b>Applicant ID :</b></h5>
                    <br>
                    <p class="text-center"><?php echo $row['applicant_id'];?></p>
                </div>
                <div class="col-sm-3">
                    <h5 for="" class="text-center"><b>Application Date :</b></h5>
                    <br>
                    <p class="text-center"><?php echo $row['application_date'];?></p>
                </div>
                <div class="col-sm-3">
                    <h5 for="" class="text-center"><b>First Name :</b></h5>
                    <br>
                    <p class="text-center"><?php echo $row['first_name'];?></p>
                </div>
                <div class="col-sm-3">
                    <h5 for="" class="text-center"><b>Middle Name :</b></h5>
                    <br>
                    <p class="text-center"><?php echo $row['middle_name'];?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <h5 for="" class="text-center"><b>Last Name :</b></h5>
                    <br>
                    <p class="text-center"><?php echo $row['last_name'];?></p>
                </div>
                <div class="col-sm-3">
                    <h5 for="" class="text-center"><b>Gender :</b></h5>
                    <br>
                    <p class="text-center"><?php echo $row['gender'];?></p>
                </div>
                <div class="col-sm-3">
                    <h5 for="" class="text-center"><b>Date Of Birth :</b></h5>
                    <br>
                    <p class="text-center"><?php echo $row['dob'];?></p>
                </div>
                <div class="col-sm-3">
                    <h5 for="" class="text-center"><b>Telephone Nmber :</b></h5>
                    <br>
                    <p class="text-center"><?php echo $row['tel_number'];?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <h5 for="" class="text-center"><b>Email Address :</b></h5>
                    <br>
                    <p class="text-center"><?php echo $row['email_address'];?></p>
                </div>
                <div class="col-sm-3">
                    <h5 for="" class="text-center"><b>Next Of Kin (NOK) :</b></h5>
                    <br>
                    <p class="text-center"><?php echo $row['nok_name'];?></p>
                </div>
                <div class="col-sm-3">
                    <h5 for="" class="text-center"><b>NOK Tel. Number :</b></h5>
                    <br>
                    <p class="text-center"><?php echo $row['nok_tel_number'];?></p>
                </div>
                <div class="col-sm-3">
                    <h5 for="" class="text-center"><b>NOK Relationship:</b></h5>
                    <br>
                    <p class="text-center"><?php echo $row['nok_relationship'];?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <h5 for="" class="text-center"><b>County :</b></h5>
                    <br>
                    <p class="text-center"><?php echo $row['county'];?></p>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-3"></div>
                <div class="col-sm-3"></div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <h5 for="" class="text-center"><b>Institution Name :</b></h5>
                    <br>
                    <p class="text-center"><?php echo $row['institution_name'];?></p>
                </div>
                <div class="col-sm-3">
                    <h5 for="" class="text-center"><b>School Fees Payable :</b></h5>
                    <br>
                    <p class="text-center"><?php echo $row['fees_payable'];?></p>
                </div>
                <div class="col-sm-3">
                    <h5 for="" class="text-center"><b>School Fees Paid :</b></h5>
                    <br>
                    <p class="text-center"><?php echo $row['fees_paid'];?></p>
                </div>
                <div class="col-sm-3">
                    <h5 for="" class="text-center"><b>Balance :</b></h5>
                    <br>
                    <p class="text-center"><?php echo $row['balance'];?></p>
                </div>
            </div>
        </div>
        <p class="text-center">
            <a href="logout.php" class="btn btn-outline-danger">Login</a>
        </p>
        </body>
        </html>

        <?php
    }
}
mysqli_close($conn);
?>

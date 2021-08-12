<?php
$conn=mysqli_connect("localhost","root","","lipiadb");

if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}

$sql="SELECT * FROM applicants WHERE applicant_id='$_POST[applicantid]'";
$result=$conn->query($sql);

if ($result->num_rows > 0)
{
    while ($row=$result->fetch_assoc())
    {
        ?>

        <html>
        <head>
            <title>Applicant Approvals</title>
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
            <h3 class="text-center">Applicant Approvals</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <form action="approval_status.php" method="post">
                        <br>
                        <label for=""><b>Applicant ID</b></label>
                        <br>
                        <input type="number" name="applicantid" class="form-control" value="<?php echo $row['applicant_id'];?>" required>
                        <br>
                        <label for=""><b>First Name</b></label>
                        <br>
                        <input type="text" name="fname" class="form-control" value="<?php echo $row['first_name'];?>" required>
                        <br>
                        <label for=""><b>Middle Name</b></label>
                        <br>
                        <input type="text" name="mname" class="form-control" value="<?php echo $row['middle_name'];?>" required>
                        <br>
                        <label for=""><b>Last Name</b></label>
                        <br>
                        <input type="text" name="lname" class="form-control" value="<?php echo $row['last_name'];?>" required>
                        <br>
                        <label for=""><b>Email</b></label>
                        <br>
                        <input type="email" name="emailaddress" class="form-control" value="<?php echo $row['email'];?>" required>
                        <br>
                        <label for=""><b>County</b></label>
                        <br>
                        <input type="text" name="county" class="form-control" value="<?php echo $row['county'];?>" required>
                        <br>
                        <label for=""><b>Username</b></label>
                        <br>
                        <input type="text" name="username" class="form-control" value="<?php echo $row['username'];?>" required>
                        <br>
                        <label for=""><b>Password</b></label>
                        <br>
                        <input type="text" name="password" class="form-control" value="<?php echo $row['passwd'];?>" required>
                        <br>
                        <label for=""><b>User Group</b></label>
                        <br>
                        <input type="text" name="usergroup" class="form-control" value="<?php echo $row['ugroup'];?>" required>
                        <br>
                        <label for=""><b>Status</b></label>
                        <br>
                        <select name="status" id="status" class="form-control" required>
                            <option value="Approved">Approved</option>
                            <option value="Declined">Declined</option>
                        </select>
                        <br>
                        <label for=""><b>Approval Date</b></label>
                        <br>
                        <input type="date" name="approvaldate" class="form-control" required>
                        <br>
                        <div class="buttons">
                            <input type="submit" name="submit" value="Approve/Decline" class="btn btn-primary">
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

        <?php
    }
}
mysqli_close($conn);
?>
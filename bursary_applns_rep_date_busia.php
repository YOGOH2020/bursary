<html>
<head>
    <title>Bursary Applications Report by Date</title>
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
<hr>
<div class="heading">
    <h3 class="text-center">Bursary Applications Report By Date</h3>
</div>
<hr>
<?php
$con=mysqli_connect("localhost","root","","lipiadb");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$county = mysqli_real_escape_string($con, $_POST['county']);
$datefrom = mysqli_real_escape_string($con, $_POST['datefrom']);
$dateto = mysqli_real_escape_string($con, $_POST['dateto']);
$result = mysqli_query($con,"SELECT * FROM bursary_applicants where county='$county' AND application_date>='$datefrom' AND application_date<='$dateto'");

echo "<table class='table table-bordered table-striped table-responsive-sm'>
<tr>
<th>Applicant ID</th>
<th>Application Date</th>
<th>First Name</th>
<th>Last Name</th>
<th>Tel. Number</th>
<th>NOK Name</th>
<th>NOK Tel No.</th>
<th>NOK Relationship</th>
<th>County</th>
<th>Institution</th>
<th>Fees Payable</th>
<th>Fees Paid</th>
<th>Balance</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['applicant_id'] . "</td>";
    echo "<td>" . $row['application_date'] . "</td>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['last_name'] . "</td>";
    echo "<td>" . $row['tel_number'] . "</td>";
    echo "<td>" . $row['nok_name'] . "</td>";
    echo "<td>" . $row['nok_tel_number'] . "</td>";
    echo "<td>" . $row['nok_relationship'] . "</td>";
    echo "<td>" . $row['county'] . "</td>";
    echo "<td>" . $row['institution_name'] . "</td>";
    echo "<td>" . $row['fees_payable'] . "</td>";
    echo "<td>" . $row['fees_paid'] . "</td>";
    echo "<td>" . $row['balance'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
<div class="buttons">
    <a href="busia_dashboard.php" class="btn btn-outline-danger">Dashboard</a>
</div>
</body>
</html>
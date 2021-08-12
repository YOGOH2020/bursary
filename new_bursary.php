<html>
<head>
    <title>Bursary Application Posting</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<?php

$target_dir = "uploads/";
$target_file1 = $target_dir . basename($_FILES["idUpload"]["name"]);
$target_file2 = $target_dir . basename($_FILES["transcriptUpload"]["name"]);
$target_file3 = $target_dir . basename($_FILES["recLetterUpload"]["name"]);
$uploadOk = 1;
$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
$imageFileType2 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
$imageFileType3 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));


// Allow certain file formats
if($imageFileType1 != "jpg" && $imageFileType1 != "pdf" && $imageFileType1 != "jpeg") {
    echo "Sorry, only JPG, JPEG & PDF files are allowed.";
    $uploadOk = 0;
}
if($imageFileType2 != "jpg" && $imageFileType2 != "pdf" && $imageFileType2 != "jpeg") {
    echo "Sorry, only JPG, JPEG & PDF files are allowed.";
    $uploadOk = 0;
}
if($imageFileType3 != "jpg" && $imageFileType3 != "pdf" && $imageFileType3 != "jpeg") {
    echo "Sorry, only JPG, JPEG & PDF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    $move = move_uploaded_file($_FILES["idUpload"]["tmp_name"], $target_file1)
        .move_uploaded_file($_FILES["transcriptUpload"]["tmp_name"], $target_file2)
        .move_uploaded_file($_FILES["recLetterUpload"]["tmp_name"], $target_file3);
    if ($move) {
        $conn = mysqli_connect("localhost","root","","lipiadb");
        $fileOneName = mysqli_real_escape_string($conn,basename( $_FILES["idUpload"]["name"]));
        $fileTwoName = mysqli_real_escape_string($conn,basename( $_FILES["transcriptUpload"]["name"]));
        $fileThreeName = mysqli_real_escape_string($conn,basename( $_FILES["recLetterUpload"]["name"]));

        $applicationDate = mysqli_real_escape_string($conn,$_POST['applicationdate']);
        $firstName = mysqli_real_escape_string($conn,$_POST['fname']);
        $middleName = mysqli_real_escape_string($conn,$_POST['mname']);
        $lastName = mysqli_real_escape_string($conn,$_POST['lname']);
        $gender = mysqli_real_escape_string($conn,$_POST['gender']);
        $dob = mysqli_real_escape_string($conn,$_POST['dob']);
        $telNumber = mysqli_real_escape_string($conn,$_POST['telnumber']);
        $emailAddress = mysqli_real_escape_string($conn,$_POST['emailaddress']);
        $nokName = mysqli_real_escape_string($conn,$_POST['nokname']);
        $nokTelNumber = mysqli_real_escape_string($conn,$_POST['noktelnumber']);
        $nokRelationship = mysqli_real_escape_string($conn,$_POST['nokrelationship']);
        $county = mysqli_real_escape_string($conn,$_POST['county']);
        $institutionName = mysqli_real_escape_string($conn,$_POST['institutionname']);
        $feesPayable = mysqli_real_escape_string($conn,$_POST['feespayable']);
        $feesPaid = mysqli_real_escape_string($conn,$_POST['feespaid']);
        $balance = $feesPayable - $feesPaid;
        $reasons = mysqli_real_escape_string($conn,$_POST['reasons']);

        $query = "INSERT INTO `bursary_applicants`(`applicant_id`, `application_date`, `first_name`, `middle_name`, `last_name`, `gender`, `dob`, `tel_number`, `email_address`, `nok_name`, `nok_tel_number`, `nok_relationship`, `county`, `institution_name`, `fees_payable`, `fees_paid`, `balance`, `reasons`, `file_one`, `file_two`, `file_three`) 
VALUES (null,'$applicationDate','$firstName','$middleName','$lastName','$gender','$dob','$telNumber','$emailAddress','$nokName','$nokTelNumber','$nokRelationship','$county','$institutionName','$feesPayable','$feesPaid','$balance','$reasons','$fileOneName','$fileTwoName','$fileThreeName')";
        $save = mysqli_query($conn,$query);
        if ($save){
            echo "<p>New Bursary Applied Successfully </p><br>";

        }else{
            echo "<p>Bursary Application Failed.</p>";
        }
        echo "The files ".$fileOneName ."<br>".$fileTwoName."<br>".$fileThreeName."<br>". " have been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your files.";
    }
}

?>
<br><br>
<a href="email_approval_printout.php" class="btn btn-primary">Print</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="bursary_application.php" class="btn btn-primary">New Application</a>
</body>
</html>
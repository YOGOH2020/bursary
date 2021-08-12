<?php
if (isset($_POST['compute'])) {
    $error = "";

    if (isset($_POST['applicationdate'])) {
        $applicationdate = $_POST['applicationdate'];
    } else {
        $error .= 'Enter application date <br />';
    }
    if (isset($_POST['fname'])) {
        $firstname = $_POST['fname'];
    } else {
        $error .= 'Enter first name <br />';
    }
    if (isset($_POST['mname'])) {
        $middlename = $_POST['mname'];
    } else {
        $error .= 'Enter middle name <br />';
    }
    if (isset($_POST['lname'])) {
        $lastname = $_POST['lname'];
    } else {
        $error .= 'Enter last name <br />';
    }
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    } else {
        $error .= 'Select Gender. <br />';
    }
    if (isset($_POST['dob'])) {
        $dob = $_POST['dob'];
    } else {
        $error .= 'Enter date of birth <br />';
    }
    if (isset($_POST['telnumber'])) {
        $telnumber = $_POST['telnumber'];
    } else {
        $error .= 'Enter telephone number <br />';
    }
    if (isset($_POST['emailaddress'])) {
        $emailaddress = $_POST['emailaddress'];
    } else {
        $error .= 'Enter email address <br />';
    }
    if (isset($_POST['nokname'])) {
        $nokname = $_POST['nokname'];
    } else {
        $error .= 'Enter Next of Kin Names <br />';
    }
    if (isset($_POST['noktelnumber'])) {
        $noktelnumber = $_POST['noktelnumber'];
    } else {
        $error .= 'Enter NOK Telephone Number <br />';
    }
    if (isset($_POST['nokrelationship'])) {
        $noktelnumber = $_POST['nokrelationship'];
    } else {
        $error .= 'Select NOK Relationship <br />';
    }
    if (isset($_POST['county'])) {
        $county = $_POST['county'];
    } else {
        $error .= 'Select County <br />';
    }
    if (isset($_POST['institutionname'])) {
        $institutionname = $_POST['institutionname'];
    } else {
        $error .= 'Enter Institution Name <br />';
    }
    if (isset($_POST['feespayable'])) {
        $feespayable = $_POST['feespayable'];
    } else {
        $error .= 'Enter Fees Payable <br />';
    }
    if (isset($_POST['feespaid'])) {
        $feespaid = $_POST['feespaid'];
    } else {
        $error .= 'Enter Fees Paid <br />';
    }
    $balance = $feespayable-$feespaid;
    if (isset($_POST['reasons'])) {
        $reasons = $_POST['reasons'];
    } else {
        $error .= 'Specify the reason for applying your bursary. <br />';
    }
    if (isset($_POST['idUpload'])) {
        $idUpload = $_POST['idUpload'];
    } else {
        $error .= 'Upload your national ID. <br />';
    }
    if (isset($_POST['transcriptUpload'])) {
        $transcriptUpload = $_POST['transcriptUpload'];
    } else {
        $error .= 'Upload your transcript. <br />';
    }
    if (isset($_POST['recLetterUpload'])) {
        $recLetterUpload = $_POST['recLetterUpload'];
    } else {
        $error .= 'Upload your recommendation letter. <br />';
    }
    echo $error;
}
?>
<html>
<head>
    <title>Bursary Application</title>
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
    <h2 class="text-center">Bursary Application Form</h2>
</div>
<div class="container">
    <form action="new_bursary.php" method="post" enctype="multipart/form-data">
        <table class="table table-striped table-responsive-sm">
            <tr>
                <td colspan="4" class="text-center">
                    <h3>Personal Details</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <label for=""><b>Application Date</b></label>
                    <br>
                    <input type="date" name="applicationdate" class="form-control" value="<?php if (isset($applicationdate)) echo $applicationdate; ?>"" required>
                </td>
                <td>
                    <label for=""><b>First Name</b></label>
                    <br>
                    <input type="text" name="fname" class="form-control" value="<?php if (isset($firstname)) echo $firstname; ?>" required>
                </td>
                <td>
                    <label for=""><b>Middle Name</b></label>
                    <br>
                    <input type="text" name="mname" class="form-control" value="<?php if (isset($middlename)) echo $middlename; ?>" required>
                </td>
                <td>
                    <label for=""><b>Last Name</b></label>
                    <br>
                    <input type="text" name="lname" class="form-control" value="<?php if (isset($lastname)) echo $lastname; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for=""><b>Gender</b></label>
                    <br>
                    <select name="gender" id="gender" class="form-control" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </td>
                <td>
                    <label for=""><b>Date Of Birth</b></label>
                    <br>
                    <input type="date" name="dob" class="form-control" value="<?php if (isset($dob)) echo $dob; ?>" required>
                </td>
                <td>
                    <label for=""><b>Telephone Number</b></label>
                    <br>
                    <input type="text" name="telnumber" class="form-control" <?php if (isset($telnumber)) echo $telnumber; ?> required>
                </td>
                <td>
                    <label for=""><b>Email Address</b></label>
                    <br>
                    <input type="email" name="emailaddress" class="form-control" value="<?php if (isset($emailaddress)) echo $emailaddress; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for=""><b>Next Of Kin(NOK) Name</b></label>
                    <br>
                    <input type="text" name="nokname" class="form-control" value="<?php if (isset($nokname)) echo $nokname; ?>" required>
                </td>
                <td>
                    <label for=""><b>NOK Telephone Number</b></label>
                    <br>
                    <input type="text" name="noktelnumber" class="form-control" value="<?php if (isset($noktelnumber)) echo $noktelnumber; ?>" required>
                </td>
                <td>
                    <label for=""><b>NOK Relationship</b></label>
                    <br>
                    <select name="nokrelationship" id="nokrelationship" class="form-control" required>
                        <option value="Father">Father</option>
                        <option value="Mother">Mother</option>
                        <option value="Brother">Brother</option>
                        <option value="Sister">Sister</option>
                        <option value="Uncle">Uncle</option>
                        <option value="Aunt">Aunt</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
                <td>
                    <label for=""><b>County</b></label>
                    <select name="county" id="county" class="form-control" required>
                        <option value="Kisumu">Kisumu</option>
                        <option value="Siaya">Siaya</option>
                        <option value="Busia">Busia</option>
                        <option value="Kisii">Kisii</option>
                        <option value="Migori">Migori</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <h3 class="text-center">Institution Details</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <label for=""><b>Institution Name</b></label>
                    <br>
                    <input type="text" name="institutionname" class="form-control" value="<?php if (isset($institutionname)) echo $institutionname; ?>" required>
                </td>
                <td>
                    <label for=""><b>School Fees Payable</b></label>
                    <br>
                    <input type="number" name="feespayable" id="feesPayable" class="form-control"  required>
                </td>
                <td>
                    <label for=""><b>School Fees Paid</b></label>
                    <br>
                    <input type="number" name="feespaid" id="feesPaid" class="form-control" required>
                </td>
                <td>
                    <label for=""><b>Balance</b></label>
                    <br>
                    <p onclick="myFunction(); return null;" id="balance" class="btn">Show Balance</p>
                    <script>
                        function myFunction() {
                            num1 = document.getElementById("feesPayable").value;
                            num2 = document.getElementById("feesPaid").value;
                            document.getElementById("balance").innerHTML = num1 - num2;
                        }
                    </script>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <label for=""><b>Reasons for Bursary Application</b></label>
                    <br>
                    <textarea name="reasons" id="reasons" cols="20" rows="10" class="form-control" required></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <h3 class="text-center">Upload the following files in either pdf, jpg or jpeg format</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <label for=""><b>ID</b></label>
                    <input type="file" name="idUpload" id="idUpload" class="form-control" value="<?php if (isset($idUpload)) echo $idUpload; ?>">
                </td>
                <td>
                    <label for=""><b>Result Slip/Transcript</b></label>
                    <input type="file" name="transcriptUpload" id="transcriptUpload" class="form-control" value="<?php if (isset($transcriptUpload)) echo $transcriptUpload; ?>">
                </td>
                <td>
                    <label for=""><b>Recommendation Letter</b></label>
                    <input type="file" name="recLetterUpload" id="recLetterUpload" class="form-control" value="<?php if (isset($recLetterUpload)) echo $recLetterUpload; ?>">
                </td>
                <td>
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td colspan="4" class="text-center">
                    <input type="submit" name="apply" value="Apply" class="btn btn-success">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="busia_dashboard.php" class="btn btn-outline-primary">Dashboard</a>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

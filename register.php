<?php
if(isset($_POST['submit']))
{
$firstName = $_POST['FirstName'];
$lastName = $_POST['LastName'];
$sex = $_POST['Sex'];
$dob = $_POST['Dob'];
$email = $_POST['Email'];
$address = $_POST['Address'];
$mobile = $_POST['Mobile'];
$collegeDept = $_POST['CollegeDept'];
$program = $_POST['Program'];
header('Location: summary.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="regstyle.css">
</head>
<body class="whole">
    <div class="containment">
    <form action="register.php" method="post" name="form" onsubmit="return validateForm()">
            <h1>Student Registration Form</h1>
            <p>Fill the following fields to for admission.</p>
            <hr>
                <label for="FirstName">First Name</label>
                <input type="text" name="FirstName" placeholder="Juan" required>
                <br>
                <label for="LastName">Last Name</label>
                <input type="text" name="LastName" placeholder="Dela Cruz" required>
                <br>
                <label>Sex</label><br>
                <Input type="radio" id="Male" name="Sex" value="Male">
                <label for="Male">Male</label><br>
                <input type="radio" id="Female" name="Sex" value="Female">
                <label for="Female">Female</label>
                <br>
                <label>Date of Birth</label>
                <input type="date" name="Dob">
                <br>
                <label for="Email">Email</label>
                <input type="email" name="Email" placeholder="Email Address" required>
                <br>
                <label for="Address">Address</label>
                <input type="text" name="Address" placeholder="Angeles City, PH">
                <br>
                <label for="CollegeDept">College Department</label>
                <select id="CollegeDept" name="CollegeDept">
                    <option value="CCS">CCS</option>
                    <option value="CAS">CAS</option>
                </select>
                <br>
                <label for="Program">Program</label>
                <input type="text" id="Program" name="Program">
                <br>
                <label for="Mobile">Mobile Number</label>
                <input type="text" id="Mobile" name="Mobile">
            <div>
                <button type="submit" class="btn-signup">Sign Up</button>
            </div>
            <div>
                <div class="login">
                    <p>Already have an account? <a href="#">Login Here</a></p>
                </div>
            </div>
        </form>
    </div>
    <script src="handler.js"></script>
</body>
</html>
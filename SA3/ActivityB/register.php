<?php
include("db.php");

if(isset($_POST['register']))
{
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    if($password == $cpassword)
    {
        $sql = "INSERT INTO users(firstname,middlename,lastname,username,password,birthday,email,contactnumber)
        VALUES ('$fname','$mname','$lname','$username','$password','$birthday','$email','$contact')";
        mysqli_query($conn,$sql);
        echo "Registration Successful";
    }
    else
    {
        echo "Password and Confirm Password are not the same";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Registration Form</h2>

<form method="POST">
First Name:<input type="text" name="fname" required>
Middle Name:<input type="text" name="mname">
Last Name:<input type="text" name="lname" required>
Username:<input type="text" name="username" required>
Password:<input type="password" name="password" required>
Confirm Password:<input type="password" name="cpassword" required>
Birthday:<input type="date" name="birthday">
Email:<input type="email" name="email">
Contact Number:<input type="text" name="contact">
<input type="submit" name="register" value="Register" class="btn">
</form>
<br>
</div>
</body>
</html>
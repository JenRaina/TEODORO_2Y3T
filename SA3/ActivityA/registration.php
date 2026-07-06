<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
    <h2>Registration Form</h2>

    <form method="POST">

        First Name:
        <input type="text" name="fname" required>

        Middle Name:
        <input type="text" name="mname" required>

        Last Name:
        <input type="text" name="lname" required>

        Username:
        <input type="text" name="username" required>

        Password:
        <input type="password" name="password" required>

        Confirm Password:
        <input type="password" name="cpassword" required>

        Birthday:
        <input type="text" name="bday" required>

        Email:
        <input type="text" name="email" required>

        Contact Number:
        <input type="text" name="cnumber" required>

        <input type="submit" name="submit" value="Submit" class="btn">

    </form>

<?php

if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $bday = $_POST['bday'];
    $email = $_POST['email'];
    $cnumber = $_POST['cnumber'];

    if($password == $cpassword)
    {
        echo "<h3>Registration Details</h3>";

        echo "Full Name: ".$fname.$mname.$lname."<br>";
        echo "Username: ".$username."<br>";
        echo "Password: ".$password."<br>";
        echo "Birthday: ".$bday."<br>";
        echo "Email: ".$email."<br>";
        echo "Contact Number: ".$cnumber."<br>";
    }
    else
    {
        echo "<p style='color:red;'>
        Password and Confirm Password are not the same
        </p>";
    }
}

?>

</div>

</body>
</html>
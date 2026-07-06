<?php
session_start();
include("dbconnect.php");
if(isset($_POST['reset']))
{
    $username = $_SESSION['username'];

    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];
    $renewpass = $_POST['renewpass'];

    $check = "SELECT * FROM users
              WHERE username='$username'
              AND password='$oldpass'";

    $result = mysqli_query($conn,$check);

    if(mysqli_num_rows($result) > 0)
    {
        if($newpass == $renewpass)
        {
            $update = "UPDATE users
                       SET password='$newpass'
                       WHERE username='$username'";
            mysqli_query($conn,$update);
            echo "Password Updated Successfully";
        }
        else
        {
            echo "New password and ReEnter new password should be the same.";
        }
    }
    else
    {
        echo "Current password is not the same with the old password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Reset Password</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Reset Password</h2>

<form method="POST">
Current Password:<input type="password" name="oldpass">
New Password:<input type="password" name="newpass">
Re-enter New Password:<input type="password" name="renewpass">
<input type="submit" name="reset" value="Reset Password" class="btn">
</form>

<br>
home.php
</div>
</body>
</html>
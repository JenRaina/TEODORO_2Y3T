<?php
include("db.php");

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
}

$username = $_SESSION['username'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);

if(isset($_POST['reset']))
{
    $current = $_POST['current'];
    $new = $_POST['new'];
    $renew = $_POST['renew'];

    if($current == $user['password'])
    {
        if($new == $renew)
        {
            $update = "UPDATE users
                       SET password='$new'
                       WHERE username='$username'";

            mysqli_query($conn, $update);

            echo "Password Updated Successfully";
        }
        else
        {
            echo "New password and Re-Enter new password should be the same.";
        }
    }
    else
    {
        echo "Current password is not the same with the old password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>User Information Form</h2>

<p><b>Welcome <?php echo $user['firstname']; ?></b></p>

<p>
Birthday: <?php echo $user['birthday']; ?>
</p>

<h3>Contact Details</h3>

<p>
Email: <?php echo $user['email']; ?>
</p>

<p>
Contact: <?php echo $user['contactnumber']; ?>
</p>

<hr>

<h3>RESET PASSWORD</h3>

<form method="POST">

<label>Enter Current Password:</label>
<input type="password" name="current">

<label>Enter New Password:</label>
<input type="password" name="new">

<label>Re-Enter New Password:</label>
<input type="password" name="renew">

<input type="submit" name="reset" value="Reset Password" class="btn">

</form>

<br>

<a href="logout.php">Logout</a>

</div>

</body>
</html>
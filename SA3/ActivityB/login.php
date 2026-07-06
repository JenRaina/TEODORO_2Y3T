<?php
include("db.php");

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users
            WHERE username='$username'
            AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
    {
        $_SESSION['username'] = $username;

        header("Location: home.php");
    }
    else
    {
        echo "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h2>Login</h2>
<form method="POST">
Username:<input type="text" name="username">
Password:<input type="password" name="password">
<input type="submit" name="login" value="Login" class="btn">
</form>

<br>
</div>
</body>
</html>
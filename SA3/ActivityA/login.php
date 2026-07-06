<?php
session_start();

$validUser = "user123";
$validPass = "12345";

if(isset($_SESSION['username']))
{
    header("Location: home.php");
}

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(isset($_POST['remember']))
    {
        setcookie("username",$username,time()+60);
        setcookie("password",$password,time()+60);
    }

    if($username == $validUser && $password == $validPass)
    {
        $_SESSION['username'] = $username;

        header("Location: home.php");
    }
    else
    {
        $error = "Invalid Username or Password";
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
<h2>Login Form</h2>
<form method="POST">
Username:
<input type="text" name="username" value="
<?php
if(isset($_COOKIE['username']))
{
    echo $_COOKIE['username'];
}
?>">

Password:
<input type="password"
name="password"
value="<?php
if(isset($_COOKIE['password']))
{
    echo $_COOKIE['password'];
}
?>">

Remember Me <input type="checkbox" name="remember">

<br><br>
<input type="submit"
name="login"
value="Login"
class="btn">
</form>

<?php
if(isset($error))
{
    echo "<p style='color:red;'>$error</p>";
}
?>
</div>
</body>
</html>
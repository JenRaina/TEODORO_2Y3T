<?php
session_start();

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>

<h2>Home Page</h2>

Welcome,

<b>
<?php
echo $_SESSION['username'];
?>
</b>

<br><br>

<a href="logout.php">Logout</a>

</body>
</html>
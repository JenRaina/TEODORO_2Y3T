<?php
session_start();
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "activityb"
);

if(!$conn)
{
    die("Connection Failed");
}
?>
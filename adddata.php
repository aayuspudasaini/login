<?php
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
include 'dp.php';
$sql = "INSERT INTO usr (username, password, repassword) VALUES ('$username','$password','$repassword')";
$result = mysqli_query ($conn,$sql);
if ($result)
{
    header('location:index.php');
}



?>

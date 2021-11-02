<?php
include 'dp.php';
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$sql = "INSERT INTO usr (username, password, repassword) VALUES ('$username','$password','$repassword')";
$result = mysqli_query ($conn,$sql);
if ($result)
{
    header('location:welcome.php');
}
?>

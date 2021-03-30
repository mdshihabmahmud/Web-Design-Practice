<?php

include("connection.php");
$id = $_POST['uid'];
$pass = $_POST['pass'];
$sql = "select * from tbluser where id = $id";
$data = mysqli_query($conn,$sql);

if($data)
echo "Log in Successfull.";
else
echo "Log in failed.";
?>
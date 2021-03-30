<?php
include("connection.php")

$id = $_GET['sid'];
$query = "SELECT * from 'tblstudent' where id = '$id' ";
$data = mysqli_query($conn,$query);

$row = mysqli_fetch_array($data);

$filepath = "upload/".$row['picture'];

header('content-Disposition: attachment; filename =' . basename($filepath));
header('content-Length: ' . filesize($filepath));

readfile($filepath);

?>
<?php
include("connection.php");
$query = "SELECT * FROM `tblstudent` ";
$data = mysqli_query($conn,$query);
?>
<table border="1" width="500px;">
	<tr>
		<th>Name</th>
		<th>ID</th>
		<th>Department</th>
        <th>Batch</th>
		<th>Email</th>
		<th>Contact Number</th>
	</tr>


<?php
while($row = mysqli_fetch_array($data))
{
	echo "
	<tr>
		<th>$row[sname]</th>
		<th>$row[id]</th>
		<th>$row[dept]</th>
        <th>$row[batch]</th>
		<th>$row[email]</th>
		<th>$row[contact]</th>
	</tr>
	";
	
}
?>
</table>
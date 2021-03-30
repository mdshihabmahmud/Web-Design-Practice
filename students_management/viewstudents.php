<!DOCTYPE html>
<html>
<head>
	<title>Students Information Management System</title>
	<style>
		
  *{
	margin: 0px;
	padding:0px;
}
.header1{
	background-color: gray;
	text-align: center;
	padding-top: 55px;

}
.nav{
	background-color: #34495E;
	height: 50px;
}
        .nav .navbar{
        	margin: 0px auto;

        	
        }
        .nav .navbar ul{
          list-style-type: none;
       
         
        }
        .nav .navbar ul li{
         
          float: left;
         
        }
        .nav .navbar ul li a{
          text-decoration: none;
          color: black;
          background-color: #5DADE2;  
          font-size: 20px; 
          line-height: 50px;
          padding: 15px;
          transition: all linear .5s;
           }
           .nav .navbar ul li a:hover{
          color: black;
          background-color: white;  
          font-size: 20px; 
          font-weight: 800;
           }
          .nav .navbar ul li ul li{
          	float: none;
          }
          .nav .navbar ul li ul li{
          	display: none;
          }
          .nav .navbar ul li:hover ul li{
          	display: block;
          }
          .nav .navbar ul li ul li a{
          
          background-color: lightblue;
          font-size: 20px;
          }
           .footer{
          	height: 105px;
          	background-color: black;
          	color: white;
          }
	</style>
</head>
<body style="background-color: gray;">
 <section class="nav">
	
		 <div class="navbar">
		 	
		 	<ul>
		 		<li><a href="home.html">Home</a></li>
		 		<li><a href="req.html">Requirements</a></li>
		 		<li><a href="registrationform.php">Registration Form</a></li>
		 		<li><a href="viewstudents.php">View Students</a></li>
		 		
		 	</ul>
		 </div>
	</section>
	
<h1 style="padding-top: 20px; text-align: center;">Students Database Store</h1><br>

<?php
include("connection.php");
$query = "SELECT * FROM `tblstudent` ";
$data = mysqli_query($conn,$query);
?>
<div style="text-align: center;">
	<table border="1" width="1000px;">
	<tr>
		<th>Name</th>
		<th>ID</th>
		<th>Department</th>
        <th>Batch</th>
		<th>Email</th>
		<th>Contact Number</th>
		<th>Picture</th>
		<th>Action</th>
	</tr>


<?php
while($row = mysqli_fetch_array($data))
{
	echo "
	<tr>
		<td>$row[sname]</td>
		<td>$row[id]</td>
		<td>$row[dept]</td>
        <td>$row[batch]</td>
		<td>$row[email]</td>
		<td>$row[contact]</td>
		<td><img src=upload/$row[picture] height=50px width80px</td><br>
		<td><a href=delete.php?sid=$row[id]>Delete</a>
		<a href=updateform.php?sid=$row[id]>Update</a>

		</td>
	</tr>
	";
	
}
?>
</table>
<br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br><br>


</div>
<div class="footer">
	shihab
</div>
</body>
</html>
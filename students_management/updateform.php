<!DOCTYPE html>
<html>
<head>
	<title>Students Information Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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

<div class="header1">
	<?php
include("connection.php");
$id = $_GET['sid'];
$query = "SELECT * FROM `tblstudent` where id = $id ";
$data = mysqli_query($conn,$query);
$row = mysqli_fetch_array($data);
?>
	<h1>Students Update Form</h1><br><br>
<form action="update.php" method="POST">
	<b>Student Name:</b> <input style="width: 200px; height: 30px;" type="text" name="sname" value="<?php echo $row['sname'];?>"placeholder="Enter Your Name" required=""><br><br>
	<b>Student ID:</b> <input style="width: 200px; height: 30px;" type="text" name="id" value="<?php echo $row['id'];?>" placeholder="Enter Your Student ID" required="" disabled><br><br>
	<b>Department:</b> <select style="width: 200px; height: 30px;" name="dept">
		<option <?php if($row['dept']=="CSE") echo "selected"; ?> >CSE</option>
		<option <?php if($row['dept']=="EEE") echo "selected"; ?> >EEE</option>
		<option <?php if($row['dept']=="SWE") echo "selected"; ?> >SWE</option>
		<option <?php if($row['dept']=="BBA") echo "selected"; ?> >BBA</option>
		<option <?php if($row['dept']=="THM") echo "selected"; ?> >THM</option>
		<option <?php if($row['dept']=="MCT") echo "selected"; ?> >MCT</option>
		<option <?php if($row['dept']=="CE") echo "selected"; ?> >CE</option>
		<option <?php if($row['dept']=="ETE") echo "selected"; ?> >ETE</option>
		<option <?php if($row['dept']=="ICE") echo "selected"; ?> >ICE</option>
	</select><br><br>
	<b>Batch:</b> <select style="width: 200px; height: 30px;" name="batch">
		<option <?php if($row['batch']=="47") echo "selected"; ?> >47</option>
		<option <?php if($row['batch']=="48") echo "selected"; ?>>48</option>
		<option <?php if($row['batch']=="49") echo "selected"; ?>>49</option>
		<option <?php if($row['batch']=="50") echo "selected"; ?>>50</option>
		<option <?php if($row['batch']=="51") echo "selected"; ?>>51</option>
		<option <?php if($row['batch']=="52") echo "selected"; ?>>52</option>
		<option <?php if($row['batch']=="53") echo "selected"; ?>>53</option>
		<option <?php if($row['batch']=="54") echo "selected"; ?>>54</option>
		<option <?php if($row['batch']=="55") echo "selected"; ?>>55</option>
		<option <?php if($row['batch']=="56") echo "selected"; ?>>56</option>
		<option <?php if($row['batch']=="57") echo "selected"; ?>>57</option>
		<option <?php if($row['batch']=="58") echo "selected"; ?>>58</option>
	</select><br><br>
	<b>E-mail:</b> <input style="width: 200px; height: 30px;" type="text"  name="email" value="<?php echo $row['email'];?>" placeholder="Enter Your E-mail"><br><br>
	<b>Contact Number:</b> <input style="width: 200px; height: 30px;" type="text" name="contact" value="<?php echo $row['contact'];?>" placeholder="Enter Your Contact Number"><br><br>
	<input style="font-size: 20px; width: 100px; height: 30px;" type="submit" value="Submit">
</form>
</div><br>
<div class="footer">
	shihab
</div>
</body>
</html>
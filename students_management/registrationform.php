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
	<h1>Students Registration Form</h1><br>
<form action="insert.php" method="POST" enctype="multipart/form-data">
	<b>Student Name:</b> <input style="width: 200px; height: 30px;" type="text" name="sname" placeholder="Enter Your Name" required=""><br><br>
	<b>Student ID:</b> <input style="width: 200px; height: 30px;" type="text" name="id" placeholder="Enter Your Student ID" required=""><br><br>
	<b>Department:</b> <select style="width: 200px; height: 30px;" name="dept">
		<option>CSE</option>
		<option>EEE</option>
		<option>SWE</option>
		<option>BBA</option>
		<option>THM</option>
		<option>MCT</option>
		<option>CE</option>
		<option>ETE</option>
		<option>ICE</option>
	</select><br><br>
	<b>Batch:</b> <select style="width: 200px; height: 30px;" name="batch">
		<option>47</option>
		<option>48</option>
		<option>49</option>
		<option>50</option>
		<option>51</option>
		<option>52</option>
		<option>53</option>
		<option>54</option>
		<option>55</option>
		<option>56</option>
		<option>57</option>
		<option>58</option>
	</select><br><br>
	<b>E-mail:</b> <input style="width: 200px; height: 30px;" type="text" name="email" placeholder="Enter Your E-mail"><br><br>
	<b>Contact Number:</b> <input style="width: 200px; height: 30px;" type="text" name="contact" placeholder="Enter Your Contact Number"><br><br>
	<b>Picture:</b> <input type="file" name="picture"><br><br>
	<input style="font-size: 20px; width: 100px; height: 30px;" type="submit" value="Submit">
</form>
</div><br>
<div class="footer">
	shihab
</div>
</body>
</html>
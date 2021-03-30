<!DOCTYPE html>
<html>
<head>
	<title>Admin Login Form</title>
	<style>
		*{
			margin: 0px;
			padding: 0px;
		}
		.admin{
			margin: 0px auto;
			margin-top: 100px;
            padding: 20px;
			height: 400px;
			width: 600px;
			background-color: #2980B9;
		}
        .user{
        	height: 40px;
        	width: 200px;
        }
        .login{
        	height: 30px;
        	width: 70px;
        }
        .frm{
        	text-align: center;
        }
	</style>
</head>
<body style="background-color: black;">

<div class="admin">
	<form class="frm" action="login.php" method="POST">
		<h1 style="margin-top: 70px;">Admin Login</h1><br>
		<br>
		<b>User ID:    </b><input class="user" type="text" name="uid" placeholder="Username" required="" ><br><br>
		<b>Password:     </b><input class="user" type="text" name="pass" placeholder="Password" required="" ><br><br>
		<input class="login" type="submit" name="" value="Log in">
	</form>
	
</div>

</body>
</html>
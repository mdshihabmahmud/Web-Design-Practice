<?php
   require_once("./dbconn.php");
   session_start();

    if (isset($_POST['registration'])) {
     $name = $_POST['name'];
      $email = $_POST['email'];
       $username = $_POST['username'];
        $password = $_POST['password'];
         $c_password = $_POST['c_password'];


         $photo = explode('.', $_FILES['photo']['name']);
         $photo = end($photo);
         $photo = $username.".".$photo;


         $input_error = array();


 $password = md5('$password');
   $query = "INSERT INTO `users`(`name`, `email`, `username`, `password`, `photo`, `status`) VALUES ('$name', '$email', '$username', '$password', '$photo', 'inactive')";

   $query = mysqli_query($conn, $query);

    if($query){
      $_SESSION['data_insert_success'] = "Data Inserted Successfully";
      move_uploaded_file($_FILES['photo']['tmp_name'],'upload/'.$photo);
      header('location: form.php');
    }else{
      $_SESSION['data_insert_error'] = "Data Inserted Error";
    }
    }

   ?> 
<!DOCTYPE html>
<html>
<head>
  <title>User Registration Form</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <style>
    *{
      margin: 0px;
      padding: 0px;
    }
    .frm{
      text-align: center;
    }
    .input{
      height: 30px;
      width: 250px;
    }
    .input1{
      height: 30px;
      width: 150px;
      background-color: #2E86C1;
    }
    .error{
      color: red;
      font-weight: 700;
      font-style: italic;
    }
  </style>
</head>
<body>
<div>
  <h1 style="text-align: center; margin-top: 30px;">User Registration Form</h1><br>
<?php if(isset($_SESSION['data_insert_success'])){echo '<div style="text-align:center;">'.$_SESSION['data_insert_success'].'</div>';}?>
<?php if(isset($_SESSION['data_insert_error'])){echo '<div style="text-align:center;">'.$_SESSION['data_insert_error'].'</div>';}?>
 
  <hr>
  <br>
  <br>

       <form class="frm" action="" method="POST" enctype="multipart/form-data">
       <div>
         <b>Name:</b> <input class="input" type="text" name="name" placeholder="Enter Your Name" id="name" required="">
          
        </b><br><br>
         <b>Email:</b> <input class="input" type="email" name="email" placeholder="Enter Your Email" id="email" required=""><br><br>
         <b>Username:</b> <input class="input" type="text" name="username" placeholder="Enter Your Username" id="username" required=""><br><br>
         <b>Password:</b> <input class="input" type="password" name="password" placeholder="Enter Your Password" id="password" required=""><br><br>
         <b>Confirm Password:</b> <input class="input" type="password" name="c_password" placeholder="Enter Your Confirm Password" id="c_password" required=""><br><br>
         <b>Photo:</b> <input class="input" type="file" name="photo" id="photo"><br><br>
         <input class="input1" type="submit" value="Registration" name="registration"><br>
       </div>
       <br>
      </form>
      <p style="text-align: center;">If you have an account? then please <a href="http://localhost/project/admin/login.php">Login</a></p>
      <br>
      <hr>
      <br>
      <footer style="text-align: center;">
        <p>Copyright &copy; <?=date('Y')?> All Right Reserved.</p>
      </footer>

</div>



<script src="js/bootstrap.min.js"></script>
</body>
</html>
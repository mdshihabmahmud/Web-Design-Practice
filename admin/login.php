<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   

    <title>Students Management System</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  </head>
  <body style="background-color: gray;">
   <div style="text-align: center;" class="container">
     <h1 style="text-align: center; padding-top: 50px;">Students Management System</h1><br>
     <div style="text-align: center;">
       <div>
        <h2 class="text-center">Admin Login Form</h2><br>
         
         <form action="login.php" method="POST">
          <div style="text-align: center;">
            <input type="text" placeholder="Username" name="usename" required="" class="form-control"><br>
          </div>
           <div style="text-align: center;">
            <input type="password" placeholder="Password" name="password" required="" class="form-control"><br>
          </div>
          <div style="text-align: right;">
           <input type="submit" value="Login" name="login" class="btn btn-info"><br>
           <br>
           <a style="text-decoration: none;" class="btn btn-success" href="index.php">Back</a>
         </div>
          
         
         </form>
       </div>
     </div>
     
   </div>

    
  </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <title>Students Management System</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  </head>
  <body style="background-color: #D68910;">
   <div class="container"><br><br>
    <div style="text-align: right;">
           <a style="text-decoration: none;" class="btn btn-primary" href="admin/login.php">Login</a><br><br>
         </div>
    <br>
    
     <h1 class="text-center">Welcome to Students Management System</h1><br>
  <div class="row text-center">
    <div class="text-center">
       <form action="" method="POST">
       <table class="table table-bordered text-center">
         <tr>
           <td colspan="2">Students Information</td>
           
         </tr>
          <tr>
           <td><label for="choose">Choose Class</label></td>
           <td>
             <select class="form-control" id="choose" name="choose">
               <option value="">Select</option> 
               <option value="1">1st</option> 
               <option value="2">2nd</option> 
               <option value="3">3rd</option>
               <option value="4">4th</option>
               <option value="5">5th</option>

             </select>
           </td>
         </tr>
          <tr>
           <td><label for="roll">Roll</label></td>
           <td><input class="form-control" type="number" name="roll" placeholder="Enter Your Roll" required=""></td>
         </tr>
          <tr>
           <td colspan="2">
            <input type="submit" value="show info" name="show_info" ></td>
          
         </tr>
       </table>

     </form>
    </div>
  </div>
  <br>
         
   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  
  </body>
</html>
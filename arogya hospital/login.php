<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arogya Health Care Hospital- Login</title>
  <link rel="stylesheet" href="login.css">

</head>
<body>

      <div class="login-container">
        <h2>Login to Arogya Health Care hospital </h2>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
          
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
          
            <label for="role">Role:</label>
            <select id="role" name="role">
              <option value="default">Select Role</option>
              <option value="admin">Admin</option>
              <option value="staff">Staff</option>
              <option value="receptionist">Receptionist</option>
            </select><br>
          
            <input type="submit" value="Login" name="login"> <br>
            <input type="submit" value="Back">
          </form>
      </div>

</body>
</html>
<?php
   if(isset($_POST['login']))
   {
     $username   = $_POST['username'];
     $password   = $_POST['password'];
     $role       = $_POST['role'];

      $query  =  "INSERT INTO loginform VALUES('$username','$password','role')";
      $data   = mysqli_query($connection,$query);

      if($data)
      {
         echo"Data Insert into Database";
      }
      else
      {
        echo"Failed :" . mysqli_error($connection);
      }
     
   }

?>
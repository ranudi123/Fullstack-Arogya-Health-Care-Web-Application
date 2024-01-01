<?php include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Room Details</title>
  <link rel="stylesheet" href="room.css">
</head>
<body>
    <header>
        <nav class="navbar">
          <div class="logo">
            <img src="pic/logo3.png" alt="Hospital Logo">
          </div>
          <ul class="nav-links">
          <li><a href="home.php">Dashboard</a></li>
          <li><a href="patients.php">Patients</a></li>
          <li><a href="room.php">Rooms</a></li>
          <li><a href="schedules.php">Schedules</a></li>
          <li><a href="invoices.php">Invoices</a></li>
         <li><a href="login.php">Login</a></li>
          </ul>
        </nav>
      </header>
      
      <br>
      <br>
<form action="#" method="post">
  <label for="roomNumber">Room Number:</label><br>
  <input type="text" id="roomNumber" name="roomNumber" required><br><br>

  <label for="roomType">Room Type:</label><br>
  <select id="roomType" name="roomType" required>
    <option value="single">Single</option>
    <option value="double">Double</option>
    <option value="suite">Suite</option>
  </select><br><br>

  <table>
    <tr class="tr">
        <td><label for="availability">Availability:</label> </td>
        <td> <input type="checkbox" id="availability" name="availability" value="available" > <br> </td>
        <td><label for="availability"> Available</label> </td>  
        <td> <input type="checkbox" id="availability" name="availability" value="available" > <br> </td>
        <td><label for="availability"> Not available</label> </td>
    </tr>
  </table>
 <br>

  <label for="notes">Additional Notes:</label><br>
  <textarea id="notes" name="notes"></textarea><br><br>

  <input type="submit" value="Submit" name="register">
</form>

</body>
</html>
<?php
   if(isset($_POST['register']))
   {
     $roomNumber   = $_POST['roomNumber'];
     $roomType    = $_POST['roomType'];
     $availability = $_POST['availability'];
     $notes     = $_POST['notes'];

      $query  =  "INSERT INTO roomform VALUES('$roomNumber','$roomType','$availability','$notes')";
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
<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Schedule</title>
  <link rel="stylesheet" href="schedules.css">
</head>
<body>

    <header>
        <nav class="navbar">
          <div class="logo">
            <img src="pic/logo3.png" alt="Hospital Logo" style="width: max-content;">
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

<form action="#" method="post">
  <label for="staff">Staff:</label>
  <select id="staff" name="staff" required>
    <option value="doctor">Doctor</option>
    <option value="nurse">Nurse</option>
    <option value="technician">Technician</option>
  </select><br><br>

  <label for="room">Room:</label>
  <select id="room" name="room" required>
    <option value="operatingRoom1">Operating Room 1</option>
    <option value="operatingRoom2">Operating Room 2</option>
    <option value="operatingRoom3">Operating Room 3</option>
  </select><br><br>

  <label for="date">Date:</label>
  <input type="date" id="date" name="date" required><br><br>

  <label for="time">Time:</label>
  <input type="time" id="time" name="time" required><br><br>

  <label for="notes">Additional Notes:</label><br>
  <textarea id="notes" name="notes"></textarea><br>

  <input type="submit" value="Submit" name="submit">
</form>

</body>
</html>

<?php
   if(isset($_POST['submit']))
   {
     $staff   = $_POST['staff'];
     $room     = $_POST['room'];
     $date        = $_POST['date'];
     $time      = $_POST['time'];
     $notes     = $_POST['notes'];

      $query  =  "INSERT INTO schedulesform VALUES('$staff','$room','$date','$time','$notes')";
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
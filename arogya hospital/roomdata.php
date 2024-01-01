<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Room records- Arogya Health Care Hospital</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="roomdata.css">
</head>
<body style="background-color:#F67280;">

<header>
  <nav class="navbar">
    <div class="logo">
      <img src="pic/logo3.png" alt="Hospital Logo">
    </div>
    <ul class="nav-links">
      <li><a href="home.php">Dashboard</a></li>
      <li><a href="patientsdata.php">Patients</a></li>
      <li><a href="roomdata.php">Rooms</a></li>
      <li><a href="schedulesdata.php">Schedules</a></li>
      <li><a href="invoicesdata.php">Invoices</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  </nav>
</header>

    <br>
    <center><h2 class="hstyle">Room Records</h2></center>
    <hr>
  
     <button class="class">No</button>

    <br>
    <div class="container my 4" >
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Room Number</th>
      <th scope="col">Room Type</th>
      <th scope="col">Availability</th>
      <th scope="col">Notes</th>
    </tr>
  </thead>
  <tbody>
    
  <?php
    $sql = "SELECT * FROM roomform";
    $result = mysqli_query($connection, $sql);

   if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        $roomNumber = isset($row['roomNumber']) ? $row['roomNumber'] : 'N/A';
        $roomType = isset($row['roomType']) ? $row['roomType'] : 'N/A';
        $availability = isset($row['availability']) ? $row['availability'] : 'N/A';
        $notes = isset($row['notes']) ? $row['notes'] : 'N/A';

        echo "<tr>
                <td>$roomNumber</td>
                <td>$roomType</td>
                <td>$availability</td>
                <td>$notes</td>
              </tr>";
    }
} else {
    echo "Query failed: " . mysqli_error($connection);
}
?> 
 </tbody>

</div>

</body>
</html>
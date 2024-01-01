<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patient records - Arogya Health Care Hospital</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="patientsdata.css">
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
    <center><h2 class="hstyle">Patients Records</h2></center>
    <hr>

    <button class="insbtn">insert</button>
    <button class="upbtn">update</button>
    <button class="debtn">delete</button>

    <br>
    <div class="container my 4" >
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">NIC</th>
      <th scope="col">Age</th>
      <th scope="col">Phone No</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody>
    
  <?php
    $sql = "SELECT * FROM patientform";
    $result = mysqli_query($connection, $sql);

   if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        $fullname = isset($row['fullname']) ? $row['fullname'] : 'N/A';
        $nic = isset($row['nic']) ? $row['nic'] : 'N/A';
        $age = isset($row['age']) ? $row['age'] : 'N/A';
        $phone = isset($row['phone']) ? $row['phone'] : 'N/A';
        $gender = isset($row['gender']) ? $row['gender'] : 'N/A';

        echo "<tr>
                <td>$fullname</td>
                <td>$nic</td>
                <td>$age</td>
                <td>$phone</td>
                <td>$gender</td>
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
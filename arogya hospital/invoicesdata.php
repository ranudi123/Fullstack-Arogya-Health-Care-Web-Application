<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice records - Arogya Health Care Hospital</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="invoicesdata.css">
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
    <center><h2 class="hstyle"> Invoices Records</h2></center>
    <hr>

    <button class="insbtn">insert</button>
    <button class="upbtn">update</button>
    <button class="debtn">delete</button>


    <br>
    <div class="container my 4" >
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Patient Name</th>
      <th scope="col">Invoice Date</th>
      <th scope="col">Amount</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    
  <?php
    $sql = "SELECT * FROM invoiceform";
    $result = mysqli_query($connection, $sql);

   if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        $patientName = isset($row['patientName']) ? $row['patientName'] : 'N/A';
        $invoiceDate = isset($row['invoiceDate']) ? $row['invoiceDate'] : 'N/A';
        $amount = isset($row['amount']) ? $row['amount'] : 'N/A';
        $description = isset($row['description']) ? $row['description'] : 'N/A';

        echo "<tr>
                <td>$patientName</td>
                <td>$invoiceDate</td>
                <td>$amount</td>
                <td>$description</td>
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
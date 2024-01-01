<?php include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Patient Invoice</title>
  <link rel="stylesheet" href="invoices.css">
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
  <label for="patientName">Patient Name:</label>
  <input type="text" id="patientName" name="patientName" required><br><br>

  <label for="invoiceDate">Invoice Date:</label>
  <input type="date" id="invoiceDate" name="invoiceDate" required><br><br>

  <label for="amount">Amount:</label>
  <input type="number" id="amount" name="amount" min="0" step="0.01" required><br><br>

  <label for="description">Description:</label>
  <textarea id="description" name="description"></textarea><br><br>

  <input type="submit" value="Generate Invoice" name="submit">
</form>

</body>
</html>
<?php
   if(isset($_POST['submit']))
   {
     $patientName   = $_POST['patientName'];
     $invoiceDate       = $_POST['invoiceDate'];
     $amount        = $_POST['amount'];
     $description     = $_POST['description'];

      $query  =  "INSERT INTO invoiceform VALUES('$patientName','$invoiceDate','$amount','$description')";
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


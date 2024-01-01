<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patient Management - Arogya Health Care Hospital</title>
  <link rel="stylesheet" href="patients.css"> <!-- Link to your CSS file for styling -->
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

<div class="container">
  <h1 class="form-title">Patient Registrartion</h1>
  <form action="#" method="POST">
    <div class="main-user-info">
      <div class="user-input-box">
       <label for="Name"> Name</label>
           <input type="text"
               id="name"
               name="fullname"
               placeholder="Enter name*"
           >
      
      </div>
      <div class="user-input-box">
        <label for="NIC"> NIC</label>
            <input type="text"
                id="NIC"
                name="nic"
                placeholder="Enter your NIC NO*"
            >
       </div>
  
      <div class="user-input-box">
        <label for="Age"> Age</label>
            <input type="text"
                id="age"
                name="age"
                placeholder="Enter your age*"
            >
       </div>
  
       <div class="user-input-box">
        <label for="Phone Number"> Phone Number</label>
            <input type="text"
                id="Phone Number"
                name="phone"
                placeholder="Enter your Phone Number*"
            >
       </div>
    </div>
      <div class="gender-detail.box">
        <span class="gender-title">Gender</span>
        <div class="gender-category">
           <input type="radio" name="gender" id="male" value="male">
           <label for="male">Male</label>
           <input type="radio" name="gender" id="female" value="female">
           <label for="female">Female</label>
        </div>
      </div>
      <div class="form-submit-btn">
        <input type="submit" value="Submit" name="submit">
      </div>
  </form>
</div>
</body>
</html>

<?php
   if(isset($_POST['submit']))
   {
     $fullname   = $_POST['fullname'];
     $nic        = $_POST['nic'];
     $age        = $_POST['age'];
     $phone      = $_POST['phone'];
     $gender = isset($_POST['gender']) ? $_POST['gender'] : ''; // Check if 'gender' is set

      $query  =  "INSERT INTO patientform VALUES('$fullname','$nic','$age','$phone','$gender')";
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
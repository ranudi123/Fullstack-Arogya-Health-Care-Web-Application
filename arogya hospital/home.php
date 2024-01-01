<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Health Care Hospital - Dashboard</title>
  <link rel="stylesheet" href="home.css"> 
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

<main class="dashboard">
  <section class="summary">
    <h2>Dashboard Summary</h2>
    <div class="summary-items">
      <div class="item">
        <h3>Total Patients</h3>
        <p>350</p>
      </div>
      <div class="item">
        <h3>Available Rooms</h3>
        <p>25</p>
      </div>
    </div>
  </section>

  <section class="schedule-tasks">
    <h2>Upcoming Schedules & Pending Tasks</h2>
    <div class="schedule-items">

      <div class="schedule-item">
        <h3>Dr. Smith's Schedule</h3>
        <p>Date: January 15, 2024</p>
        <p>Time: 10:00 AM - 12:00 PM</p>
      </div>
      <div class="task-item">
        <h3>Room Cleaning Task</h3>
        <p>Assigned to: Housekeeping Staff</p>
        <p>Status: Pending</p>
      </div>
 
    </div>
  </section>
</main>



</body>
</html>

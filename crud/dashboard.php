<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_email = $_SESSION['user_email'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Dashboard</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <!-- Add other nav items here -->
          </ul>
          <span class="navbar-text me-3">
            Welcome, <?php echo htmlspecialchars($user_email); ?>
          </span>
          <a href="logout.php" class="btn btn-outline-light">Logout</a>
        </div>
      </div>
    </nav>

    <div class="container mt-4">
      <h1 class="mb-4">Welcome to Your Dashboard</h1>
      
      <div class="row">
        <div class="col-md-3 mb-4">
          <div class="card text-white bg-primary">
            <div class="card-body">
              <h5 class="card-title">Total Users</h5>
              <p class="card-text display-4">1,234</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card text-white bg-success">
            <div class="card-body">
              <h5 class="card-title">Revenue</h5>
              <p class="card-text display-4">$5,678</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card text-white bg-warning">
            <div class="card-body">
              <h5 class="card-title">New Orders</h5>
              <p class="card-text display-4">42</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card text-white bg-danger">
            <div class="card-body">
              <h5 class="card-title">Pending Issues</h5>
              <p class="card-text display-4">7</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              Recent Activities
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">New user registered</li>
              <li class="list-group-item">Order #1234 completed</li>
              <li class="list-group-item">Report generated</li>
              <li class="list-group-item">System update scheduled</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              Quick Actions
            </div>
            <div class="card-body">
              <a href="#" class="btn btn-primary">Add New User</a>
              <a href="#" class="btn btn-secondary">Generate Report</a>
              <a href="#" class="btn btn-info">View All Orders</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
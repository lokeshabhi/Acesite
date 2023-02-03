<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <!-- Popper JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <!-- Custom styles for this template -->
     <link href="simple-sidebar.css" rel="stylesheet">
     <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<body>
  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="navbar-brand" href="index.php"> <img src="img/logo.jpg" alt="logo"> </a>
        </li>
        <li class="nav-item mt-3">
          <a class="nav-link" href="eventmanager.php">Publish Events</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    
      <!-- Icon -->
     <!-- Notifications -->
      
      <!-- Avatar -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="logout.php" class="btn btn-outline-primary" role="button" aria-pressed="true">Logout Here</a>
        </li>
      </ul>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
  <br><br>
  <div class="container">
  <h1 class="text-center">Registered Clients</h1>
  <div class="card border-dark mb-3">
  <div class="card-body text-dark">
    <table id="editableTable" class="table table-bordered da">
  <thead class="bg-info">
    <h3 class="text-dark">Contact Details</h3>
    <tr>
     <th>Name</th>
     <th>phone</th>
     <th>Email-Id</th>
     <th>Message</th>                         
    </tr>
  </thead>
  <tbody>
   <!-- database for District insertion -->
   <?php
    include_once "connection.php";
      $query = " SELECT * FROM registerform";
      $run = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)) { ?>
      <tr><td> <?php echo $row ['name']; ?></td> 
      <td> <?php echo $row ['email']; ?></td> 
     <td><?php echo $row ['phonenumber']; ?></td>
     <td><?php echo $row ['place'];?></td>
   <?php
  } 
   ?>
  </tbody>
   </table><hr>
    <p class="card-text"></p>
  </div>
</div>
   <a href="delete.php" class="btn btn-outline-light" role="button" aria-pressed="true">Delete Record</a>
 </div>
</body>
</html>
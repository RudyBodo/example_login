<?php
include('cek-login.php');
?>

<html>
<head>
  <title>Example Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="lib/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <div class="navbar navbar-inverse">
    <div class="container">
      <a href="index.php" class="navbar-brand">Example Login</a>
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>      
    </div>
  </div>
  <div class="container">
    <div class="alert alert-success">
     <strong>Success!</strong> 
     <h1><?php echo "Welcome " .$_SESSION['username']; ?></h1>
     </div>
  </div>
  </body>
  </htmL>
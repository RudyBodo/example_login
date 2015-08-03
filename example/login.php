<?php
session_start();

if (!empty($_SESSION['username'])) {
	header('location:index.php');
}
?>
<html>
<head>
  <title>Login</title>
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
          <li><a href="register.php">Register</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </div>      
    </div>
  </div>
 
 <div class="container">
        <?php
            if (!empty($_GET['error'])) {
        	if ($_GET['error'] == 1) {
        	    echo '<div class="alert alert-danger fade in">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>Login failed!
                     </div>';;
        	} else if ($_GET['error'] == 2) {
        		echo '<div class="alert alert-danger fade in">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>Login failed!
                     </div>';;
        	} else if ($_GET['error'] == 4) {
        		echo '<div class="alert alert-danger fade in">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>Login failed!
                     </div>';
        	}
        }
        ?>
  <h2>Please Login</h2>
        <form action="otentikasi.php" method="post" role="form">
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="username" placeholder="Enter username"/>
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Enter password"/>
          </div>
          <div class="checkbox">
            <label><input type="checkbox">Remember me</label>
          </div>
          <button type="submit" class="btn btn-primary" name="login" value="Login">Submit</button>
          </form>
    <script src="lib/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
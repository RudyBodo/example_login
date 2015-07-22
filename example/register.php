
<html>
<head>
  <title>Registration</title>
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
        <form class="form-horizontal" action='insert.php' method="POST">
          <fieldset>
            <div id="legend">
              <legend class="">Register</legend>
            </div>
            <div class="control-group">
              <!-- Username -->
              <label class="control-label"  for="Fullname">Full Name</label>
              <div class="controls">
                <input type="text" id="nama_lengkap" name="nama_lengkap" required="required" class="input-xlarge">
                <p class="help-block">Enter Your full name</p>
              </div>
            </div>
            <div class="control-group">
              <!-- Username -->
              <label class="control-label"  for="Username">Username</label>
              <div class="controls">
                <input type="text" id="username" name="username" required="required" class="input-xlarge">
                <p class="help-block">Username can contain any letters or numbers, without spaces</p>
              </div>
            </div>
            <div class="control-group">
              <!-- Password-->
              <label class="control-label" for="password">Password</label>
              <div class="controls">
                <input type="password" id="password" name="password" required="required" class="input-xlarge">
                <p class="help-block">Password should be at least 8 characters</p>
              </div>
            </div>
            <div class="control-group">
              <!-- E-mail -->
              <label class="control-label" for="email">E-mail</label>
              <div class="controls">
                <input type="email" id="email" name="email" placeholder="" class="input-xlarge">
                <p class="help-block">Please provide your E-mail</p>
              </div>
            </div>
            <div class="control-group">
              <!-- Password -->
              <label class="control-label"  for="alamat">Alamat</label>
              <div class="controls">
                <input type="text" id="alamat" name="alamat" required="required" class="input-xlarge">
                <p class="help-block">Enter Your Address</p>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <button class="btn btn-success">Register</button>
              </div>
            </div>
          </fieldset>
        </form>
    </div>
</body>
</html>
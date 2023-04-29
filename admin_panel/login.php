<?php include('controllerUserData.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Log into your account</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  
  <div class="container">
      <div class="wrapper">
	  <h1 class="title">SIGN IN</h1>
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	
  		<label>Email</label>
  		<input type="text" id="input-items" name="email" >
  	
  	
  		<label>Password</label>
  		<input type="password" name="password" id="input-items">
  	
  	
  		<button type="submit" class="btn" name="login">Login</button>
		  <a href="forgot-password.php">Forgot your password?</a>
  	<p>
  		Not yet an admin? <a href="register.php">Sign up</a>
  	</p>
  </form>
  </div>
    </div>
</body>
</html>
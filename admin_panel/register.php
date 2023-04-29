<?php include('controllerUserData.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Staff Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  
  
  <div class="container">
      <div class="wrapper">
        <h1 class="title">CREATE AN ACCOUNT</h1>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	
  	  <label>Username</label>
  	  <input id="input-items" type="text" name="username" value="<?php echo $username; ?>">
  	
  	
  	  <label>Email</label>
  	  <input id="input-items" type="email" name="email" value="<?php echo $email; ?>">
  	
  	
  	  <label>Password</label>
  	  <input id="input-items" type="password" name="password">
  	
  	
  	  <label>Confirm password</label>
  	  <input id="input-items" type="password" name="cpassword">
  	
  	
  	  <button type="submit" name="signup">Register</button>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
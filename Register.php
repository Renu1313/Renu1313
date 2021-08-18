<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration user with Keenable</title>
 <!-- <link rel="stylesheet" type="text/css" href="style.css">-->
</head>
<body>
  <div class="header">
  	<h2>Register New Employee</h2>
  </div>
	
  <form method="post" action="Register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="FName" value="<?php echo $FirstName; ?>">
  	</div>
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="index.html">Sign in</a>
  	</p>
  </form>
</body>
</html>


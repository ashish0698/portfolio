<?php
	include ('server.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 form-div">
				<form action="signup.php" method="post">
					 <h3 class="text-center">Register</h3>
					 <div class="alert alert-danger">
					 	<ul><?php include ('err.php'); ?></ul>
					 </div>	
					 <div class="form-group">
					 	<label for="username">Username</label>
					 	<input type="text" name="username" class="form-control form-control-lg">
					 </div>
					 <div class="form-group">
					 	<label for="username">Email</label>
					 	<input type="text" name="email" class="form-control form-control-lg">
					 </div>
					 <div class="form-group">
					 	<label for="username">Password</label>
					 	<input type="password" name="password" class="form-control form-control-lg">
					 </div>
					 <div class="form-group">
					 	<label for="username">ConfirmPassword</label>
					 	<input type="password" name="confirmpassword" class="form-control form-control-lg"><br>
					 </div>
					 <div class="form-group">
					 	<button type="submit" name="register" class="btn btn-primary btn-block btn-lg">Sign Up </button>
					 </div>
					 <p class="text-center">Already a member? <a href="login.php">Log In</a></p>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
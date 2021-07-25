<?php
 	include ('server.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 form-div login">
				<form action="login.php" method="post">
					 <h3 class="text-center">Login</h3>
					 <div class="alert alert-danger">
					 	<ul><?php include ('err.php'); ?></ul>
					 </div>	
					 <div class="form-group">
					 	<label for="username">Email</label>
					 	<input type="text" name="email" class="form-control form-control-lg">
					 </div>
					 
					 <div class="form-group">
					 	<label for="username">Password</label>
					 	<input type="password" name="password" class="form-control form-control-lg"><br>
					 </div>
					 
					 <div class="form-group">
					 	<button type="submit" name="login" class="btn btn-primary btn-block btn-lg">Login </button>
					 </div>
					 <p class="text-center">Not yet a member? <a href="signup.php">Sign Up</a></p>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
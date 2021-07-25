<?php
	// session_start();
	$username = "";
	$email = "";
	$errors = array();

	$db = mysqli_connect('localhost','root','','user_verification');

	//If signup button is clicked


	if(isset($_POST['register'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password_1 = $_POST['password'];
		$password_2 = $_POST['confirmpassword'] ;

		if (empty($username)) {
			array_push($errors, "username is required");
		}
		if (empty($email)) {
			array_push($errors, "email is required");
		}
		if (empty($password_1)) {
			array_push($errors, "password is required");
		}
		if ($password_1 != $password_2) {
			array_push($errors, "Password donot matched");
		}

		//if there are no errors submit to database

		if (count($errors) == 0) {
			$password = md5($password_1);
			$sql = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";
			mysqli_query($db, $sql);
			// $_SESSION['username'] = $username;
			// $_SESSION['sucess'] = "you are logged in";
			header('location:personal_website/index.html');
		}
	}

	//login user from login page

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		if (empty($email)) {
			array_push($errors, "email is required");
		}
		if (empty($password)) {
			array_push($errors, "password is required");
		}

		if(count($errors) == 0){
			$password = md5($password);
			$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
			$result = mysqli_query($db, $query);
			if(mysqli_num_rows($result) == 1){
				//log user in
				header('location:personal_website/index.html');
			}else{
				array_push($errors, "Wrong Email and Password");
			}
		}

	}


?>
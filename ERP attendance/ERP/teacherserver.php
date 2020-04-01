<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'erp');
	
		// LOGIN USER
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
		//	$password = md5($password);
			$query = "SELECT * FROM faculty WHERE fusername='$username' AND fpassword='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1)
				{
				$row = mysqli_fetch_row($results);
				$_SESSION['username'] = $username;
				$_SESSION['faculty_id'] = $row[0];
				$_SESSION['success'] = "You are now logged in";
				header('location: facultyhome.php');
			}
			else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
?>
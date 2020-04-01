<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: adminlogin.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: adminlogin.php");
	}

?>
<html>
<head>
<title>admin home</title>
<link rel="stylesheet" type="text/css"href="design.css">
<style>
body
 {
 background-image :url('b.JPG');}
</style>
</head>
<body>
<div class="navbar">
<ul>
<li><a href="#">RECORDS</a>
<ul>
<li><a href="#">CREATE</a>
<ul>
<li><a href="insertfaculty.php">FACULTY</a></li>
<li><a href="insertstudent.php">STUDENT</a></li>
</ul></li>
<li><a href="#">UPDATE</a>
<ul>
<li><a href="updatefaculty.php">FACULTY</a></li>
<li><a href="updatestudent.php">STUDENT</a></li>
</ul></li>
<li><a href="#">DELETE</a>
<ul>
<li><a href="deletefaculty.php">FACULTY</a></li>
<li><a href="deletestudent.php">STUDENT</a></li>
</ul></li>
</ul></li>
<li><a href="#">ATTENDANCE</a>
<ul>
<li><a href="#">FACULTY</a>
<ul>
<li><a href="insertfattendance.php">ENTER</a></li>
<li><a href="viewfattendance.php">VIEW</a></li>
</ul>
</li>
<li><a href="#">STUDENT</a>
<ul>
<li><a href="insertsattendance.php">ENTER</a></li>
<li><a href="viewsattendance.php">VIEW</a></li>
</ul>
</li>
</ul>
</li>
<li><a href="adminhome.php?logout='1'">LOGOUT</a></li> 
</ul>
</div>
<div>
<center>
<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<?php endif ?>
			</center>
</div>
</body>
</html>

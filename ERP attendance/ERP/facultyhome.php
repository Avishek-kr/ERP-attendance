<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: teacherlogin.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: teacherlogin.php");
	} ?>
<!DOCTYPE html>
<html>
<title>Faculty Home</title>
<link rel="stylesheet" type="text/css"href="design.css">

</style>
<body>


<div class="navbar">

<ul>
<li><a href="#">VIEW ATTENDANCE</a>
<ul>
<li><a href="viewselffattendance.php">SELF</a></li>
<li><a href="viewsattendance.php">STUDENT</a></li>
</ul>
</li>
<li><a href="insertsattendance.php">TAKE ATTENDANCE</a></li>
<li><a href="teacherlogin.php?logout='1'">LOGOUT</a></li>
<a href="#"><img src="man.png" width="70px" align="right"></a>
</ul>
</div>
<div>
<center>
<h2>HOME PAGE </h2>

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
		
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<?php endif ?>
</center>
</div>
</body>
</html>



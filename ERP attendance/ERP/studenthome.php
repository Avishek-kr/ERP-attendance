<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: studentlogin.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: studentlogin.php");
	}
?>
<html>
<title>Student Home</title>
<link rel="stylesheet" type="text/css"href="design.css">

<style>
body
 {
 background-image :url('b.JPG');}
</style>
<body>


<div class="navbar">

<ul>
<li><a href="viewselfsattendance.php">VIEW ATTENDANCE</a></li>
<li><a href="studenthome.php?logout='1'">LOGOUT</a></li>
<a href="#"><img src="man.png" width="100px" align="right"></a>
</ul>
</div>
<center>
<!--notification message-->
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
			<p>Welcome <strong><?php echo $_SESSION['username'];?></strong></p>
			<?php endif ?>
			</center>
</body>
</html>



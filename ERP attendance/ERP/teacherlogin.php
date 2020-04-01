<?php include('teacherserver.php') ?>
<html>
<head>
<title>login form</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initail-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" type="text/css" href="font-awesome.css"/>
<style>
.back{
	padding:15px 25px;
	color:#fff;
	background-color: #2ECC71;
	border: none;
	border-radius: 4px;
	border-bottom:4px solid #27AE60;
}
</style>
</head>
<body>
<div class="container">
<img src="man.png">
<form method="post" action="teacherlogin.php">
<?php include('teachererror.php'); ?>
<div class="form-input">
<input type="text" name="username" placeholder="USERNAME">
</div>
<div class="form-input">
<input type="password" name="password" placeholder="PASSWORD">
</div>
<input type="submit" name="login" value="LOGIN" class="btn-login">
<a href="index.php" ><button type="button" class="back">Back</button></a>

</form><br>
<a href="forgot.php">FORGOT PASSWORD?</a>
</div>
<footer>
<p>   </p>
</footer>
</body>
</html>

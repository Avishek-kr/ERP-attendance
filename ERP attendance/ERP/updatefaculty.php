<!DOCTYPE html>
<html>
<title>student</title>
<link rel="stylesheet" type="text/css"href="design.css">
<link rel="stylesheet" type="text/css"href="style1.css">
<style>
body {background:#f2f2f2;}
.wrapper {width:40px; padding:5px; background:white}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 6px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: steelblue;
    color: white;
    padding: 7px 10px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the refesh button */
.Refreshbtn {
    padding: 7px 10px;
    background-color: #f44336;
}

/* Float refresh and save buttons and add an equal width */
.Refreshbtn,.Savebtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 8px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .Refreshbtn, .Savebtn {
       width: 100%;
    }
}
</style>
<body>
<div class="navbar">

<ul>
<li><a href="adminhome.php">HOME</a></li>
</ul>

</div>


<h2> Faculty Update</h2>


<form action="faculty1.php" method="post" style="border:1px solid #ccc">
  <div class="container">
  <label><b>Faculty id</b></label>
    <input type="text" placeholder="Enter Faculty id" name="hfid" required>
	<label><b>Faculty Name</b></label>
    <input type="text" placeholder="Enter Faculty Name" name="hfname" required>
    <label><b>Gender</b></label></br>
    <input type="radio"name="hfgender" value="M" required>M   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="hfgender" value="F" required >F</br>
   
    <label><b>E-mail</b></label>
    <input type="text" placeholder="E-mail" name="hfemail" required>
    <label><b>Password</b></label>
    <input type="text" placeholder="Password" name="hfpassword" required>
    <div class="clearfix">
    <div class="clearfix">
      <a href="updatefaculty.php"><button type="button" class="Refreshbtn">Refresh</button></a>
      
	  
	  <button onclick="myFunction()" name="save" class="Savebtn">Save</button>




    </div>
  </div>
</form>

</body>
</html>
<?php
$host     = "localhost"; // Host name 
$username = "root"; // Mysql username 
$password = ""; // Mysql password 
$db_name  = "erp"; // Database name 
$con      = mysqli_connect($host, $username, $password, $db_name) or die ("Could not connect to Database... !");
//$select   = mysqli_select_db($db_name,"erp") or die ("Could not find Database... !");


if(isset($_POST["save"])){
$Fid = $_POST["hfid"];	
$Fname = $_POST["hfname"];
$Fgender = $_POST["hfgender"];
$Femail = $_POST["hfemail"];
$Fpassword=$_POST["hfpassword"];

$sql = "Insert into faculty1 (fid,fname,fgender,femail,fpassword) values ('$Fid','$Fname','$Fgender','$Femail','$Fpassword')";

if(mysqli_query($con,$sql))
{
echo '<script type="text/javascript"> alert("data inserted")</script>';	
}
else
{
echo '<script type="text/javascript"> alert("insertion failed")</script>';	
}
}

?>

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


<h2> DELETE STUDENT</h2>


<form action="deletestudent.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <label><b>Student Id</b></label>
    <input type="text" placeholder="Enter Student Id " name="hsid" required>
	<label><b>Student Name</b></label>
    <input type="text" placeholder="Enter Name" name="hsname" required>
   <div class="clearfix">
      
      
	
<button name="delete" >Delete</button>

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

if(isset($_POST["delete"]))
{
	$Sid=$_POST["hsid"];
	$Sname=$_POST["hsname"];
	//$query="select * from faculty1 where femail='$username' AND fpassword='$password' " ;
	$query="DELETE FROM student1 WHERE sid = '$Sid' AND sname='$Sname'";
	//$query_run =mysqli_query($con,$query);
if(mysqli_query($con,$query))
{
echo '<script type="text/javascript"> alert("data deleted")</script>';	
}
else
{
echo '<script type="text/javascript"> alert("record not found")</script>';	
}

}


?>

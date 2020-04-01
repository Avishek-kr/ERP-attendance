<!DOCTYPE html>
<html>
<title>teacher</title>
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


<h2>Attendance</h2>


<form action="insertsattendance.php" method ="post" style="border:1px solid #ccc">
  <div class="container">
    <label><b>Student Roll No.</b></label>
    <input type="text" placeholder="Enter Student Roll No. " name="hsroll" required/>
    <label><b>Branch</b></label>
    <input type="text" placeholder="Enter Branch" name="hsbranch" required/></br>
 <label><b>Sem</b></label></br>
	<select name="hsem">
	  <option  value="">Select sem</option>
	  <option  value="1st">1st</option>
	  <option value="2nd">2nd</option>
	  <option value="3rd">3rd</option>
	  <option value="4th">4th</option>
	  <option value="5th">5th</option>
	  <option value="6th">6th</option>
	  <option value="7th">7th</option>
	  <option value="8th">8th</option>
	</select>

</br>
 <label><b>Subject</b></label></br>
	<select name="hsubject">
	  <option  value="">Select subject</option>
	  <option  value="physics">Physics</option>
	  <option value="chemistry">Chemistry</option>
	  <option value="math">Math</option>
	</select>
</br>
 <label><b>Present Or Absent</b></label></br>
<select name="hsattendancetype">
	  <option  value="">Select Attendance Type</option>
	  <option  value="Present">Present</option>
	  <option value="Absent">Absent</option>
	</select> 

    <div class="clearfix">
      <a href="insertsattendance.php" ><button type="button" class="Refreshbtn">Refresh</button></a>
      
	  
	  <button onClick="myFunction()" class="Savebtn"  name="save" >Insert</button>




    </div>
  </div>
</form>

</body>
</html>
<?php
date_default_timezone_set('Asia/Kolkata');
$host     = "localhost"; // Host name 
$username = "root"; // Mysql username 
$password = ""; // Mysql password 
$db_name  = "erp"; // Database name 
$con      = mysqli_connect($host, $username, $password, $db_name) or die ("Could not connect to Database... !");
//$select   = mysqli_select_db($db_name,"erp") or die ("Could not find Database... !");


if(isset($_POST["save"])){
$Sroll = $_POST["hsroll"];
$Sbranch = $_POST["hsbranch"];
$Ssem = $_POST["hsem"];
$Ssubject = $_POST["hsubject"];
$Sdate = date('Y-m-d');
$Sattendancetype = $_POST["hsattendancetype"];

$Selsect = "SELECT id FROM student WHERE sroll='$Sroll'";
$queryrun = mysqli_query($con,$Selsect);
$row = mysqli_fetch_row($queryrun);
if (!empty($row)){
	$Sid = $row[0];
}else{
	echo '<script type="text/javascript"> alert("Roll no. not exist")</script>';
	exit;
}

$sql = "insert into sattendance (sid,sbranch,ssem,ssubject,sdate,sattendancetype) values ('$Sid','$Sbranch','$Ssem','$Ssubject','$Sdate','$Sattendancetype')";

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
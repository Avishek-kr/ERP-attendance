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


<h2> Student Update</h2>


<form action="student1.php" method ="post" style="border:1px solid #ccc">
  <div class="container">
    <label><b>Student Id</b></label>
    <input type="text" placeholder="Enter Student Id " name="hsid" required/>
	<label><b>Student Name</b></label>
    <input type="text" placeholder="Enter Name" name="hsname" required/>

<label><b>Gender</b></label></br>
<input type="radio"name="hgender" value="M" >M   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="hgender" value="F"  >F 
   </br>
    <label><b>Branch</b></label>
    <input type="text" placeholder="Enter Branch" name="hbranch" required/></br>
 <label><b>Sem</b></label>
	<select>
    
  <option name="hsem" value="sem">sem</option>
  <option name="hsem" value="1">1st</option>
  <option name="hsem" value="2">2nd</option>
  <option name="hsem" value="3">3rd</option>
  <option name="hsem" value="4">4th</option>
  <option name="hsem" value="5">5th</option>
  <option name="hsem" value="6">6th</option>
  <option name="hsem" value="7">7th</option>
  <option name="hsem" value="8">8th</option>
</select>

</br>
 <label><b>E-mail</b></label>
<input type="text" placeholder="E-mail" name="hemail" required/>
<label><b>Password</b></label>
<input type="text" placeholder="Password" name="hpassword" required/>  

    <div class="clearfix">
      <a href="updatestudent.php" ><button type="button" class="Refreshbtn">Refresh</button></a>
      
	  
	  <button onclick="myFunction()"class="Savebtn">Update</button>




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
$Sid = $_POST["hsid"];
$Sname = $_POST["hsname"];
$Gender = $_POST["hgender"];
$Branch = $_POST["hbranch"];
$Sem = $_POST["hsem"];
$Email = $_POST["hemail"];
$Password = $_POST["hpassword"];

$sql = "insert into student (sid,sname,gender,branch,sem,email,password) values ('$Sid','$Sname','$Gender','$Branch','$Sem','$Email','$Password')";

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
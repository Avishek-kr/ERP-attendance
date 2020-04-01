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

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
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
<li><a href="facultyhome.php">HOME</a></li>

</ul>

</div>


<h2>Attendance</h2>


<form action="viewsattendance.php" method ="post" style="border:1px solid #ccc">
  <div class="container">
    <label><b>Student Roll No.</b></label>
    <input type="text" placeholder="Enter Student Roll No. " name="sroll" required/>

</br>
 <label><b>Select Month</b></label></br>
<select name="smonth">
	  <option  value="">Select Month</option>
	  <option  value="01">Jan</option>
	  <option  value="02">Feb</option>
	  <option  value="03">Mar</option>
	  <option  value="04">Apr</option>
	  <option  value="05">May</option>
	  <option  value="06">Jun</option>
	  <option  value="07">Jul</option>
	  <option  value="08">Aug</option>
	  <option  value="09">Sep</option>
	  <option  value="10">Oct</option>
	  <option  value="11">Nov</option>
	  <option  value="12">Dec</option>
	</select> 
</br>
 <label><b>Present Or Absent</b></label></br>
<select name="syear">
	  <option  value="">Select Year</option>
	  <option value="2015">2015</option>
	  <option  value="2016">2016</option>
	  <option value="2017">2017</option>
	</select> 

    <div class="clearfix">
      <a href="viewsattendance.php" ><button type="button" class="Refreshbtn">Refresh</button></a>
      
	  
	  <button onClick="myFunction()" class="Savebtn"  name="save" >View</button>




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
$ssroll = $_POST["sroll"];
$smonth = $_POST["smonth"];
$syear = $_POST["syear"];

$Selsect = "SELECT id,sname FROM student WHERE sroll=".$ssroll;
$queryrun = mysqli_query($con,$Selsect);
$row = mysqli_fetch_row($queryrun);
if (!empty($row)){
	$sid = $row[0];
}else{
	echo '<script type="text/javascript"> alert("Student not exist")</script>';	
	exit;
}

$Selsect = "SELECT * FROM sattendance WHERE sid=".$sid." AND YEAR(sdate) = ".$syear." AND MONTH(sdate) = ".$smonth;
$squeryrun = mysqli_query($con,$Selsect);
if (!empty($squeryrun)){
?>
	<table>
		  <tr>
			<th>Roll No.</th>
			<th>Name</th>
			<th>Branch</th>
			<th>Sem</th>
			<th>Subject</th>
			<th>Date</th>
			<th>Attendance</th>
		  </tr>
<?php
	while($res = mysqli_fetch_assoc($squeryrun)){
		?>
		  <tr>
			<td><?php echo $ssroll?></td>
			<td><?php echo $row[1]?></td>
			<td><?php echo $res['sbranch']?></td>
			<td><?php echo $res['ssem']?></td>
			<td><?php echo $res['ssubject']?></td>
			<td><?php echo date('d-m-Y', strtotime($res['sdate']));?></td>
			<td><?php echo $res['sattendancetype']?></td>
		  </tr>
		<?php
	}
	?>
	</table>
	<?php
}else{
	echo '<script type="text/javascript"> alert("No Record Exist")</script>';	
	exit;
}
}
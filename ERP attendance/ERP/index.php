<html>
<head>
<title>welcome page</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" type="text/css"href="design.css">
<style>

h1{ color: red;
   left: 0;
    line-height: 200px;
    margin: auto;
    margin-top: -100px;
    position: absolute;
    top: 30%;
    width: 100%;
}
.wrapper {
    text-align: center;

}

.button {
    background-color: blue;
    color: white;
    padding: 7px 10px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
    position: relative;
margin-top:25%;
    top: 50%;
}

</style>
</head>
<body>
<center>
<h1><u>Welcome to the ..student erp system...</u></h1>
</center>
<div class="wrapper" >
<a href="adminlogin.php"><button class="button"  name="admin" >Admin</button></a>
<a href="teacherlogin.php"><button class="button"  name="teacher" >Teacher</button></a>
<a href="studentlogin.php"><button  class="button" name="student" >Student</button></a>
</div>
</body>
</html>
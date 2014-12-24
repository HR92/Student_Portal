<html>
<body>

<p>Insert a new student to the database :</p>
<form method="POST" action="">
Name : <input name="Name" type="text" /><br />
Gender : <input name="Gender" type="text" /><br />
Email: <input name="Email" type="text" /><br />
Birth Date: <input name="BirthDate" type="text" /><br />
Nationality: <input name="Nationality" type="text" /><br />
Mobile : <input name="Mobile" type="text" /><br />
Course: <input name="course" type="text" /><br />
Graduation Year: <input name="GraduationYear" type="text" /><br />
Major: <input name="Major" type="text" /><br />
<input name="submit" type="submit" value="Insert"/><br />
<input name="reset" type="reset" value="Reset"/>
</form>

<?php
error_reporting(E_ALL ^ E_DEPRECATED);
if(isset($_POST['submit']))
{
$Name=$_POST['Name'];
$Gender=$_POST['Gender'];
$Email=$_POST['Email'];
$BirthDate=$_POST['BirthDate'];
$Nationality=$_POST['Nationality'];
$Mobile=$_POST['Mobile'];
$GraduationYear=$_POST['GraduationYear'];
$Major=$_POST['Major'];
$course=$_POST['course'];

$server="localhost";
$username="root";
$password="";
$connect_mysql=mysql_connect($server,$username,$password) or die ("Connection Failed!");
$mysql_db=mysql_select_db("student",$connect_mysql) or die ("Could not Connect to Database");
$query = "INSERT INTO student VALUES ('$Name','$Gender','$Email','$BirthDate','$Nationality','$Mobile','$course','$GraduationYear','$Major')";
$result=mysql_query($query) or die("Query Failed : ".mysql_error());
$message="Student Details Successfully Added";
echo $message;
mysql_close($connect_mysql);


}
?>

<p align=right><a href="view.php">VIEW RECORDS</a></p>
<p align=right><a href="index.php">HOME</a></p>
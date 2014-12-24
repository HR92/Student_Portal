<html>
<body>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$server="localhost";
$username="root";
$password="";
$connect_mysql=mysql_connect($server,$username,$password) or die ("Connection Failed!");
$mysql_db=mysql_select_db("student",$connect_mysql) or die ("Could not Connect to Database");
$query = "SELECT * FROM student";
$result=mysql_query($query) or die("Query Failed : ".mysql_error());
$i=0;
while($rows=mysql_fetch_array($result))
{
$roll[$i]=$rows['Name'];
$i++;
}
$total_elmt=count($roll);

?>

<form method="POST" action="">
Select the Name to Update (Fill all blanks): <select name="sel">
<option>Select</option>
<?php 
for($j=0;$j<$total_elmt;$j++)
{
?><option><?php 
echo $roll[$j];
?></option><?php
}
?>
</select><br />
Name : <input name="Name" type="text" /><br />
Gender : <input name="Gender" type="text" /><br />
Email: <input name="Email" type="text" /><br />
Birth Date: <input name="BirthDate" type="text" /><br />
Nationality: <input name="Nationality" type="text" /><br />
Mobile : <input name="Mobile" type="text" /><br />
Course: <input name="course" type="text" /><br />
Graduation Year: <input name="GraduationYear" type="text" /><br />
Major: <input name="Major" type="text" /><br />
<input name="submit" type="submit" value="Update"/><br />
<input name="reset" type="reset" value="Reset"/>
</form>

<?php

if(isset($_POST['submit']))
{
$value=$_POST['sel'];
$Name=$_POST['Name'];
$Gender=$_POST['Gender'];
$Email=$_POST['Email'];
$BirthDate=$_POST['BirthDate'];
$Nationality=$_POST['Nationality'];
$Mobile=$_POST['Mobile'];
$GraduationYear=$_POST['GraduationYear'];
$Major=$_POST['Major'];
$course=$_POST['course'];

$query2 = "UPDATE student SET Name='$Name',Gender='$Gender',Email='$Email',BirthDate='$BirthDate',Nationality='$Nationality',Mobile='$Mobile',GraduationYear='$GraduationYear',course='$course',Major='$Major' WHERE Name='$value'";
$result2=mysql_query($query2) or die("Query Failed : ".mysql_error());
echo "Successfully Updated";
}
?>
<p align=right><a href="view.php">VIEW RECORDS</a></p>
<p align=right><a href="index.php">HOME</a></p>
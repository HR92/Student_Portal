<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$server="localhost";
$username="root";
$password="";
$connect_mysql=mysql_connect($server,$username,$password) or die ("Connection Failed!");
$mysql_db=mysql_select_db("student",$connect_mysql) or die ("Could not Connect to Database");
$query = "SELECT * FROM student";
$result=mysql_query($query) or die("Query Failed : ".mysql_error());
while($rows=mysql_fetch_array($result))
{
	echo "Name: ".$rows['Name']."<br/>";
	echo "Gender: ".$rows['Gender']."<br/>";
	echo "Email: ".$rows['Email']."<br/>";
	echo "Birth Date: ".$rows['BirthDate']."<br/>";
	echo "Nationality: ".$rows['Nationality']."<br/>";
	echo "Mobile: ".$rows['Mobile']."<br/>";
	echo "Course: ".$rows['Course']."<br/>";
    echo "Graduation Year: ".$rows['GraduationYear']."<br/>";
	echo "Major: ".$rows['Major']."<br/>";
	
	echo "<br/>";
}
?>
<p align=right><a href="index.php">HOME</a></p>
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
Select Name:
 <select name="sel">
<option>Select</option>
<?php 
for($j=0;$j<$total_elmt;$j++)
{
?><option><?php 
echo $roll[$j];
?></option><?php
}
?>
</select>

<input name="submit" type="submit" value="Search"/><br />

</form>

<?php

if(isset($_POST['submit']))
{
$value=$_POST['sel'];

$query2 = "SELECT * FROM student WHERE Name='$value'";
$result2=mysql_query($query2) or die("Query Failed : ".mysql_error());
while($row=mysql_fetch_array($result2))
{
	echo "Name: ".$row['Name']."<br/>";
	echo "Gender: ".$row['Gender']."<br/>";
	echo "Email: ".$row['Email']."<br/>";
	echo "Birth Date: ".$row['BirthDate']."<br/>";
	echo "Nationality: ".$row['Nationality']."<br/>";
	echo "Mobile: ".$row['Mobile']."<br/>";
	echo "Course: ".$row['Course']."<br/>";
    echo "Graduation Year: ".$row['GraduationYear']."<br/>";
	echo "Major: ".$row['Major']."<br/>";
	
	echo "<br/>";
}
mysql_close($connect_mysql);
}
?>

<p align=right><a href="index.php">HOME</a></p>
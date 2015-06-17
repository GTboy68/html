<?php
include('config.php');
if(isset($_POST['submit']))
{
$name=mysql_real_escape_string($_POST['name']);
$sql= mysql_query("SELECT MAX(group_id) as maximum from groups");
$rs= mysql_fetch_object($sql);
$group_id = $rs->maximum;
$group_id++;
$query1=mysql_query("INSERT INTO `groups`(`group_id`, `name`) VALUES('$group_id','$name')");
echo "insert into groups values('$group_id','$name')";
if($query1)
{
header("location:overview.php");
}
}
?>

<?php

// Get the required codes from the configuration file
$server = 'localhost';
$username   = 'root';
$password   = 'Aversus147';
$database = 'bookedscheduler';
// Connect to db
$con = mysqli_connect($server,$username,$password,$database);
if (!$con){
die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,$database);
// Get results
$result = mysqli_query($con,"SELECT * FROM groups ORDER BY name ASC");

echo "<table class='table' width='65%'><thead><tr><th>GROEP</th><th>PRINT</th><th>VERWIJDEREN</th></tr></thead><tbody>";

while($row = mysqli_fetch_array($result))
  {
	  $naam = strtoupper($row['name']);
  echo "<tr>";
  echo "<td>" . $naam . "</td>";  
  echo "<td>" . $group_id . "</td>";  
  echo "<td ><a href='delete.php?id=" . $row['group_id'] . "'>X</a></td>";
  echo "</tr>";
  }
echo "</tbody></table>";

mysqli_close($con);
?>
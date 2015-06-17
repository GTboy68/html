<?php

$server = 'localhost';
$username = 'root';
$password = 'Aversus147';
$database = 'bookedscheduler';
// Connect to db
$con = mysqli_connect($server,$username,$password,$database);
if (!$con){
die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,$database);

// Check whether the value for id is transmitted
if (isset($_GET['id'])) {

// Put the value in a separate variable
$group_id = $_GET['id'];

// Query the database for the details of the chosen id
$result = mysqli_query($con,"DELETE FROM groups WHERE group_id = $group_id");
header('location:overview.php');
} else {
die("No valid id specified!");


}
?>
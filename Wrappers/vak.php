<?php
include('config.php');
// Get the required codes from the configuration file
$server = 'localhost';
$username   = 'root';
$password   = 'Aversus147';
$database = 'bookedscheduler';
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name = $_POST['name'];
$sql = "INSERT INTO academiejaar (jaar_id, acdmj)
VALUES (2,'$name')";

if ($conn->query($sql) === TRUE) {
	header("location:vaktoevoegen.php");
    echo "New record created successfully";
	
} else {
	header("location:vaktoevoegen.php");
    echo "Error: " . $sql . "<br>" . $conn->error;
	
}

$conn->close();
?>
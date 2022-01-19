<?php
$serwer="localhost";
	$user="s299865";
	$password="bazabaza8";
	$database="s299865";
	$table="dodatki";
	$skladnik = $_GET['skladnik'];
	
	
$conn = new mysqli($serwer, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{

$id = $_GET['id']; 
mysqli_query($conn,"DELETE FROM dodatki WHERE id='".$id."'");
mysqli_close($conn);
header("Location: dodatki.php");
}
?> 
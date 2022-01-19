<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Rodzaje herbat</title>
	</head>
<body style="background-color:darkgreen; cursor: default; color:#1a0000"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<div id="header">
<center>Każda herbata ma swoje odmiany<center></div>
<table id="odmiany">

<tr>
<th scope="col">Rodzaj</th>
<th scope="col">Temperatura parzenia</th>
<th scope="col">Czas zaparzania</th>
</tr>
<?php

	$serwer="localhost";
	$user="s299865";
	$password="bazabaza8";
	$database="s299865";
	$table="herbata";
	$rodzaj = $_POST["rodzaj"];
	
$conn = new mysqli($serwer, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	//echo $_POST["rodzaj"];
	echo "<h1><center>Herbata $rodzaj <center></h1>";
	$sql = "SELECT rodzaj, nazwa, temp, czas from herbata WHERE rodzaj='$rodzaj'";
	
		$result = $conn-> query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["nazwa"]. "</td><td>" . $row["temp"] . "</td><td>"
			. $row["czas"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
			
	
	$conn->close();
	}
?>
</table>
<br>
<center><a href="index.html"><h3>Powrót do strony głównej</h3></center>
<br>
	<div class="text fixed-bottom" id="footer"><center>Strona Joanny Koszyk</center></div>
</body>
<style>
#header {   
    background-color: silver;
    padding: 24px;
    text-align: center;
    font-size: 28px;
    color: black; }
#footer {    
        background-color: silver;
	    font: 12px Algerian;
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        }
#odmiany {
  font: Arial;
  border-collapse: collapse;
  width: 100%;
  padding: 20px;
}

#odmiany td {
  border: 1px solid #ddd;
  padding: 20px;
}
#odmiany tr:hover {background-color: #ddd;}

#odmiany th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}
</style>
</html>
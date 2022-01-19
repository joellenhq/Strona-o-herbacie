<!DOCTYPE html>
<html lang="pl">
<head>

<meta charset="UTF-8">
<title> Automat z herbatą </title>
</head>
<body style="background-color:darkgreen; cursor: default"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<div id="header">
    <br><br><br></div>
    <div class="navbar" id="navbar">
    <h1 style="font-size:30px;"><b><i>Automat z herbatą</i></b></h1>
    
<center> <div class="btn-group">
<a class="active" href="index.html"><button type="button" class="btn btn-secondary">Automat z Herbatą</button></a>
<a href="czarna.html"><button type="button" class="btn btn-secondary">Czarna</button></a>
<a href="zielona.html"><button type="button" class="btn btn-secondary">Zielona</button></a>
<a href="biala.html"><button type="button" class="btn btn-secondary">Biała</button></a>
<a href="czerwona.html"><button type="button" class="btn btn-secondary">Czerwona</button></a>
<a href="niebieska.html"><button type="button" class="btn btn-secondary">Niebieska</button></a>
<a href="zolta.html"><button type="button" class="btn btn-secondary">Zółta</button>
</a>
<a href="ankieta.php"><button type="button" class="btn btn-secondary">Ankieta</button>
</a>
<a href="kalkulator.php"><button type="button" class="btn btn-secondary">Kalkulator</button>
</a>
<a href="dodatki.php"><button type="button" class="btn btn-secondary">Dodatki</button>
</a>
</div></center>
  </div> 
         
<div><center><h1 style="color: #000000">Dodatki</h1></center></div>
    
<p style="color: #000000">Do każdej herbaty można dodać rozmaite składniki, najczęściej kawałki owoców, które nadają unikatowy smak naparowi. Podziel się dodatkami, jakie lubisz najbardziej w swojej herbacie!<br></p>       
    <br>
	
	<table id="dodatki">
<?php

	$serwer="localhost";
	$user="s299865";
	$password="bazabaza8";
	$database="s299865";
	$table="dodatki";
	@$skladnik = $_GET['skladnik'];
	
	
$conn = new mysqli($serwer, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	error_reporting(0);
	
	@$sql = "SELECT * FROM dodatki";
	
	
		$result = $conn-> query($sql);
		
		$i=1;
		
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
			
				
			$usun="DELETE FROM dodatki WHERE id='\".$id.\"'";		
			echo "<tr><td> $i </td><td>" . $row["dodatek"]. "</td><td><a href=\"delete.php?id=".$row['id']."\">Usuń</a></td></tr>";
			$i++;	
				
			}
echo "</table>";

} else { echo "brak wyników"; }
			
	if(!empty($skladnik)){
		$sqli = "INSERT INTO dodatki (dodatek) VALUES ('$skladnik')";
		if ($conn->query($sqli) === TRUE) {
    echo "";
		header("Location: dodatki.php");
} else {
    echo "";
}
		
		}
else{
	
}
echo<<<END
<br>
	<h3 style="color: black"><center>Podaj dodatek:</center></h3>
	<form action="dodatki.php" method="GET">
	<center><textarea style="border:2px solid rgb(255, 255, 174)" name="skladnik" cols="10" rows="1"></textarea></center>
	<center><input type="submit" value="Wyślij"></center>
	</form>
END;

	$conn->close();
	}
?>


		<br><br>
<div class="text fixed-bottom" id="footer"><center>Strona Joanny Koszyk</center></div>
</body>
<style>
#header {   
    background-color: silver;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: darkslategrey; }
#footer {    
        background-color: silver;
	    font: 12px Algerian;
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        }	 
#navbar {
  overflow: hidden;
  background-color: silver;
  position: fixed;
  top: 0;
  width: 100%;
  text-align: center;
}

.navbar a {
  float: left;
  display: block;
  color: silver;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}


#dodatki {
  font-family: Arial;
  border-collapse: collapse;
  width: 50%;
  color: black;
}

#dodatki td{
  border: 1px solid #ddd;
  padding: 20px;
}



</style>
</html>
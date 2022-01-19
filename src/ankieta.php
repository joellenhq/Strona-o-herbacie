<!DOCTYPE html>
<html lang="pl">
<head>

<meta charset="UTF-8">
    <title> Automat z herbatą </title>
</head>
<body style="background-image: url('tlo.jpg'); cursor: default"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <div id="header">
    <h3>Ankieta</h3>
    </div>
 <form method="GET" action="ankieta.php">
    <div>
   <center><table border="0"  style="width:80%">
        <tbody>
            
          
<th colspan="2" style="font-size:20px;color:black;background-color: mediumseagreen"><center>Podstawowe dane:</center></th>         
<tr>
    <td>Imię:</td><td><input type="text" name="imie"></td>
</tr>
<tr>
    <td>Nr buta</td><td><input type="text" name="nrbuta"></td>
</tr>

<th colspan="2" style="font-size:20px;color:black;background-color: mediumseagreen"><center>Co do picia:</center></th>
        <tr>
<td><input type="radio" name="napoj" value="herbata"></td><td>Herbata</td></tr>
    <tr>
<td><input type="radio" name="napoj" value="herbata"></td><td>Herbata</td></tr>
    <tr>
<td><input type="radio" name="napoj" value="herbata"></td><td>Herbata</td></tr>
    <tr>
<td><input type="radio" name="napoj" value="kawa"></td><td>Kawa</td></tr>
    <tr>
<td><input type="radio" name="napoj" value="mleko"></td><td>Mleko, bo jestem kotem</td></tr>
    <tr>
<td><input type="radio" name="napoj" value="woda"></td><td>Tylko woda</td></tr>
    
            <tr> 
                
                <th colspan="2" style="font-size:20px;color:black;background-color: mediumseagreen"><center>Ile razy dziennie pijesz herbatę?</center></th></tr>
            <tr>
<td><input type="radio" name="ile" value="0"></td><td>0</td></tr>
    <tr>
<td><input type="radio" name="ile" value="1"></td><td>1</td></tr>
    <tr>
<td><input type="radio" name="ile" value="2"></td><td>2</td></tr>
    <tr>
<td><input type="radio" name="ile" value="3"></td><td>3</td></tr>
    <tr>
<td><input type="radio" name="ile" value="4"></td><td>4</td></tr>
    <tr>
<td><input type="radio" name="ile" value="7"></td><td>więcej</td></tr>
           

        </tbody>
        </table></center>
   
    <center><table border="0"  style="width:80%">
	<tbody style="background-color: mediumseagreen"><th colspan="2" style="font-size:20px;color:black;background-color: mediumseagreen"><center>Opisz smak herbaty</center></th></tbody>
        </table></center>
<center><textarea style="border:2px solid rgb(255, 255, 174)" name="komentarz" cols="50" rows="10">Napisz nam o fenomenalnym smaku herbaty...</textarea></center>
         <center><table border="0"  style="width:80%">
	<tbody style="background-color: mediumseagreen"><th colspan="2" style="font-size:20px;color:black;background-color: mediumseagreen"><center>Co na herbatę:</center></th></tbody>
        </table></center>
<center><select name="pojemnik">
	<option selected>Kubek</option>
    <option>Słoik</option>
	<option>Szklanka</option>
	<option>Wiadro</option>
	<option>Basen herbaty</option>
</select> </center>
<center><table border="0"  style="width:80%">
        <tbody style="background-color: mediumseagreen">
<tr>
<td align="center"><input type="reset" value="Wyczyść formularz" /></td>  
<td align="center"><input type="submit" value="Wyślij"></td>  
        </tr>
            </tbody>
        </table></center>
         </div>
    </form>  
	<?php
	error_reporting(0);
	$serwer="localhost";
	$user="s299865";
	$password="bazabaza8";
	$database="s299865";
	$table="ankieta";
	
		@$imie=$_GET['imie'];
		@$nrbuta=$_GET['nrbuta'];
		@$napoj=$_GET['napoj'];
		
		@$ile=$_GET['ile'];
		@$opis=$_GET['komentarz'];
		@$pojemnik=$_GET['pojemnik'];
		
	
	$conn = new mysqli($serwer, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	if(is_numeric($nrbuta) & is_numeric($ile) & $imie!=="" & $nrbuta>"0" & $napoj!=="" & $ile>"0"){
	$sql = "INSERT INTO ankieta (imie, nrbuta, napoj, ile, opis, pojemnik) VALUES ('$imie', $nrbuta, '$napoj', $ile, '$opis', '$pojemnik')";
	}
	else{
		echo<<<END
	<div id="paragraf"><center>Podaj dane<center></div>;
END;
	}
if ($conn->query($sql) === TRUE) {
    echo "<div id=\"paragraf\"><center>Dziękujemy za odpowiedź<center></div>";
} else {
    echo "" . $sql . "<br>" . $conn->error;
}

	$conn->close();
	}
	?>
    <br>
    <center><a href="index.html">Powrót do strony głównej</a></center>
    <br>
<div class="text fixed-bottom" id="footer"><center>Strona Joanny Koszyk</center></div>
</body>

<style>

#header {   
    background-color: firebrick;
    padding: 10px;
    text-align: center;
    font-size: 35px;
    color: darkslategrey; }
	
#footer {    
        background-color: silver;
	    font: 12px Algerian;
        width: 100%;
        position: fixed;
        left: 0;
        bottom: 0;
        }	 
		
#paragraf {
color: #202c2d;
font-size: 30px;
      }
    </style>
</html>
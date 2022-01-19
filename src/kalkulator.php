<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title>Kalkulator</title>
</head>
<body style="background-image: url('tlo.jpg'); cursor: default"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <div id="header">
        <br><br><br></div>
    <div class="navbar" id="navbar">
    <h1 style="font-size:30px;"><b><i>Przelicznik zapotrzebowania na herbatę</i></b></h1>
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
	<br>
	<br>
	<br>
	<form action="kalkulator.php" method="GET">
<center><table border="0"  style="width:100%">
        <tbody>
        <tr> 
                <th colspan="2" style="font-size:20px;color:black;background-color: grey"><center>Oblicz swoje dzienne zapotrzebowanie na herbatę. Podaj:</center></th></tr>
            
                <tr>
<th colspan="2">Płeć</th></tr><tr>
            <td><input type="radio" name="plec" value="mezczyzna"></td><td>Mężczyzna</td></tr>
    <tr>
<td><input type="radio" name="plec" value="kobieta"></td><td>Kobieta</td></tr>
    <td>Wagę:</td><td><input type="text" name="waga"></td>

<tr>
    <td>Wzrost</td><td><input type="text" name="wzrost"></td>

</tr><tr>
<td align="center"><input type="reset" value="Wyczyść formularz"></td>  
<td align="center"><input type="submit" value="Wyślij"></td>  
        </tr>
            </tbody>
        </table></center>
		</form>
<?php
		@$wzrost=$_GET['wzrost'];
		@$waga=$_GET['waga'];
		@$plec=$_GET['plec'];
		
if(is_numeric($wzrost) & is_numeric($waga) & $wzrost>"0" & $waga>"0" & isset($plec)){
		
		if($plec=='mezczyzna'){
		$zapotrz=($wzrost+$waga)*10/6+608;
		}
		else
		{
		$zapotrz=($wzrost+$waga)*10/5+608;
		}
		echo<<<END
		<h2><center>Wyniki:<center></h2>
		<table border="1" width=100%>
		<tr>
		<td>wzrost</td><td>$wzrost cm</td>
		</tr>
		<tr>
		<td>waga</td><td>$waga kg</td>
		</tr>
		<tr>
		<td>zapotrzebowanie</td><td>$zapotrz	ml</td>
		</tr>
        </table>
END;
}
else{
	echo<<<END
	<div id="paragraf"><center>Podaj dane<center></div>;
END;
	}
    echo "<center><a href=\"index.html\"><h3>Powrót do strony głównej</h3></a></center>";
	?>
	<hr><hr>
	<div class="text fixed-bottom" id="footer"><center>Strona Joanny Koszyk</center></div>
</body>
<style>

#header {   
    background-color: black;
    padding: 10px;
    text-align: center;
    font-size: 25px;
    color: white; }
	
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
	  
    #navbar {
  overflow: hidden;
  background-color: black;
  position: fixed;
  top: 0;
  width: 100%;
  text-align: center;
}

.navbar a {
  float: left;
  display: block;
  color: darkseagreen;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: white;
}
    </style>
</body>
	</html>
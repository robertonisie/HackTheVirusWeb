<?php
include('/var/www/html/HackTheVirusWeb/db/server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Adauga un produs</title>
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="css/sell.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
</head>
<body>
 <a><img src="img/service/13.png" alt=""></a> 
 <form method="POST" enctype="multipart/form-data">
    <p><input type="text" placeholder="Nume produs" name="nume_produs" required></p>
    <p><input type="text" placeholder="Pret" name="pret" required></p>
    <p><input type="text" placeholder="Descriere Produs" name="descriere" required></p>
	<p><input type="text" placeholder="Cantitate disponibila" name="cantitate" required></p>
	<p><input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div></p>
	<p><button type="submit" class="registerbtn" name="adauga_anunt">Vinde</button></p>
</form> 
</body>
</html>
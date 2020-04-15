<?php
include('/var/www/html/HackTheVirusWeb/db/server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Adauga un produs</title>
</head>
<body>
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
<?php 
include('/var/www/html/HackTheVirusWeb/db/server.php');
include('/var/www/html/HackTheVirusWeb/db/errors.php');

session_start();
if(isset($_SESSION['nume_sesiune']))
{
 header("Location: index.php");
 die("Already logged in"); 
}      
?>
 
<!DOCTYPE html>
<html lang="ro">
<head>
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
<title>Inregistrare</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/register.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>    
</head>
<body>
	<div class="main-w3layouts wrapper">
		<h1>Creaza un cont local's</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form method="post">
					<input class="text email" type="email" name="email" placeholder="Email" required> 
					<input class="text" type="password" name="password_1" placeholder="Password" required>
					<input class="text w3lpass" type="password" name="password_2" placeholder="Confirm Password" required>
					<input class="text" type="text" name="nume" placeholder="Nume" required>
					<input class="text" type="text" name="prenume" placeholder="Prenume" required>
					<input class="text" type="text" name="judet" placeholder="Judet" required>
					<input class="text" type="text" name="oras" placeholder="Localitate" required>
					<input class="text" type="text" name="adresa" placeholder="Adresa" required>
					<input class="text" type="text" name="nume_afacere" placeholder="Nume Afacere" required>
					<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>Sunt de acord cu termenii si conditiile</span>
					</label>
						<button type="submit" name="reg_user">Inregistrare</button>	
					</form>				
				<p>Ai deja un cont? <a href="login.php"> Logheaza-te aici!</a></p>
			</div>
		</div>
		
<div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
							Copyright &copy; local's <script>document.write(new Date().getFullYear());</script> | All rights reserved</a></p>                    
                    </div>
                </div>
            </div>
        </div>
</body>
<script>
function myFunction() {
    location.replace("index.php")
}
</script>
</html>
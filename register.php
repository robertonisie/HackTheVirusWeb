<?php 
include('server.php')
include('errors.php');

session_start();
if(isset($_SESSION['nume_sesiune']))
{
 header("Location: index.php");
 die("Already logged in"); 
}      
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="register.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
</head>
<body>
	<div class="main-w3layouts wrapper">
		<h1>Creative SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form method="post">
					<input class="text email" type="email" name="email" placeholder="Email" required=""> 
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text" type="text" name="nume" placeholder="Nume" required="">
					<input class="text" type="text" name="prenume" placeholder="Prenume" required="">
					<input class="text" type="text" name="judet" placeholder="Judet" required="">
					<input class="text" type="text" name="localitate" placeholder="Localitate" required="">
					<input class="text" type="text" name="adresa" placeholder="Adresa" required="">
					<input class="text" type="text" name="nume_afacere" placeholder="Nume Afacere" required="">

					<input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="reg_user">
				</form>
				<p>Already a member? <a href="LogIn.html"> Login Now!</a></p>
			</div>
		</div>
		<div class="colorlibcopy-agile">
			<p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
		</div>
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</body>
</html>
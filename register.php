<?php 
include('/var/www/html/HackTheVirusWeb/db/server.php');
include ("/var/db/dbconfig.php");

session_start();
if(isset($_SESSION['nume_sesiune']))
{
 header("Location: index.html");
 die("Already logged in"); 
}      
?>

<!DOCTYPE html>
<html lang="ro">
<head>
<title>Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/register.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
			$("#authors").change(function(){
				var aid = $("#authors").val();
				$.ajax({
					url: '/db/data.php',
					method: 'post',
					data: 'aid=' + aid
				}).done(function(books){
					console.log(books);
					books = JSON.parse(books);
					$('#books').empty();
					books.forEach(function(book){
						$('#books').append('<option>' + book.name + '</option>')
					})
				})
			})
		})
	</script>
</head>
<body>
	<div class="main-w3layouts wrapper">
		<h1>Creative SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form method="post">
					<input class="text email" type="email" name="email" placeholder="Email" required=""> 
					<input class="text" type="password" name="password_1" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password_2" placeholder="Confirm Password" required="">
					<input class="text" type="text" name="nume" placeholder="Nume" required="">
					<input class="text" type="text" name="prenume" placeholder="Prenume" required="">
					<!--<input class="text" type="text" name="judet" placeholder="Judet" required="">
					<input class="text" type="text" name="localitate" placeholder="Localitate" required="">-->

									<div class="container">
						<h1 class="text-center">Dependent Drop Down list In PHP/MySQL using jQuery & Ajax </h1>
						<hr>
						<div class="row">
						    <div class="col-md-6 col-md-offset-3">
								<form role="form" method="post" action="">
						        	<div class="row">
						                <div class="form-group">
						                    <label for="authors">Authors</label>
						                    <select class="form-control" id="authors" name="authors">
						                    	<option selected="" disabled="">Select Author</option>
						                    	<?php 
						                    		require '/db/data.php';
						                    		$authors = loadAuthors();
						                    		foreach ($authors as $author) {
						                    			echo "<option id='".$author['id']."' value='".$author['id']."'>".$author['name']."</option>";
						                    		}
						                    	 ?>
						                    </select>
						                </div>
						            </div>
						            <div class="row">
						                <div class="form-group">
						                    <label for="books">Books</label>
						                    <select class="form-control" id="books" name="books">
						                    	
						                    </select>
						                </div>
						            </div>
						        </form>
						    </div>
						</div>
					</div>

					<input class="text" type="text" name="adresa" placeholder="Adresa" required="">
					<input class="text" type="text" name="nume_afacere" placeholder="Nume Afacere" required="">

					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="reg_user">
				</form>
				<p>Already a member? <a href="login.php"> Login Now!</a></p>
			</div>
		</div>
</body>
</html>
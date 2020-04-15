<?php 
include('/var/www/html/HackTheVirusWeb/db/server.php');
include('/var/www/html/HackTheVirusWeb/db/getoras.php');
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

            $("#sel_judet").change(function(){
                var judetid = $(this).val();

                $.ajax({
                    url: '/db/getoras.php',
                    type: 'POST',
                    data: {
                    	judet:judetid
                    	},
                    dataType: 'json',
                    success:function(response){

                        var len = response.length;

                        $("#sel_oras").empty();
                        for( var i = 0; i<len; i++){
                            var id = response[i]['id'];
                            var name = response[i]['name'];

                            $("#sel_oras").append("<option value='"+id+"'>"+name+"</option>");

                        }
                    }
                });
            });

        });
    </script>

    <script>
	document.write(judetid);
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

					<div>Judet</div>
					<select id="sel_judet">
					   <option value="0">- Select -</option>
					   <?php 
					   $sql_judet = "SELECT name FROM judete";
					   $judet_data = mysqli_query($db, $sql_judet);

					   while($row = mysqli_fetch_assoc($judet_data))
					   {
					      $judetid = $row['id'];
					      $judet_name = $row['name'];
					      echo "<option value='".$judetid."' >".$judet_name."</option>";
					   }
					   ?>
					</select>
					<div class="clear"></div>

					<div>Oras </div>
						<select id="sel_oras">
						   <option value="0">- Select -</option>
						</select>

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
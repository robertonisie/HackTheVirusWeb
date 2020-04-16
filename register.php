<?php 
include('/var/www/html/HackTheVirusWeb/db/server.php');
include('/var/www/html/HackTheVirusWeb/db/errors.php');

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
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
<title>Inregistrare</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/register.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>
    <!--<script type="text/javascript">
        $(document).ready(function(){
            $("#sel_judet").change(function(){
                var judet_nume = $("#sel_judet option:selected").text();

                $.ajax({
                    url: '/db/getoras.php',
                    type: "POST",
                    data: {
                    	judet:judet_nume
                    	},
                    dataType: 'json',
                    success:function(response)
                    {
                        var len = response.length;

                        $("#sel_oras").empty();
                        for(var i = 0; i<len; i++)
                        {
                            //var id = response[i]['oras_id'];
                            //var name = response[i]['oras_name'];
                            var name = response[i];

                            $("#sel_oras").append("<option>"+name+"</option>");
                        }
                    },

                    error: function(xhr, status, error) {
					  alert(xhr.responseText);
					}
                });
            });

        });
    </script>-->
</head>
<body>
	<div class="main-w3layouts wrapper">
		<h1>Creaza un cont local's</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form method="post">
					<input class="text email" type="email" name="email" placeholder="Email" required=""> 
					<input class="text" type="password" name="password_1" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password_2" placeholder="Confirm Password" required="">
					<input class="text" type="text" name="nume" placeholder="Nume" required="">
					<input class="text" type="text" name="prenume" placeholder="Prenume" required="">
					<input class="text" type="text" name="judet" placeholder="Judet" required="">
					<input class="text" type="text" name="oras" placeholder="Localitate" required="">
					<input class="text" type="text" name="adresa" placeholder="Adresa" required="">
					<input class="text" type="text" name="nume_afacere" placeholder="Nume Afacere" required="">
					<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>Sunt de acord cu termenii si conditiile</span>
					</label>
				</form>
					<button type="submit" name="reg_user">Inregistrare</button>
					<button type="submit" onclick="myFunction()">Inapoi la Pagina Principala</button>
					<!--
					<div>Judet</div>
					<select id="sel_judet">
					   <option value="0">- Select -</option>
					   <?php /*
					   $sql_judet = "SELECT name FROM judete";
					   $judet_data = mysqli_query($db, $sql_judet);

					   while($row = mysqli_fetch_assoc($judet_data))
					   {
					      $judetid = $row['id'];
					      $judet_name = $row['name'];
					      echo "<option id='".$judetid."' value='".$judetid."' >".$judet_name."</option>";
					   }

					   */?>
					</select>
					<div class="clear"></div>
					<div>Oras </div>
						<select id="sel_oras">
						   <option value="0">- Select -</option>
						</select>-->

					

					
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
    location.replace("index.html")
}
</script>
</html>
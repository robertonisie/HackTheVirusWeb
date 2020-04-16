<?php
session_start();
include ("/var/db/dbconfig.php");
include('/var/www/html/HackTheVirusWeb/db/server.php');
$pid = $_GET["id"];

$puser_id = '';
$ppoza_id = '';
$poras = '';
$pjudet = '';
$padresa = '';
$pnume = '';
$pprenume = '';
$pnume_afacere = '';
$ppoza = '';
$pnume_produs = '';
$ppret = '';
$pcantitate = '';
$pdescriere = '';
$pcantitate_aleasa='';

$query = "SELECT * FROM anunturi WHERE id='$pid'";
            $result=mysqli_query($db, $query);
            $row = mysqli_fetch_assoc($result);

            $ppoza_id = $row["poza"];
            $sql = "SELECT * FROM image_upload WHERE id='$ppoza_id'";
            $result2 = mysqli_query($db, $sql);
            $row2 = mysqli_fetch_assoc($result2);

            $puser = $row["user_id"];
            $sql = "SELECT * FROM users WHERE id='$puser'";
            $result3 = mysqli_query($db, $sql);
            $row3 = mysqli_fetch_assoc($result3);

            $puser_id = $row3['id'];
            $poras = $row3['oras'];
            $pjudet = $row3['judet'];
            $padresa = $row3['adresa'];
            $pnume = $row3['nume'];
            $pprenume = $row3['prenume'];
            $pnume_afacere = $row3['nume_afacere'];
            $ppoza = $row2['image'];
            $pid = $row["id"];
            $pnume_produs = $row["nume_produs"];
            $ppret = $row["pret"];
            $pcantitate = $row["cantitate"];
            $pdescriere = $row['descriere'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>local's</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
   <?php 
                if(!isset($_SESSION['nume_sesiune']))
                    echo '
                        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
                      	    <div class="container">	    
                      	      <div class="collapse navbar-collapse" id="ftco-nav">
                      	        <ul class="navbar-nav ml-auto">
                      	          <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
                      			   <li class="nav-item"><a href="../login.php" class="nav-link">Logare</a></li>
                      			   <li class="nav-item"><a href="../register.php" class="nav-link">Inregistrare</a></li>
                      	        </ul>
                      	      </div>
                      	    </div>
                      	  </nav>'; 

                else
                  echo '
                        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
                            <div class="container">     
                              <div class="collapse navbar-collapse" id="ftco-nav">
                                <ul class="navbar-nav ml-auto">
                                  <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
                                  <li class="nav-item"><a href="../logout_product.php?id='.$pid.'" class="nav-link">Logout</a></li>
								  <li class="nav-item"><a href="../formularitem.php" class="nav-link">Adauga un produs</a></li>
                            <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
                                </ul>
                              </div>
                            </div>
                          </nav>'; 
                          ?>
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="../index.php">Produsul</a></span> <span class="mr-2"><a href="index.php">disponibil</a></span> 
            <h1 class="mb-0 bread"><?php echo $pnume_produs ?></h1>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
            <?php echo ' 
    				<a href="../uploads/'.$ppoza.'" class="image-popup"><img src="../uploads/'.$ppoza.'" class="img-fluid" alt="" ></a>'; ?>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
            
				<p><?php echo $pnume_afacere ?></p>
				<p> <?php echo "$poras , $pjudet"; ?> </p>
    				<h3><?php echo $pnume_produs ?></h3>
    			
    				<p class="price"><span><?php echo "$ppret RON"?></span></p>
    				<p><?php echo $pdescriere ?></p>
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group d-flex">		       
	                </div>
		            </div>
							</div>
							<div class="w-100"></div>
							<div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	            		</span>
                  <form method="post" action="../db/server.php">
	             	<?php echo '<input type="number" name="quantity" class="form-control input-number" value="1" min="1" max="'.$pcantitate.'">'; ?>
    	             	<span class="input-group-btn ml-2">
    	             	</span>
    	          	</div>
    	          	<div class="w-100"></div>
    	          	<div class="col-md-12">
    	          		<p style="color: #000;"><?php echo "$pcantitate kg disponibile pe stoc"; ?></p>
    	          	</div>
              	</div>

                <?php 
                if(isset($_SESSION['nume_sesiune']))                
                    echo '<input type="hidden" name="prod_id"  value="'.$pid.'">
                    <p><button id="submit" class="btn btn-black py-3 px-5" type="submit" name="addtocart">Baga-n sac</button></p>
                    </form>';
                else
                  echo '</form>
                    <p><a href="../login.php" class="btn btn-black py-3 px-5" type="submit">Logeaza-te pentru a cumpara</a></p>';
                ?>
          	   
    			</div>
    		</div>
    	</div>
    </section>
	<footer class="ftco-footer ftco-section">
        <div class="row">
          <div class="col-md-12 text-center">
			<p>Copyright &copy; local's <script>document.write(new Date().getFullYear());</script> | All rights reserved</a></p>
          </div>
        </div>
      </div>
    </footer>
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script>
		$(document).ready(function(){

      var input = document.querySelectorAll("input[type=number]")[0];

      var last = '';
      input.addEventListener('input', function () {
        if(this.checkValidity()) {
          last = this.value;
        } else {
          this.value = last;
        }
		});
	</script>
  </body>
</html>
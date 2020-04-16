<?php
include ("/var/db/dbconfig.php");
include('/var/www/html/HackTheVirusWeb/db/errors.php');

$errors = array(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>local's</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,0000000,400,500,600,700,800&display=swap" rel="stylesheet">
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
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">	    
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="../index.html" class="nav-link">Home</a></li>
			  <li class="nav-item"><a href="index.html" class="nav-link">Shop</a></li>
			<li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>


    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Cumpara</a></span> <span>online</span></p>
            <h1 class="mb-0 bread">Produse disponibile</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="#" class="active">Oferte</a></li>
    				</ul>
    			</div>
    		</div>
    		<div class="row">
                <?php
                    $ok = 0;
                    $user_check_query = "SELECT * FROM anunturi ORDER BY id DESC";
                    $result = mysqli_query($db, $user_check_query);
  

                    if ($result) 
                    {
                      $user = mysqli_fetch_all($result, MYSQLI_ASSOC);
                      foreach($user AS $row)
                      {

                            $ok = 1;
                           
                                $ppoza = $row["poza"];
                                $sql = "SELECT * FROM image_upload WHERE id='$ppoza'";
                                $result2 = mysqli_query($db, $sql);
                                $row2 = mysqli_fetch_assoc($result2);
                                
                                $ppoza = $row2['image'];
                                $pid = $row["id"];
                                $pname = $row["nume_produs"];
                                $ppret = $row["pret"];
                                $pcantitate = $row["cantitate"];
                                $pdescriere = $row['descriere'];
                
                                         echo '
                                         <div class="col-md-6 col-lg-3 ftco-animate">
                                            <div class="product">
                                                <a href="product-single.php?id='.$pid.'" class="img-prod"><img class="img-fluid" src="../uploads/'.$ppoza.'" alt="Colorlib Template">
                                                    <span class="status">30%</span>
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="text py-3 pb-4 px-3 text-center">
                                                    <h3><a href="product-single.php">'.$pname.'</a></h3>
                                                    <div class="d-flex">
                                                        <div class="pricing">
                                                            <p class="price"><span class="mr-2 price">'.$ppret.'</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="bottom-area d-flex px-3">
                                                        <div class="m-auto d-flex">
                                                            <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                <span><i class="ion-ios-cart"></i></span>
                                                            </a>
                                                            <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                                                <span><i class="ion-ios-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                              }
                      }

                    echo '</div></div></div></section>';

                    if(!$ok)
                    {

                      echo '<p id="anunt"> Nu s-au gasit anunturi</p>';
                    }
                    ?>

    				</div>
    			</div>
    		</div>
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>	
	 <footer class="ftco-footer ftco-section">
		<div class="row">
          <div class="col-md-12 text-center">

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
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
    
  </body>
</html>
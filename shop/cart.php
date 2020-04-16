<?php
session_start();
include ("/var/db/dbconfig.php");

if(!isset($_SESSION['nume_sesiune']))
{
 header("Location: ../index.php");
 die("Not logged in"); 
} 

$user_email = $_SESSION["nume_sesiune"];
$sql = "SELECT * FROM users WHERE email='$user_email'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);
$pid = $row['id'];

$ppoza = '';
$pnume_produs = '';
$ppret = '';
$pcantitate = array();
$pidvector = array();
$pdescriere = '';
$ppretcantitate = '';

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
                      			  <li class="nav-item"><a href="../shop/shop.php" class="nav-link">Shop</a></li>
                      			<li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
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
                                  <li class="nav-item"><a href="../logout.php" class="nav-link">Logout</a></li>
                              <li class="nav-item"><a href="../shop/shop.php" class="nav-link">Shop</a></li>
                            <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
                                </ul>
                              </div>
                            </div>
                          </nav>'; 
                          ?>
   <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Cumpara</a></span> <span>online</span></p>
            <h1 class="mb-0 bread">Cosul tau</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ftco-animate">
            <div class="cart-list">
              <table class="table">
                <thead class="thead-primary">
                  <tr class="text-center">
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>Nume produs</th>
                    <th>Preţ</th>
                    <th>Cantitate</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                  $user_check_query = "SELECT * FROM produse_cart WHERE user_id='$pid'";
                  $result = mysqli_query($db, $user_check_query);
                  
                  if ($result) {
                    $user = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $ct = 1;
                    foreach($user AS $row)
                    {
                         $ppoza = $row["poza"];
                         $sql = "SELECT * FROM image_upload WHERE id='$ppoza'";
                         $result2 = mysqli_query($db, $sql);
                         $row2 = mysqli_fetch_assoc($result2);
                                                
                           $ppoza = $row2['image'];
                           $pnume_produs = $row["nume_produs"];
                           $ppret = $row["pret"];
                           if (isset($_POST['update_cart']))
                          {

                            $ct_p = $_POST['ct'];
                            $pidvector = json_decode($_POST['pidvector'] ,true);
                            $pcantitate = json_decode($_POST['pcantitate'] ,true);
                            echo $pidvector;
                            echo $pidvector;

                             for($i = 1; $i <= $ct_p; $i++)
                            {
                                if($pcantitate[$i] > 0)
                                  {

                                      $sql = "UPDATE produse_cart SET cantitate = '$pcantitate[$i]' WHERE id = '$pidvector[$ct]'";
                                      mysqli_query($db, $sql);
                                  }
                                        // else
                              }
                            }

                           $pcantitate[$ct] = $row["cantitate"];
                           $pidvector[$ct] = $row['id'];
                           $pdescriere = $row['descriere'];
                           $ppretcantitate = $pcantitate[$ct] * $ppret;

                           echo '
                                <tr class="text-center">
                                  <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
                                  
                                  <td class="image-prod"><div class="img" style="background-image:url(../uploads/'.$ppoza.');"></div></td>
                                  
                                  <td class="product-name">
                                    <h3> '.$pnume_produs.' </h3>
                                    <p> '.$pdescriere.'</p>
                                  </td>
                                  
                                  <td class="price"> '.$ppret.' RON </td>
                                  
                                  <td class="quantity">
                                    <div class="input-group mb-3">
                                      <input type="number" name="quantity" class="quantity form-control input-number" value="'. $pcantitate[$ct].'" min="0" max="100">
                                    </div>
                                  </td>
                                
                                <td class="total">'.$ppretcantitate.'</td>
                              </tr>';
                          }
                        $ct++;
                      }
                    ?>

						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>$20.60</span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>$0.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>$3.00</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>$17.60</span>
    					</p>
    				</div>

    				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
            <form method="post" action="cart.php">

             <input type="hidden" name="pidvector"  value="<?php echo json_encode($pidvector); ?>">
             <input type="hidden" name="pcantitate"  value="<?php echo json_encode($pcantitate); ?>">
              <input type="hidden" name="ct"  value="'.$ct.'">
              <p><button class="btn btn-primary py-3 px-4" name="update_cart">Update cart</button></p>

            </form>
    			</div>
    		</div>
			</div>
		</section>
   <<footer class="ftco-footer ftco-section">
        <div class="row">
          <div class="col-md-12 text-center">
			<p>Copyright &copy; local's <script>document.write(new Date().getFullYear());</script> | All rights reserved</a></p>
          </div>
        </div>
      </div>
    </footer>        
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
  </body>
</html>
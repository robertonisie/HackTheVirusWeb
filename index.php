<?php
session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>local's</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
</header> 
<?php 
                if(!isset($_SESSION['nume_sesiune']))
                    echo '	 
		<div class="header-area ">
                 <div id="sticky-header" class="main-header-area">
                    <div class="container">
                        <div class="header_bottom_border">
                            <div class="row align-items-center">
                                <div class="col-xl-3 col-lg-2">          
                                </div>
                                <div class="col-xl-6 col-lg-7">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">											
                                                <li><a href="index.php">home</a></li>
                                                <li><a href="#">Detalii<i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                            <li><a href="#detalii">Ce puteți găsi?</a></li>
                                                            <li><a href="#dece">De ce noi?</a></li>
                                                            <li><a href="#recenzii">Recenzii</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop/shop.php">Cumpara</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                              <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                    <div class="Appointment">
                                        <div class="book_btn d-none d-lg-block">
                                            <a  href="login.php">Logare</a>
                                        </div>
                                    </div>
							  </div>
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>';
		else
                  echo '
				<div class="header-area ">
                 <div id="sticky-header" class="main-header-area">
                    <div class="container">
                        <div class="header_bottom_border">
                            <div class="row align-items-center">
                                <div class="col-xl-3 col-lg-2">          
                                </div>
                                <div class="col-xl-6 col-lg-7">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">											
                                                <li><a href="index.php">home</a></li>
                                                <li><a href="#">Detalii<i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                            <li><a href="#detalii">Ce puteți găsi?</a></li>
                                                            <li><a href="#dece">De ce noi?</a></li>
                                                            <li><a href="#recenzii">Recenzii</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop/shop.php">Cumpara</a></li>
                                                <li><a href="formularitem.php">Vinde</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                              <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                    <div class="Appointment">
                                        <div class="book_btn d-none d-lg-block">
                                            <a  href="logout_index.php">Delogare</a>
                                        </div>
                                    </div>
							  </div>
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>';
		?>			
		
       
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>Descoperă <br>afacerile locale</h3>
                                <div class="video_service_btn">
                                    <a href="#detalii" class="boxed-btn3">Detalii</a>
									<a href="shop/shop.php" class="boxed-btn3">Cumpara</a>	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>Devino voluntar <br> pentru afacerile locale</h3>
                                <div class="video_service_btn">
                                    <a href="#detalii" class="boxed-btn3">Detalii</a>
									<a href="shop/shop.php" class="boxed-btn3">Cumpara</a>	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_3 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>Devino chiar tu <br>
                                    Vânzător local</h3>
                                <div class="video_service_btn">
                                    <a href="#detalii" class="boxed-btn3">Detalii</a>
									<a href="shop/shop.php" class="boxed-btn3">Cumpara</a>									
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<a name="detalii">
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>Ce puteți găsi?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                        <div class="service_icon">
                            <img src="img/svg_icon/apple.svg" alt="" height=50 width=50>
                        </div>
                        <h3>Produse bio românești certificate organic</h3>
                        <p>Cauți mere, roșii, un vin bun? Te ajutăm să găsești cele mai gustoase produse bio din orașul tău încurajând în același timp agricultorii locali!</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                        <div class="service_icon">
                            <img src="img/svg_icon/clothes.svg" alt="" height=50 width=50>
                        </div>
                        <h3>Produsele afacerilor locale din orașul tău</h3>
                        <p>Cauți produse fabricate în România? Fie produse naturale, haine sau bijuterii, acesta este locul ideal de a susține creatorii români.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                        <div class="service_icon">
                            <img src="img/svg_icon/painting.svg" alt="" height=50 width=50>
                        </div>
                        <h3>Artă locală</h3>
                        <p>Ești artist local și vrei să îți prezinți produsele în mediul online, dar și să le vinzi? Ai găsit locul potrivit! Susținem arta și cultura locală și încurajăm creativitatea!</p>
                    </div>
            </div>
        </div>
    </div>
	</a> 
    <div class="counter_area counter_bg_1 overlay2">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-3 col-md-3">
                    <div class="single_counter text-center ">
                        <div class="counter_icon">
                            <img src="img/svg_icon/group.svg" alt="">
                        </div>
                        <h3> <span class="counter">200</span> <span> +</span> </h3>
                        <p>Afaceri locale înscrise</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-3">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="img/svg_icon/heart.svg" alt="">
                        </div>
                        <h3> <span class="counter">1068</span></h3>
                        <p>Clienți mulțumiți</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-3">
                    <div class="single_counter text-center">
                        <div class="counter_icon">
                            <img src="img/svg_icon/respect.svg" alt="">
                        </div>
                        <h3> <span class="counter">1237</span> </h3>
                        <p>Afaceri încheiate cu succes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<a name="dece">
    <div class="about_info_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about_text">
                        <h3>De ce noi?</h3>
                        <p>Noi te ajutăm să găsești produsele ideale nevoilor tale: analizăm cerința, localizăm sursele din orașul tău și îți prezentăm opțiunile. Astfel ai parte de produse proaspete în cel mai scurt timp. Pe de altă parte, împreună cu noi, susții micile afaceri locale, cât și arta și agricultura românească. Astfel contribuim la o bună dezvoltare a industriei din România și la omogenizarea comunității locale a orașului tău!</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <div class="about_thumb">
                        <img src="img/service/about.png" alt="">
                </div>
                </div>
            </div>
        </div>
    </div>
	</a>	
	<a name="recenzii">
    <div class="testimonial_area overlay2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="img/svg_icon/quote.svg" alt="">
                                        </div>
                                        <p>Prin intermediul acestui site am găsit o fermă în apropierea casei mele, care pe lângă fructele și legumele delicioase pe care le oferă, produce și vin: strugurii, desigur, din propria recoltă. De când am gustat prima oară vinul lor, doar de acolo am mai cumpărat. Recomand cu încredere! </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="img/service/tipa2.png" alt="">
                                            </div>
                                            <h3>Ana Toma</h3>
                                            <span>Clientă</span>
                                        </div>
                                    </div>
                        </div>
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="img/svg_icon/quote.svg" alt="">
                                        </div>
                                        <p>Sunt fermieră de 40 de ani și mereu mi-am vândul recolta în piață și vecinilor. De când mi-a arătat nepotul meu această platformă, totul este mult mai simplu: Îmi pot vinde produsele online, sunt scutit de zile întregi de stat în piață. Începe să îmi placă să fiu fermier modern.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="img/service/tipa3.png" alt="">
                                            </div>
                                            <h3>Elena Niculescu</h3>
                                            <span>Productătoare</span>
                                        </div>
                                    </div>
                        </div>
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="img/svg_icon/quote.svg" alt="">
                                        </div>
                                        <p>Săptămâna trecută a fost ziua soției mele și eram în pană de idei. Acest site m-a ajutat mult. Am găsit un pictor local care mi-a vândul unul din tablourile sale. Zâmbetul soției m-a convins că am luat alegerea bună apelând la voi! </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="img/service/tip1.png" alt="">
                                            </div>
                                            <h3>Vasile Popa</h3>
                                            <span>Client</span>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
	</a>	
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">Copyright &copy; local's <script>document.write(new Date().getFullYear());</script> | All rights reserved</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
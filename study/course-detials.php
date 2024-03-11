<?php
session_start();
include("php/db.php");
include("php/InfosVisiteur.php");

$infosVisiteur=new InfosVisiteur($bdd);

$selectionFomation=$infosVisiteur->infosFormation($_GET["id"]);

$resultat=$selectionFomation->fetch();

$_SESSION["prixFormation"]=$resultat["prix"];
$_SESSION["idFormation"]=$resultat["id"];



?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Estudy-Online Education Learning & LMS HTML Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="assets/images/fav-icon/icon.png">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
	<!-- carousel CSS -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" media="all">
	<!-- animate CSS -->
	<link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all">
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="assets/css/all.min.css" type="text/css" media="all">
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all">
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="assets/css/theme-default.css" type="text/css" media="all">
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all">
	<!-- transitions CSS -->
	<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css" media="all">
	<!-- venobox CSS -->
	<link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="all">
	<!-- bootstrap icons -->
	<link rel="stylesheet" href="assets/css/bootstrap-icons.css" type="text/css" media="all">
	<!-- Main Style CSS -->
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">
	<!-- Dropdown CSS -->
	<link rel="stylesheet" href="assets/css/dropdown.css" type="text/css" media="all">
	<!-- responsive CSS -->
	<link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all">
	<!-- modernizr js -->
	<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
	<!-- loder -->
	<div class="loader_bg">
	</div>

	<!--==================================================-->
	<!-- Start Header Area -->
	<!--==================================================-->
	<header class="header-area bratcome" id="sticky-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-2">
					<div class="logo">
						<a href="index.html"><img src="assets/images/logo.png" alt=""></a>
					</div>
				</div>
				<div class="col-lg-10">
					<div class="header-menu">
						<ul>
							<li><a href="#">Accueil <i class="bi bi-plus"></i></a>
								<div class="sub-menu">
									<ul>
										<li><a href="index.html">Accueil </a></li>
										<li><a href="landing.html">Accueil Landing</a></li>
										<li><a href="video.html">Accueil Video</a></li>
									</ul>
								</div>
							</li>
							<li><a href="#">Cours <i class="bi bi-plus"></i></a>
								<div class="sub-menu">
									<ul>
										<li><a href="course.html">Cours</a></li>
										<li><a href="course-detials.html">Cours Details</a></li>
									</ul>
								</div>
							</li>
							
							<li><a href="contact.html">Contacts</a></li>
							<li><a class="handbag" href="#"><i class="bi bi-cart-fill"></i></a></li>
							<li><a class="user" href="#"><i class="bi bi-person-fill"></i></a></li>
						</ul>
						<div class="main-btn">
							<a href="about.html" class="nest-btn">
								<span class="nest-btn__shape"></span>
								<span class="nest-btn__shape"></span>
								<span class="nest-btn__shape"></span>
								<span class="nest-btn__shape"></span>
								<span class="nest-btn__text">S'inscrire</span>
							</a>
							<a href="about.html" class="nest-btn">
								<span class="nest-btn__shape"></span>
								<span class="nest-btn__shape"></span>
								<span class="nest-btn__shape"></span>
								<span class="nest-btn__shape"></span>
								<span class="nest-btn__text">Se connecter</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- estudy Mobile Menu Area -->
	<div class="mobile-menu-area sticky-menu" id="navbar">
		<div class="mobile-menu">
			<div class="mobile-logo">
				<a href="index.html"><img src="assets/images/logo.png" alt=""></a>
			</div>
			<div class="side-menu-info">
				<div class="sidebar-menu">
					<a class="navSidebar-button" href="#"><i class="bi bi-justify-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Header Area -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start Breatcome Area -->
	<!--==================================================-->
	<div class="breatcome-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="breatcome-content">
						<div class="breatcome-title">
							<h1>Details du cours</h1>
						</div>
						<div class="bratcome-text">
							<ul>
								<li><a href="index.html">Accueil</a></li>
								<li>Details du cours</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Breatcome Area -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start Course  Area -->
	<!--==================================================-->
	<div class="courses-details-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<div class="sidebar-courses">
						<div class="courses-info">
							<ul>
								<li><i class="bi bi-alarm"></i> Durérs: <span>10 heures</span></li>
								<li><i class="bi bi-folder"></i> Lectures: <span>15</span></li>
								<li><i class="bi bi-person-circle"></i> Etudiants: <span>Max 50</span></li>
								<li><i class="bi bi-alarm"></i> Niveau de compétence: <span>Avancé</span></li>
								<li><i class="bi bi-bell"></i> Langue: <span>Anglais</span></li>
								<li><i class="far fa-user"></i> Instructeur: <span>Dylan Meringue</span></li>
								<li><i class="bi bi-percent"></i> Pourcentage de réussite: <span>85%</span></li>
							</ul>
						</div>
						<div class="courses-price-single-box">
							<div class="courses-price-content">
								<h4>PRIX DU COURS</h4>
								<span>20.00$</span>
							</div>
							<div class="main-btn">
								<a href="code.php" class="nest-btn">
									<span class="nest-btn__shape"></span>
									<span class="nest-btn__shape"></span>
									<span class="nest-btn__shape"></span>
									<span class="nest-btn__shape"></span>
									<span class="nest-btn__text">ACHETER CE COURS<i class="bi bi-arrow-right"></i></span>
								</a>
							</div>
						</div>
					</div>
					<div class="latest-courses-single-box">
						<div class="latest-courses-title">
							<h4>Nouveaux Cours</h4>
						</div>
						<div class="latest-courses-item">
							<div class="latest-courses-thumb">
								<img src="assets/images/course/latest1.jpg" alt="">
							</div>
							<div class="latest-courses-content">
								<a class="catagory" href="#">by <span>Advanced</span></a>
								<div class="latest-courses-content-title">
									<h5><a href="#">Langue Moderne</a></h5>
								</div>
								<div class="latest-courses-rating">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
							</div>
						</div>
						<div class="latest-courses-item">
							<div class="latest-courses-thumb">
								<img src="assets/images/course/latest2.jpg" alt="">
							</div>
							<div class="latest-courses-content">
								<a class="catagory" href="#">by <span>Advanced</span></a>
								<div class="latest-courses-content-title">
									<h5><a href="#">Technologie Modern</a></h5>
								</div>
								<div class="latest-courses-rating">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
							</div>
						</div>
						<div class="latest-courses-item">
							<div class="latest-courses-thumb">
								<img src="assets/images/course/latest3.jpg" alt="">
							</div>
							<div class="latest-courses-content">
								<a class="catagory" href="#">by <span>Advanced</span></a>
								<div class="latest-courses-content-title">
									<h5><a href="#">Etudes de Développement</a></h5>
								</div>
								<div class="latest-courses-rating">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-12">
					<div class="courses-details-thumb">
						<img src="assets/images/course/course-details.jpg" alt="">
					</div>
					<div class="courses-details-content">
						<h2>Aperçu dou Cours</h2>
						<p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing.</p>
						<p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
						<h2>Qu'est-ce que tu vas apprendre?</h2>
						<p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					</div>
					<div class="row catagori">
						<div class="col-lg-4 col-md-6">
							<div class="courses-catagori-box">
								<div class="courses-catagori-icon">
									<img src="assets/images/counter-icon-1.png" alt="">
								</div>
								<div class="courses-catagori-content">
									<h4>Online degree</h4>
									<p>13 COURSES</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="courses-catagori-box">
								<div class="courses-catagori-icon">
									<img src="assets/images/counter-icon-2.png" alt="">
								</div>
								<div class="courses-catagori-content">
									<h4>Non-degree</h4>
									<p>38 COURSES</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="courses-catagori-box">
								<div class="courses-catagori-icon">
									<img src="assets/images/counter-icon-3.png" alt="">
								</div>
								<div class="courses-catagori-content">
									<h4>Off campus</h4>
									<p>26 COURSES</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Course  Area -->
	<!--==================================================-->


	

	
	<!--==================================================-->
	<!-- Start Footer Area -->
	<!--==================================================-->
	<div class="footer-area">
		<div class="container">
			<div class="footer-shape1 bounce-animate-slow">
				<img src="assets/images/footer/footer-shape-1.png" alt="">
			</div>
			<div class="footer-shape2 bounce-animate-slow">
				<img src="assets/images/footer/footer-shape-2.png" alt="">
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-wiget wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
						<div class="footer-wiget-logo">
							<img src="assets/images/footer-logo.png" alt="">
						</div>
						<div class="footer-wiget-text">
							<h4>Get a full cRontrol of debts in the dsu digital world simpl labore et dolore ma</h4>
						</div>
						<div class="footer-socilal-title">
							<h4>Suivez-nous</h4>
						</div>
						<div class="footer-social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-wiget wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
						<div class="footer-wiget-title">
							<h4>Our Services</h4>
						</div>
						<div class="footer-wiget-menu">
							<ul>
								<li><a href="#">Accueil</a></li>
								<li><a href="#">Cours</a></li>
								<li><a href="#">contacts </a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-wiget wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
						<div class="footer-wiget-title">
							<h4>contactez-nous</h4>
						</div>
						<div class="footer-wiget-touch">
							<ul>
								<li>
									<div class="icon">
										<i class="bi bi-geo-alt"></i>
									</div>
									<div class="title">
										<h6>Address</h6>
									</div>
									<div class="adress">
										<a href="#">244, First Floor, Los Angeles </a>
									</div>
								</li>
								<li>
									<div class="icon">
										<i class="bi bi-telephone-plus-fill"></i>
									</div>
									<div class="title">
										<h6>Phone</h6>
									</div>
									<div class="adress">
										<a href="#">(+01) 123 456 7890</a>
									</div>
								</li>
								<li>
									<div class="icon">
										<i class="bi bi-envelope"></i>
									</div>
									<div class="title">
										<h6>Email</h6>
									</div>
									<div class="adress">
										<a href="#">info@example.com</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-wiget wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
						<div class="footer-wiget-title">
							<h4>Nos Projects</h4>
						</div>
						<div class="footer-widget-photo">
							<ul>
								<li><img src="assets/images/footer/footer1.png" alt=""></li>
								<li><img src="assets/images/footer/footer2.png" alt=""></li>
								<li><img src="assets/images/footer/footer3.png" alt=""></li>
								<li><img src="assets/images/footer/footer4.png" alt=""></li>
								<li><img src="assets/images/footer/footer5.png" alt=""></li>
								<li><img src="assets/images/footer/footer6.png" alt=""></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row align-items-center mt-90">
				<div class="col-lg-6 col-md-12">
					<div class="copyright-text">
						<p>© 2023 - 2025 | Tous droits réservés <a
								href="https://themeforest.net/user/website_stock/portfolio">website_stock</a></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="footer-privacy-menu">
						<ul>
							<li><a href="#">Politique de confidentialité</a></li>
							<li><a href="#">Termes & Conditions</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Footer Area -->
	<!--==================================================-->


	<!--==================================================-->
	<!-- Start scrollup section Area -->
	<!--==================================================-->
	<!-- scrollup section -->
	<div class="prgoress_scrollup">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>

	<!--==================================================-->
	<!-- End scrollup section Area -->
	<!--==================================================-->


	<!-- jquery js -->
	<script src="assets/js/vendor/jquery-3.6.2.min.js"></script>

	<script src="assets/js/popper.min.js"></script>

	<!-- bootstrap js -->
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- carousel js -->
	<script src="assets/js/owl.carousel.min.js"></script>

	<!-- counterup js -->
	<script src="assets/js/jquery.counterup.min.js"></script>

	<!-- waypoints js -->
	<script src="assets/js/waypoints.min.js"></script>

	<!-- wow js -->
	<script src="assets/js/wow.min.js"></script>

	<!-- imagesloaded js -->
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>

	<!-- venobox js -->
	<script src="venobox/venobox.js"></script>

	<!--  animated-text js -->
	<script src="assets/js/animated-text.js"></script>

	<!-- venobox min js -->
	<script src="venobox/venobox.min.js"></script>

	<!-- isotope js -->
	<script src="assets/js/isotope.pkgd.min.js"></script>

	<!-- jquery meanmenu js -->
	<script src="assets/js/jquery.meanmenu.js"></script>

	<!-- jquery scrollup js -->
	<script src="assets/js/jquery.scrollUp.js"></script>

	<!-- Slick Slider -->
	<script src="assets/slick/slick.min.js"></script>

	<script src="assets/js/jquery.barfiller.js"></script>
	<!-- jquery js -->

	<!-- ragrslider js -->
	<script src="assets/js/rangeslider.js"></script>

	<!-- ragrslider js -->
	<script src="assets/js/mixitup.min.js"></script>

	<!-- theme js -->
	<script src="assets/js/theme.js"></script>

	<!-- scroll js -->
	<script src="assets/js/script.js"></script>

</body>

</html>
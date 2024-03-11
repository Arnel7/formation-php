<?php
include("php/db.php");
include("php/InfosVisiteur.php");

$infosVisiteur=new InfosVisiteur($bdd);

$selectionCategorie=$infosVisiteur->selectionCategorie();

$selectionFormation=$infosVisiteur->selectionFormation();





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

<body >
	<!-- loder -->
	<div class="loader_bg">
	</div>

	<!--==================================================-->
	<!-- Start Header Area -->
	<!--==================================================-->
	<header class="header-area" id="sticky-header">
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
							<a href="signup.html" class="nest-btn">
								<span class="nest-btn__shape"></span>
								<span class="nest-btn__shape"></span>
								<span class="nest-btn__shape"></span>
								<span class="nest-btn__shape"></span>
								<span class="nest-btn__text">S'inscrire</span>
							</a>
							<a href="login.html" class="nest-btn">
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
	<!-- Start Banner Area -->
	<!--==================================================-->
	<div class="slider_list owl-carousel">
		<div class="slider-area d-flex align-items-center">
			<div class="slider-shape-area">
				<div class="baner-shape1 bounce-animate">
					<img src="assets/images/slider/slider-shape.png" alt="">
				</div>
				<div class="baner-shape2 bounce-animate">
					<img src="assets/images/slider/slider-shape2.png" alt="">
				</div>
				<div class="baner-shape3 watermark-animate">
					<img src="assets/images/slider/slider-shape2.png" alt="">
				</div>
				<div class="baner-shape4 bounce-animate4">
					<img src="assets/images/slider/slider-shape2.png" alt="">
				</div>
			</div>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="slider-content">
							<div class="slider-sub-title">
								<h4>100% Satisfaction Guarantee</h4>
							</div>
							<div class="slider-main-title">
								<h1>Apprenez les compétences de nos meilleurs instructeurs</h1>
							</div>
							<div class="main-btn slider1">
								<a href="about.html" class="nest-btn slider1">
									<span class="nest-btn__shape slider"></span>
									<span class="nest-btn__shape slider"></span>
									<span class="nest-btn__shape slider"></span>
									<span class="nest-btn__shape slider"></span>
									<span class="nest-btn__text">Nos cours</span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="slider-thumb">
							<img src="assets/images/slider/slider-thumb.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-area d-flex align-items-center">
			<div class="slider-shape-area">
				<div class="baner-shape1 bounce-animate">
					<img src="assets/images/slider/slider-shape.png" alt="">
				</div>
				<div class="baner-shape2 bounce-animate">
					<img src="assets/images/slider/slider-shape2.png" alt="">
				</div>
				<div class="baner-shape3 watermark-animate">
					<img src="assets/images/slider/slider-shape2.png" alt="">
				</div>
				<div class="baner-shape4 bounce-animate4">
					<img src="assets/images/slider/slider-shape2.png" alt="">
				</div>
			</div>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="slider-content">
							<div class="slider-sub-title">
								<h4>100% Satisfaction Guarantee</h4>
							</div>
							<div class="slider-main-title">
								<h1>Apprenez les compétences de nos meilleurs instructeurs</h1>
							</div>
							<div class="main-btn slider1">
								<a href="about.html" class="nest-btn slider1">
									<span class="nest-btn__shape slider"></span>
									<span class="nest-btn__shape slider"></span>
									<span class="nest-btn__shape slider"></span>
									<span class="nest-btn__shape slider"></span>
									<span class="nest-btn__text">Nos cours</span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="slider-thumb">
							<img src="assets/images/slider/slider-thumb.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Banner Area -->
	<!--==================================================-->


	<!--==================================================-->
	<!-- Start Catagories  Area -->
	<!--==================================================-->
	<div class="catagories-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
						<div class="section-title-shape">
							<img src="assets/images/resource/section-shape.png" alt="">
						</div>
						<div class="section-sub-title">
							<h4>Browse Categories</h4>
						</div>
						<div class="section-main-title">
							<h2>Catégories de cours</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="catagories_list owl-carousel">

				<?php
					while($resultat=$selectionCategorie->fetch()){
					

						?>
						<div class="col-lg-12">
						<div class="catagories-single-box wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
							<div class="catagories-thumb">
								<img src="assets/images/catagories/<?php echo $resultat["image"]; ?>" alt="">
								<div class="catagories-text">
									<h4>Visit</h4>
								</div>
							</div>
							<div class="catagories-title">
								<h4><a href="#"><?php echo $resultat["nom"]; ?></a></h4>
							</div>
						</div>
					</div>

						<?php



					}

					

				
				?>
					
					
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Catagories Area -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start Course  Area -->
	<!--==================================================-->
	<div class="course-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-12">
					<div class="section-title wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
						<div class="section-title-shape">
							<img src="assets/images/resource/section-shape.png" alt="">
						</div>
						<div class="section-sub-title">
							<h4>Browse Categories</h4>
						</div>
						<div class="section-main-title">
							<h2>Liste des formations</h2>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<ul class="course-menu d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s"
						data-wow-duration="1s">
						<li class=""><a href="#!" data-mixitup-control="" data-filter=".ios" class="">Engineering</a>
						</li>
						<li class=""><a href="#!" data-mixitup-control="" data-filter=".and" class=""> Data science</a>
						</li>
						<li class=""><a href="#!" data-mixitup-control="" data-filter=".mar" class="">Graphic Design</a>
						</li>
						<li><a href="#!" data-mixitup-control="" data-filter=".des">Business</a></li>
					</ul>
				</div>
			</div>
			<div class="row filters" id="MixItUp7324BF">
				<?php

				while($resultat2=$selectionFormation->fetch()){


					?> 
				<div class="col-lg-4 col-md-6 mix ios des">
					<div class="course-single-box wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
						<div class="course-thumb">
							<img src="assets/images/course/course1.png" alt="">
							<img src="assets/images/course/course1.png" alt="">
							<div class="course-icon">
								<i class="bi bi-heart"></i>
							</div>
							<div class="course-rating">
								<div class="course-admin">
									<div class="course-shape">
										<img src="assets/images/course/shape1.png" alt="">
									</div>
									<div class="course-shape-title">
										<h4><?php echo $resultat2["auteur"] ?>  </h4>
									</div>
								</div>
								<div class="course-star">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<span>(29)</span>
								</div>
							</div>
						</div>
						<div class="course-content">
							<div class="course-meta">
								<span><i class="bi bi-book"></i> 22 Lesson</span>
								<span><i class="bi bi-clock"></i> 1 hr 17 min</span>
							</div>
							<div class="course-title">
								<h4><a href="#"><?php echo $resultat2["titre"] ?></a></h4>
							</div>
							<div class="course-bottom">
								<div class="course-price">
									<span><?php echo $resultat2["prix"] ?>  F CFA</span>
								</div>
								<div class="course-cart">
									<a href="course-detials.php?id=<?php echo $resultat2["id"] ?>" target="_blank"><i class="bi bi-cart-fill"></i> Acheter</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php
				}
				
			
				
				
				?>

				
				
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Course  Area -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start Help  Area -->
	<!--==================================================-->
	<div class="help-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-12">
					<div class="help-sub-title wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
						<h4>MEILLEURE PLATEFORME D'APPRENTISSAGE</h4>
					</div>
					<div class="help-main-title wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
						<h2>Une plateforme qui offre une multitude de cours</h2>
						<h2>pour vous.</h2>
					</div>
					<div class="help-list wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
						<span><i class="bi bi-check"></i> Plateforme d'apprentissage en ligne facile à utiliser</span>
						<span><i class="bi bi-check"></i> 98% Taux de réussite des cours</span>
						<span><i class="bi bi-check"></i> Environnements conviviaux et professeurs compétents.</span>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="help-items-box wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
						<div class="help-icon-thumb">
							<img src="assets/images/resource/help-icon.png" alt="">
						</div>
						<div class="help-items-content">
							<h6>Besoin d'aide? contactez-nous</h6>
							<h4><a href="#">+91 458 654 528</a></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Help  Area -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start Choose us Area -->
	<!--==================================================-->
	<div class="choose-us-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-12">
					<div class="section-title wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
						<div class="section-title-shape">
							<img src="assets/images/resource/section-shape.png" alt="">
						</div>
						<div class="section-sub-title">
							<h4>Choose From 5,000 Online</h4>
						</div>
						<div class="section-main-title">
							<h2>Section de cours à venir</h2>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="main-btn choose wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
						<a href="about.html" class="nest-btn choose">
							<span class="nest-btn__shape"></span>
							<span class="nest-btn__shape"></span>
							<span class="nest-btn__shape"></span>
							<span class="nest-btn__shape"></span>
							<span class="nest-btn__text"> Voir tout <i class="bi bi-arrow-right"></i></span>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="choose-single-box wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
						<div class="choose-thumb">
							<img src="assets/images/resource/choose1.png" alt="">
						</div>
						<div class="choose-content">
							<span>August 31, 2024</span>
							<h4>La force de vente satisfait aux exigences de la certification classique</h4>
							<p><i class="bi bi-geo-alt-fill"></i> Humberg City, Germany</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="choose-single-box wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
						<div class="choose-thumb">
							<img src="assets/images/resource/choose2.png" alt="">
						</div>
						<div class="choose-content">
							<span>August 31, 2024</span>
							<h4>La force de vente satisfait aux exigences de la certification classique</h4>
							<p><i class="bi bi-geo-alt-fill"></i> Humberg City, Germany</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="choose-single-box wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
						<div class="choose-thumb">
							<img src="assets/images/resource/choose3.png" alt="">
						</div>
						<div class="choose-content">
							<span>August 31, 2024</span>
							<h4>La force de vente satisfait aux exigences de la certification classique</h4>
							<p><i class="bi bi-geo-alt-fill"></i> Humberg City, Germany</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="choose-single-box wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
						<div class="choose-thumb">
							<img src="assets/images/resource/choose4.png" alt="">
						</div>
						<div class="choose-content">
							<span>August 31, 2024</span>
							<h4>La force de vente satisfait aux exigences de la certification classique</h4>
							<p><i class="bi bi-geo-alt-fill"></i> Humberg City, Germany</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Choose us Area -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start Team Area -->
	<!--==================================================-->
	<div class="team-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center wow fadeInUp animated" data-wow-delay="100ms">
						<div class="section-title-shape">
							<img src="assets/images/resource/section-shape.png" alt="">
						</div>
						<div class="section-sub-title">
							<h4>Consult with your favorite</h4>
						</div>
						<div class="section-main-title">
							<h2>Personalised Training</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="team-single-box wow fadeInUp animated" data-wow-delay="200ms">
						<div class="team-thumb">
							<img src="assets/images/team/team1.png" alt="">
						</div>
						<div class="team-content">
							<div class="team-title">
								<h4><a href="team-detials.html">Earle Goodman</a></h4>
								<span>Master's Degree</span>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="team-btn">
								<a href="team-detials.html">Book Schedule</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="team-single-box wow fadeInUp animated" data-wow-delay="300ms">
						<div class="team-thumb">
							<img src="assets/images/team/team2.png" alt="">
						</div>
						<div class="team-content">
							<div class="team-title">
								<h4><a href="team-detials.html">Sarah Taylor</a></h4>
								<span>UX/UI Expert</span>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="team-btn">
								<a href="team-detials.html">Book Schedule</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="team-single-box wow fadeInUp animated" data-wow-delay="400ms">
						<div class="team-thumb">
							<img src="assets/images/team/team3.png" alt="">
						</div>
						<div class="team-content">
							<div class="team-title">
								<h4><a href="team-detials.html">Hunter Hunter</a></h4>
								<span>Math Teacher</span>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="team-btn">
								<a href="team-detials.html">Book Schedule</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="team-single-box wow fadeInUp animated" data-wow-delay="500ms">
						<div class="team-thumb">
							<img src="assets/images/team/team4.png" alt="">
						</div>
						<div class="team-content">
							<div class="team-title">
								<h4><a href="team-detials.html">Norris Weeks</a></h4>
								<span>Depertment Head</span>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="team-btn">
								<a href="team-detials.html">Book Schedule</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Team Area -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start Instractor Area -->
	<!--==================================================-->
	<div class="instractor-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="intractor-single-box wow fadeInUp animated" data-wow-delay="600ms">
						<div class="instractor-content">
							<h4>Cours en ligne gratuits de l'école à l'éducation</h4>
							<p>Les meilleurs instructeurs du monde entier ensignent des millions d'étudiants sur EduMall.</p>
							<a href="#">devenez un Instructeur</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="intractor-single-box two wow fadeInUp animated" data-wow-delay="800ms">
						<div class="instractor-content">
							<h4>Rejoignez notre école communautaire à l'éducation</h4>
							<p>Les meilleurs instructeurs du monde entier ensignent des millions d'étudiants sur EduMall.</p>
							<a href="#">Inscrivez-vous gratuitement</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Instractor Area -->
	<!--==================================================-->

	
	<!-- Start Subscribe Area -->
	<!--==================================================-->
	<div class="subscribe-area d-flex align-items-center">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-4 col-md-12">
					<div class="subscribe-title wow fadeInUp animated" data-wow-delay="200ms">
						<h4>Abonnez-vous à Newsletter</h4>
					</div>
				</div>
				<div class="col-lg-8 col-md-12">
					<div class="row">
						<form action="php/traitementNewsletter.php" method="POST">
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="subscribe-box wow fadeInUp animated" data-wow-delay="400ms">
										<input type="text" name="email" placeholder="Adresse E-mail">
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="subscribe-button wow fadeInUp animated" data-wow-delay="600ms">
										<button type="Submit">S'abonner <i class="bi bi-arrow-right"></i></button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Subscribe Area -->
	<!--==================================================-->

	<!--==================================================-->
	<!-- Start Registration Area -->
	<!--==================================================-->
	<div class="registration-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="section-title wow fadeInUp animated" data-wow-delay="100ms">
						<div class="section-sub-title registration">
							<h4>Inscrivez-vous gratuitement</h4>
						</div>
						<div class="section-main-title registration">
							<h2>Créez votre compte pour avoir accès à 78,540 cours en ligne</h2>
						</div>
						<div class="registration-discription">
							<p>Apprendre en ligne implique plusieurs étapes clés. tout d'abord, il est important de rechercher et de choisir un cours qui correspond à vos objectifs et intérêts d'apprentissage. Une fois inscrit au cours</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="registration-items-box wow fadeInUp animated" data-wow-delay="300ms">
						<div class="registration-items-title">
							<h4>Interested Discussing</h4>
						</div>
						<div class="registration-shape bounce-animate">
							<img src="assets/images/resource/registration-shape.png" alt="">
						</div>
						<form action="php/traitementConatct.php" method="POST">
							<div class="row">
								<div class="col-lg-12">
									<div class="registration-form">
										<input type="text" name="nom" placeholder="Nom">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="registration-form">
										<input required type="email" name="email" placeholder="Adresse E-mail ">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="registration-form">
										<input required type="text" name="phone" placeholder="Téléphone">
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="registration-form">
										<textarea required name="message" id="massage" cols="30" rows="10"
											placeholder="Ecrivez votre Message"></textarea>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="registration-button">
										<button type="Submit">Apply for it <i class="bi bi-arrow-right"></i></button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Registration Area -->
	<!--==================================================-->

	
	<!-- Start Sidebar Area -->
	<!--==================================================-->
	<div class="sidebar-group info-group">
		<div class="sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						<i class="bi bi-x-lg"></i>
					</a>
				</div>
				<div class="sidebar-textwidget">
					<div class="sidebar-info-contents">
						<div class="content-inner">
							<div class="sidebar-logo">
								<a href="index.html"><img src="assets/images/logo.png" alt="logo"></a>
							</div>
							<div class="sidebar-widget-menu">
								<ul>
									<li class="dropdown"><a href="#" data-toggle="dropdown">Home <i
												class="icon-arrow"></i></a>
										<ul class="dropdown-menu">
											<li><a href="index.html">Home </a></li>
											<li><a href="landing.html">Home Landing</a></li>
											<li><a href="video.html">Home Video</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#" data-toggle="dropdown">Courses <i class="icon-arrow"></i></a>
										<ul class="dropdown-menu">
											<li><a href="service.html">Courses</a></li>
											<li><a href="course-details.html">Courses Details</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#" data-toggle="dropdown">Team <i
												class="icon-arrow"></i></a>
										<ul class="dropdown-menu">
											<li><a href="team.html">Team</a></li>
											<li><a href="team-detials.html">Team Details</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#project" data-toggle="dropdown">Pages <i
												class="icon-arrow"></i></a>
										<ul class="dropdown-menu">
											<li><a href="team.html">Team</a></li>
											<li><a href="team-detials.html">Team Details</a></li>
											<li><a href="project-grid.html">Gallery</a></li>
											<li><a href="projects-details.html">Gallery Details</a></li>
											<li><a href="faq.html">Faq Page</a></li>
											<li><a href="contact.html">Contact</a></li>
											<li><a href="error.html">Error Page</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#" data-toggle="dropdown">Blog <i
												class="icon-arrow"></i></a>
										<ul class="dropdown-menu">
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog-details.html">Blog Details</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="contact.html" data-toggle="dropdown">Contacts</a></li>
								</ul>
							</div>
							<div class="contact-info">
								<h2>Contact Info</h2>
								<ul class="list-style-one">
									<li><i class="bi bi-geo-alt-fill"></i>6391 Elgin St. Celina, Delaware</li>
									<li><i class="bi bi-telephone-fill"></i>(+001) 123-456-789</li>
									<li><i class="bi bi-envelope"></i> info@example.com</li>
									<li><i class="bi bi-alarm-fill"></i> Week Days: 08.00 to 10.00
									</li>
								</ul>
							</div>
							<ul class="social-box">
								<li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
								<li class="twitter"><a href="#" class="fab fa-instagram"></a></li>
								<li class="linkedin"><a href="#" class="fab fa-twitter"></a></li>
								<li class="instagram"><a href="#" class="fab fa-pinterest-p"></a></li>
								<li class="youtube"><a href="#" class="fab fa-linkedin-in"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Sidebar Area -->
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
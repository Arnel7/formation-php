
<?php 
session_start();
include("php/db.php");
include("php/Users.php");
include("php/InfosVisiteur.php");



$_SESSION["csrf_token"]=random_int(10000,10000);
if($_SERVER['REQUEST_METHOD']=="POST"){

	if($_POST["token"]==$_SESSION["csrf_token"]){
		$users=new Users($bdd);
		$verification=$users->infosCode($_POST["code"]);
		
		
		if($verification){
			// le code existe

				if($verification["montant"]==$_SESSION['prixFormation']){
					// le code a le meme prix que la formation
					if($verification["actif"]==true){
						$infosVisiteur=new InfosVisiteur($bdd);
							$infosVisiteur->updateStatutCode($verification["id"]);

							$infosVisiteur->achats($_SESSION["id"],$_SESSION['idFormation']);

							header("location:design/home.php");

						//$erreur="le code est valide ";

					}
					else{
						$erreur="le code a deja été utilisé ";
					}
				



				}

				else{
					// le code n'a pas le meme prix que la formation
					$erreur="le code n'a pas le meme prix que celui de la formation";


				}


			

		}
		else{

			// ici on fait linsertion

		
		$erreur="code invalide";
			
		}


	}
	

}




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

    <div style="margin-top: 10%;" class="modal modal-signin position-static d-block  py-5 " tabindex="-1" role="dialog" id="modalSignin" >
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
		  <h3><?php   if(isset($erreur)){echo $erreur;}  ?></h3>
            
            <div style="background: transparent;" class="modal-body p-5 pt-0">
              <form method="POST" class="">
                <h2 style="text-align: center; margin-top: 4%; font-size: 32px; font-weight: bold;">Code Cours</h2>
                <div class="form-floating mb-3">
                  <input type="text" name="code" class="form-control rounded-3" id="floatingInput" placeholder="Entrez un code">
				  <input type="hidden" name="token" value="<?php echo $_SESSION["csrf_token"]; ?>">
                  <label for="floatingInput">Entrez un code</label>
                </div>
                  <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Valider</button>
              </form>
            </div>
          </div>
        </div>
      </div>


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
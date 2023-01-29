<!DOCTYPE html>
<html>

<!-- Mirrored from creativelayers.net/themes/prodrive-html/booking-options.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jul 2021 20:13:39 GMT -->
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="keywords" content="">
	<meta name="author" content="CreativeLayers">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Prodrive</title>
	<!-- Boostrap style -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- theme style -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive style -->
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body>
	<div class="layout-theme">
		<div id="loading-overlay">
        <div class="loader"></div>
    </div>
		<!-- Start Header -->
		<header id="header" class="header-02" style="background-color: #0e0e0e;">
			<div class="container-fluid">
				<div id="logo" class="logo-pro">
					<a href="index.html" title="logo prodrive">
						<img src="images/logo.png" alt="">
					</a>
				</div>
				<div class="container center">
					<div class="navigation">
						<div class="mobile-menu">
							<span></span>
						</div>
						<div id="main-menu" class="main-menu">
							<div class="top-text">
								<span>
									<a href="index.html" title=""><img src="images/logo.png" alt=""></a></span>
								<i class="pe-7s-close"></i>
							</div>
							<ul class="menu">
								<li>
									<a href="{{route("acceuil")}}">Acceuil</a>
								</li>
								<li>
									<a href="{{route("services")}}">Services</a>
								</li>
								<li>
									<a href="{{route("flottes")}}">Flottes</a>
								</li>
								<li>
									<a href="{{route("contacts")}}">Contact</a>
								</li>
                                <li style="display: none;" id="menureserv">
                                    <a href="{{route('reservations')}}">Réservation</a>
                                </li>
							</ul>
						</div>
					</div>
					<div class="box-right">
						<div class="login">
							<a href="{{route("reservations")}}">Réservation</a>
						</div>
					</div>
				</div>

			</div>
		</header>
		<!-- End Header -->







        <div class="contain center" style="margin-top:100px; margin-bottom:100px;">
            <h1>Votre réservation a été bien confirmée</h1>
            <h5 style="margin-top: 20px; line-height: 1.1;">Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
            <i class="far fa-check-circle fa-4x" style="color: rgb(34, 185, 34); margin-top:20px;"></i>
            <div style="margin-top: 50px;">
                <a href="{{route('acceuil')}}">
                    <button type="button" class="no-bg clr-1 border-1" style="color: #bf9c60;">Accueil<img src="images/icon/right-4.png" alt=""></button>
                </a>
            </div>
        </div>










        <!-- Start Footer -->
			<footer id="footer" class="footer-02">
				<div class="container">
					<div class="widget-footer widget-about">
					<div id="logo" class="logo-pro">
						<a href="index-2.html" title="logo prodrive">
							<img src="images/logo.png" alt="">
						</a>
					</div>
					<ul class="infomation-ft">
						<li>
							29 Rue du Patis Rondin, 44300 Nantes, France
						</li>
						<li>06 83 91 06 25</li>
						<li>mypremiumvtc@gmail.com</li>
					</ul>
					<ul class="social-ft">
						<li>
							<a href="#" title="Facebook">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#" title="Twitter">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#" title="Instagram">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#" title="Pinterest">
								<i class="fa fa-pinterest" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#" title="Dribble">
								<i class="fa fa-dribbble" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#" title="Google">
								<i class="fa fa-google" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
					</div>
				</div>
			</footer>
			<!-- End Footer -->
			<!-- Start Footer Bottom -->
			<section class="footer-bottom center">
				<div class="container">
					<ul class="city">
						<li>
							<a href="{{route("acceuil")}}" title="">Acceuil</a>
						</li>
						<li>
							<a href="{{route("services")}}" title="">Services</a>
						</li>
						<li>
							<a href="{{route("flottes")}}" title="">Flottes</a>
						</li>
						<li>
							<a href="{{route("contacts")}}" title="">Contact</a>
						</li>
						<li>
							<a href="{{route("reservations")}}" title="">Réservation</a>
						</li>
                        <li>
							<a href="{{route("mentions-legales")}}" title="">Mentions Légales</a>
						</li>
					</ul>
				</div>
			</section>
			<!-- End Footer Bottom -->
			<!-- Start copyright -->
			<section class="copyright cpr2">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p>Copyright MYPREMIUM VTC © 2021. Tous Droits Réservés</p>
						</div>
					</div>
				</div>
			</section>
			<!-- End copyright -->
			<div class="scroll-top">
			</div>
	</div>
	<!-- Javascript -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/tether.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/waypoints.min.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript" src="js/owl.carousel.js"></script>
		<script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
        <script type="text/javascript" src="js/gmap3.min.js"></script>
        <script type="text/javascript" src="js/waves.min.js"></script>
        <script type="text/javascript" src="js/template.js"></script>
        {{-- <script type="text/javascript" src="js/script.js"></script> --}}

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAc7zsgsxb3InhgQCG28Zf8nluBh3jY4T0&libraries=places"></script>




	<!-- End Javascript -->
</body>

<!-- Mirrored from creativelayers.net/themes/prodrive-html/booking-options.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jul 2021 20:13:39 GMT -->
</html>

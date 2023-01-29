<!DOCTYPE html>
<html>

<!-- Mirrored from creativelayers.net/themes/prodrive-html/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jul 2021 20:13:39 GMT -->
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
	<!-- theme style -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive style -->
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body style="background-color: #191919;">
	<div class="layout-theme error-page" style="background-color: #191919">
		<!-- Start Header -->
		<header id="header" class="header-02" style="background-color: black;">
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
		<!-- Start Error Area -->
		<section class="error-area" >
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="error">
							<div class="images-error">
								<img src="images/template/error.png" alt="">
							</div>
							<div class="content-error">
								<h2>OHH! PAGE NON TROUVÉE</h2>
								<p>Il semble que nous ne puissions pas trouver ce que vous cherchez.</p>
                                <button id="btn404" type="button" class="bg-1 clr-white" style="margin-top: 50px;"><a id="txt404" href="{{route('acceuil')}}">Acceuil</a></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Error Area -->
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
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtRmXKclfDp20TvfQnpgXSDPjut14x5wk&amp;region=GB"></script>
	   	<script type="text/javascript" src="js/gmap3.min.js"></script>
	   	<script type="text/javascript" src="js/waves.min.js"></script>
		<script type="text/javascript" src="js/template.js"></script>
	<!-- End Javascript -->
</body>

<!-- Mirrored from creativelayers.net/themes/prodrive-html/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jul 2021 20:13:39 GMT -->
</html>

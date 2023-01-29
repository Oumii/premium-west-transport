<!DOCTYPE html>
<html>
<head>
		<!-- Basic Page Needs -->
		<meta charset="UTF-8">
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="author" content="CreativeLayers">
		<title>Acceuil</title>
		<!-- Boostrap style -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<!-- Slick style -->
		<link rel="stylesheet" type="text/css" href="css/slick.css">
		<!-- REVOLUTION LAYERS STYLES -->
		<link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
		<link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
		<link rel="stylesheet" type="text/css" href="css/daterangepicker.min.css">
		<!-- Theme style -->
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
			<header id="header" class="header-02" style="background-color: black;">
				<div class="container-fluid">
					<div id="logo" class="logo-pro">
						<a href="{{route('acceuil')}}" title="logo prodrive">
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
										<a href="{{route('acceuil')}}" title=""><img src="images/logo.png" alt=""></a></span>
									<i class="pe-7s-close"></i>
								</div>
								<ul class="menu">
									<li>
										<a href="{{route('acceuil')}}">Acceuil</a>
									</li>
									<li>
										<a href="{{route('services')}}">Services</a>
									</li>
									<li>
										<a href="{{route('flottes')}}">Flottes</a>
									</li>
									<li>
										<a href="{{route('contacts')}}">Contact</a>
									</li>
                                    <li style="display: none;" id="menureserv">
										<a href="{{route('reservations')}}">Réservation</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="box-right">
							<div class="login">
								<a href="{{route('reservations')}}">Réservation</a>
							</div>
						</div>
					</div>

				</div>
			</header>
			<!-- End Header -->
			<!-- Start TP Banner -->
			<div class="container"></div>
			<section class="tp-banner fmb">
				<div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
	            	<!-- START REVOLUTION SLIDER 5.3.0.2 auto mode -->
		            <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
		                <div class="slotholder"></div>
		                <ul><!-- SLIDE  -->
		                    <!-- SLIDE 1 -->
                            @foreach ($sliders as $item)
		                    <li data-index="{{$item->id}}" data-transition="slideremovedown" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		                        <!-- MAIN IMAGE -->
		                        <img src="{{URL::asset($item->image)}}"  alt="{{$item->alt}}"  data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
		                        <!-- LAYERS -->
		                        <div class="tp-caption color-white"
		                            id="slide-3049-layer-1"
		                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
		                            data-y="['middle','middle','middle','middle']" data-voffset="['-28','-16','6','6']"
		                            data-fontsize="['90','60','40','26']"
		                            data-lineheight="['90','60','50','32']"
		                            data-fontweight="['400','400','400','400']"
		                            data-width="100%"
		                            data-height="auto"
		                            data-type="text"
		                            data-whitespace="normal"
		                            data-responsive_offset="on"
		                            data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":1000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
		                            data-textAlign="['center','center','center','center']"
		                            data-paddingright="[0,0,0,0]"
		                            data-paddingbottom="[0,0,0,0]"
		                            data-paddingleft="[0,0,0,0]"
		                            style="z-index: 16; white-space: nowrap;font-weight: 400;">{{$item->title}}
		                        </div>
								<div class="tp-caption sub_title"
		                            id="slide-3049-layer-1"
		                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
		                            data-y="['middle','middle','middle','middle']" data-voffset="['55','55','60','60']"
		                            data-fontsize="['23','23','23','23']"
		                            data-lineheight="['27','27','27','27']"
		                            data-fontweight="['300','300','300','300']"
		                            data-width="100%"
		                            data-height="auto"
		                            data-type="text"
		                            data-whitespace="normal"
		                            data-responsive_offset="on"
		                            data-frames='[{"delay":1100,"speed":3000,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
		                            data-textAlign="['center','center','center','center']"
									data-paddingtop="[15,0,0,0]"
		                            data-paddingright="[0,0,0,0]"
		                            data-paddingbottom="[10,0,0,0]"
		                            data-paddingleft="[0,0,0,0]"
		                            style="z-index: 16; white-space: nowrap;font-weight:300;">{{$item->description}}
		                        </div>
		                    </li>
                            @endforeach
		                </ul>
		            </div>
		    	</div><!-- END REVOLUTION SLIDER -->

			<!-- Start sdl Booking -->

			<!-- End sdl Booking -->

			</section>
			<!-- End TP Banner -->
			<section >
				<section class="template-title has-over top160">
					<div class="container">
						<h3 class="title">À Propos</h3>
						<span class="title_over">À Propos</span>
						<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
					</div>
				</section>
			</section>
			<!-- Start Template Title -->
        <!-- hadi Section jam3a 2 sections dial services-->
        <section style="background-color: #f3f3f3;">
			<section class="template-title has-over top60" style="padding-top: 50px">
				<div class="container">
					<h3 class="title" style="z-index: 2;position: relative">Nos Services</h3>
					<span class="title_over" style="color: #eaeaea;opacity: 0.8;z-index:1">Nos Services</span>
					<p class="subtitle">Détendez-vous et profitez d'une balade confortable avec nous.</p>
				</div>
			</section>
			<!-- End Template Title -->
			<!-- Start Our Services -->
            <section class="icon-box">
				<div class="container">
					<ul class="tab_services">
                        @foreach ($services as $item)
                            @if ($item->id==1)
                            <li class="active"><a href="#sv-{{$item->id}}">
                            @else
                            <li><a href="#sv-{{$item->id}}">
                            @endif
                                <img src="{{URL::asset($item->icon)}}" alt="{{$item->alt}}">
                                {{$item->title}}
                            </a></li>
                        @endforeach
					</ul>
                    @foreach ($services as $item)
                    <div id="sv-{{$item->id}}" class="content-box">
						<div class="position-content">
							<p class="left-content">{{$item->title}}</p>
							<p class="center-content">{{$item->description1}}</p>
							<p class="right-content">{{$item->description2}}</p>
						</div>
						<div class="view_service">
							<a href="{{route('services')}}">Plus de services<img src="images/icon/arrow-next.png" alt=""></a>
						</div>
					</div>
                    @endforeach
				</div>
				<hr>
			</section>
        </section>
			<!-- End Our Services -->
			<!-- Start Template Title -->
			<section class="template-title has-over">
				<div class="container">
					<h3 class="title">La Flotte Premium</h3>
					<span class="title_over">La Flotte Premium</span>
					<p class="subtitle">Des véhicules modernes et confortables pour votre plus grand confort</p>
				</div>
			</section>
			<!-- End Template Title -->
			<!-- Start Block Fleet -->
			<section class="block-fleet slick-center">
				<div class="container-fuild">
					<ul class="tab_menu" hidden>
						<li class="current"><a href="#tab-1">tessst</a></li>
					</ul>
					<div id="tab-1" class="fleet-carousel center">
                        @foreach ($flottes as $item)
                            <div class="fleet-item">
                                <div class="images">
                                    <img src="{{URL::asset($item->image)}}" alt="{{$item->alt}}">
                                </div>
                                <div class="fleet-content ffh">
                                    <h4 class="fleet-title">
                                        <a href="{{route('flottes')}}">{{$item->name}}</a>
                                    </h4>
                                    <ul>
                                        <li class="author">
                                            <a><img src="images/icon/author.png" alt="">{{$item->persons}}</a>
                                        </li>
                                        <li class="mail">
                                            <a><img src="images/icon/mail.png" alt="">{{$item->bags}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
					</div>
				</div>
			</section>
			<!-- End Block Fleet -->
			<!-- Start Info Box -->
			<section class="info-box parallax parallax_one">
				<div class="container">
					<div class="wrapper-content">
						<h3 class="title">
							Partout où vous voulez aller
						</h3>
						<p class="content">Nous vous emmenons partout où vous voulez aller.</p>
						<p class="contact">Appelez maintenant (1)-212-333-4343</p>
						<a href="{{route('reservations')}}" class="booking">Réservation en ligne<img src="images/icon/arrow-white.png" alt=""></a>
					</div>
				</div>
			</section>
			<!-- End Info Box -->
			<!-- Start About Box -->
			<section class="template-title has-over fus" style="margin-top: 50px;">
				<div class="container">
					<h3 class="title">Pourquoi nous choisir</h3>
					<span class="title_over">Pourquoi nous choisir</span>
					<p class="subtitle">Vous recherchez un service qui vous conduira rapidement et en toute sécurité à la destination souhaitée ?</p>
				</div>
			</section>
			<!-- End Template Title -->
			<!-- Start Section Iconbox -->
			<section class="section-iconbox fhb">
				<div class="container">
					<div class="row">
                        @foreach ($avantages as $item)
						<div class="col-md-3 col-sm-6 col-xs-12 size-table">
							<div class="iconbox center">
								<div class="iconbox-icon">
									<img src="{{URL::asset($item->icon)}}" alt="">
								</div>
								<div class="iconbox-content">
									<h3>
										<a href="#" title="">{{$item->title}}</a>
									</h3>
									<p>{{$item->description}}</p>
								</div>
							</div>
						</div>
                        @endforeach
					</div>
				</div>
			</section>
			<!-- End About Box -->
			<!-- Start Template Title -->
			<section class="about-box" style="margin-bottom: 0px;">
				<div class="container">
					<div class="template-title has-over mtt">
						<h3 class="title">Comment ça fonctionne</h3>
						<span class="title_over">Comment ça fonctionne</span>
						<p class="subtitle">Notre processus de réservation est simple et efficace</p>
					</div>
					<div class="row">
						<div class="col-md-7 full-sm">
							<img src="images/about/macbook.png" alt="">
						</div>
						<div class="col-md-5 full-sm">
							<ul>
								<li>
									<h3>1 - Cliquez sur réservation dans le menu</h3>
									<p>Cliquez sur le bouton de réservation dans le menu principal du site</p>
								</li>
								<li>
									<h3>2 - Remplir le formulaire de réservation</h3>
									<p>Entrez vos lieux de prise en charge et de retour ainsi que l'heure et la date que vous souhaitez réserver. Choisissez votre type de véhicule préféré et entrez vos informations personnelles.</p>
								</li>
								<li>
									<h3>3 - Profitez de votre balade</h3>
									<p>Une fois votre réservation confirmée, vous recevrez un appel de notre part le jour de votre voyage vous informant que votre voiture est en route.</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>


			<!-- End Section Iconbox -->
			<!-- Start Template Title -->

			<!-- End blog Slider -->
			<!-- Start Footer -->
			<footer id="footer" class="footer-02">
				<div class="container">
					<div class="widget-footer widget-about">
					<div id="logo" class="logo-pro">
						<a href="{{route('acceuil')}}" title="logo prodrive" style="font-size: 0; line-height: 0; color: transparent; ">
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
							<a href="{{route('acceuil')}}" title="">Acceuil</a>
						</li>
						<li>
							<a href="{{route('services')}}" title="">Services</a>
						</li>
						<li>
							<a href="{{route('flottes')}}" title="">Flottes</a>
						</li>
						<li>
							<a href="{{route('contacts')}}" title="">Contact</a>
						</li>
						<li>
							<a href="{{route('reservations')}}" title="">Réservation</a>
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
		</div><!-- /.boxed -->
		<!-- Javascript -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/template.js"></script>
		<script type="text/javascript" src="js/parallax.js"></script>
		<script type="text/javascript" src="js/waypoints.min.js"></script>
		<script type="text/javascript" src="js/waves.min.js"></script>

		<script type="text/javascript" src="js/slick.min.js"></script>
		<script type="text/javascript" src="js/moment.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.js"></script>
		<script type="text/javascript" src="js/jquery.daterangepicker.js"></script>
		<script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
		<!-- Revolution Slider -->
	    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
	    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
	    <script type="text/javascript" src="revolution/js/slider.js"></script>
		 <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
	    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
	    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
	    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
	</body>

</html>

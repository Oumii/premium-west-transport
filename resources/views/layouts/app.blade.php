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

	<style>

        #googleMap {
            height: 100%;
        }


		input {
		  padding: 10px;
		  width: 100%;
		  font-size: 17px;
		  font-family: Raleway;
		  border: 1px solid #aaaaaa;
		}

		/* Mark input boxes that gets an error on validation: */
		input.invalid {
		  background-color: #ffdddd;
		}

		select.invalid {
		  background-color: #ffdddd;
		}



		/* Hide all steps by default: */
		.tab {
		  display: none;
		}

		button {
		  background-color: #1e1e1e;
		  color: #ffffff;
		  border: none;
		  padding: 10px 20px;
		  font-size: 17px;
		  font-family: Raleway;
		  cursor: pointer;
		}

		button:hover {
		  opacity: 0.8;
		}

		#prevBtn {
		  background-color: #bbbbbb;
		}

		/* Make circles that indicate the steps of the form: */
		.step {
		  opacity: 0.5;
		}

		.step.active {
			opacity: 1;

		}

		/* Mark the steps that are finished and valid: */
		.step.finish {
			opacity: 1;
		}

		#nextBtn:disabled {
			background-color: #e7e7e7;
			color: black;
		}

		#nextBtn:hover:disabled {
			pointer-events: none;
		}

        .dropdown-submenu {
        position: relative;
        }

        .dropdown-submenu>.dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -6px;
        }

        .dropdown-submenu>a:after {
        display: block;
        content: " ";
        float: right;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid;
        border-width: 5px 0 5px 5px;
        border-left-color: #ccc;
        margin-top: 12px;
        margin-right: 10px;
        }
		.dropdown-submenu>a.test:after {
            width: 0;
            height: 0;
            display: inline-block;
            border: 6px solid transparent;
            border-left-color: black;
		}


		</style>

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

        @yield('content')

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
							<p>Copyright <a href="https://premium-west-transport.com" style="color: #bf9c60">MYPREMIUM VTC</a> © 2021. Tous Droits Réservés</p>
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

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAc7zsgsxb3InhgQCG28Zf8nluBh3jY4T0&libraries=places"></script>
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}





        <script>
            $(document).ready(function(){
            $('.dropdown-submenu a.test').on("click", function(e){
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
            });
        </script>

		<script>
			//WHEN YOU CLICK THE ELEMENT INSIDE THE BODY (THIS WILL HELP YOU IF YOU NEED TO CREATE MORE LI.INLINER ELEMENTS WITH JS, AJAX, OR WHATEVER...
			$('li.inliner').on('click',function(){
			//GET THE TEXT INSIDE THAT SPECIFIC LI
			var content= $(this).text();
            var txt = "Forfaits > ";
            var sel = document.getElementById("prestation").innerHTML = txt.concat(content);

			//PLACE THE TEXT INSIDE THE INPUT FIELD, YOU CAN CHANGE YOUR SELECTOR TO TARGET THE RIGHT INPUT
            // $('#prestation').val(content);
			//HERE YOU CAN DO SOMETHING ELSE LIKE SIBMITING THE FORM, OR CLICK A BUTTON.. OR SOMETHING ELSE
            if (content != "Transferts") {
                $('#prestation').val(sel);
            } else {
                $('#prestation').val(content);
            }

			 });
		</script>

        <script>
            $(function(){
                var d = new Date(),
                    h = d.getHours(),
                    m = d.getMinutes();
                if(h < 10) h = '0' + h;
                if(m < 10) m = '0' + m;
                $('input[type="time"][value="now"]').each(function(){
                    $(this).attr({'value': h + ':' + m});
                });
                });
        </script>

        <script>
            //If the number of baggages or passagers greater than 3
            function passbags(){
                var passengers = document.getElementById("number-pass").value;
                var bags = document.getElementById("number-bags").value;

                if( passengers > 3 || bags > 3){
                    document.getElementById("confwarning").innerHTML = "Maximum de passagers ou de baggages atteint.";
                    document.getElementById("confwarning").style.color = "#ff0000";
                    document.getElementById("confwarning").style.fontSize = "medium";
                    document.getElementById("confort").disabled = true;
                    document.getElementById("gam1").disabled = true;
                    document.getElementById("confTitle").style.color = "gray";
                    document.getElementById("confres").style.color = "gray";
                    document.getElementById("van").checked = true;
                    document.getElementById("gam2").checked = true;
                } else {
                    document.getElementById("confwarning").innerHTML = "";
                    document.getElementById("confort").disabled = false;
                    document.getElementById("gam1").disabled = false;
                    document.getElementById("confTitle").style.color = "#1e1e1e";
                    document.getElementById("confres").style.color = "#1e1e1e";
                    document.getElementById("confort").checked = true;
                    document.getElementById("gam1").checked = true;
                }
            }


			var currentTab = 0; // Current tab is set to be the first tab (0)
			showTab(currentTab); // Display the current tab
			document.getElementById("nextBtn").style.display = "none";

			function showBtn() {
				// This function deals with validation of the form fields
				var x, y, i, valid = true;
				x = document.getElementsByClassName("tab");
				y = x[currentTab].getElementsByTagName("input");
				// A loop that checks every input field in the current tab:
				for (i = 0; i < y.length; i++) {
					// If a field is empty...
					if (y[i].value == "") {
					// add an "invalid" class to the field:
					y[i].className += " invalid";
					// and set the current valid status to false
					valid = false;
					}
				}
			}

			function showTab(n) {
			  // This function will display the specified tab of the form...
			  var x = document.getElementsByClassName("tab");
			  x[n].style.display = "block";
			  //... and fix the Previous/Next buttons:
			  if (n == 0) {
				document.getElementById("prevBtn").style.display = "none";
				document.getElementById("reserve").style.display = "none";
				document.getElementById("estimate").style.display = "inline";
			  } else {
				document.getElementById("prevBtn").style.display = "inline";
				document.getElementById("reserve").style.display = "none";
				document.getElementById("estimate").style.display = "none";
			  }

              if(n == (x.length - 1)){
                document.getElementById("reserve").style.display = "inline";
				document.getElementById("nextBtn").style.display = "none";
              } else if (n == (x.length - 2)) {
                document.getElementById("nextBtn").style.display = "inline";
				document.getElementById("nextBtn").innerHTML = "Réservez";

			  }
              else if(n == (x.length - 3)){
                document.getElementById("nextBtn").style.display = "none";
			  } else {
				document.getElementById("nextBtn").style.display = "none";
				document.getElementById("prevBtn").style.display = "none";
				document.getElementById("estimate").style.display = "none";
				document.getElementById("reserve").style.display = "none";
			  }
			  //... and run a function that will display the correct step indicator:
			  fixStepIndicator(n)
			}

			function nextPrev(n) {
			  // This function will figure out which tab to display
			  var x = document.getElementsByClassName("tab");
			  // Exit the function if any field in the current tab is invalid:
			  if (n == 1 && !validateForm()) return false;
			  // Hide the current tab:
			  x[currentTab].style.display = "none";
			  // Increase or decrease the current tab by 1:
			  currentTab = currentTab + n;
			  // if you have reached the end of the form...
			  if (currentTab >= x.length) {
				// ... the form gets submitted:
				document.getElementById("regForm").submit();
				return false;
			  }
			  // Otherwise, display the correct tab:
			  showTab(currentTab);
			}

			function validateForm() {
			  // This function deals with validation of the form fields
			  var x, y, i, valid = true;
			  x = document.getElementsByClassName("tab");
			  y = x[currentTab].querySelectorAll("input, select");
			  // A loop that checks every input field in the current tab:
			  for (i = 0; i < y.length; i++) {
				// If a field is empty...
				if (y[i].value == "") {
				  // add an "invalid" class to the field:
				  y[i].className += " invalid";
				  // and set the current valid status to false
				  valid = false;
				}
			  }

              //Address condition
              if(document.getElementById("from").value == document.getElementById("to").value) {
                alert('Votre adresse de départ ne peut pas être l adresse d arrivée');
                  valid = false;
              }

              //Time And Date Conditions
              //Date
                var today = new Date();

                var month = (today.getMonth() + 1);
                if (month < 10) {
                        month = "0" + month;
                    }

                var day = today.getDate();
                if (day < 10) {
                        day = "0" + day;
                    }

                var year = today.getFullYear();

                var date = year + '-' + month + '-' + day;

                var mydate = document.getElementById("datePicker").value;

              //Time
                var now = new Date();
                now.setHours(now.getHours() + 1);

                var hour = now.getHours();
                if (hour < 10) {
                    hour = "0" + hour;
                }

                var minute = now.getMinutes();
                if (minute < 10) {
                    minute = "0" + minute;
                }

                var time = hour + ":" + minute;

                var mytime = document.getElementById("tim").value;

                //Condition
                if(mydate < date ) {
					alert('Entrez la date d''aujourd''hui');
                    valid = false;
                } else if (mydate === date) {
                    if (mytime <= time) {
                        alert('Réservation 1 heure minimum à l''avance.');
                        valid = false;
                    }
                }

			  // If the valid status is true, mark the step as finished and valid:
			  if (valid) {
				document.getElementsByClassName("step")[currentTab].className += " finish";
			  }
			  return valid; // return the valid status
			}

			function fixStepIndicator(n) {
			  // This function removes the "active" class of all steps...
			  var i, x = document.getElementsByClassName("step");
			  for (i = 0; i < x.length; i++) {
				x[i].className = x[i].className.replace(" active", "");
			  }
			  //... and adds the "active" class on the current step:
			  x[n].className += " active";
			}
		</script>

            {{-- ========================================================== --}}



        <script>
            //javascript.js
            //set map options
            var myLatLng =  { lat: 46.7111, lng: 1.7191 };
            var mapOptions = {
                center: myLatLng,
                zoom: 7,
                mapTypeId: google.maps.MapTypeId.ROADMAP

            };

            //create map
            var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

            //create a DirectionsService object to use the route method and get a result for our request
            var directionsService = new google.maps.DirectionsService();

            //create a DirectionsRenderer object which we will use to display the route
            var directionsDisplay = new google.maps.DirectionsRenderer();

            //bind the DirectionsRenderer to the map
            directionsDisplay.setMap(map);

            //define calcRoute function
            function calcRoute() {
                //create request
                var request = {
                    origin: document.getElementById("from").value,
                    destination: document.getElementById("to").value,
                    travelMode: google.maps.TravelMode.DRIVING, //WALKING, BYCYCLING, TRANSIT
                    unitSystem: google.maps.UnitSystem.IMPERIAL
                }

                //pass the request to the route method
                directionsService.route(request, function (result, status) {
                    if (status == google.maps.DirectionsStatus.OK) {
                        var dist;
                        if (document.getElementById("prestation").value == 'Transferts') {
                                dist = (result.routes[0].legs[0].distance.value / 1000).toFixed(2);

                                if (dist < 10) {
                                    //Price of Confort
                                    document.getElementById("confres").innerHTML = 31 + " €";
                                    document.getElementById("confort").value = 31;
                                    //Price of Van
                                    document.getElementById("vanres").innerHTML =  31 + " €";
                                    document.getElementById("van").value = 31;
                                } else {
                                    //Price of Confort
                                    document.getElementById("confres").innerHTML = ((2 * dist) + 6).toFixed(2) + " €";
                                    document.getElementById("confort").value = ((2 * dist) + 6).toFixed(2);
                                    //Price of Van
                                    document.getElementById("vanres").innerHTML =  ((3 * dist) + 6).toFixed(2) + " €";
                                    document.getElementById("van").value = ((3 * dist) + 6).toFixed(2);
                                }
                        } else {
                        }

                        //Get distance and time
                        //const output = document.querySelector('#output');
                        output.innerHTML = "<div class='alert-info'>From: " + document.getElementById("from").value + ".<br />To: " + document.getElementById("to").value + ".<br /> Driving distance <i class='fas fa-road'></i> : " + (result.routes[0].legs[0].distance.value / 1000).toFixed(2) + " Km.<br />Duration <i class='fas fa-hourglass-start'></i> : " + result.routes[0].legs[0].duration.text + ".</div>";

                        //display route
                        directionsDisplay.setDirections(result);
                    } else {
                        //delete route from map
                        directionsDisplay.setDirections({ routes: [] });
                        //center map in London
                        map.setCenter(myLatLng);

                        //show error message
                        // output.innerHTML = "<div class='alert-danger'><i class='fas fa-exclamation-triangle'></i> Could not retrieve driving distance.</div>";
                    }
                });

            }
            //define functions for gamme
            function checkgam1(){
                document.getElementById("gam1").checked = true;
                document.getElementById("gam2").checked = false;
            }

            function checkgam2(){
                document.getElementById("gam1").checked = false;
                document.getElementById("gam2").checked = true;
            }

            //define showforf
            function showforf() {
                var forfaits = {!! json_encode($forf->toArray()) !!};

                for (let i = 0; i < forfaits.length; i++) {
                    if (document.getElementById("prestation").value == "Forfaits > "+forfaits[i].direction) {
                        document.getElementById("confres").innerHTML = forfaits[i].prixconfort+" €";
                        document.getElementById("confort").value = forfaits[i].prixconfort;
                        document.getElementById("vanres").innerHTML = forfaits[i].prixvan+" €";
                        document.getElementById("van").value = forfaits[i].prixvan;
                    }
                }
            }

            //create autocomplete objects for all inputs
            var options = {
                types: ["address"]["establishment"],
				componentRestrictions: {'country' : ['FR']},
				fields: ["place_id", "geometry", "name"]
            }

            var input1 = document.getElementById("from");
            var autocomplete1 = new google.maps.places.Autocomplete(input1, options);

            var input2 = document.getElementById("to");
            var autocomplete2 = new google.maps.places.Autocomplete(input2, options);
        </script>



	<!-- End Javascript -->
</body>

<!-- Mirrored from creativelayers.net/themes/prodrive-html/booking-options.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jul 2021 20:13:39 GMT -->
</html>

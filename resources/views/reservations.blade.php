@extends('layouts.app')

@section('content')
		<!-- Start Booking Steps Area -->
        <section class="booking-steps-area mht">
			<div class="container center">
				<div class="row">
					<div class="col-md-12">
						<ul class="booking-steps">
						    <li class="step">
						    	<span>1</span>
						    	<div class="icon" style="padding-top:5px;">
						    		<i class="fas fa-map-marked-alt fa-2x" style=""></i>
						    	</div>
						    	<div class="text">
						    		Estimation
						    	</div>
						    </li>
                            <li class="step">
						    	<span>2</span>
						    	<div class="icon" style="padding-top:5px;">
						    		<i class="fas fa-coins fa-2x"></i>
						    	</div>
						    	<div class="text">
						    		Tarifs
						    	</div>
						    </li>
						    <li class="step">
						    	<span>3</span>
						    	<div class="icon" style="padding-top:5px;">
						    		<i class="far fa-calendar-alt fa-2x"></i>
						    	</div>
						    	<div class="text">
						    		Réservation
						    	</div>
						    </li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- End Booking Steps Area -->
		<!-- Start Options Area -->
		<section class="options-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-8">
						<div class="form-options">
							<!-- Start Of Form -->
							<form action="{{route('reservation.store')}}" method="POST" accept-charset="utf-8" id="regForm" name="regist" enctype="multipart/form-data">
                                @csrf
								<div class="tab">
									<div class="infomation"  id="clsinpt" >
										<label>Prestation</label><br>
										<div class="dropdown">
                                            <input type="text" class="dropdown-toggle" id="prestation" name="prestation" data-toggle="dropdown" placeholder="Prestation" >
                                            <ul class="dropdown-menu" style="width: 100%; padding-left:20px;">
                                                <li class="inliner"><a style="padding-bottom:10px; padding-top:10px;" tabindex="-1">Transferts</a></li>
                                                <li class="dropdown-submenu">
                                                    <a style="padding-bottom:10px; padding-top:10px;" value="Forfaits" class="test" tabindex="-1">Forfaits<span class="caret"></span></a>
                                                    <ul class="dropdown-menu" id="scrollbar" style="width: 100%; padding-left:20px;">
                                                        @foreach ($forfaits as $item)
                                                            <li class="inliner"><a tabindex="-1">{{$item->direction}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
									</div>
									<div class="one-half first-name">
										<label for="firstname">Adresse de départ</label>
										<input type="text" name="addressdepart" id="from" placeholder="Adresse de départ">
									</div>
									<div class="one-half first-name">
										<label for="firstname">Adresse de destination</label>
										<input type="text" name="addressdestin" id="to" placeholder="Adresse de destination">
									</div>
									<div class="one-half first-name">
										<label for="firstname">Date de prise en charge</label>
										<input type="date" name="date" id="datePicker"  placeholder="Ali">
                                        <script>
                                            //Set Date and Time default value for today
                                            document.getElementById('datePicker').value = new Date().toISOString().substring(0, 10);
                                        </script>
									</div>
									<div class="one-half first-name">
										<label for="firstname">Heure de prise en charge</label>
										<input type="time" name="heure" id="tim" value="now">
									</div>
                                    <div class="one-half number-pass">
                                        <label for="number-pass">Nombre de passagers</label>
                                        <div class="select">
                                            <select name="passagers" id="number-pass">
												<option value="" selected disabled>Nombre de passagers</option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
												<option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
												<option value="09">09</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="one-half number-bags">
                                        <label for="number-bags">Nombre de bagagess</label>
                                        <div class="select">
                                            <select name="bagages" id="number-bags">
												<option value="" selected disabled>Nombre de bagagess</option>
												<option value="00">00</option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
												<option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
												<option value="09">09</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>
								</div>
                                <div class="tab">
                                    <div class="container">
                                        <div class="row">
                                            <div class="one-half" id="radioat" style="margin-top: 0px">
                                                <p style="padding-bottom: 20px;" id="confwarning"></p>
                                                <div class="form-check" id="forf">
                                                    <input class="form-check-input" type="radio" id="confort" value="" name="prix" style="height: 20px; margin: 5px 0px 0px 20px;" onclick="checkgam1();" checked="checked">
                                                    <h2 class="form-check-label" id="confTitle">Confort</h2>
                                                    <h4 class="form-check-label" style="margin-top: 20px;" id="confres"></h4>
                                                    <input type="radio" name="gamme" id="gam1" value="Confort" style="height: 20px; margin: 5px 0px 0px 20px;" checked="checked" hidden>
                                                </div>
                                                <hr>
                                                <div class="form-check" id="forf">
                                                    <input class="form-check-input" type="radio" id="van" value="" name="prix" style="height: 20px; margin: 5px 0px 0px 20px;" onclick="checkgam2();">
                                                    <h2 class="form-check-label">Van</h2>
                                                    <h4 class="form-check-label" style="margin-top: 20px;" id="vanres"></h4>
                                                    <input type="radio" name="gamme" value="Van" id="gam2" style="height: 20px; margin: 5px 0px 0px 20px;" hidden>
                                                </div>
                                            </div>
                                            <div class="one-half center" id="mapMobile">
                                                <div id="googleMap"></div>
                                            </div>
                                            {{-- Get distance and time details --}}
                                            <div id="output" style="display: hidden;"></div>
                                        </div>
                                    </div>
                                </div>
								<div class="tab">
                                    <div class="one-half first-name">
										<label for="firstname">Nom de facturation</label>
										<input type="text" placeholder="Nom de facturation"  name="nomfacture">
									</div>
									<div class="one-half first-name">
										<label for="firstname">Civilité</label>
										<select name="sex" required>
                                            <option value="" selected disabled>Civilité</option>
                                            <option value="M.">M.</option>
                                            <option value="Mme">Mme</option>
                                            <option value="Mlle">Mlle</option>
                                        </select>
									</div>
                                    <div class="one-half first-name">
										<label for="firstname">Prénom</label>
										<input type="text" name="prenom" id="firstname" placeholder="Ali">
									</div>
									<div class="one-half first-name">
										<label for="firstname">Nom</label>
										<input type="text" name="nom" id="firstname" placeholder="Ali">
									</div>
                                    <div class="one-half phone">
                                        <label for="phone">Téléphone portable</label>
                                        <input type="tel" name="phone" id="phone" placeholder="+90 538 658 96 315">
                                    </div>
                                    <div class="one-half first-name">
										<label for="firstname">Email</label>
										<input type="email" name="email" id="firstname" placeholder="exemple@gmail.com">
									</div>
                                    <div class="infomation">
                                        <label for="infomation">Commentaires</label>
                                        <textarea name="comment" id="infomation" placeholder="Entrez vos commentaires ici ..."></textarea>
                                    </div>
								</div>
									<div class="btn-submit">
										<button type="button" id="estimate" onclick="showBtn(); nextPrev(1); calcRoute(); showforf(); passbags();">Estimez</button>
										<button type="button" id="prevBtn" onclick="nextPrev(-1)">Précédent</button>
										<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
										<button type="button" id="reserve" onclick="nextPrev(1)">Confirmer votre réservation</button>
									</div>
							</form>
						</div>
					</div>
					<div class="col-lg-2"></div>
				</div>
			</div>
		</section>
		<!-- End Options Area -->

        @endsection

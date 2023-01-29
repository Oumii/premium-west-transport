@extends('layouts.app')

@section('content')

		<!-- Start Contact Area -->
		<section class="contact-area ver-1">
			<div class="container">
				<div class="template-title center has-over">
					<h1>Amusez Votre Café Avec Nous</h1>
					<span>Amusez Votre Café Avec Nous</span>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="contact-item center">
							<div class="icon">
								<img src="images/icon/address-1.png" alt="">
							</div>
							<div class="content-text">
								<h4>Addresse</h4>
								<p>29 Rue du Patis Rondin, 44300 Nantes, France </p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="contact-item center">
							<div class="icon">
								<img src="images/icon/email-1.png" alt="">
							</div>
							<div class="content-text">
								<h4>E-mail</h4>
								<p>mypremiumvtc@gmail.com</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="contact-item center">
							<div class="icon">
								<img src="images/icon/phone-1.png" alt="">
							</div>
							<div class="content-text">
								<h4>Téléphone</h4>
								<p>+33 6 83 91 06 25</p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="hours center">
							<h5>Heures de Travail</h5>
						    <ul>
						    	<li>Lundi - Vendredi : 08h00 - 17h30</li>
						    	<li>Samedi: 08h00 - 12h00, Dimanche de congé</li>
						    </ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-8">
						<div class="contact-form ver-1">
							<h4 class="center">Veuillez remplir le formulaire ci-dessous.</h4>

							<form action="{{route('contact.store')}}" method="POST" enctype="multipart/form-data" accept-charset="utf-8" >
                                @csrf
								<div class="form form-name one-half">
									<label for="name">Prénom</label>
									<input class="" type="text" id="name" name="name" placeholder="Ali">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
								</div>
								<div class="form form-email one-half">
									<label for="email">E-mail</label>
									<input class="" type="text" id="email" name="email" placeholder="exemple@gmail.com">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
								</div>
								<div class="form form-comment">
									<label for="comment">Message</label>
									<textarea class="" name="message" id="comment" placeholder="Votre Message"></textarea>
									@if ($errors->has('message'))
                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                    @endif
								</div>
                                @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                                @endif
								<div class="btn-submit-form form-group">
									<button type="submit">Envoyer <img src="images/icon/right-3.png" alt=""></button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-2"></div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->
@endsection

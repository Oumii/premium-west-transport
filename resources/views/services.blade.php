@extends('layouts.app')

@section('content')
		<!-- Start Top Title -->
		<section class="top-title">
			<div class="top-page">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="top-page-heading">
								<h1>Nos Services</h1>
								<p class="sub-title">Latest news from Prodirve</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="breadcrumbs">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul>
								<li>
									<a href="#">Acceuil</a>
								</li>
								<li>
									/Services
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Top Title -->
		<!-- Start Main Post -->
		<section id="main-post" class="ver-1">
			<div class="container">
				<div class="row">
					<div class="block-post">
						<div class="post-grid grid">
                            @foreach ($services as $item)
                                <article class="post ipsotope transport limousine">
                                    <div class="featured-image">
                                        <img src="{{URL::asset($item->image)}}" alt="{{$item->alt}}">
                                        <h1 style="position: absolute;  color: white; top: 90%; left: 50%; transform: translate(-50%, -50%); font-weight: bold; font-size: 20px;">{{$item->title}}</h1>
                                    </div>
                                    <div class="entry-content">
                                        <div class="entry-post-title">
                                            <h4 class="post-title">{{$item->title}}</h4>
                                        </div>
                                        <p>{{$item->description1}}<br>{{$item->description2}}</p>
                                        <div class="btn-readmore">
                                            <a href="{{route("reservations")}}" title="">Réservez <img src="images/icon/right-2.png" alt=""></a>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Main Post -->
	@endsection

@extends('../template/mainLayout')
@section('style')
<link href="/css/styles.css" rel="stylesheet" />
<link href="/css/galery.css" rel="stylesheet" />
@endsection
@section('nav')
<li class="nav-item"><a class="nav-link" href="#pricing">Ticket</a></li>
<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
@endsection
@section('content')
		<!-- start profile -->
		<section class="jumbotron text-center">
			<img src="./assets/img/pic1(1).jpg" alt="silhuette" width="10%" class="rounded-circle" />
			<h4 class="display-8 pt-4">{{$guide->name}}</h4>
			<p class="lead">{{$guide->status}}</p>
			<p>
				<i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i
				><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i
				><i class="bi bi-star-half text-warning"></i>
			</p>
		</section>
		<!-- end profile -->

		<!-- testimony -->
		<section class="text-center">
			<div class="row justify-content-center pt-3 pb-5">
				<div class="col-5 align-self-center">
					<p>
						<i style="font-size: 18px" class="fa">&#xf10d;</i>
						His way of explaining every detail of the place is very much appreciated. Her demeanor
						is sweet and also calming, not like patronizing, but still authoritative and friendly at
						the same time. <br />
						- Margaretha Elinton (Bali, Nov 2022) <i style="font-size: 18px" class="fa">&#xf10e;</i>
					</p>
				</div>
			</div>
		</section>

		<!-- end testimony -->
		<!-- crausel -->

		<!-- end crausel -->
		<!-- price -->
		<section id="pricing">
			<div class="container">
				<div class="row pt-8 pb-5">
					@foreach ($guide->ticket as $t)
					<div class="col-lg-4">
						<div class="card card-margin">
							<div class="card-header no-border">
								<h5 class="card-title">TICKET</h5>
							</div>
							<div class="card-body pt-0">
								<div class="widget-49">
									<div class="widget-49-title-wrapper">
										<div class="widget-49-date-primary">
											<span class="widget-49-date-day"></span>
											<span class="widget-49-date-month">BEST</span>
										</div>
										<div class="widget-49-meeting-info">
											<span class="widget-49-pro-title">{{$t->name}}</span>
											<span class="widget-49-meeting-time">{{$t->price}}</span>
										</div>
									</div>
									<ol class="widget-49-meeting-points">
										<p class="pt-2 fw-bold">Included :</p>
										<!-- <li class="widget-49-meeting-item"> -->
											<span>{{$t->included}}</span>
										<!-- </li> -->
									
									</ol>
									<div class="widget-49-meeting-action">
										<a href="login.html" class="btn btn-sm btn-flash-border-primary btn-secondary"
											>BOOKING NOW</a
										>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					<!-- <div class="col-lg-4">
						<div class="card card-margin">
							<div class="card-header no-border">
								<h5 class="card-title">TICKET</h5>
							</div>
							<div class="card-body pt-0">
								<div class="widget-49">
									<div class="widget-49-title-wrapper">
										<div class="widget-49-date-success">
											<span class="widget-49-date-day">3</span>
											<span class="widget-49-date-month">Days</span>
										</div>
										<div class="widget-49-meeting-info">
											<span class="widget-49-pro-title">LIMITED EDITION!</span>
											<span class="widget-49-meeting-time">4 April - 19 April 2022</span>
										</div>
									</div>
									<ol class="widget-49-meeting-points">
										<p class="pt-2 fw-bold">Included :</p>
										<li class="widget-49-meeting-item">
											<span>Max six destination, different place</span>
										</li>
										<li class="widget-49-meeting-item"><span>Booking hotel service</span></li>
										<li class="widget-49-meeting-item">
											<span>car (3 capacity) and driver</span>
										</li>
									</ol>
									<div class="widget-49-meeting-action">
										<a href="#" class="btn btn-sm btn-flash-border-primary btn-secondary"
											>BOOKING NOW</a
										>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card card-margin">
							<div class="card-header no-border">
								<h5 class="card-title">TICKET</h5>
							</div>
							<div class="card-body pt-0">
								<div class="widget-49">
									<div class="widget-49-title-wrapper">
										<div class="widget-49-date-danger">
											<span class="widget-49-date-day">5</span>
											<span class="widget-49-date-month">DAYS</span>
										</div>
										<div class="widget-49-meeting-info">
											<span class="widget-49-pro-title">NEW MEMBER ONLY</span>
											<span class="widget-49-meeting-time">1 January - 1 December 2022</span>
										</div>
									</div>
									<ol class="widget-49-meeting-points">
										<p class="pt-2 fw-bold">Included :</p>
										<li class="widget-49-meeting-item">
											<span>Max six destination, different place</span>
										</li>
										<li class="widget-49-meeting-item">
											<span>Booking hotel service and restaurant</span>
										</li>
										<li class="widget-49-meeting-item">
											<span>car (5 capacity) and driver</span>
										</li>
									</ol>
									<div class="widget-49-meeting-action">
										<a href="#" class="btn btn-sm btn-flash-border-primary btn-secondary"
											>BOOKING NOW</a
										>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card card-margin">
							<div class="card-header no-border">
								<h5 class="card-title">TICKET</h5>
							</div>
							<div class="card-body pt-0">
								<div class="widget-49">
									<div class="widget-49-title-wrapper">
										<div class="widget-49-date-primary">
											<span class="widget-49-date-day"></span>
											<span class="widget-49-date-month">BOOM!</span>
										</div>
										<div class="widget-49-meeting-info">
											<span class="widget-49-pro-title">SPECIAL NEW YEAR!</span>
											<span class="widget-49-meeting-time">25 December 2022 - 5 January 2023</span>
										</div>
									</div>
									<ol class="widget-49-meeting-points">
										<p class="pt-2 fw-bold">Included :</p>
										<li class="widget-49-meeting-item">
											<span>Max 4 destination, different place</span>
										</li>
										<li class="widget-49-meeting-item">
											<span>Free ticket Balinese Concert</span>
										</li>
										<li class="widget-49-meeting-item">
											<span>car (5 capacity) and driver</span>
										</li>
									</ol>
									<div class="widget-49-meeting-action">
										<a href="#" class="btn btn-sm btn-flash-border-primary btn-secondary"
											>BOOKING NOW</a
										>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card card-margin">
							<div class="card-header no-border">
								<h5 class="card-title">TICKET</h5>
							</div>
							<div class="card-body pt-0">
								<div class="widget-49">
									<div class="widget-49-title-wrapper">
										<div class="widget-49-date-warning">
											<span class="widget-49-date-day"></span>
											<span class="widget-49-date-month">NOW</span>
										</div>
										<div class="widget-49-meeting-info">
											<span class="widget-49-pro-title">FOR TOKOPEDIA USER</span>
											<span class="widget-49-meeting-time">unlimited, using google pay</span>
										</div>
									</div>
									<ol class="widget-49-meeting-points">
										<p class="pt-2 fw-bold">Included :</p>
										<li class="widget-49-meeting-item">
											<span>Max 2 Destination each ticket</span>
										</li>
										<li class="widget-49-meeting-item">
											<span>Using point system</span>
										</li>
										<li class="widget-49-meeting-item">
											<span>car (2 capacity) and driver</span>
										</li>
									</ol>
									<div class="widget-49-meeting-action">
										<a href="#" class="btn btn-sm btn-flash-border-warning btn-secondary"
											>BOOKING NOW</a
										>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card card-margin">
							<div class="card-header no-border">
								<h5 class="card-title">TICKET</h5>
							</div>
							<div class="card-body pt-0">
								<div class="widget-49">
									<div class="widget-49-title-wrapper">
										<div class="widget-49-date-success">
											<span class="widget-49-date-day"></span>
											<span class="widget-49-date-month">VIP</span>
										</div>
										<div class="widget-49-meeting-info">
											<span class="widget-49-pro-title">VIP MEMBER ONLY</span>
										</div>
									</div>
									<ol class="widget-49-meeting-points">
										<p class="pt-2 fw-bold">Included :</p>
										<li class="widget-49-meeting-item">
											<span>Available for 1-3 month long holiday</span>
										</li>
										<li class="widget-49-meeting-item"><span>Can set schedule anytime</span></li>
										<li class="widget-49-meeting-item">
											<span>capacity require : 10 (2 car)</span>
										</li>
									</ol>
									<div class="widget-49-meeting-action">
										<a href="#" class="btn btn-sm btn-flash-border-warning btn-secondary"
											>BOOKING NOW</a
										>
									</div>
								</div>
							</div>
						</div> 
					</div> -->
				</div> 
			</div>
		</section>
		<!-- end price -->
@endsection


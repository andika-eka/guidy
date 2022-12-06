@extends('../template/mainLayout')
@section('style')
<link href="/css/styles.css" rel="stylesheet" />
<link href="/css/galery.css" rel="stylesheet" />
@endsection
@section('nav')
<li class="nav-item"><a class="nav-link" href="#about">About</a></li>
<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
@endsection
@section('content')
<!-- Masthead-->
<header class="masthead" id="home">
	<div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
		<div class="d-flex justify-content-center">
			<div class="text-center">
						<h1 class="mx-auto my-0 text-uppercase">Guidy</h1>
						<h2 class="text-white mx-auto mt-2 mb-5">
							Start your pleasant experiences and memories in a heavenly land, Bali with a fun and
							trusted guide.
						</h2>
						<a class="btn btn-primary" href="#about">Get Started</a>
					</div>
				</div>
			</div>
		</header>
		
		<!-- About-->
		<section class="about-section text-center scrolling-wrapper" id="about">
			<div class="container px-4 px-lg-5">
				<div class="row gx-4 gx-lg-5 justify-content-center">
					<h2 class="text-black mb-3">Easy Way to Holiday</h2>
					<p class="text-black-50">
						With Guidy, you can choose your own schedule and your favorite guide
					</p>
					<!-- <hr style="width: 100px; margin: auto; color: black" /> -->
				</div>
				<div class="row content-center gap-4">
					@foreach($guide as $g)
					<div class="col-sm d-flex justify-content-center">
						<div class="card" style="width: 18rem">
							<div class="gambar">
								<a href="./galery/{{$g->id}}" target="blank">
									<img src="" width="50%" class="card-img-top" alt="..."
								/></a>
							</div>
							<div class="card-body">
								<h5 class="card-title">{{$g->name}}</h5>
								<p class="card-text">
									{{$g->status}}
								</p>
							</div>
						</div>
					</div>
					@endforeach
					<!-- <div class="col-sm d-flex justify-content-center">
						<div class="card" style="width: 18rem">
							<div class="gambar">
								<a href="#">
									<img src="./assets/img/pic2.jpg" width="50%" class="card-img-top" alt="..."
								/></a>
							</div>
							<div class="card-body">
								<h5 class="card-title">Komang Ari</h5>
								<p class="card-text">"I'll accompany you to the place where a miracle happens"</p>
							</div>
						</div>
					</div>
					<div class="col-sm d-flex justify-content-center">
						<div class="card" style="width: 18rem">
							<div class="gambar">
								<a href="#">
									<img src="./assets/img/pic3.jpg" width="50%" class="card-img-top" alt="..."
								/></a>
							</div>
							<div class="card-body">
								<h5 class="card-title">Tu Gede</h5>
								<p class="card-text">
									"Some of human just need to be rest. a small break that they would always
									remember"
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm d-flex justify-content-center">
						<div class="card" style="width: 18rem">
							<div class="gambar">
								<a href="#">
									<img src="./assets/img/pic4.jpg" width="50%" class="card-img-top" alt="..."
								/></a>
							</div>
							<div class="card-body">
								<h5 class="card-title">Grean Arsel</h5>
								<p class="card-text">
									"It is not me and you, but we and nature. Life is just fun when you understand."
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm d-flex justify-content-center">
						<div class="card" style="width: 18rem">
							<div class="gambar">
								<a href="#">
									<img src="./assets/img/pic5.jpg" width="50%" class="card-img-top" alt="..."
								/></a>
							</div>
							<div class="card-body">
								<h5 class="card-title">TWinari</h5>
								<p class="card-text">
									"Join me to see how beautiful Bali culture is. The time that you feel it, is the
									time you call it home."
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm d-flex justify-content-center">
						<div class="card" style="width: 18rem">
							<div class="gambar">
								<a href="#">
									<img src="./assets/img/pic6.jpg" width="50%" class="card-img-top" alt="..."
								/></a>
							</div>
							<div class="card-body">
								<h5 class="card-title">Talita Eduard</h5>
								<p class="card-text">
									"Come to Bali. This sweet medicine will help you calm for a while, before start to
									face the world"
								</p>
							</div>
						</div>
					</div>-->
				</div> 
				<div class="pt-5 pb-5">
					<a class="btn btn-primary" href="#about">Start to searching your own guide!</a>
				</div>
			</div>
		</section>
		<!-- Projects-->
		<section class="projects-section bg-light" id="projects">
			<div class="container px-4 px-lg-5">
				<div class="row gx-4 gx-lg-5 justify-content-center">
					<h2 class="text-Black mb-4">Let Jump to Destination!</h2>
				</div>
				<!-- Featured Project Row-->
				<div class="row gx-0 mb-4 mb-lg-5 align-items-center">
					<div class="col-xl-8 col-lg-7">
						<img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead2.jpg" alt="..." />
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="featured-text text-center text-lg-left">
							<h4>Tirta Empul</h4>
							<p class="text-black-50 mb-0">
								Tirta Empul is dedicated to Vishnu, the Hindu God of water. In the Balinese
								language, Tirta Empul loosely translated means water gushing from the earth, which
								for this reason Tirta Empul is regarded as a holy spring.
							</p>
						</div>
					</div>
				</div>
				<div class="row gx-0 mb-4 mb-lg-5 align-items-center">
					<div class="col-xl-4 col-lg-5 garis text-center">
						<h4>Tanah Lot</h4>
						<p class="text-black-50 mb-0">
							Tanah Lot is derived from the word "Tanah" means land and "Lot (lod / laut)" which
							means the sea, because it is situated on a rock in the sea and resembles a small
							island floating on the sea, so the people call it Tanah Lot. The location is now
							called as Tanah Lot has been used at a Megalithic period as a place that looked into
							holy, proven from the existence of menhir.
						</p>
						<div class="text-lg-right"></div>
					</div>
					<div class="col-xl-8 col-lg-7">
						<img class="img-fluid mb-3 mb-lr-0" src="assets/img/tanahlot.jpg" alt="..." />
					</div>
				</div>
				<div class="row gx-0 mb-4 mb-lg-5 align-items-center">
					<div class="col-xl-8 col-lg-7">
						<img class="img-fluid mb-3 mb-lg-0" src="assets/img/nusapenida.jpg" alt="..." />
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="featured-text text-center text-lg-right">
							<h4>Nusa Penida</h4>
							<p class="text-black-50 mb-0">
								Nusa Penida is one of the main highlights of Bali. Due to locations like Kelingking
								Beach and Angel’s Billabong tourism on Nusa Penida has taken a huge step up.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- lain lagi ini :"D semangat duh semangat kaaaar -->
		<!-- Project One Row-->
		<section class="projects-section" style="background-color: rgb(255, 255, 255)" id="projects">
			<div class="container px-4 px-lg-5">
				<div class="row gx-4 gx-lg-5 justify-content-center">
					<h2 style="color: rgb(8, 64, 71)" class="mb-4 fs-5">Why Choose Guidy?</h2>
				</div>
				<div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
					<div class="col-lg-6">
						<img class="img-fluid" src="assets/img/demo-image-01.jpg" alt="..." />
					</div>
					<div class="col-lg-6">
						<div class="text-center h-100 project" style="background-color: rgb(255, 255, 255)">
							<div class="d-flex h-100">
								<div class="project-text w-100 my-auto text-center text-lg-left">
									<h4 class="text-black">Jump deep on Balinese Culture</h4>
									<p class="mb-0 text-black-50">
										Our guides have a lot of experience and story about behind every single
										ceremony. You will find yourself knowing how magic Bali is.
									</p>
									<hr class="d-none d-lg-block mb-0 ms-0 content-center" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row gx-0 justify-content-center">
					<div class="col-lg-6">
						<img class="img-fluid" src="assets/img/demo-image-02.jpg" alt="..." />
					</div>
					<div class="col-lg-6 order-lg-first">
						<div class="bg-light text-center h-100 project">
							<div class="d-flex h-100">
								<div class="project-text w-100 my-auto text-center text-lg-right">
									<h4 class="text-black">Find a hidden place</h4>
									<p class="mb-0 text-black-50">
										Bali has a lot of scene that you should enjoy. Our guide will accompany you to
										go to a beautifuly hidden place that you will wanting more and more. a place
										that you can feel calm, fresh, joy at the same time.
									</p>
									<hr class="d-none d-lg-block mb-0 me-0" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
					<div class="col-lg-6">
						<img class="img-fluid" src="assets/img/demo-image-03.jpg" alt="..." />
					</div>
					<div class="col-lg-6">
						<div class="text-center h-100 project" style="background-color: white">
							<div class="d-flex h-100">
								<div class="project-text w-100 my-auto text-center text-lg-left">
									<h4 class="text-black">Flexible of Booking Hour</h4>
									<p class="mb-0 text-black-50">
										An easy way when you have impromptu plans and need a quick and precise guide.
										Our guides are spread throughout Bali, which can make it easier for you to stay
										in touch with them.
									</p>
									<hr class="d-none d-lg-block mb-0 ms-0" style="color: rgb(12, 128, 118)" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Project Two Row-->
			</div>
		</section>

@endsection
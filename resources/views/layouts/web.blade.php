<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home | shops</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{ asset('asset/css/animate.css') }}">
	
	<link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('asset/css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}">

	<link rel="stylesheet" href="{{ asset('asset/css/bootstrap-datepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('asset/css/jquery.timepicker.css') }}">

	
	<link rel="stylesheet" href="{{ asset('asset/css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
</head>
<body>

	
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">TIENDAS<span> MONTERIA - CORDOBA</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="/" class="nav-link">Tiendas</a></li>
					@if (!auth::check())

					<li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
					<li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Registrarse</a></li>
					@else
					<li class="nav-item"><a  href="{{url('home') }}"  class="nav-link" style="color:white"><B>Bienvenido: {{ Auth::user()->name}} </B></a></li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}"
                                                                   onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                        <p style="color:red">
                                          <i class="fas fa-sign-out-alt"></i><B>
                                        Salir </B></p>                         
                                        </a>
                                        <li>
                            
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                        </form>

                                    @endif


				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

    <main class="py-4">
            @yield('content')
        </main>
    <!--final -->
	<section class="ftco-section testimony-section" style="background-image: url({{ asset('asset/images/bg_5.jpg') }});">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center mb-3 pb-2">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<span class="subheading">Comprometidos con nuestros clientes
					</span>
					<h2 class="mb-4">Nosotros te llevamos tu mercado a tu casa</h2>
				</div>
			</div>
			<div class="row ftco-animate justify-content-center">
				<div class="col-md-7">
					<div class="carousel-testimony owl-carousel ftco-owl">
						<div class="item">
							<div class="testimony-wrap text-center">
								<div class="text p-3">
									<div class="user-img mb-4" style="background-image: url(https://image.freepik.com/vector-gratis/ilustracion-entrega-segura_119121-11.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="fa fa-quote-left"></i>
										</span>
									</div>
									<p class="name">Entregas seguras</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center">
								<div class="text p-3">
									<div class="user-img mb-4" style="background-image: url(https://suministrosmge.com/wp-content/uploads/2018/05/garantia-de-servicio.png)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="fa fa-quote-left"></i>
										</span>
									</div>
									<p class="name">Garantia de envio</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center">
								<div class="text p-3">
									<div class="user-img mb-4" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTigUiYGQakzSIbrOGlrgASE9aw2dXWRcEyZA&usqp=CAU)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="fa fa-quote-left"></i>
										</span>
									</div>
									<p class="name">Atencion Oportuna</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	




	<footer class="ftco-footer ftco-no-pb ftco-section">
		
		<div class="container-fluid px-0 bg-primary py-3">
			<div class="row no-gutters">
				<div class="col-md-12 text-center">

					<p class="mb-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  <i class="fa fa-heart" aria-hidden="true"></i> by <a href="" target="_blank">Universidad de cordoba</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
			</div>
		</footer>
		

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		<script src="{{ asset('asset/js/jquery.min.js') }}"></script>
		<script src="{{ asset('asset/js/jquery-migrate-3.0.1.min.js') }}"></script>
		<script src="{{ asset('asset/js/popper.min.js') }}"></script>
		<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('asset/js/jquery.easing.1.3.js') }}"></script>
		<script src="{{ asset('asset/js/jquery.waypoints.min.js') }}"></script>
		<script src="{{ asset('asset/js/jquery.stellar.min.js') }}"></script>
		<script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('asset/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('asset/js/jquery.animateNumber.min.js') }}"></script>
		<script src="{{ asset('asset/js/bootstrap-datepicker.js') }}"></script>
		<script src="{{ asset('asset/js/jquery.timepicker.min.js') }}"></script>
		<script src="{{ asset('asset/js/scrollax.min.js') }}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="{{ asset('asset/js/google-map.js') }}"></script>
		<script src="{{ asset('asset/js/main.js') }}"></script>
		
	</body>
	</html>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{url('assets/img/favicon.png')}}" type="image/png">
	<title>BILGISAYAR MÜHENDISLIĞI</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{url('vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{url('vendors/nice-select/css/nice-select.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{url('assets/css/style.css')}}">
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					@if (Auth::user() && Auth::user()->id ==1)
					<div>
						<a class="btn btn-primary  " href="{{route('courses.create')}}">new post</a>
					</div>
					@endif
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item active"><a class="nav-link" href="{{route('courses.index')}}">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="/about">About</a></li>
							<li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>

							<!-- Authentication Links -->
							<li>
								<ul class="navbar-nav ms-auto">
								
								@guest
									@if (Route::has('login'))
										<li class="nav-item">
											<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
										</li>
									@endif
		
									@if (Route::has('register'))
										<li class="nav-item">
											<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
										</li>
									@endif
								@else
									<li class="nav-item dropdown">
										<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
											{{ Auth::user()->name }}
										</a>
		
										<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="{{ route('logout') }}"
											   onclick="event.preventDefault();
															 document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
											</a>
		
											<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
												@csrf
											</form>
										</div>
									</li>
								@endguest
							</ul></li>



						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->



    @yield('content')





    	<!--================Footer Area =================-->
	<footer class="footer_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer_top flex-column">
						<div class="footer_logo">
							<a href="#">
								<img src="img/logo.png" alt="">
							</a>
							<h4>Follow Me</h4>
						</div>
						<div class="footer_social">
							<a href="https://www.facebook.com/mahmodabas.01"><i class="fa fa-facebook"></i></a>
							<a href="https://www.instagram.com/mahmod_abas963"><i class="fa fa-instagram"></i></a>
							<a href="https://github.com/mahmudabbas0"><i class="fa fa-github"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{url('assets/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{url('assets/js/popper.js')}}"></script>
	<script src="{{url('assets/js/popper.js')}}"></script>
	<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{url('assets/js/stellar.js')}}"></script>
	<script src="{{url('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{url('vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{url('vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{url('vendors/isotope/isotope-min.js')}}"></script>
	<script src="{{url('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{url('assets/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{url('assets/js/mail-script.js')}}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{url('assets/js/gmaps.min.js')}}"></script>
	<script src="{{url('assets/js/theme.js')}}"></script>
	@vite(['resources/sass/app.scss', 'resources/js/app.js'])

</body>

</html>
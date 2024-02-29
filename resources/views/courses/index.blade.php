@extends('layouts.layout')

@section('content')
    

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="banner_content">
							<h3 class="text-uppercase">Hell0</h3>
							<h1 class="text-uppercase">bilecik universitesi</h1>
							<h5 class="text-uppercase">bilgisayar mühendisliği</h5>
							<div class="d-flex align-items-center">
								<a class="primary_btn tr-bg" href="https://drive.google.com/file/d/1saA7AFtn1i8WKnaMkV12LZ-0QMDiwyFR/view?usp=sharing"><span>Get CV</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="home_right_img">
							<img class="" src="{{url('assets/img/banner/home-right.png')}}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================Start Portfolio Area =================-->
	<section class="portfolio_area" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title text-left">
						<h2>ALL <br>
							COURSES </h2>
					</div>
				</div>
			</div>
			<div class="filters portfolio-filter">
				<ul>
					<li class="active" data-filter="*">all</li>
					<li data-filter=".1">1</li>
					<li data-filter=".2"> 2</li>
					<li data-filter=".3">3</li>
					<li data-filter=".4">4</li>
				</ul>
			</div>
			<div class="filters-content">
			<div class="row portfolio-grid justify-content-center">
			@foreach ($cours as $item)
			

			@if ($item->corseId == 6)

			<div class="col-lg-4 col-md-6 all 1">
				<div class="portfolio_box">
					<div class="single_portfolio">
						<img class="img-fluid w-100" src="/images/{{$item->image}}" alt="">
						<div class="overlay"></div>
						
							<div class="icon">
								<span class="lnr lnr-cross"></span>
							</div>
						</a>
					</div>
					<div class="short_info">
						<h4><a href="{{route('courses.show',$item->slug)}}">{{$item->name}}</a></h4>
					</div>
				</div>
			</div>

				@elseif($item->corseId == 7)
			

				<div class="col-lg-4 col-md-6 all 2">
					<div class="portfolio_box">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="/images/{{$item->image}}" alt="">
								<div class="icon">
									<span class="lnr lnr-cross"></span>
								</div>
							</a>
						</div>
						<div class="short_info">
							<h4><a href="{{route('courses.show',$item->slug)}}">{{$item->name}}</a></h4>
						</div>
					</div>
				</div>

				@elseif($item->corseId == 8)
			

				<div class="col-lg-4 col-md-6 all 3">
					<div class="portfolio_box">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="/images/{{$item->image}}" alt="">
								<div class="icon">
									<span class="lnr lnr-cross"></span>
								</div>
							</a>
						</div>
						<div class="short_info">
							<h4><a href="{{route('courses.show',$item->slug)}}">{{$item->name}}</a></h4>
						</div>
					</div>
				</div>

				@elseif($item->corseId == 9)
			

				<div class="col-lg-4 col-md-6 all 4">
					<div class="portfolio_box">
						<div class="single_portfolio">
							<img class="img-fluid w-100" src="/images/{{$item->image}}" alt="">
								<div class="icon">
									<span class="lnr lnr-cross"></span>
								</div>
							</a>
						</div>
						<div class="short_info">
							<h4><a href="{{route('courses.show',$item->slug)}}">{{$item->name}}</a></h4>
						</div>
					</div>
				</div>
			@endif	

			@endforeach
		</div>
	</div>
		</div>
	</section>
	<!--================End Portfolio Area =================-->
    @endsection	






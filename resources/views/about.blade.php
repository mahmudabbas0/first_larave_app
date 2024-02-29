@extends('layouts.layout')

@section('content')


<body>


 
   <!--================ Start About Us Area =================-->
	<section class="about_area section_gap">
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-5">
                    <div class="about_img">
                        <img class="" src="{{url('assets/img/about-us.png')}}" alt="">
                    </div>
                </div>

                <div class="offset-lg-1 col-lg-5">
                    <div class="main_title text-left">
                        <h2>let’s <br>
                            Introduce about <br>
                            myself</h2>
                        <p>
                            A final-year computer engineering student, beginner in the field of website design
                        </p>
                        <p>
                            I always love learning everything new in the world of programming and developing myself in all fields
                        </p>
                        <a class="primary_btn" href="https://drive.google.com/file/d/1saA7AFtn1i8WKnaMkV12LZ-0QMDiwyFR/view?usp=sharing"><span>Download CV</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End About Us Area =================-->



@endsection
@extends('layouts.layout')
@section('content')


    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="/images/{{$cours->image}}" alt="">
                            </div>									
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2>{{$cours->name}}</h2>
                            
                            
                             {!!$cours->description!!}
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form action="{{route('courses.destroy',$cours->slug)}}" method="post">
            @csrf
            @method('delete')
            @if (Auth::user() && Auth::user()->id ==1)
            <button type="submit" class="btn btn-danger"> Delete</button>
            @endif
        </form>

        <br>
        @if (Auth::user() && Auth::user()->id ==1)
            

        <div>
            <a class="btn btn-primary  " href="{{route('courses.edit',$cours->slug)}}">Edit</a>
        </div>

        @endif
    </section>
    <!--================Blog Area =================-->


@endsection	
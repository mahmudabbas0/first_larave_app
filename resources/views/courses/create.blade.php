@extends('layouts.layout')

@section('content')
    


<br>
<br>
<br>
<br>

  @if ($errors->any())
  <div class="alert alert-danger" role="alert">
    <ul>
        
            @foreach ($errors->all() as $error )
            <li>{{$error}} </li>
            @endforeach
        
    </ul>
    
  </div> 
  @endif

<div class="containar p-5">

    <form action="{{route('courses.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" name="name"/>
            
        </div>

        <div class="mb-3">
            <label for="" class="form-label">description</label>
            <textarea class="form-control" name="description" rows="4"></textarea>
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Imaage</label>
            <input type="file" class="form-control" name="image"/>

            <div class="mb-3">
                <label for="" class="form-label">cours class</label>
                <input type="text" class="form-control" name="corseId"/>
                
            </div>
            
        </div>
        <button type="submit" class="btn btn-primary" >
            Create
        </button>
        
    
    </form>


    
</div>

<div class=" row container">
    <div class="col align-self-start">
        <a class="btn btn-primary" href="{{route('courses.index')}}">All courses</a>
    </div>

  </div>


  

@endsection
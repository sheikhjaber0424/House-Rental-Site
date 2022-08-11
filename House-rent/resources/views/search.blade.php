@extends('layout') 
@section('content')
<div class="container custom-rent mb-5" style="min-height: 480px !important">
    <h1 class="display-4  text-center featurette-heading"  style="font-size:50px" >Search Result</h1>  
      <div class="rentals " style="display: flex;flex-flow:row;justify-content:start;flex-wrap:wrap;"> 
         
  
        @foreach ($rents as $item) 
        
  
       <div class="card text-center" style="width: 20rem;display:inline-block;margin:40px 2px">
        <a href="/detail/{{$item['id']}}" style="color: black;text-decoration:none"> <img class="card-img-top" src="{{ $item['gallery'] }}" alt="Card image cap" height="250">    </a>
        <a href="/detail/{{$item['id']}}" style="color: black;text-decoration:none">
          <div class="card-body">
              <h5>{{ $item['category'] }}</h5>
            <p class="card-text">{{ $item['price'] }}</p>
            <p>{{$item['address']  }}</p>
          </div>
        </a>
        </div>
  
  
  
          @endforeach  
        </div>
        <hr class="mt-5">
      </div>
 @endsection   



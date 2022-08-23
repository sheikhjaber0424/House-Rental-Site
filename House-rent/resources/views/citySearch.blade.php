@php
  $arr = $cities[0];
@endphp

@extends('layout') 
@section('content')
<div class="container custom-rent mb-5" style="min-height: 480px !important">
    <h1 class="display-4  text-center featurette-heading"  >Appartments In {{ $arr['city'] }} City</h1>  
      <div class="rentals " style="display: flex;flex-flow:row;justify-content:start;flex-wrap:wrap;"> 
         
  
        @foreach ($cities as $item) 
        
  
       <div class="card shadow p-3 text-center cityimg border-0" style="width: 20rem;display:inline-block;margin:40px 2px">
        <a href="/detail/{{$item['id']}}" style="color: black;text-decoration:none"> <img class="card-img-top" src="{{ asset('storage/'.$item['gallery']) }}" alt="Card image cap" height="250">    </a>
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
      
      </div>
 @endsection   



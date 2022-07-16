@extends('layout') 
@section('content')

 <div class="masterhead" style="background-image: url('https://cdn.pixabay.com/photo/2016/08/16/17/12/skyscrapers-1598418_960_720.jpg')">
    <div class="color-overlay d-flex justify-content-center align-items-center">
       <h1>Discover Your New Home</h1>

    </div>
</div>



<div class="container custom-product">
    
    <div class="trending">
  
      <h3 class="mb-5 text-center" style="font-size:40px" >Explore Rentals in Dhaka</h3>
  
      
      @foreach ($rents as $item)
          
      
       
        <div class="trending-item">
          <a href="detail/{{ $item['id'] }}"  style="text-decoration: none">
          <img  class="trending-image" src="{{ $item['gallery'] }}" alt="">
          <div class="">
            <h5 class="text-dark hdiv">{{ $item['price'] }}</h5>
           
          </div>
        </a>
        </div>
        @endforeach  
      </div>
    </div>
@endsection
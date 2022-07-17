@extends('layout') 
@section('content')

 <div class="masterhead" style="background-image: url('https://cdn.pixabay.com/photo/2016/08/16/17/12/skyscrapers-1598418_960_720.jpg')">
    <div class="color-overlay d-flex justify-content-center align-items-center">
       <h1>Discover Your New Home</h1>

    </div>
</div>


<div class="container custom-rent">
    <div class="rentals"> 
      <h3 class="mb-5 text-center" style="font-size:40px" >Explore Rentals in Bangladesh</h3>   

      @foreach ($rents as $item) 
      <div class="card" style="width: 20rem;display:inline-block">
        <img class="card-img-top" src="{{ $item['gallery'] }}" alt="Card image cap" height="250">
        <div class="card-body">
            <h5>{{ $item['category'] }}</h5>
          <p class="card-text">{{ $item['price'] }}</p>
          <p>{{$item['address']  }}</p>
        </div>
      </div>

    

      
       
        {{-- <div class="trending-item">
          <a href="detail/{{ $item['id'] }}"  style="text-decoration: none">
          <img  class="trending-image" src="{{ $item['gallery'] }}" alt="">
          <div class="">
            <h5 class="text-dark hdiv">{{ $item['price'] }}</h5>
           
          </div>
        </a>
        </div> --}}



        @endforeach  
      </div>
    </div>
@endsection












{{-- <div class="container my-5">

    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">World</strong>
            <h3 class="mb-0">Global Conference</h3>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
              additional content.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="img-fluid col-auto d-none d-lg-block">

            <img src="https://source.unsplash.com/1600x900/?computer" class="bd-placeholder-img" width="200"
              height="250" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-danger">World</strong>
            <h3 class="mb-0">Join Gaming Community</h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional
              content.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="img-fluid col-auto d-none d-lg-block">

            <img src="https://source.unsplash.com/1600x900/?gamepad" class="bd-placeholder-img" width="200" height="250"
              alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Web</strong>
            <h3 class="mb-0">Learn Web Delevopment</h3>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
              additional content.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="img-fluid col-auto d-none d-lg-block">

            <img src="https://source.unsplash.com/1600x900/?Website" class="bd-placeholder-img" width="200" height="250"
              alt="">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-dark">World</strong>
            <h3 class="mb-0">Join Coding Community</h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional
              content.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">

            <img src="https://source.unsplash.com/1600x900/?coding" class="bd-placeholder-img" width="200" height="250"
              alt="">
          </div>
        </div>
      </div>
    </div>
  </div> --}}
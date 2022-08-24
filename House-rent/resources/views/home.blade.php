@extends('layout') 
@section('content')


@php
  $explore_region = array("gulshan","banani","baridhara");
@endphp

<section id="intro">
 <div class="masterhead" style="background-image: url('https://cdn.pixabay.com/photo/2016/08/16/17/12/skyscrapers-1598418_960_720.jpg')">
    <div class="color-overlay d-flex justify-content-center align-items-center">
       <h1 >Discover Your New Home</h1>

    </div>
</div>
</section>






<section id="apps">
<div class="container custom-rent mb-5">
  
  @if(Session::has('success'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Congratulations!</strong> Your booking has been confirmed.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif

  <h1 class="mb-5 text-center featurette-heading"  style="font-size:50px;margin-top:40px" >Explore Rentals in Bangladesh</h1>  
    <div class="rentals " style="display:flex;flex-flow:row;justify-content:start ;flex-wrap:wrap"> 
       

      @foreach ($rents as $item) 
      

     <div class="card shadow p-3 card text-center cityimg border-0 me-1" style="width: 20rem;display:inline-block;margin:40px 0px">
      <a href="/detail/{{$item['id']}}" style="color: black;text-decoration:none"> <img class="card-img-top " src="{{ asset('storage/'.$item['gallery']) }}" alt="Card image cap" height="250">    </a>
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
      
       <div class="d-flex justify-content-center my-4">
          {{  $rents->links()}}
        </div>
       
  
    
    </div>
   
  </section>



   






<section id="about" class="bg-light pb-5"> 
  <div class=" pt-5 text-center">
    <h1  class="mt-5 display-3" >
      The Most Rental Listings        
    </h1>

    <p class="lead">Choose from over 1 million apartments, houses, condos, and townhomes for rent.</p>
  </div>

    <div class="container about mt-4" >

      <div class="row featurette d-flex justify-content-center align-items-center my-4 " style="margin-top: 20px">
       
          <div class="col-md-7">
            
              <h3 class="featurette-heading">
                Renting Made Simple. </h3>
              <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting
                  prose here.</p>
          </div>
          <div class="col-md-5">
              <img src="https://source.unsplash.com/600x400/?apartment"
              alt="" class="img-fluid bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
            

          </div>
      </div>
      <div class="row featurette d-flex justify-content-center align-items-center my-4" style="margin-top: 20px">
          <div class="col-md-7 order-md-2">
              <h2 class="featurette-heading">Over 1 million visitors each month. <span class="text-muted"></h2>
              <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting
                  prose here.</p>
          </div>
          <div class="col-md-5">

              <img src="https://source.unsplash.com/600x400/?home"
               alt="" class="img-fluid bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
             
          </div>
      </div>
      <div class="row featurette d-flex justify-content-center align-items-center my-4" >
          <div class="col-md-7">
              <h2 class="featurette-heading">First featurette heading. <span class="text-muted"></span></h2>
              <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting
                  prose here.</p>
          </div>
          <div class="col-md-5">
              <img src="https://source.unsplash.com/600x400/?house"
              alt="" class="img-fluid bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
            

          </div>
      </div>
  </div>
</section>

<section id="explore" style="margin-bottom: 100px" >
  <div class="container-lg" >
    <div class="text-center">
      <h2 class="display-4 my-5">Explore Areas</h2>
    </div>
  
  <div class="row justify-content-center">
    
    <div class="col-md-4 text-center shadow p-3 ">
      <a href="/exploreRegion/{{ $explore_region[0] }}" class="text-decoration-none text-dark">
        <img src="https://cdn.pixabay.com/photo/2013/11/13/21/14/san-francisco-210230_960_720.jpg" alt="" class="img-fluid mb-4 cityimg" style="clip-path:circle();opacity:0.8" width="360" >
      <h3 >Gulshan</h3>
    </a>
    </div>
    <div class="col-md-4 text-center shadow p-3">
      <a href="/exploreRegion/{{ $explore_region[1] }}" class="text-decoration-none text-dark">
        <img src="https://cdn.pixabay.com/photo/2016/07/13/20/44/architecture-1515475_960_720.jpg" alt="" class="img-fluid mb-4 cityimg" style="clip-path:circle();opacity:0.8" width="500" >
      <h3>Banani</h3>
    </a>
    </div>
    <div class="col-md-4 text-center  shadow p-3">
      <a href="/exploreRegion/{{ $explore_region[2] }}" class="text-decoration-none text-dark ">
        <img src="https://cdn.pixabay.com/photo/2017/04/11/03/33/dinant-2220459_960_720.jpg" alt="" class="img-fluid mb-4 cityimg " style="clip-path:circle();opacity:0.8" width="500" >
      <h3>Baridhara</h3>
    </a>
    </div>
  </div>
</div>
</section>

@endsection













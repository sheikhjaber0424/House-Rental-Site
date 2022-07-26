@extends('layout') 
@section('content')

 <div class="masterhead" style="background-image: url('https://cdn.pixabay.com/photo/2016/08/16/17/12/skyscrapers-1598418_960_720.jpg')">
    <div class="color-overlay d-flex justify-content-center align-items-center">
       <h1 >Discover Your New Home</h1>

    </div>
</div>


<div class="container custom-rent mb-5">
  <h1 class="mb-5 text-center featurette-heading"  style="font-size:50px;margin-top:40px" >Explore Rentals in Bangladesh</h1>  
    <div class="rentals " style="display: flex;flex-flow:row;justify-content:space-between;flex-wrap:wrap"> 
       

      @foreach ($rents as $item) 
      

     <div class="card text-center" style="width: 20rem;display:inline-block;margin:40px 0px">
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
    <div class=" mt-5 text-center">
      <h1 class="mt-5" style="font-size:50px">
        The Most Rental Listings        
      </h1>

      <p>Choose from over 1 million apartments, houses, condos, and townhomes for rent.</p>
    </div>







    <div class="container about" >

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


@endsection













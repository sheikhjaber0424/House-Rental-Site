@extends('layout') 
@section('content')






<div class="container " >
    <section class="mx-auto my-5 " style="max-width: 100%; display: flex;justify-content:center">
        
      <div class="card shadow " style="width: 90%">
        <div class="bg-image hover-overlay ripple mb-5 mt-5 " data-mdb-ripple-color="light" style="display: flex;justify-content:center">
          <img src="{{ asset('storage/'.$rent['gallery']) }}" width="90%" class="text-center" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body" style="padding: 50px">
         

          <h4 class="card-title font-weight-bold"><a>{{  $rent['category']}}</a></h4>
        
          <h4 class="about fw-bold">{{ $rent['price'] }}</h4>
          @if($rent['status']=='Booked')
          <p class="lead about text-danger fw-bold">Status : {{ $rent['status'] }}</p>
          @else
          <p class="lead about text-success fw-bold">Status : {{ $rent['status'] }}</p>
          @endif
          
          <h5 class="about">{{ $rent['address'] }}</h5>
          

          <p class="card-text">
            {{$rent['description']}}
          </p>
          <hr class="my-4" />
          <p class="lead"><strong>Property Information</strong></p>

          
       


          <ul class="list-unstyled list-inline d-flex justify-content-start" >
            <li class="list-inline-item ">
              <div class="chip me-0"><i class="fa fa-solid fa-bed"></i> Bedrooms: {{ $rent['bedroom'] }} | </div>
            </li>
            <li class="list-inline-item ">
              <div class="chip me-0"><i class="fa fa-solid fa-bath"></i>   Bathrooms: {{ $rent['bathroom'] }} | </div>
            </li>
            <li class="list-inline-item ">
              <div class="chip me-0"><i class=" fa fa-solid fa-square"></i> {{ $rent['area'] }}</div>
            </li>
           
          </ul>
          <p>Type   :    Appartment</p>
          
          <p>For more info: <i class="fa fa-phone "></i> {{ $rent['phone'] }} </p>

          @if($rent['status'] != "Booked")
          <a href="/booking/{{ $rent['id'] }}"><button style="width: 150px;margin-top:20px" type="button" class="btn btn-lg btn-primary">Book</button></a>

          @endif

        </div>
      </div>
      
    </section>
  </div>


  <section id="related_items">

    <div class="container custom-rent mb-5">
      @if(count($allRent)>1)
      <h1 class="display-4 mb-2 text-center featurette-heading"  style="margin-top:110px" >Other Apartments in {{ $rent['city'] }}</h1>  
      @endif
        @foreach ($allRent as $item)

          @if($rent['id'] != $item['id'] )
          <div class="card shadow p-3 card text-center cityimg border-0" style="width: 20rem;display:inline-block;margin:40px 0px">
            <a href="/detail/{{$item['id']}}" style="color: black;text-decoration:none"> <img class="card-img-top " src="{{ asset('storage/'.$item['gallery'])}}" alt="Card image cap" height="250">    </a>
            <a href="/detail/{{$item['id']}}" style="color: black;text-decoration:none">
              <div class="card-body">
                  <h5>{{ $item['category'] }}</h5>
                <p class="card-text">{{ $item['price'] }}</p>
                <p>{{$item['address']  }}</p>
              </div>
            </a>
            </div>
            @endif

        @endforeach
    </div>

  </section>
@endsection
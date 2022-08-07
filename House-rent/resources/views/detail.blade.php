@extends('layout') 
@section('content')






<div class="container " >
    <section class="mx-auto my-5 " style="max-width: 100%; display: flex;justify-content:center">
        
      <div class="card" style="width: 90%">
        <div class="bg-image hover-overlay ripple mb-5 mt-5 " data-mdb-ripple-color="light" style="display: flex;justify-content:center">
          <img src="{{ $rent['gallery'] }}" width="90%" class="text-center" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body" style="padding: 50px">
          <h4 class="card-title font-weight-bold"><a>{{  $rent['category']}}</a></h4>
          <h4 class="about">{{ $rent['price'] }}</h4>
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
          <p>Purpose   :    Rent</p>
          <p>For more info: <i class="fa fa-phone mr-3"></i> {{ $rent['phone'] }} </p>
          <a href="/booking/{{ $rent['id'] }}"><button style="width: 150px;margin-top:20px" type="button" class="btn btn-lg btn-primary">Book</button></a>
        </div>
      </div>
      
    </section>
  </div>
@endsection
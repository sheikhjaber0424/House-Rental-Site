@extends('layout') 
@section('content')



    <section style="min-height: 525px !important">
        <div class="container-lg">+

          
            <div class="text-center my-5"><h1 class="display-5">Your Bookings</h1> </div>
            @foreach ($Items as $item)
                   
            <div class="row mb-2 justify-content-center">
                <div class="col-md-8">
                  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-success"> {{ $item->category }} <i class="bi bi-check-circle"></i> </strong>
                      <h3 class="mb-0">{{ $item->address }}</h3>
                      <div class="mb-1 text-muted">{{ $item->price }}</div>
                      <div class="mt-3">
                        
                        <i class="fa fa-solid fa-bed"></i><p class="text-muted d-inline-block ms-1 me-3">bedroom : {{ $item->bedroom  }}</p>
                        <i class="fa fa-solid fa-bath"></i><p class="text-muted d-inline-block ms-1 me-3">bathroom : {{ $item->bathroom  }}</p>
                        <i class=" fa fa-solid fa-square"></i>   <p class="text-muted d-inline-block ">area : {{ $item->area  }}</p>
                      </div>
                     
                    </div>
                    <div class="img-fluid col-auto d-none d-lg-block">
          
                      <img src="{{ $item->gallery  }}" class="bd-placeholder-img" width="200"
                        height="250" alt="">
                    </div>
                  </div>
                </div>
                
              </div>
              @endforeach
        </div>
    </section>
    
@endsection
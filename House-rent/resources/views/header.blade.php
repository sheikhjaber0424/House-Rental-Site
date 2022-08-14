@php
    $city =array("dhaka","rajshahi","khulna","barisal","sylhet","mymensingh","rangpur","chittagong");
  
@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">BDrentals.com </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
       
      

        <li><a class="nav-link active" href="#sidebar" class="d-block mt-3" data-bs-toggle="offcanvas" role="button" aria-controls="sidebar">
          Cities
        </a></li>
       
       


      </ul>

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nn">
       
        <form action="/search" class="d-flex">
          <input style="width:300px" class="form-control me-2" type="text" name="query" placeholder="Search" aria-label="Search">
          <button style="width:100px" class="btn btn-outline-light rounded-pill" type="submit">Search</button>
        </form> 
       
        
        @if (Session::has('user'))  
          
        <ul  style="margin-top: 10px;margin-right:70px;display:flex;justify-content:flex-end">
          <li class="nav-item" ><div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ Session::get('user')['name']}}
                </a>
                <ul id="user" class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="/logout">Logout</a></li>
                  <li><a class="dropdown-item" href="/bookeditems">Bookings</a></li>
                  
                </ul>
              </li>
            </ul>
          </div>
        </li>
        @else
             
            
        <li>
          <a href="/login"><button type="button" class="btn btn-success mx-2 rounded-pill" data-bs-toggle="modal" data-bs-target="#Login">Log
            In</button></a>
          <a href="/register"><button type="button" class="btn btn-success rounded-pill " data-bs-toggle="modal" data-bs-target="#Signup">Register</button></a>
        </li>    
    
        
             @endif
        </ul>
           
            
      

      


      </ul>





    











    <!-- Button trigger modal -->
   



  
 

  </div>
  </div>
</nav>

<!-- offcanvas -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebar-label">
  <div class="offcanvas-header ">
    <h5 class="offcanvas-title " id="sidebar-label">Search by City</h5>
    
  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
  </div>
  <div class="list-group my-5 text-center">
    
    

    <a href="/citySearch/{{ $city[0] }}" class="list-group-item list-group-item-action list-group-item-primary">
      {{-- <form action="/citySearch" class="d-flex">
      <input style="width:350px" class="form-control ms-2 d-none" type="text" name="query" value="Dhaka" placeholder="Search" aria-label="Search">
      <button class="dropdown-item" type="submit">Dhaka</button>
      </form> --}}
      Dhaka
    </a>

    <a href="/citySearch/{{ $city[1] }}" class="list-group-item list-group-item-action list-group-item-secondary">
      {{-- <form action="/citySearch" class="d-flex">
      <input style="width:350px" class="form-control ms-2 d-none" type="text" name="query" value="Rajshahi" placeholder="Search" aria-label="Search">
      <button class="dropdown-item" type="submit">Rajshahi</button>
      </form> --}}
      Rajshahi
    </a>
    <a href="/citySearch/{{ $city[2] }}" class="list-group-item list-group-item-action list-group-item-success">
      {{-- <form action="/citySearch" class="d-flex">
        <input style="width:350px" class="form-control ms-2 d-none" type="text" name="query" value="Khulna" placeholder="Search" aria-label="Search">
        <button class="dropdown-item" type="submit">Khulna</button>
        </form> --}}
        Khulna
    </a>
    <a href="/citySearch/{{ $city[3] }}"  class="list-group-item list-group-item-action list-group-item-danger">
      {{-- <form action="/citySearch" class="d-flex">
        <input style="width:350px" class="form-control ms-2 d-none" type="text" name="query" value="Barisal" placeholder="Search" aria-label="Search">
        <button class="dropdown-item" type="submit">Barisal</button>
      </form> --}}
      Barisal
      </a>
    <a href="/citySearch/{{ $city[4] }}" class="list-group-item list-group-item-action list-group-item-warning">
      {{-- <form action="/citySearch" class="d-flex">
        <input style="width:350px" class="form-control ms-2 d-none" type="text" name="query" value="Sylhet" placeholder="Search" aria-label="Search">
        <button class="dropdown-item" type="submit">Sylhet</button>
      </form> --}}
      Sylhet
    </a>

    <a href="/citySearch/{{ $city[5] }}" class="list-group-item list-group-item-action list-group-item-info">
      {{-- <form action="/citySearch" class="d-flex">
        <input style="width:350px" class="form-control ms-2 d-none" type="text" name="query" value="Mymensingh" placeholder="Search" aria-label="Search">
        <button class="dropdown-item" type="submit">Mymensingh</button>
      </form> --}}
      Mymensingh
    </a>
    <a href="/citySearch/{{ $city[6] }}" class="list-group-item list-group-item-action list-group-item-light">
      {{-- <form action="/citySearch" class="d-flex">
      <input style="width:350px" class="form-control ms-2 d-none" type="text" name="query" value="Rangpur" placeholder="Search" aria-label="Search">
      <button class="dropdown-item" type="submit">Rangpur</button>
      </form> --}}
      Rangpur
    </a>
    <a href="/citySearch/{{ $city[7] }}" class="list-group-item list-group-item-action list-group-item-dark">
      {{-- <form action="/citySearch" class="d-flex">
        <input style="width:350px" class="form-control ms-2 d-none" type="text" name="query" value="Chittagong" placeholder="Search" aria-label="Search">
        <button class="dropdown-item" type="submit">Chittagong</button>
      </form> --}}
      Chittagong
    </a>
  </div>
  </button>
</div>
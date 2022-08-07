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
        <li class="nav-item">
          <a class="nav-link" href="/about.html">About</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="/contact.html">Contact</a>
        </li>


      </ul>

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nn">
        <form action="/search" class="d-flex">
          <input style="width:300px" class="form-control me-2" type="text" name="query" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form> 
  
        
        @if (Session::has('user'))  
          
        <ul style="margin-top: 10px;margin-right:70px;display:flex;justify-content:flex-end">
          <li><div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ Session::get('user')['name']}}
                </a>
                <ul id="user" class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="/logout">Logout</a></li>
                  <li><a class="dropdown-item" href="#">Bookings</a></li>
                  
                </ul>
              </li>
            </ul>
          </div>
        </li>
        @else
             
            
        <li>
          <a href="/login"><button type="button" class="btn btn-success mx-2" data-bs-toggle="modal" data-bs-target="#Login">Log
            In</button></a>
          <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#Signup">Sign Up</button>
        </li>    
    
        
             @endif
        </ul>
           
            
      

      


      </ul>





    











    <!-- Button trigger modal -->
   



  
 

  </div>
  </div>
</nav>
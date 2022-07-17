<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>House Rent site</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</head>


<body>
    @include('header')
    @yield('content')
    @include('footer')
</body>


<style>
   *{
  margin: 0;
  padding: 0;
 }

 body{
  @media screen and (max-width:480px){
    height:2000px;
  }
 }

 .custom-login{
  height: 620px;
  padding-top: 100px  
 }



  .custom-rent{
   
    margin-top: 20px;
    
 }     

.trending-image{
  height: 100px;
}

.trending-item{
  float: left;
  width:20%;
}

.rentals{
  margin-top: 100px;
}

.con{
  margin-top:20px; 
}
 

.main-detail{
  height: 530px;
} 


.nn{
 margin-right : 60px;
}


.masterhead{
    background-size: cover;
    
    min-height: 60vh;
    position: relative;
    color: white;
    text-shadow: 2px 2px 2px rgb(0, 0, 0,0.2)
    
   
}

h1{
    font-size: 4rem;
}

.color-overlay{
    position: absolute;
    width: 100%;
    height: 100%;
    background-color:rgb(0, 0, 0,0.2) 
}

@media(max-width: 768px){
    .masterhead{
        min-height: 30vh;
    }
    h1{
        font-size: calc(1.525rem+3.3vw);
    }
}


.footer{
  background: #152F4F;
  color:white;
  
  .links{
    ul {list-style-type: none;}
    li a{
      color: white;
      transition: color .2s;
      &:hover{
        text-decoration:none;
        color:#4180CB;
        }
    }
  }  
  .about-company{
    i{font-size: 25px;}
    a{
      color:white;
      transition: color .2s;
      &:hover{color:#4180CB}
    }
  } 
  .location{
    i{font-size: 18px;}
  }
  .copyright p{border-top:1px solid rgba(255,255,255,.1);} 
}
</style>
</html>
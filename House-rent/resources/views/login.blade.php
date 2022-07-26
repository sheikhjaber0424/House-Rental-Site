@extends('layout') 
@section('content')
<div class="container custom-login">
   <div class="row margin-top-10">
        <div class="col-sm-4 mx-auto  mb-5 mt-5" style="margin-top:20%;">
            <form action="/login" method="POST">
              @csrf
                <div class="mb-3">
                    <h3>Sign into your account</h3>
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
              
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
        </div>

   </div>
</div>
@endsection
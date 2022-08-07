@extends('layout') 
@section('content')
    
    <div class="container mt-5"> 
    <form>
        
        <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="form-outline mb-4">
          <input type="text" id="form6Example3" class="form-control" required/>
          <label class="form-label" for="form6Example3">Full name</label>
        </div>
      
        <!-- Text input -->
        <div class="form-outline mb-4">
          <input type="text" id="form6Example3" class="form-control" required/>
          <label class="form-label" for="form6Example3">Occupation</label>
        </div>
      
        <!-- Text input -->
        <div class="form-outline mb-4">
          <input type="text" id="form6Example4" class="form-control" required/>
          <label class="form-label" for="form6Example4"><i class="fa fa-solid fa-address-card"></i> Current Address</label>
        </div>
      
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" id="form6Example5" class="form-control" required/>
          <label class="form-label" for="form6Example5"><i class="fa fa-solid fa-envelope"></i></i>
            Email</label>
        
        </div>
      
        <!-- Number input -->
        <div class="form-outline mb-4">
          <input type="number" id="form6Example6" class="form-control" required/>
          <label class="form-label" for="form6Example6"><i class="fa fa-solid fa-phone"></i> Phone</label>
        </div>
         
        <div class="form-outline mb-4">
        <select class="form-select" aria-label="Default select example">
            
            <option value="1">Married</option>
            <option value="2">Unmarried</option>
           
          </select>
          <label class="form-label" for="form6Example3"> Maritial Status</label>
        </div>

        <div class="form-outline mb-4">
            <input type="text" id="form6Example3" class="form-control" required/>
            <label class="form-label" for="form6Example3">Total members</label>
          </div>
        <!-- Message input -->
        <div class="form-outline mb-4">
          <textarea class="form-control" id="form6Example7" rows="4" required></textarea>
          <label class="form-label" for="form6Example7">Additional information</label>
        </div>
         
        <!-- Checkbox -->
        
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Confirm booking</button>
      </form>

    </div>
@endsection
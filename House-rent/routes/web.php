<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\RentController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});


// Login
 Route::post('/login',[UserController::class,'login']);
// Route::get('/',[RentController::class,'index']);

// Registration

Route::post('/register',[RentController::class,'register']);
Route::get('/register', function () {  
    return view('register');
});



Route::get('/',[RentController::class,'index']);

Route::get('/detail/{id}',[RentController::class,'detail']);
// Route::get('/', function () {
//     return view('home');
// });


//To search items
Route::get('/search',[RentController::class,'search']);


//Route::get('/booking/{id}',[RentController::class,'booking']);
Route::get('/booking/{id}',[RentController::class,'booking']);

//save booking details in database
Route::post('/save',[RentController::class,'save']);


//showing booked List

Route::get('/bookeditems',[RentController::class,'bookeditems']);

//Search by city
Route::get('/citySearch/{city_name}',[RentController::class,'citySearch']);

//Explore regions
Route::get('/exploreRegion/{explore_name}',[RentController::class,'exploreRegion']);

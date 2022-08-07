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

 Route::post('/login',[UserController::class,'login']);
// Route::get('/',[RentController::class,'index']);


Route::get('/',[RentController::class,'index']);

Route::get('/detail/{id}',[RentController::class,'detail']);
// Route::get('/', function () {
//     return view('home');
// });


//To search items
Route::get('/search',[RentController::class,'search']);


//Route::get('/booking/{id}',[RentController::class,'booking']);
Route::get('/booking/{id}',[RentController::class,'booking']);
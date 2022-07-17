<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class RentController extends Controller
{
    public function index()
    {
        $data = Rent::all();
        return view('home',['rents'=>$data]);
    }
}
   
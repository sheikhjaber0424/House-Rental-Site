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

    public function detail($id)
    {
        $detail = Rent::find($id);
         return view('detail',['rent'=>$detail]);
    }
}
   

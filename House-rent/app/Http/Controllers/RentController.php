<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\User;

use App\Models\Booking;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

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

    function search(Request $request)
    {
        
         $data= Rent::where('price', 'like','%'.$request->input('query').'%')
                            ->orWhere('address', 'like','%'.$request->input('query').'%')
                            ->orWhere('category', 'like','%'.$request->input('query').'%')
                            ->get();
                      
       return view('search',['rents'=>$data]);
    }


    function booking($id,Request $request){

        if($request->session()->has('user'))
        {
            
            $detail = Rent::find($id);
            return view('booking',['rent'=>$detail]);
        }
        else
        {
           return redirect('/login');
        }
        
    }

      function register(Request $request){
        $customer = new User;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = Hash::make($request->password);
        $customer->save();
        return redirect('/login');
        
    }


    public function save(Request $request){
        
            $book = new Booking;
            $book->user_id=$request->session()->get('user')['id'];
            $book->rent_id=$request->rent_id;
            $book->name = $request->name;
            $book->occupation = $request->occupation;
            $book->address = $request->address;
            $book->email = $request->email;
            $book->phone = $request->phone;
            $book->status = $request->status;
            $book->members = $request->members;
            $book->save();

            $userId = Session::get('user')['id'];
            $bookedItems = DB::table('bookings')
           ->join('rents','bookings.rent_id','=','rents.id')
           ->where('bookings.user_id',$userId)
           ->select('rents.*','bookings.id as bookings_id')
           ->get();
    
           
        
        return redirect('/');
        
    }

   
}
   

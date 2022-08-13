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
        $data = Rent::paginate(8);
        return view('home',['rents'=>$data]);
    }

    public function detail($id)
    {
        $detail = Rent::find($id);
        $city = $detail['city'];

        //   dd($city);
       
        $detailAll = Rent::where('city', 'like','%'.$city.'%')->get(); 
        // dd($detailAll);
        return view('detail',['rent'=>$detail,'allRent'=>$detailAll]);
    }
 
    function search(Request $request)
    {
        
         $data= Rent::where('price', 'like','%'.$request->input('query').'%')
                            ->orWhere('address', 'like','%'.$request->input('query').'%')
                            ->orWhere('category', 'like','%'.$request->input('query').'%')
                            ->get();
        //  dd($data);
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
    return redirect('/');
    
}

public function bookeditems(){
    $userId = Session::get('user')['id'];
        $Items = DB::table('bookings')
       ->join('rents','bookings.rent_id','=','rents.id')
       ->where('bookings.user_id',$userId)
       ->get();

    // dd($Items);
  return view('bookeditems',[ 'Items'=> $Items]);
 
}

public function citySearch($city_name)
{
    $data = Rent::where('address', 'like','%'.$city_name.'%')->get();
    // dd($city_name);
    return view('citySearch',['cities'=>$data]);
}

public function exploreRegion($explore_region)
{
    $data = Rent::where('region', 'like','%'.$explore_region.'%')->get(); 
    return view('citySearch',['cities'=>$data]);
}

  
}
   

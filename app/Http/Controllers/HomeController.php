<?php

namespace App\Http\Controllers;

use App\City;
use App\Models\Admin\Setting\Vehicle;
use App\ShipmentArea;
use App\State;
use App\User;
use App\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Http\Request as RequestAlias;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $user=User::find(3);
//        $user->assignRole('driver');
//        $user=User::find(4);
//        $user->assignRole('customer');
//        dd();
        return view('admin.shipment.add-shipment');
    }

    public function getVehicles(Request $request)
    {
        $vehicles= Vehicle::where('vehicle_category_id',$request->id)->get();
       return response()->json(['data'=>$vehicles]) ;
    }
    public function getStates(Request $request)
    {
        $states = State::where('country_id', $request->id)->wherehas('cities')->get();
        return response()->json(['states'=>$states]) ;
    }
    public function getCities(Request $request)
    {
        $states = City::where('state_id', $request->id)->wherehas('areas')->get();
        return response()->json(['cities'=>$states]) ;
    }
    public function getArea(Request $request)
    {
        $states = ShipmentArea::where('city_id', $request->id)->get();
        return response()->json(['cities'=>$states]) ;
    }
    public function getUserAddress(Request $request)
    {
        $address = UserAddress::where('user_id', $request->id)->get();
        return response()->json(['address'=>$address]) ;
    }

}

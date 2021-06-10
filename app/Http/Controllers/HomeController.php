<?php

namespace App\Http\Controllers;

use App\Models\Admin\Setting\Vehicle;
use App\User;
use Illuminate\Http\Request;
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
}

<?php

namespace App\Http\Controllers;



use App\Country;
use App\Models\Admin\Setting\PackageType;
use App\Models\Admin\Setting\VehicleCategory;
use App\Shippment;
use App\UserAddress;

class CustomerController extends Controller
{
    public function __construct() {
        $this->middleware(['auth','role:customer']);
    }


    public function index(){
        $shipments= Shippment::where('user_id',auth()->user()->id)->orderBy('updated_at','desc')->with('sender.user','receiver.user','status','bids.user')->paginate('15');

//        dd($shipments);
        return view('user.shipment.index', compact('shipments'));
    }
    public function create()
    {
        $vehicle_types=VehicleCategory::all();
        $shipment_packages=PackageType::all();
        $countries=Country::wherehas('states')->get();
//         $senders= ShipmentArea::where('created_by',Auth::user()->id)->with('user')->get();

        $senders= UserAddress::where('created_by',auth()->user()->id)->where('form','sender')->with('user')->get();
        $receivers= UserAddress::where('created_by',auth()->user()->id)->where('form','receiver')->with('user')->get();
        return view('user.shipment.add-shipment', compact('vehicle_types','shipment_packages','countries','senders','receivers'));

    }

}

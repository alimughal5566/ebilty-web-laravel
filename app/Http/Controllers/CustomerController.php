<?php

namespace App\Http\Controllers;



use App\Country;
use App\Models\Admin\Setting\PackageType;
use App\Models\Admin\Setting\VehicleCategory;
use App\ShipmentBids;
use App\Shippment;
use App\UserAddress;
use Illuminate\Http\Request;

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


    public function bidStatusUpdate(Request $request){
        if($request->approved_status==1) {
            $bid = ShipmentBids::find($request->id);
            $bid->approved_status = 1;
            $bid->save();
            ShipmentBids::where('shipment_id' , $bid->shipment_id)
                ->where('id' ,'!=', $request['id'])
                ->update(['approved_status' =>2]);
            $ship=Shippment::find($request->shipment_id);
            $ship->assigned_to=$bid->user_id;
            $ship->assigned_at=now();
            $ship->status_id=1;
            $ship->save();
        }
        if($request->approved_status==2) {
            $bid = ShipmentBids::find($request->id);
            $bid->approved_status = 2;
            $bid->save();

            ShipmentBids::where('shipment_id' , $bid->shipment_id)
                ->where('id' ,'!=', $request['id'])
                ->update(['approved_status' =>0]);
            $ship=Shippment::find($request->shipment_id);
            $ship->assigned_to=Null;
            $ship->assigned_at=Null;
            $ship->status_id=9;
            $ship->save();
        }
        return response()->json(['success' =>'status updated  successfully'], 200);
    }

    public function sendBidReviserequest(Request $request){
        if($request->id) {
            $bid = ShipmentBids::find($request->id);
            $bid->revise_amount_shipper = $request->amt;
            $bid->revise_status=2;
            $bid->save();
        }
        return response()->json(['success' =>'Data updated  successfully'], 200);
    }
}

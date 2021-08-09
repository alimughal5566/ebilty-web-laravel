<?php

namespace App\Http\Controllers;



use App\Country;
use App\Models\Admin\Setting\PackageType;
use App\Models\Admin\Setting\Vehicle;
use App\Models\Admin\Setting\VehicleCategory;
use App\ShipmentBids;
use App\Shippment;
use App\User;
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
    public function create(){
        $vehicle_types=VehicleCategory::all();
        $shipment_packages=PackageType::all();
        $countries=Country::wherehas('states')->get();
//        $senders= UserAddress::where('created_by',auth()->user()->id)->where('form','sender')->with('user')->get();
      $addresses= UserAddress::where('user_id',auth()->user()->id)->get();
        $users = User::whereHas(
            'roles', function($q){
            $q->where('name', 'customer');
        }
        )->get();
        $vehicles = Vehicle::all();

//        $receivers= UserAddress::where('created_by',auth()->user()->id)->where('form','receiver')->with('user')->get();
        return view('user.shipment.add-shipment', compact('vehicles','vehicle_types','shipment_packages','countries','users','addresses'));
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
            sendnote(auth()->user()->id , $ship->user_id, 'Bid status updated. ' );
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
            sendnote(auth()->user()->id , $ship->user_id, 'Bid status updated. ' );
        }
        return response()->json(['success' =>'status updated  successfully'], 200);
    }
    public function sendBidReviserequest(Request $request){
        if($request->id) {
            $bid = ShipmentBids::find($request->id);
            $bid->revise_amount_shipper = $request->amt;
            $bid->rank = $request->rank;
            $bid->revise_status=2;
            $bid->save();
            sendnote(auth()->user()->id , $bid->user_id, 'Revise bid request created. ' );
        }
        return response()->json(['success' =>'Data updated  successfully'], 200);
    }
}

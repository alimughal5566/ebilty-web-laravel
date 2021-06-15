<?php

namespace App\Http\Controllers;

use App\Country;
use App\Driver;
use App\Models\Admin\Setting\PackageType;
use App\Models\Admin\Setting\Shipment;
use App\Models\UserVehicle;
use App\ShipmentArea;
use App\ShipmentBids;
use App\ShipmentStatus;
use App\Shippment;
use App\User;
use App\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{

    public function __construct() {
//        dd(Auth::user());
        $this->middleware(['auth','role:driver']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
//        dd(auth()->user()->id);
        $vehicles = UserVehicle::where('user_id',auth()->user()->id)->select('vehicle_id')->get()->toArray();
//        $records->where(function($q) use ($vehicles){
//            foreach($vehicles as $truck) {
////                $q->Where('truck_used', $truck->vehicle_id);
////                $q->orWhere('vehicle_category', $truck->vehicle_type);
//            }
//        });
        $shipments    = Shippment::whereIn('assigned_to',[NUll,auth()->user()->id])->orwhereIn('vehicle_id',$vehicles)->orderBy('id','desc')->with('myBid','vehicle','vehicleType','packages','receiver')->paginate('15');
        $statuses    = ShipmentStatus::where('id', '!=',9)->orderBy('id','asc')->get();
//        dd($shipments[0]);
//        $shipments= Shippment::where('user_id',auth()->user()->id)->orderBy('updated_at','desc')->with('sender.user','receiver.user','status','bids.user')->paginate('15');
        return view('driver.shipment.index', compact('shipments','statuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function bidStore(Request $request){
       $bid= new ShipmentBids;
        $bid->shipment_id = $request['order_id'];
        $bid->bid_amount = $request['bid_price'];
        $bid->user_id = auth()->user()->id;
        $bid->save();
        return response()->json(['success' =>'Bid created successfully'], 200);

    }
    public function edit(Driver $driver)
    {
        //
    }



    public function updateBidReviserequest(Request $request){
        if($request->id) {
            $bid = ShipmentBids::find($request->id);
            $bid->revise_comment = $request->comment;
            $bid->revise_status=($request->status==1)?'1':'3';
            $bid->save();
        }
        return response()->json(['success' =>'Data updated  successfully'], 200);
    }
    public function updateshipmentStatus(Request $request){
        if($request->id) {
            $bid = Shippment::find($request->id);
            $bid->status_id = $request->status;
            $bid->save();
        }
        return response()->json(['success' =>'Data updated  successfully'], 200);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        //
    }
}

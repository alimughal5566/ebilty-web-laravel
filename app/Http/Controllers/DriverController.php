<?php

namespace App\Http\Controllers;
use App\Driver;
use App\Models\Admin\Setting\VehicleCategory;
use App\Models\UserVehicle;
use App\ShipmentBids;
use App\ShipmentStatus;
use App\Shippment;
use App\User;
use Illuminate\Http\Request;


class DriverController extends Controller
{

    public function __construct() {
//        dd(Auth::user());
        $this->middleware(['auth','role:driver|cracker|brocker_driver|company']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
//        $vehicles = UserVehicle::where('user_id',auth()->user()->id)->where('is_verified',1)->select('vehicle_id')->get()->toArray();
        $shipments    = Shippment::
        where('assigned_to', auth()->user()->id)
            ->orWhereNull('assigned_to')
            ->whereHas('sender', function($q){
                $q->where('form','sender');
                $q->where('city_id', auth()->user()->city_id);
            })
            ->orderBy('id','desc')->with('myBid','vehicle','vehicleType','packages','receiver')->paginate('15');
        $statuses    = ShipmentStatus::where('id', '!=',9)->orderBy('id','asc')->get();
        return view('driver.shipment.index', compact('shipments','statuses'));
    }

    public function myDriverShipments(){
        $drivers= User::where('created_by',auth()->user()->id)->get()->toArray();
        $shipments    = Shippment::
        where('assigned_to', $drivers)
            ->orWhereNull('assigned_to')
            ->whereHas(
                'sender', function($q){
                $q->where('form','sender');
//              $q->where('city_id', auth()->user()->city_id);
            })
            ->orderBy('id','desc')->with('myBid','vehicle','vehicleType','packages','receiver')->paginate('15');
        $statuses = ShipmentStatus::where('id', '!=',9)->orderBy('id','asc')->get();
        return view('driver.shipment.mydrivershipments', compact('shipments','statuses'));
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
    public function myVehicles(){
        $vehicles = UserVehicle::with('vehicle','vehicle_category')->where('user_id',auth()->user()->id)->get();
        $cats = VehicleCategory::all();
        return view('driver.vehicles', compact('vehicles','cats'));
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
    public function vehicleStatusUpdate(Request $request){
        if($request->id) {
            $bid = UserVehicle::find($request->id);
            $bid->status = $request->status;
            $bid->save();
        }
        return response()->json(['success' =>'Status updated  successfully'], 200);
    }

    public function addVehicle(Request $request){

            $vehicle = new UserVehicle;
            $vehicle->user_id = auth()->user()->id;
            $vehicle->vehicle_number = $request->vehicle_number;
            $vehicle->category_id = $request->veh_cat;
            $vehicle->vehicle_id = $request->vehicle;
            $vehicle->save();

        return redirect()->back()->with(['success' =>'Status updated  successfully'], 200);
    }
    public function upadteDriverVehicle(Request $request){

            $vehicle = UserVehicle::find($request->vehicle_id);

            $vehicle->vehicle_number = $request->vehicle_number;
            $vehicle->category_id = $request->veh_cat;
            $vehicle->vehicle_number = $request->edit_name;
            $vehicle->vehicle_id = $request->vehicle;
            $vehicle->is_verified =0;
            $vehicle->save();

        return redirect()->back()->with(['success' =>'Data updated  successfully'], 200);
    }
    public function getDriverVehicle(Request $request){
        $vehicle = UserVehicle::where('id',$request->id)->with('vehicle')->first();
        return response()->json(['vehicle' =>$vehicle], 200);
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

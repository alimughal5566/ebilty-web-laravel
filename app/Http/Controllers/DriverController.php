<?php

namespace App\Http\Controllers;
use App\Driver;
use App\Models\Admin\Setting\Shipment;
use App\Models\Admin\Setting\VehicleCategory;
use App\Models\UserVehicle;
use App\ShipmentBids;
use App\Events\NotificationEvent;;
use App\ShipmentStatus;
use App\Shippment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DriverController extends Controller
{

    public function __construct() {

        $this->middleware(['auth','role:driver|cracker|brocker_driver|company|company_driver']);

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
//        $vehicles = UserVehicle::where('user_id',auth()->user()->id)->where('is_verified',1)->select('vehicle_id')->get()->toArray();
        $shipments    = Shippment::where(function ($q){
            $q->Where( 'assigned_to', \auth()->id());
            })
            ->join('user_addresses','shippments.sender_address_id','user_addresses.id')
            ->select('shippments.*','shippments.id as s_id','user_addresses.*')
            ->orderBy('shippments.updated_at','desc')
            ->with('myBid','vehicle','vehicleType','packages','receiver','stat')->paginate('15');
            $statuses    = ShipmentStatus::where('id', '!=',9)->orderBy('id','asc')->get();
//            dd($shipments);
        return view('driver.shipment.index', compact('shipments','statuses'));
    }

    public function myDriverShipments(){

//        dd(\auth()->user()->id);
        $drivers= User::where('created_by',auth()->user()->id)->get()->toArray();
        $shipments    = Shippment::where(function ($q) use ($drivers){
         $q->where('assigned_to', NULL);
         $q->orWhere( 'assigned_to', $drivers);
        })->where('city_id', auth()->user()->city_id)
            ->join('user_addresses','shippments.sender_address_id','user_addresses.id')
            ->select('shippments.*','user_addresses.*','user_addresses.id as u_id','shippments.id as id')
            ->orderBy('shippments.id','desc')->with('myBid','vehicle','vehicleType','packages','receiver','stat')->paginate(6);

        $statuses = ShipmentStatus::where('id', '!=',9)->orderBy('id','asc')->get();
//        dd($shipments);
        return view('driver.shipment.mydrivershipments', compact('shipments','statuses'));
    }
    public function myAllShipments(){
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
        return view('user.my-all-shipments', compact('shipments','statuses'));
    }
    public function shipmentDriver(Request $request){
        $users = User::where('created_by',auth()->user()->id)
            ->join('user_vehicles','user_id','users.id')
            ->with('vehicle','vehicle_category')
            ->first();
        return response()->json($users);

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

        $receiver_id=Shipment::where('id',$request['order_id'])->pluck('user_id')->first();
        sendnote(auth()->user()->id , $receiver_id,'New Bid is Placed On Shipment# '.$request['order_id'] );

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

            sendnote($request->id , $bid->shipment->user_id, 'Bid revise request updated for shipment # '.$bid->shipment->shipment_id );
        }
        return response()->json(['success' =>'Data updated  successfully'], 200);
    }
    public function updateshipmentStatus(Request $request){
        if($request->id) {
            $bid = Shippment::find($request->id);
            $bid->status_id = $request->status;
            $bid->save();
        }
        $receiver_id=Shipment::where('id',$request->id)->pluck('user_id')->first();
        sendnote(auth()->user()->id , $receiver_id,'Shipment # '.$request['order_id'].' status update' );

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

<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Models\Admin\Setting\General_setting;
use App\Models\Admin\Setting\Vehicle;
use App\Models\Admin\Setting\VehicleCategory;
use App\Models\UserVehicle;
use App\Notification;
use App\phoneVerification;
use App\ShipmentArea;
use App\Shippment;
use App\State;
use App\User;
use App\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Twilio\Rest\Client;
use App\ShipmentTracking;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['sendMessage','otpVerifcationCheck']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){

       $add=General_setting::where('status',1)->where('section_name','advertisement_section')->inRandomOrder()->first();
       if(auth()->user()->hasRole('admin')){
            $shipments= Shippment::orderBy('updated_at','desc')->with('sender.user','receiver.user','status','bids.user','package.category')->paginate('15');
        }
       elseif(auth()->user()->hasAnyRole(['cracker', 'driver','company'])){
           $shipments    = Shippment::where(function ($q){
               $q->where('assigned_to', NULL);
               $q->orWhere( 'assigned_to', \auth()->id());
           })->where('city_id', auth()->user()->city_id)
               ->join('user_addresses','shippments.pickupaddress_id','user_addresses.id')
               ->select('shippments.*','user_addresses.*','user_addresses.id as add_id', 'shippments.id as id' )
               ->orderBy('shippments.updated_at','desc')
               ->with('myBid','vehicle','package','receiver')
               ->paginate('5');

       }
       elseif(auth()->user()->hasRole('customer')){
            $shipments= Shippment::orderBy('updated_at','desc')->where('user_id',auth()->user()->id)

                ->with('sender.user','package','receiver.user','status','bids.user')->paginate('5');

        }
       elseif(auth()->user()->hasRole('brocker_driver')){
            $shipments= Shippment::orderBy('updated_at','desc')->where('assigned_to',auth()->user()->id)->with('sender.user','package','receiver.user','status','bids.user')->paginate('5');

        }
       elseif(auth()->user()->hasRole('company_driver')){
            $shipments= Shippment::orderBy('updated_at','desc')
                ->where('assigned_to',auth()->user()->id)
                ->with('sender.user','package','receiver.user','status','bids.user')
                ->paginate('5');

        }
        $vehicles_cat=VehicleCategory::all();
//dd($shipments);
        return view('dashboard', compact('vehicles_cat','shipments','add'));
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
//        $states = City::where('state_id', $request->id)->wherehas('areas')->get();
        $states = City::where('state_id', $request->id)->get();
        return response()->json(['cities'=>$states]) ;
    }
    public function getArea(Request $request)
    {
        $states = ShipmentArea::where('city_id', $request->id)->get();
        return response()->json(['cities'=>$states]) ;
    }
    public function getUserAddress(Request $request){
        $address = UserAddress::where('user_id', $request->id)->get();
        return response()->json(['address'=>$address]) ;
    }
    public function profile($id){
        $user = User::where('id', $id)->with('country','state','city')->first();
        $countries=Country::all();
        return view('user.profile.show',compact('user','countries'));
    }
    public function updateLicense(Request $request){
        $user = User::where('id', auth()->user()->id)->first();
        if ($request->license_image) {
            $license_image = rand() . '.' . $request->license_image->extension();
            $request->license_image->move(public_path('images/license/'), $license_image);
            $user->license_image= $license_image;
        }
        if ($request->license_back_image) {
            $license_back_image = rand() . '.' . $request->license_back_image->extension();
            $request->license_back_image->move(public_path('images/license/'), $license_back_image);
            $user->license_back_image= $license_back_image;
        }
        $user->documents_verified=0;
        $user->license_number= $request->license_number;
        $user->save();
        return redirect()->back()->with(['success' =>'Data updated  successfully'], 200);
    }
    public function updateProfilePic(Request $request){
        $user = User::where('id', auth()->user()->id)->first();
        if ($request->profile_image) {
            $profile_image = rand() . '.' . $request->profile_image->extension();
            $request->profile_image->move(public_path('images/profile/'),$profile_image);
            $user->profile_image= $profile_image;
        }
        $user->documents_verified=0;
        $user->save();
        return redirect()->back()->with(['success' =>'Data updated  successfully'], 200);
    }
    public function updateLocationInfo(Request $request){
        $user = User::where('id', auth()->user()->id)->first();
        $user->country_id=$request->country_id;
        $user->state_id=$request->state_id;
        $user->city_id=$request->city_id;
        $user->documents_verified=0;
        $user->save();
        return redirect()->back()->with(['success' =>'Location details updated  successfully'], 200);
    }
    public function updateCnic(Request $request){
        $user = User::where('id', auth()->user()->id)->first();
        $cnic_image = '';
        if ($request->cnic_image) {
            $cnic_image = rand(). '.' . $request->cnic_image->extension();
            $request->cnic_image->move(public_path('/setting/cnic/'), $cnic_image);
            $user->cnic_image= $cnic_image;
        }
        $cnic_back_image = '';
        if ($request->cnic_back_image) {
            $cnic_back_image = rand(). '.' . $request->cnic_back_image->extension();
            $request->cnic_back_image->move(public_path('/setting/cnic/'), $cnic_back_image);
            $user->cnic_back_image = $cnic_back_image;
        }
        $user->documents_verified=0;
        $user->cnic_number= $request->cnic_number;
        $user->save();
        return redirect()->back()->with(['success' =>'Data updated  successfully'], 200);
    }
    public function requestToEdit(){
        $user = User::where('id', auth()->user()->id)->first();
        $user->edit_request=3;
        $user->save();
        return redirect()->back()->with(['success' =>'Request send successfully'], 200);
    }
    public function drivers(){
        $users = User::whereHas(
            'roles', function($q){
            $q->where('name', 'driver');
        }
        )->with('assignedShipments.sender.user','assignedShipments.receiver.user','assignedShipments.status','city')->get();
//        dd($users);
        return view('admin.drivers', compact('users'));

    }
    public function companies(){
        $users = User::whereHas(
            'roles', function($q){
            $q->where('name', 'company');
        }
        )->with('assignedShipments.sender.user','assignedShipments.receiver.user','assignedShipments.status','city')->get();
//        dd($users);
        return view('admin.company', compact('users'));

    }
    public function customers(){
        $users = User::whereHas(
            'roles', function($q){
            $q->where('name', 'customer');
        }
        )->with('shipments.sender.user','shipments.receiver.user','shipments.status','shipments.assignedto')->get();
        return view('admin.customers', compact('users'));
    }
    public function crackers(){
        $users = User::whereHas(
            'roles', function($q){
            $q->where('name', 'cracker');
        }
        )->with('city','myDrivers')->get();
//        dd($users);
        $countries=Country::all();

        return view('admin.crackers', compact('users', 'countries'));
    }
    public function myDrivers(){
        if (Auth::user()->hasRole('cracker')){
        $users = User::where('created_by',auth()->user()->id)->whereHas(
            'roles', function($q){
            $q->where('name', 'brocker_driver');
        }
        )->with('assignedShipments.sender.user','assignedShipments.receiver.user','assignedShipments.status','city')->get();

        }elseif (Auth::user()->hasRole('company')){
            $users = User::where('created_by',auth()->user()->id)->whereHas(
                'roles', function($q){
                $q->where('name', 'company_driver');
            }
            )->with('assignedShipments.sender.user','assignedShipments.receiver.user','assignedShipments.status','city')->get();

        }
        $vehicles_cat= VehicleCategory::all();
        return view('user.my_users', compact('users','vehicles_cat'));
    }
    public function myVehicles(){
        if (Auth::user()->hasRole('cracker')){
            $vehicles = UserVehicle::where('user_id',auth()->user()->id)->with('vehicle')->get();

        }elseif (Auth::user()->hasRole('company')){
            $vehicles = UserVehicle::where('user_id',auth()->user()->id)->with('vehicle')->get();

        }
        $vehs = Vehicle::all();
        return view('user.my_vehicles', compact('vehicles','vehs'));
    }
    public function getCompanyDrivers(){
        $drivers = User::where('created_by', \auth()->user()->id)->get();
        $vehicles = UserVehicle::where('user_id', \auth()->user()->id)->get();
        return response()->json([
            'success' => true,
            'drivers' => $drivers,
            'vehicles'=> $vehicles
        ]);
    }
    public function assignShipment(Request $request){
//        dd($request->all());
        $shipment = Shippment::find($request->shipment_id);
        $shipment->assigned_to = $request->driver_id;
        $shipment->assigned_by = Auth::id();
        $shipment->assigned_vehicle_id = $request->driver_vehicle_id;
        $shipment->update();
        $driver = User::find($request->driver_id);
        $driver->is_available = 0;
        $driver->update();
        return redirect()->back()->with('success', 'Vehicle assigned successfully');
    }
    public function createVehicle(Request $request){
        $vehicle = new UserVehicle();
        $vehicle->user_id = \auth()->user()->id;
        $vehicle->vehicle_id = $request->vehicle_id;
        $vehicle->vehicle_number = $request->vehicle_number;
        $vehicle->model = $request->model;
        $vehicle->name = $request->name;
        $vehicle->registration_city = $request->registration_city;
        $vehicle->body_size = $request->body_size;
        $vehicle->capacity = $request->capacity;
        $vehicle->owner_name = $request->owner_name;
        $vehicle->phone = $request->phone;
        $l_f ='';
        $l_b ='';
        $v_r ='';
        if ($request->license_front_image){
            $l_f = $this->storeVehicleimage($request->license_front_image);
        }
        if ($request->license_back_image){
            $l_b = $this->storeVehicleimage($request->license_back_image);
        }
        if ($request->vehicle_registration_image){
            $v_r = $this->storeVehicleimage($request->vehicle_registration_image);
        }
        $vehicle->license_front_image = $l_f;
        $vehicle->license_back_image = $l_b;
        $vehicle->vehicle_registration_image = $v_r;
        $vehicle->save();
        return redirect()->back()->with(['success' =>'Vehicle registered successfully']);

    }
    public function storeVehicleimage($file){
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =rand().'.'.$extension;
        $file->move('images/user_vehicles', $filename);
        return $filename;
    }
    public function myDriversApi(){
        $users = array();
        if (Auth::user()->hasRole('company')){
            $users = User::where('created_by',auth()->user()->id)->whereHas(
                'roles', function($q){
                $q->where('name', 'company_driver');
            }
            )->with('assignedShipments.sender.user','assignedShipments.receiver.user','assignedShipments.status','city')->get();

        }
        return response()->json([
            'drivers' => $users
        ], 200);
    }
    public function shipments(){
        $shipments= Shippment::orderBy('updated_at','desc')->with('sender.user','receiver.user','status','bids.user')->paginate('15');
        return view('admin.shipment.index', compact('shipments'));
    }
    public function mysavedlocations(){
        $addresses = UserAddress::with('state','city')->where('user_id',auth()->user()->id)->get();
        $countries = Country::all();
//        dd($addresses);
        return view('user.adddresses', compact('addresses','countries'));
    }
    public function docVerify($id){
        $user = User::where('id', $id)->first();
        $user->documents_verified=1;
        $user->edit_request=0;
        $user->save();

        $user_vehicle = UserVehicle::where('user_id', $user->id)->first();
        if($user_vehicle){
            $user_vehicle->is_verified = 1;
            $user_vehicle->update();
        }
        return redirect()->back()->with(['success' =>'Documents verified successfully'], 200);
    }
    public function approveEditRequest($id){
        $user = User::where('id', $id)->first();
        $user->edit_request=1;
        $user->save();
        return redirect()->back()->with(['success' =>'Edit request updated successfully'], 200);
    }
    public function updatePersonalInfo(Request $request){
        $user = User::where('id', auth()->user()->id)->first();
        $user->name=$request->nam;
        $user->phone=$request->phone;
        $user->edit_request=0;
        $user->save();
        return redirect()->back()->with(['success' =>'Profile details updated successfully']);
    }
    public function addAddress(Request $request){
        $user = new UserAddress;
        $user->address=$request->address;
        $user->country_id=$request->country;
        $user->state_id=$request->state;
        $user->city_id=$request->city;
        $user->area_id=$request->area;
        $user->created_by=auth()->user()->id;
        $user->user_id=auth()->user()->id;
        $user->zip=$request->zip;
        $user->form	='add-location';
        $user->save();
        return redirect()->back()->with(['success' =>'Location added  successfully']);
    }
    public function addressStatusUpdate(Request $request){
        if($request->id){
            $UserAddress = UserAddress::find($request->id);
            $UserAddress->is_default =1;
            $UserAddress->save();

            UserAddress::where('user_id' ,auth()->user()->id)
                ->where('id' ,'!=', $request->id)
                ->update(['is_default' =>0]);
        }
        return response()->json(['success' =>'Status updated  successfully'], 200);
    }
    public function sendMessage(Request $request){
        try{
//            $code = mt_rand(1000, 9999);
//            $client = new Client(env('TWILIO_P_ID'),env('TWILIO_s_ID'));
//            $client->messages->create(
//                '',
//                [
//                    'from' =>env('TWILIO_From_NUMBER'),
//                    'body' =>'Thankyou for signing up in ebilty. Your verification code is: '.$code,
//                ]
//            );
//
            $code = mt_rand(1000, 9999);
            $client = new Client(env('TWILIO_P_ID'),env('TWILIO_S_ID'));
            $client->messages->create(
                $request->number,
                [
                    'from' =>env('TWILIO_From_NUMBER'),
                    'body' =>'Thankyou for signing up in ebilty. Your verification code is: '.$code,
                ]
            );
            $phone= phoneVerification::where('number',$request->number)->first();
            if(!$phone){
                $phone= new phoneVerification;
            }
            $phone->number= $request->number;
            $phone->code=$code;
            $phone->is_verified=0;
            $phone->save();
            return response()->json(['success' =>'true'], 200);
        } catch (\Exception $e){
            return response()->json(['success' =>'false','data'=> $e->getMessage()], 200);
        }
    }
    public function otpVerifcationCheck(Request $request){
            $phone= phoneVerification::where('number',$request->number)->first();
            if($phone){
                if($request->code==$phone->code) {
                    $phone->is_verified=1;
                    $phone->save();
                    return response()->json(['success' => 'true', 'message' => 'Number verifies successfully'], 200);
                }else{
                    return response()->json(['success' =>'false','message'=>'Code is incorrect'], 200);
                }
            }else{
                return response()->json(['success' =>'false','message'=>'Number not found'], 200);
            }
            return response()->json(['success' =>'true'], 200);
    }
    public function getAllNotfication(){
        $allnotfications=Notification::where('receiver_id',\auth()->id())->orderBy('id','DESC')->paginate(4);
        return response()->json($allnotfications);
    }
    public function countAllNotification(){
        $noti_count=Notification::where('receiver_id',\auth()->id())->count();

        return response()->json($noti_count);
    }
    public function showTracking(){
        return view('user.tracking.showmap');
    }





}

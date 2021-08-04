<?php

namespace App\Http\Controllers\Api;
use App\Models\Admin\Setting\General_setting;
use App\Models\Admin\Setting\Shipment;
use App\Models\Admin\Setting\Vehicle;
use App\ShipmentBids;
use App\Shippment;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\UserVehicle;
use App\Models\Admin\Setting\VehicleCategory;
use Validator;

class HomeController extends Controller
{
    public function getCompanyDrivers(){
        if(\Auth::check()){
            $drivers = User::where('created_by', \auth()->user()->id)->get();
            $categories = VehicleCategory::all();
            return response()->json([
                'drivers' => $drivers,
                'categories' => $categories
            ]);
        }
    }
    public function updateProfile(Request $request){
        if(\Auth::check()){
            $user  = \Auth::user();
            $user->name = $request->name;
            $user->phone = $request->phone;
            if(\Hash::check($request->current_pass , $user->password)){
                $user->password = bcrypt($request->new_pass);
            }
            else{
                return response()->json(['error' => 'Password Not matched with current Password']);
            }
            if($request->hasFile('profile_pic')){
                $path = storeImage($request->profile_pic);
                $user->profile_image = $path;
            }
            $user->save();
            return response()->json(['data' => ['message' => 'user Update Successfuly' , 'user' => $user]]);
        }
    }
    public function addDriver(Request $request){
        if (\auth()->user()->id){
            if (Auth::check()){
                $pp = '';
                $cf = '';
                $cb = '';
                $lf = '';
                $lb = '';
                if ($request->profile_picture && $request->cnic_image_front && $request->cnic_image_back){
                    $lf = storeImage($request->license_image);
                    $lb = storeImage($request->license_back_image);
                    $pp = storeImage($request->profile_picture);
                    $cf = storeImage($request->cnic_image_front);
                    $cb = storeImage($request->cnic_image_back);
                }
                $user = new User([
                    'name' => $request->full_name,
                    'phone' => $request->phone,
                    'password' => bcrypt($request->password),
                    'email' => $request->email,
                    'profile_image' => $pp,
                    'cnic_image' => $cf,
                    'cnic_back_image' => $cb,
                    'license_image' => $lf,
                    'license_back_image' => $lb,
                    'created_by' => \auth()->user()->id
                ]);
                $user->save();
                $user->assignRole('company_driver');

                return response()->json([
                    'success' => true,
                    'message' => 'Driver Created Successfully',
                    'driver' => $user
                ]);
            }
        }
    }
    public function addDriverVehicle(Request $request){

//        if (\auth()->user()->id){

            $lf ='';
            $lb = '';
            $vi = '';
            if ( $request->vehicle_registration_image){
                $vi = storeImage($request->vehicle_registration_image);
            }
            $user_vehicle = new UserVehicle();
            $user_vehicle->user_id =Auth::id();
            $user_vehicle->license_front_image = $lf;
            $user_vehicle->license_back_image = $lb;
            $user_vehicle->vehicle_registration_image = $vi;
            $user_vehicle->model = $request->model;
            $user_vehicle->name = $request->name;
            $user_vehicle->category_id = $request->category_id;
            $user_vehicle->vehicle_id = $request->vehicle_id;
            $user_vehicle->vehicle_number = $request->vehicle_number;
            $user_vehicle->registration_city = $request->registration_city;
            $user_vehicle->body_size = $request->body_size;
            $user_vehicle->capacity = $request->capacity;
            $user_vehicle->owner_name = $request->owner_name;
            $user_vehicle->phone = $request->phone;
            $user_vehicle->save();
            return response()->json([
                'success' => true,
                'message' => 'Vehicle created and assigned Successfully',

                'vehicle' => $user_vehicle
            ]);
        }
    public function allShipments(){

        $add=General_setting::where('status',1)->where('section_name','advertisement_section')->inRandomOrder()->first();
        if(auth()->user()->hasRole('admin')){
            $shipments= Shippment::orderBy('updated_at','desc')->with('sender.user','receiver.user','status','bids.user','packages.category')->get();
        }
        elseif(auth()->user()->hasAnyRole(['cracker', 'driver','company'])){
            $shipments    = Shippment::where(function ($q){
                $q->where('assigned_to', NULL);
                $q->orWhere( 'assigned_to', \auth()->id());
            })->where('city_id', auth()->user()->city_id)
                ->join('user_addresses','shippments.sender_address_id','user_addresses.id')
                ->select('shippments.*','shippments.id as s_id','user_addresses.*')
                ->orderBy('shippments.updated_at','desc')
                ->with('myBid','vehicle','vehicleType','packages','receiver')
                ->get();

        }
        elseif(auth()->user()->hasRole('customer')){
            $shipments= Shippment::orderBy('updated_at','desc')->where('user_id',auth()->user()->id)
                ->with('sender.user','packages','receiver.user','status','bids.user')->get();
        }
        elseif(auth()->user()->hasRole('brocker_driver')){
            $shipments= Shippment::orderBy('updated_at','desc')->where('assigned_to',auth()->user()->id)->with('sender.user','packages','receiver.user','status','bids.user')->get();
        }
        elseif(auth()->user()->hasRole('company_driver')){
            $shipments= Shippment::orderBy('updated_at','desc')
                ->where('assigned_to',auth()->user()->id)
                ->with('sender.user','packages','receiver.user','status','bids.user')
                ->get();
        }
        $vehicles_cat=VehicleCategory::all();
        return response()->json([
            'success' => true,
            'message' => 'all shipments',
            'shipments' => $shipments,
            ]);
    }
    public function getAllDrivers(){

        $all_drivers=User::where('created_by',Auth::id())->get();
        return response()->json([
            'success' => true,
            'message' => 'all Drivers',
            'all_drivers' => $all_drivers,
        ]);
    }
    public function getAllVehicles(){

        $all_vehicles=UserVehicle::with('vehicle_category','vehicle')->where('user_id',Auth::id())->get();
        return response()->json([
            'success' => true,
            'message' => 'all vehicles',
            'vehicles' => $all_Vehicles,
            ]);
    }


   public function assignDriver(Request $request){
//        dd($request);
       $user=new User();
       $getUser=$user->where('id',$request->user_id)->first();
       $vehicle=new UserVehicle();
       $getVehicle=$vehicle->where('id',$request->vehicle_id)->first();
        if($getUser->is_available==1){
            if($getVehicle->assign_id == 0) {
                $user->where('id',$request->user_id)->update(['is_available'=>0]);
                $vehicle->where('id',$request->vehicle_id)->update(['assign_id'=>$request->user_id]);
                return response()->json([
                    'success' => true,
                    'message' => 'Driver Is Assigned Successfully',
                ]);
        }else{
                return response()->json([
                    'success' => false,
                    'message' => 'vehicle is Not Available',
                ]);
        }

        }else{
            return response()->json([
                'success' => false,
                'message' => 'Driver is Not Available',
            ]);
        }

   }

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


    public function allVehicles(){
        if(Auth::check()){
            $vechiles=Vehicle::where('status',1)->get();
            return response()->json([
                'success' => true,
                'message' => 'Driver is Not Available',
                'vechiles' =>$vechiles,
            ],200);
        }
        return response()->json(['success' =>false,'message' => 'Something Went Wrong' ]);
    }


}

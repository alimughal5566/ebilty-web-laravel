<?php
namespace App\Http\Controllers\Api;
use App\Models\Admin\Setting\General_setting;
use App\Models\Admin\Setting\Shipment;
use App\Models\Admin\Setting\Vehicle;
use App\ShipmentBids;
use App\Shippment;
use App\ShippmentPackage;
use App\UserAddress;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\UserVehicle;
use App\Models\Admin\Setting\VehicleCategory;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Validator;
use App\ShipmentTracking;
use App\Notification;
use Kreait\Firebase\Messaging;

class HomeController extends Controller
{
    protected $messaging;

    public function __construct(Messaging $messaging)
    {
        $this->messaging = $messaging;
    }

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
        if(Auth::check()){
            $user  = Auth::user();
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->fcm_token = $request->fcm_token;
            $user->plate_form = $request->plate_form;
            if(!empty($request->current_pass) && !empty($request->new_pass)){
              if(Hash::check($request->current_pass , $user->password)){
                  $user->password = bcrypt($request->new_pass);
              }
              else{
                  return response()->json(['error' => 'Password Not matched with current Password']);
              }
            }
            if($request->hasFile('profile_pic')){
                $path = storeImage($request->profile_pic);
                $user->profile_image = $path;
            }
            $user->update();
            return response()->json(['data' => ['message' => 'user Update Successfuly' , 'user' => $user]]);
        }
    }
    public function addDriver(Request $request){
        if (\auth()->user()->id){


            $validator = Validator::make($request->all(), [
                'phone' => ['required', 'unique:users,phone'],
                'email' => ['required', 'string', 'email', 'unique:users,email'],
            ]);
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 200);
            }


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
            })
//                ->where('city_id', auth()->user()->city_id)
                ->join('user_addresses','shippments.pickupaddress_id','user_addresses.id')
                ->select('shippments.*','user_addresses.*','user_addresses.id as add_id', 'shippments.id as id' )
                ->orderBy('shippments.updated_at','desc')
                ->with('myBid','vehicle','package','receiver')
                ->get();

        }
        elseif(auth()->user()->hasRole('customer')){
            $shipments= Shippment::orderBy('updated_at','desc')->where('user_id',auth()->user()->id)
                ->with('sender.user','package','vehicle','receiver.user','status','bids.user')->get();
        }
        elseif(auth()->user()->hasRole('brocker_driver')){
            $shipments= Shippment::orderBy('updated_at','desc')->where('assigned_to',auth()->user()->id)->with('sender.user','vehicle','package','receiver.user','status','bids.user')->get();
        }
        elseif(auth()->user()->hasRole('company_driver')){
            $shipments= Shippment::orderBy('updated_at','desc')
                ->where('assigned_to',auth()->user()->id)
                ->with('sender.user','vehicle','package','receiver.user','status','bids.user')
                ->get();
        }
        $vehicles_cat=VehicleCategory::all();
        return response()->json([
            'success' => true,
            'message' => 'all shipments',
            'shipments' => @$shipments,
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

        $all_vehicles=UserVehicle::with('vehicle')->where('user_id',Auth::id())->get();
        return response()->json([
            'success' => true,
            'message' => 'all vehicles',
            'vehicles' => $all_vehicles,
            ]);
    }
    public function assignDriver(Request $request){


       $getUser=User::where('id',$request->driver_id)
       ->update(['is_available'=>0]);
        $shipment = Shippment::find($request->shipment_id);
        $shipment->assigned_to = $request->driver_id;
        $shipment->assigned_by = Auth::id();
        $shipment->assigned_at = now();
        $shipment->assigned_vehicle_id = $request->vehicle_id;
        $shipment->update();
        return response()->json([
                'success' => true,
                'message' => 'Driver Is Assigned Successfully',
            ]);
   }
    public function bidStore(Request $request){
        $bid= new ShipmentBids;
        $bid->shipment_id = $request['shipment_id'];
        $bid->bid_amount = $request['bid_amount'];
        $bid->user_id = auth()->user()->id;
        $bid->save();

        $receiver_id=Shipment::where('id',$request['shipment_id'])->pluck('user_id')->first();
        sendnote(auth()->user()->id , $receiver_id,'New Bid is Placed On Shipment# '.$request['order_id'] );

        return response()->json(['success' =>'Bid created successfully'], 200);

    }
    public function allVehicles(){
        if(Auth::check()){
            $vehicles=Vehicle::where('status',1)->get();
            return response()->json([
                'success' => true,
                'message' => 'all vehicles',
                'vehicles' =>$vehicles,
            ],200);
        }
        return response()->json(['success' =>false,'message' => 'Something Went Wrong' ]);
    }
    public function storeShipment(Request $request){


        $savepickup=UserAddress::create([
            'user_id'=>Auth::id(),
            'lat'=>$request->p_lat,
            'lng'=>$request->p_lng,
            'country_id'=>$request->pcountry_id,
            'state_id'=>$request->pstate_id,
            'city_id'=>$request->pcity_id,
            'address'=>$request->paddress,
            'user_name'=>$request->sender_name,
            'floor'=>$request->pfloor,
            'building'=>$request->pbuilding,
            'street'=>$request->pstreet,
        ]);
        $savedropof=UserAddress::create([
            'user_id'=>Auth::id(),
            'user_name'=>$request->receiver_name,
            'lat'=>$request->d_lat,
            'lng'=>$request->d_lng,
            'country_id'=>$request->dcountry_id,
            'state_id'=>$request->dstate_id,
            'city_id'=>$request->dcity_id,
            'address'=>$request->daddress,
            'floor'=>$request->dfloor,
            'building'=>$request->dbuilding,
            'street'=>$request->dstreet,
        ]);
        $shipment=new Shippment;
        $shipment->user_id= auth()->user()->id;
        $shipment->ship_date= $request->ship_date;
        $shipment->pickupaddress_id= $savepickup->id;
        $shipment->dropofupaddress_id=$savedropof->id;
        $shipment->ship_time= $request->ship_time;
        $shipment->dilivery_type= $request->dilivery_type;
        $shipment->is_insured= $request->is_insured;
        $shipment->payment_type= $request->payment_type;
        $shipment->package_cost= $request->package_cost;
        $shipment->vehicle_id= $request->vehicle_id;
        $shipment->extra_info = $request->extra_info;
        $shipment->status_id=9;

        if ($request->invoice_image) {
            $invoice_image = time() . '.' . $request->invoice_image->extension();
            $request->invoice_image->move(public_path('images/shipment-invoices'), $invoice_image);
            $shipment->invoice_image=$invoice_image;
        }
        $shipment->save();
        QrCode::size(125)->format('svg')->generate($shipment->id, public_path('images/qrcodes/'.$shipment->id.'.svg'));
//        if($request->category_id) {

                $package = new ShippmentPackage;
                $package->shippment_id = $shipment->id;
                $package->package_category_id = $request->category_id;
                $package->description = $request->description;
                $package->name = $request->product_name;
                $package->quantity = $request->quantity;
                $package->weight = $request->weight;
                $package->length = $request->length;
                $package->width = $request->width;
                $package->height = $request->height;
                $package->save();


//        }
        $shipment= Shippment::where('id',$shipment->id)->with('status','bids','package')->first();

        return response()->json([
            'shipment' => $shipment,
            'pickup' => $savepickup,
            'dropof' => $savedropof,
        ]);

    }
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     *
     * approve bid and accept and reject bit
     */
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
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     *
     * send revision
     */
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
    public function show($id){
        $shipment= Shippment::where('id',$id)->with('vehicle','sender.user','receiver.user','status','user','sender.city','sender.state','receiver.city','receiver.state','bids','package.category')->first();
//        dd($shipment);
        return response()->json([
            'success' =>'All shipments',
            'shipment' =>$shipment,

            ], 200);
    }
    public function shipmentStatusFilter(){

        $add=General_setting::where('status',1)->where('section_name','advertisement_section')->inRandomOrder()->first();

        if(auth()->user()->hasAnyRole(['cracker', 'driver','company'])){

            $shipments    = Shippment::where(function ($q){
                $q->where('assigned_by', \auth()->id());
                $q->orWhere( 'assigned_to', \auth()->id());
            })
                ->leftJoin('user_addresses','shippments.pickupaddress_id','user_addresses.id')
                ->select('shippments.*','user_addresses.*','user_addresses.id as add_id', 'shippments.id as id' )
                ->orderBy('shippments.updated_at','desc')
                ->with('myBid','vehicle','package','receiver')
                ->get()
                ;

        }
        elseif(auth()->user()->hasRole('customer')){
            $shipments= Shippment::orderBy('updated_at','desc')->where('user_id',auth()->user()->id)
                ->with('sender.user','vehicle','package','receiver.user','status','bids.user')->get();
        }
        elseif(auth()->user()->hasRole(['company_driver','brocker_driver'])){
            $shipments= Shippment::orderBy('updated_at','desc')->where('assigned_to',auth()->user()->id)->with('sender.user','package','receiver.user','status','bids.user','vehicle');
        }
        $vehicles_cat=VehicleCategory::all();
        $inprocess =$shipments->whereNotIn('status_id',[1,7,8,9])->values();
        $assigned =$shipments->where('status_id','1')->values();
        $delivered =$shipments->where('status_id','7')->values();
//dd($inprocess);
        return response()->json([
            'message' => 'filter shipments',
            'inprocess' => $inprocess,
            'delivered' => $delivered,
            'assigned' => $assigned,
        ]);
    }
    public function myBids($id){
        $myBids=ShipmentBids::where('shipment_id',$id)->where('user_id',Auth::id())->first();
        return response()->json([
            'success'=>'My All Bids',
            'myBids'=>$myBids

        ]);
    }
    public function setCordinates(Request $request){
        $shipment = ShipmentTracking::where('shipment_id' , $request->shipment_id)
        ->first();
        if(!$shipment){
            $shipment = new ShipmentTracking;
            $shipment->shipment_id = $request->shipment_id;
            $shipment->start_lat = $request->start_lat;
            $shipment->start_lng = $request->start_lng;
            $shipment->end_lat = $request->end_lat;
            $shipment->end_lng = $request->end_lng;
            $shipment->mid_lat = $request->mid_lat;
            $shipment->mid_lng = $request->mid_lng;
            $shipment->save();
        }
        else{
            $shipment->mid_lat = $request->mid_lat;
            $shipment->mid_lng = $request->mid_lng;
            $shipment->save();
        }
        return response()->json($shipment);
    }

    public function sendNotification(Request $request)
    {

        if (Auth::check()){
        $data['device_token'] = Auth::user()->fcm_token;
        $data['title'] = 'Your bid has been updated';
        $data['body'] = 'User has placed bid for RS 500';
        $data['image_url'] = 'http://lorempixel.com/200/50/';
        $message = sendPushNotification($data);
        $this->messaging->send($message);
        return "message sent";
        }
        else{
            return "Login please";
        }

    }

    public function updateStatus(Request $request){


        $getUser=Shipment::where('id',$request->shipment_id)
            ->update(['status_id'=>$request->status_id]);
        return response()->json([
            'success' => true,
            'message' => 'Status Changed Successfully',
        ]);
    }
    public function getAllNotifications(){
        $allnotfications=Notification::where('receiver_id',Auth::id())->orderBy('id','DESC')->paginate(4);
        return response()->json($allnotfications);
    }

    public function getTrackingPoints($id){
        $shipment = ShipmentTracking::where('shipment_id' , $id)
        ->select('end_lat' , 'end_lng' ,  'mid_lat' , 'mid_lng','start_lat' , 'start_lng'  )
        ->first();
        return response()->json($shipment);
    }

}

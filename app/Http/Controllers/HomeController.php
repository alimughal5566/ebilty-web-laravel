<?php

namespace App\Http\Controllers;

use App\City;
use App\Models\Admin\Setting\Vehicle;
use App\ShipmentArea;
use App\Shippment;
use App\State;
use App\User;
use App\UserAddress;
use Illuminate\Http\Request;

use Twilio\Rest\Client;

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
    public function getStates(Request $request)
    {
        $states = State::where('country_id', $request->id)->wherehas('cities')->get();
        return response()->json(['states'=>$states]) ;
    }
    public function getCities(Request $request)
    {
        $states = City::where('state_id', $request->id)->wherehas('areas')->get();
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
        $user = User::where('id', $id)->first();
        return view('user.profile.show',compact('user'));
    }


    public function updateLicense(Request $request){
        $user = User::where('id', auth()->user()->id)->first();

        if ($request->license_image) {
            $license_image = time() . '.' . $request->license_image->extension();
            $request->license_image->move(public_path('images/license/'), $license_image);
            $user->license_image= $license_image;
        }
        $user->documents_verified=0;
        $user->license_number= $request->license_number;
        $user->save();
        return redirect()->back()->with(['success' =>'Data updated  successfully'], 200);
    }
    public function updateCnic(Request $request){
        $user = User::where('id', auth()->user()->id)->first();
        if ($request->cnic_image) {
            $cnic_image = time() . '.' . $request->cnic_image->extension();
            $request->cnic_image->move(public_path('/setting/cnic/'), $cnic_image);
            $user->cnic_image= $cnic_image;
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
        )->with('assignedShipments.sender.user','assignedShipments.receiver.user','assignedShipments.status')->get();
        return view('admin.drivers', compact('users'));
    }

    public function customers(){

        $users = User::whereHas(
            'roles', function($q){
            $q->where('name', 'customer');
        }
        )->with('shipments.sender.user','shipments.receiver.user','shipments.status','shipments.assignedto')->get();
        return view('admin.customers', compact('users'));
    }

    public function shipments(){
        $shipments= Shippment::orderBy('updated_at','desc')->with('sender.user','receiver.user','status','bids.user')->paginate('15');
//        dd($shipments);
        return view('admin.shipment.index', compact('shipments'));
    }

    public function docVerify($id){
        $user = User::where('id', $id)->first();
        $user->documents_verified=1;
        $user->save();
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


    public function sendMessage(){
//        $recipients="00923045903545";
//        $account_sid ='AC5683d8fe206b469101470ecb88c9bf44';
//        $auth_token = '6b10cdf9bed6f8afbfb776d7706b94b3';
//        $twilio_number = '923111460595';
//        dd($auth_token);
        $code = mt_rand(1000, 9999);
        $client = new Client( 'AC5683d8fe206b469101470ecb88c9bf44', '6b10cdf9bed6f8afbfb776d7706b94b3');
//        dd($client);
        $client->messages->create(
           '+923040902523',
            [
                'from' => '+14145090655',
                'body' => $code,
            ]
        );


//        $client = new Client($account_sid, $auth_token);
//        $client->messages->create($recipients,
//            ['from' => $twilio_number, 'body' =>'1321'] );
        dd('sends');



    }


}

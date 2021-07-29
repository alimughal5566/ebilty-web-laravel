<?php

namespace App\Http\Controllers\Api;
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
            $validator = Validator::make($request->all(), [
                'license_image' => ['required'],
                'license_back_image' => ['required'],
                'profile_picture' => ['required'],
                'cnic_image_front' => ['required'],
                'cnic_image_back' => ['required'],
                'phone' => ['required', 'unique:users,phone'],
                'full_name' => ['required'],
                'password' => ['required'],
                'email' => ['required', 'string', 'email', 'unique:users,email'],
            ]);
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()] , 200);
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
    public function addDriverVehicle(Request $request, $id){
        $user = User::find($id);
        if ($user && \auth()->user()->id){
            $validator = Validator::make($request->all(), [

                'vehicle_registration_image' => ['required'],
                'model' => ['required'],
                'name' => ['required'],
                'category_id' => ['required'],
                'vehicle_id' => ['required'],
                'vehicle_number' => ['required'],
                'registration_city' => ['required'],
                'body_size' => ['required'],
                'capacity' => ['required'],
                'owner_name' => ['required'],
                'phone' => ['required']
            ]);
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()] , 200);
            }
            $lf ='';
            $lb = '';
            $vi = '';
            if ( $request->vehicle_registration_image){
                $vi = storeImage($request->vehicle_registration_image);
            }
            $user_vehicle = new UserVehicle();
            $user_vehicle->user_id = $id;
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
                'driver' => $user,
                'vehicle' => $user_vehicle
            ]);
        }else{
            return response()->json([
                'message' => 'Driver does not exist',
            ],404);
        }
    }


}

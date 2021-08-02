<?php
namespace App\Http\Controllers;
use App\City;
use App\Country;
use App\Http\Requests\front\signup\SignupOtp;
use App\Models\Admin\Setting\Vehicle;
use App\Models\UserVehicle;
use App\Patient;
use App\State;
use App\UserAddress;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\Hash;
use Validator;


class AuthController extends Controller
{
    /**
     * Create user
     *
     * @param  [string] name
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @return [string] message
     */
    public function mobileSignup(Request $request){
        $validator = Validator::make($request->all(), [
            'full_name' => ['required', 'min:3'],
            'phone' => ['required', 'unique:users,phone'],
            'email' => ['required', 'string', 'email', 'unique:users,email'],
            'password' => ['required', 'min:4'],
            'register_as' => ['required'],
            'lat' => ['required'],
            'long' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 200);
        }
        $geolocation = $request->lat . ',' . $request->long;
        $ct = '';
        $st = '';
        $cit = '';
        $map_cdn = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' . $geolocation . '&sensor=true&key=AIzaSyCoM2N8BXBveNHlX96-EjCkpaQDd7mVrLI';
        $file_contents = file_get_contents($map_cdn);
        $json_decode = json_decode($file_contents);
        if (isset($json_decode->results[0])) {
            for ($i = 0; $i < count($json_decode->results[0]->address_components); $i++){
                if ($json_decode->results[0]->address_components[$i]->types[0] == 'locality'){
                    $cit = $json_decode->results[0]->address_components[$i]->long_name;
                }
                if ($json_decode->results[0]->address_components[$i]->types[0] == 'administrative_area_level_1'){
                    $st = $json_decode->results[0]->address_components[$i]->long_name;
                }
                if ($json_decode->results[0]->address_components[$i]->types[0] == 'country'){
                    $ct = $json_decode->results[0]->address_components[$i]->long_name;
                }
            }
        }
        $country = Country::where('name',$ct)->first();
        $state = State::where('name',$st)->first();
        $city = City::where('name',$cit)->first();
        $user = new User([
            'name' => $request->full_name,
            'postal_code' => $request->postal_code,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'country_id' => isset($country->id) ? $country->id : '' ,
            'state_id' => isset($state->id)  ? $state->id : '',
            'city_id' => isset($city->id) ? $city->id : '',
            'latitude' => $request->lat,
            'longitude' => $request->long
        ]);
        $user->save();
        if ($request->register_as == '1'){
            $user->assignRole('customer');
        }elseif($request->register_as == '2'){

            $veh = new UserVehicle([
                'user_id' => $user->id
            ]);
            $veh->save();
            $user->assignRole('driver');
        }elseif($request->register_as == '3'){
            $user->assignRole('company');
        }
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
            $token->expires_at = Carbon::now()->addWeeks(10);
            $token->save();
            $role = 0;
            if ($user->hasRole('customer')){
                $role = 1;
            }elseif ($user->hasRole('driver')){
                $role = 2;
            }elseif ($user->hasRole('company')){
                $role = 3;
            }
//            event(new Registered($user));
            return response()->json([
                'access_token' => $tokenResult->accessToken,
                'token_type' => 'Bearer',
                'expires_at' => Carbon::parse(
                    $tokenResult->token->expires_at
                )->toDateTimeString(),
                'user' => $user,
                'role' => $role
            ],200);
    }
    public function getProfile(){
        if (Auth::check()){
            $user = User::with('vehicle')->where('id', \auth()->user()->id)->first();
            if (!empty($user)){
                return response()->json([
                    'success' => true,
                    'profile' => $user
                ], 200);
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Not found'
                ], 404);
            }
        }else{
            return response()->json([
                'message' => 'Unauthorised'
            ], 422);
        }
    }
    public function updateProfile(Request $request){

    }
    public  function updateDriverProfile(Request $request){
        if (\auth()->user()->hasRoles('driver')){
            $validator = Validator::make($request->all(), [
                'country_id' => ['required'],
                'state_id' => ['required'],
                'city_id' => ['required'],
                'profile_picture' => ['required'],
                'cnic_image_front' => ['required'],
                'cnic_image_back' => ['required'],
                'license_front_image' => ['required'],
                'license_back_image' => ['required'],
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
                return response()->json(['error' => $validator->errors()], 422);
            }
            if (Auth::check()){
                $user = User::where('id', \auth()->user()->id)->first();
                $user_vehicle = UserVehicle::where('user_id', \auth()->user()->id)->first();
                if ($user){
                    $pp = '';
                    $cf = '';
                    $cb = '';
                    if ($request->profile_picture && $request->cnic_image_front && $request->cnic_image_back){
                        $pp = $this->image($request->profile_picture);
                        $cf = $this->image($request->cnic_image_front);
                        $cb = $this->image($request->cnic_image_back);
                    }
                    $user->country_id = $request->country_id;
                    $user->state_id = $request->state_id;
                    $user->city_id = $request->city_id;
                    $user->profile_image = $pp;
                    $user->cnic_image = $cf;
                    $user->cnic_back_image = $cb;
                    $user->update();
                }
                if ($user_vehicle){
                    $lf ='';
                    $lb = '';
                    $vi = '';
                    if ($request->license_front_image && $request->license_back_image && $request->vehicle_registration_image){
                        $lf = $this->image($request->license_front_image);
                        $lb = $this->image($request->license_back_image);
                        $vi = $this->image($request->vehicle_registration_image);
                    }
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
                    $user_vehicle->update();
                }
                return response()->json([
                    'success' => true,
                    'message' => 'Profile Updated Successfully',
                    'user' => $user,
                    'user_vehicle' => $user_vehicle
                ]);
            }
        }
    }

    public function addCompanyDriver(Request $request){
        if (\auth()->user()->hasRoles('company')){
            $validator = Validator::make($request->all(), [
                'profile_picture' => ['required'],
                'cnic_image_front' => ['required'],
                'cnic_image_back' => ['required'],
                'license_front_image' => ['required'],
                'license_back_image' => ['required'],
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
                return response()->json(['error' => $validator->errors()], 422);
            }
            if (Auth::check()){
                $pp = '';
                $cf = '';
                $cb = '';
                if ($request->profile_picture && $request->cnic_image_front && $request->cnic_image_back){
                    $pp = $this->image($request->profile_picture);
                    $cf = $this->image($request->cnic_image_front);
                    $cb = $this->image($request->cnic_image_back);
                }
                $user = new User([
                    'name' => $request->full_name,
                    'postal_code' => $request->postal_code,
                    'phone' => $request->phone,
                    'password' => bcrypt($request->password),
                    'email' => $request->email,
                    'profile_image' => $pp,
                    'cnic_image' => $cf,
                    'cnic_back_image' => $cb,
                    'created_by' => \auth()->user()->id
                ]);

                $lf ='';
                $lb = '';
                $vi = '';
                if ($request->license_front_image && $request->license_back_image && $request->vehicle_registration_image){
                    $lf = $this->image($request->license_front_image);
                    $lb = $this->image($request->license_back_image);
                    $vi = $this->image($request->vehicle_registration_image);
                }
                $user_vehicle = new UserVehicle();
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
                    'message' => 'Profile Updated Successfully',
                    'user' => $user,
                    'user_vehicle' => $user_vehicle
                ]);
            }
        }
    }
    public function image($image){
        $filename = rand().$image->getClientOriginalExtension();
        $image->move(public_path('/uploads/'), $filename);
        return $filename;
    }
    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => ['required', 'unique:users,phone'],
            'email' => ['required', 'string', 'email', 'unique:users,email'],
            'password' => ['required', 'min:4'],
            'full_name' => ['required', 'min:3'],
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        $user = new User([
            'name' => $request->full_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
        ]);

//        $user->assignRole('Patient');
        $user->save();
//        event(new Registered($user));
        return $this->login($request);
//        dd('dd');
//        return response()->json([
//            'message' => 'Successfully created user!'
//        ], 201);
    }

    public function createUser(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'unique:users,email'],
            'password' => ['required', 'min:4'],
            'full_name' => ['required', 'min:3'],
            'phone' => ['required', 'unique:users,phone']
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }
        $user = new User([
            'name' => $request->full_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'postal_code' => $request->zip,
        ]);
        $user->save();
//        $address=new UserAddress;
//        $address->user_id = $user->id;
//        $address->created_by = auth()->user()->id;
//        $address->address=$request->address;
//        $address->area_id=$request->area;
//        $address->state_id=$request->state;
//        $address->city_id=$request->city;
//        $address->country_id=$request->country;
//        $address->zip=$request->zip;
//        $address->form=$request->form;
//        $address->save();
        $user->assignRole('customer');
//        event(new Registered($user));
        return response()->json(['success' => 'User registered successfully','user_id'=>$user->id]);
    }
    public function createCracker(Request $request){
        $request->validate([
            'email' => ['required', 'string', 'email', 'unique:users,email'],
            'password' => ['required', 'min:4'],
            'full_name' => ['required', 'min:3'],
            'phone' => ['required', 'unique:users,phone','min:3']
        ]);
        $user = new User([
            'name' => $request->full_name,
            'email' => $request->email,
            'documents_verified' => 1,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id
        ]);
        $user->save();
        $user->assignRole('cracker');
//        event(new Registered($user));
        return redirect()->back()->with(['success' =>'User registered successfully']);
    }
    public function createDriver(Request $request){
//        dd($request->all());
        $request->validate([
            'email' => ['required', 'string', 'email', 'unique:users,email'],
            'password' => ['required', 'min:4'],
            'full_name' => ['required', 'min:3'],
            'phone' => ['required', 'unique:users,phone','min:3'],
            'vehicle_number' => ['required']
        ]);
        if (Auth::user()->hasRole('company')){
            $request->validate([
                'email' => ['required', 'string', 'email', 'unique:users,email'],
                'password' => ['required', 'min:4'],
                'full_name' => ['required', 'min:3'],
                'phone' => ['required', 'unique:users,phone','min:3'],
                'vehicle_number' => ['required'],
                'cnic_image' => ['required'],
                'license_image' => ['required'],
                'license_number' => ['required'],
            ]);
        }

            if(Auth::user()->hasRole('cracker')){


                $user = new User([
                    'name' => $request->full_name,
                    'email' => $request->email,
                    'email_verified_at' => now(),
                    'password' => bcrypt($request->password),
                    'phone' => $request->phone,
                    'documents_verified' => 1,
                    'created_by' => auth()->user()->id,
                ]);
                $user->save();
                $veh = new UserVehicle([
                    'user_id' => $user->id,
                    'category_id' => $request->veh_cat,
                    'vehicle_id' => $request->vehicle,
                    'is_verified' => 1,
                    'vehicle_number' => $request->vehicle_number,
                ]);
                $veh->save();


                $user->assignRole('brocker_driver');
            }
            elseif(Auth::user()->hasRole('company')){
                $license_image = '';
                $cnic_image = '';
                if($request->license_image)
                {
                    $file = $request->file('license_image');
                    $extension = $file->getClientOriginalExtension(); // getting image extension
                    $license_image =time().'.'.$extension;
                    $file->move('license_image', $license_image);
                }
                if($request->cnic_image)
                {
                    $file = $request->file('cnic_image');
                    $extension = $file->getClientOriginalExtension(); // getting image extension
                    $cnic_image =time().'.'.$extension;
                    $file->move('cnic/', $cnic_image);
                }
                $user = new User([
                    'name' => $request->full_name,
                    'email' => $request->email,
                    'email_verified_at' => now(),
                    'password' => bcrypt($request->password),
                    'phone' => $request->phone,
                    'documents_verified' => 1,
                    'license_number' => $request->license_number,
                    'cnic_image' => $cnic_image,
                    'license_image' => $license_image,
                    'created_by' => auth()->user()->id,
                ]);
                $user->save();
                $veh = new UserVehicle([
                    'user_id' => $user->id,
                    'category_id' => $request->veh_cat,
                    'vehicle_id' => $request->vehicle,
                    'vehicle_number' => $request->vehicle_number,
                ]);
                $veh->save();
                $user->assignRole('company_driver');
            }
//        event(new Registered($user));
        return redirect()->back()->with(['success' =>'Driver registered successfully']);
    }
    public function createSenderAddress(Request $request){
        $address=new UserAddress;
        $address->user_id = $request->user_id;
        $address->created_by = auth()->user()->id;
        $address->address=$request->address;
        $address->lat=$request->lat;
        $address->lng=$request->lng;
        if ($request->area){
            $address->area_id=$request->area;
        }
        $address->state_id=$request->state;
        $address->city_id=$request->city;
        $address->country_id=$request->country;
        $address->zip=$request->zip;
        $address->form=$request->form;
        $address->save();
        return response()->json(['success' => 'Address saved successfully','user_id'=>$request->user_id,'address_id'=>$address->id]);;
    }
    public function sendOtpApi(SignupOtp $request){
        $validator = Validator::make($request->all(), [
            'phone' => ['required', 'unique:users,phone','min:4']
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        return response()->json(['success'=>'true','data' =>$this->repo->sendSms($request->all())],200);

    }


    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'min:4'],
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $user = User::where('email', $request->email)->first();
        if ($user) {
            $decrypted = Hash::check($request->password, $user->password);
            if ($decrypted != true) {
                return response()->json(['error' =>'Credentials not matched'], 422);
            }
            $tokenResult = $user->createToken('Personal Access Token');
            $token = $tokenResult->token;
            $token->expires_at = Carbon::now()->addWeeks(10);
            $token->save();
            $role = 0;

            if ($user->hasRole('customer')){
                $role = 1;
            }elseif ($user->hasRole('driver')){
                $role = 2;
            }elseif ($user->hasRole('company')){
                $role = 3;
            }
            return response()->json([
                'access_token' => $tokenResult->accessToken,
                'token_type' => 'Bearer',
                'user' => $user,
                'role' => $role,
                'expires_at' => Carbon::parse(
                    $tokenResult->token->expires_at
                )->toDateTimeString(),
                ''
            ],200);
        } else
            return response()->json(['error' =>'User not exist'], 422);
    }
    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request){
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out',
            'success'=>'true'
        ]);
    }
    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user() {
        return response()->json(auth()->user());
    }

    public function records() {
        return response()->json(auth()->user());
    }

    public function userUpdate(Request $request) {
        $id= auth()->user()->id;
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'min:2'],
            'phone' => ['required', 'min:4','unique:users,phone,'.$id]
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }


        $user = User::find($id);
        if ($user) {
            $user->first_name= $request->first_name;
            $user->last_name= $request->last_name;
            $user->dob= $request->dob;
            $user->phone= $request->phone;
            $user->gender= $request->gender;
            $user->timezone= $request->timezone;
            $user->save();
        }else{
            return response()->json(['message' => 'User not found',
                'success'=>'true'],200);
        }

        return response()->json(['message' => 'Data updated successfully',
            'success'=>'true'],200);
    }
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}

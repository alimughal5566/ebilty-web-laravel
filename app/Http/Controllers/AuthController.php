<?php
namespace App\Http\Controllers;
use App\Http\Requests\front\signup\SignupOtp;
use App\Models\UserVehicle;
use App\Patient;
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
        event(new Registered($user));
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
        event(new Registered($user));
        return response()->json(['success' => 'User registered successfully','user_id'=>$user->id]);;
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
        ]);
        $user->save();
        $user->assignRole('cracker');
        event(new Registered($user));
        return redirect()->back()->with(['success' =>'User registered successfully']);
    }
    public function createDriver(Request $request){
        $request->validate([
            'email' => ['required', 'string', 'email', 'unique:users,email'],
            'password' => ['required', 'min:4'],
            'full_name' => ['required', 'min:3'],
            'phone' => ['required', 'unique:users,phone','min:3'],
            'vehicle_number' => ['required']
        ]);

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
                    'vehicle_number' => $request->vehicle_number,
                ]);
                $veh->save();
                $user->assignRole('company_driver');
            }
        event(new Registered($user));
        return redirect()->back()->with(['success' =>'Driver registered successfully']);
    }
    public function createSenderAddress(Request $request){
        $address=new UserAddress;
        $address->user_id = $request->user_id;
        $address->created_by = auth()->user()->id;
        $address->address=$request->address;
        $address->lat=$request->lat;
        $address->lng=$request->lng;
        $address->area_id=$request->area;
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
            return response()->json([
                'access_token' => $tokenResult->accessToken,
                'token_type' => 'Bearer',
//                'token' => $token,
                'expires_at' => Carbon::parse(
                    $tokenResult->token->expires_at
                )->toDateTimeString()
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
}

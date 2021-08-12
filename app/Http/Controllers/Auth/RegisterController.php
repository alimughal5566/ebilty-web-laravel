<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\UserVehicle;
use App\Providers\RouteServiceProvider;
use App\Rules\PhoneNumberVerification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
//        dd('s');
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function register_user(Request $request){
//        dd($request);
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'unique:users,email'],
            'password' => ['required', 'min:4'],
            'name' => ['required', 'min:3'],
            'phone' => ['required', 'unique:users,phone'],
//            'phone' => ['required', 'unique:users,phone',new PhoneNumberVerification],
        ]);
        if ($validator->fails()) {
            $validator->errors()->add('form', 'signup');
            return redirect()->back()->with(['errors' => $validator->errors()], 422)->withInput();
        }


        $filename = '';
        if($request->cnic)
        {
            $file = $request->file('cnic');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('setting/cnic/', $filename);
        }


        if ($request->user_role_id == 1){
            $user = new User([
                'name' => $request->name,
                'email' => $request->email,
                'postal_code' => $request->postal_code,
                'phone' => $request->mobile,
//                'cnic_image' => $filename,
//                'bussiness_type' => $request->bussiness_type,
                'password' => bcrypt($request->password),
            ]);
            $user->save();
            $user->assignRole('customer');
        }
        elseif($request->user_role_id == 2)
        {
            $user = new User([
                'name' => $request->name,
                'email' => $request->email,
                'postal_code' => $request->postal_code,
                'phone' => $request->mobile,
//                'cnic_image' => $filename,
//                'bussiness_type' => $request->bussiness_type,
                'password' => bcrypt($request->password),
            ]);
            $user->save();
            $user->assignRole('driver');
//            if($request->vehicle_category) {
//                foreach ($request->vehicle_category as $key => $cat) {
//                    $user_vehicle = new UserVehicle([
//                        'user_id' => $user->id,
//                        'category_id' => $cat,
//                        'vehicle_id' => $request->truck_used[$key]
//                    ]);
//                    $user_vehicle->save();
//                }
//            }
        }
        elseif($request->user_role_id == 3){
            $user = new User([
                'name' => $request->name,
                'email' => $request->email,
                'postal_code' => $request->postal_code,
                'phone' => $request->mobile,
//                'cnic_image' => $filename,
//                'bussiness_type' => $request->bussiness_type,
                'password' => bcrypt($request->password),
            ]);
            $user->save();
            $user->assignRole('company');
        }
        event(new Registered($user));
        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 201)
            : redirect($this->redirectPath());
    }
}

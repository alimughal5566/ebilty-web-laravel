<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin\Setting\Vehicle;
use App\Models\Admin\Setting\VehicleCategory;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function showLoginForm()
    {
        return view('auth.login2');
    }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function get_vehicle_cat(){
        $cats = VehicleCategory::all();
        return response()->json(['cats'=>$cats]);
    }
    public function get_vehicles(){
        $id = $_GET['id'];
        $vehs = Vehicle::where('vehicle_category_id', $id)->get();

        return response()->json($vehs);
    }
}

<?php
namespace App\Http\Controllers;
use App\AppointmentAttachements;
use App\Http\Requests\front\signup\SignupOtp;
use App\Models\Admin\Setting\Vehicle;
use App\Models\Admin\Setting\VehicleCategory;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\Hash;
use Validator;

class ApiController extends Controller
{
    public function getVehicleCatorgies(){
        $cats = VehicleCategory::all();
        if ($cats){
            return response()->json([
                'message' => 'Vehicle categories are listed below: ',
                'success' => true,
                'categories' => $cats,
            ], 200);
        }else{
            return response()->json([
                'message' => 'There is no any Vehicle category available. ',
                'success' => true
            ], 404);
        }
    }
    public function vehicles($id){
        if ($id){
            $vehs = Vehicle::with('vehicle_category')->where('vehicle_category_id', $id)->get();
            if ($vehs){
                return response()->json([
                    'message' => 'Vehicles are Listed Below: ',
                    'success' => true,
                    'vehicles' => $vehs
                ], 200);
            }else{
                return response()->json([
                    'message' => 'There is not any vehicle available for this category right now: ',
                    'success' => false,
                ], 404);
            }
        }else{
            return response()->json([
                'message' => 'Something went wrong/Category doesnt exist',
                'success' => false,
            ], 422);
        }
    }


}

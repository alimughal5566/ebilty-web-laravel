<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Admin\Setting\VehicleCategory;
use Illuminate\Http\Request;

class VehicleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $types = VehicleCategory::all();
        return view('admin.setting.vehicle_category', compact('types','types'));
    }
    public function add_vehicle_type(Request $request){

        $type = new VehicleCategory();
        $type->name = $request->name;
        $type->status = $request->status;
        $type->save();
        $response = array(
            'status' => 'success',
            'msg' => 'Vehicle Category created successfully',
            'row' => $type,
        );
        return response()->json($response) ;
    }
    public function edit_vehicle_category(){
        $id = $_GET['id'];
        $type = VehicleCategory::where('id',$id)->first();
        return response()->json($type);
    }
    public function update_vehicle_category(Request $request){
        $type = VehicleCategory::where('id',$_GET['id'])->first();
        $type->name = $request->name;
        $type->status = $request->status;
        $type->update();
        $response = array(
            'status' => 'success',
            'msg' => 'Vehicle Category edited successfully',
            'row' => $type,
        );
        return response()->json($response) ;
    }
    public function delete_vehicle_category(){
        $id = $_GET['id'];
        $type = VehicleCategory::where('id',$id)->delete();
        $response = array(
            'status' => 'success',
            'msg' => 'Vehicle Category deleted successfully'
        );
        return response()->json($response);
    }
    public function make_status_active_vehicle_category(){
        $id = $_GET['id'];
        $type = VehicleCategory::where('id',$id)->first();
        $type->status = 1;
        $type->update();
        $response = array(
            'status' => 'success',
            'msg' => 'Vehicle Category activated successfully'
        );
        return response()->json($response);
    }
    public function make_status_inactive_vehicle_category(){
        $id = $_GET['id'];
        $type = VehicleCategory::where('id',$id)->first();
        $type->status = 0;
        $type->update();
        $response = array(
            'status' => 'success',
            'msg' => 'Vehicle Category unactivated successfully'
        );
        return response()->json($response);
    }

}

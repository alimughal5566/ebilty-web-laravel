<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Admin\Setting\Vehicle;
use App\Models\Admin\Setting\VehicleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VehicleController extends Controller
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
        $types = Vehicle::with('vehicle_category')->get();
        $cats = VehicleCategory::all();

        return view('admin.setting.vehicle', compact('types', 'cats'));
    }
    public function add_vehicle(Request $request){

        $type = new Vehicle();
        $type->name = $request->name;
        $type->vehicle_category_id = 1;
        $filename = '';
        if ($request->image){
            $name = rand().'.'.$request->image->getClientOriginalExtension();
            $destinationPath = public_path('/images/vehicles');
            $request->image->move($destinationPath, $name);
            $filename =  $name;
        }
        $type->image = $filename;
        $type->status = 1;
        $type->save();
        Session::flash('message', 'Vehicle Added!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();
    }
    public function edit_vehicle(){
        $id = $_GET['id'];
        $type = Vehicle::where('id',$id)->with('vehicle_category')->first();
//        dd($type);
        return response()->json($type);
    }
    public function update_vehicle(Request $request){
//        dd($request->all());
        $type = Vehicle::where('id',$request->id)->first();
        $type->name = $request->name;
        $filename = $type->image;
        if ($request->image){
            $name = rand().'.'.$request->image->getClientOriginalExtension();
            $destinationPath = public_path('/images/vehicles');
            $request->image->move($destinationPath, $name);
            $filename =  $name;
        }
        $type->image = $filename;
        $type->update();
        Session::flash('message', 'Vehicle Updated!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();
    }
    public function vehicle_status(Request $request){
        $veh = Vehicle::where('id', $request->id)->first();

        $veh->status = $request->status;
        $veh->update();
        return response()->json([
            'success' => true
        ]);
    }
    public function delete_vehicle(){
        $id = $_GET['id'];
        $type = Vehicle::where('id',$id)->delete();
        $response = array(
            'status' => 'success',
            'msg' => 'Vehicle deleted successfully'
        );
        return response()->json($response);
    }
    public function make_status_active_vehicle(){
        $id = $_GET['id'];
        $type = Vehicle::where('id',$id)->first();
        $type->status = 1;
        $type->update();
        $response = array(
            'status' => 'success',
            'msg' => 'Vehicle activated successfully'
        );
        return response()->json($response);
    }
    public function make_status_inactive_vehicle(){
        $id = $_GET['id'];
        $type = Vehicle::where('id',$id)->first();
        $type->status = 0;
        $type->update();
        $response = array(
            'status' => 'success',
            'msg' => 'Vehicle unactivated successfully'
        );
        return response()->json($response);
    }

}

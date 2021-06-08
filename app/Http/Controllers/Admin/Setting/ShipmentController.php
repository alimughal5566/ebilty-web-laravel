<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Admin\Setting\Shipment;
use App\ModelsAdmin\Setting;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.setting.setting');
    }
    public function get_payment_type(){
        $types = Shipment::all();
        return view('admin.setting.get_payment_type',compact('types','types'));
    }
    public function add_payment_type(Request $request){
        $type = new Shipment();
        $type->name = $request->name;
        $type->status = $request->status;
        $type->save();

        $response = array(
            'status' => 'success',
            'msg' => 'Payment Type created successfully',
            'row' => $type,
        );
        return response()->json($response) ;
    }
    public function edit_payment_type(){
        $id = $_GET['id'];
        $type = Shipment::where('id',$id)->first();
        return response()->json($type);
    }
    public function delete_payment_type(){
        $id = $_GET['id'];
        $type = Shipment::where('id',$id)->delete();
        $response = array(
            'status' => 'success',
            'msg' => 'Payment Type deleted successfully'
        );
        return response()->json($response);
    }
    public function update_payment_type(Request $request){
        $type = Shipment::where('id',$_GET['id'])->first();
        $type->name = $request->name;
        $type->status = $request->status;
        $type->update();

        $response = array(
            'status' => 'success',
            'msg' => 'Payment Type edited successfully',
            'row' => $type,
        );
        return response()->json($response) ;
    }
    public function make_status_active(){
        $id = $_GET['id'];
        $type = Shipment::where('id',$id)->first();
        $type->status = 1;
        $type->update();
        $response = array(
            'status' => 'success',
            'msg' => 'Payment Type activated successfully'
        );
        return response()->json($response);
    }
    public function make_status_inactive(){
        $id = $_GET['id'];
        $type = Shipment::where('id',$id)->first();
        $type->status = 0;
        $type->update();
        $response = array(
            'status' => 'success',
            'msg' => 'Payment Type unactivated successfully'
        );
        return response()->json($response);
    }


}

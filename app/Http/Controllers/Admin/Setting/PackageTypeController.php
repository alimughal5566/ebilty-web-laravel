<?php
namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Admin\Setting\PackageType;
use Illuminate\Http\Request;

class PackageTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = PackageType::all();
        return view('admin.setting.package_type', compact('types','types'));
    }
    public function add_package_type(Request $request){

        $type = new PackageType();
        $type->name = $request->name;
        $type->status = $request->status;
        $type->save();
        $response = array(
            'status' => 'success',
            'msg' => 'Package Type created successfully',
            'row' => $type,
        );
        return response()->json($response) ;
    }
    public function edit_package_type(){
        $id = $_GET['id'];
        $type = PackageType::where('id',$id)->first();
        return response()->json($type);
    }
    public function update_package_type(Request $request){
        $type = PackageType::where('id',$_GET['id'])->first();
        $type->name = $request->name;
        $type->status = $request->status;
        $type->update();

        $response = array(
            'status' => 'success',
            'msg' => 'Package Type edited successfully',
            'row' => $type,
        );
        return response()->json($response) ;
    }
    public function delete_package_type(){
        $id = $_GET['id'];
        $type = PackageType::where('id',$id)->delete();
        $response = array(
            'status' => 'success',
            'msg' => 'Package Type deleted successfully'
        );
        return response()->json($response);
    }
    public function make_status_active_package_type(){
        $id = $_GET['id'];
        $type = PackageType::where('id',$id)->first();
        $type->status = 1;
        $type->update();
        $response = array(
            'status' => 'success',
            'msg' => 'Payment Type activated successfully'
        );
        return response()->json($response);
    }
    public function make_status_inactive_package_type(){
        $id = $_GET['id'];
        $type = PackageType::where('id',$id)->first();
        $type->status = 0;
        $type->update();
        $response = array(
            'status' => 'success',
            'msg' => 'Payment Type unactivated successfully'
        );
        return response()->json($response);
    }
}

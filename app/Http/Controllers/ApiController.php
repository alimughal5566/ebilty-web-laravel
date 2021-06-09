<?php
namespace App\Http\Controllers;
use App\AppointmentAttachements;
use App\Http\Requests\front\signup\SignupOtp;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\Hash;
use Validator;

class ApiController extends Controller
{
    public function records() {
        $id= auth()->user()->id;
        $data = AppointmentAttachements::where('created_by',$id)->orderby('id','desc')->get();
        return response()->json(['data' => $data], 200);
    }


    public function storeMedRecords(Request $request){
        return response()->json(['success' =>'Api under construction'], 200);
        if (!empty($request)){
            $validator = Validator::make($request->all(), [
                'recordTitle' => ['required', 'string', 'email'],
                'password' => ['required', 'min:4'],
            ]);
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 422);
            }
                $attachment = new AppointmentAttachements();
                $attachment->created_by = Auth::user()->id;
                $attachment->title = $request->recordTitle;
                $attachment->category = $request->reportTypeName;
                $attachment->appointment_id = $request->appointment;
                $attachment->notes = $request->notes;
                if (Auth::user()->hasRole('patient')) {
                    $attachment->added_by = 'patient';
                } else {
                    $attachment->added_by = 'doctor';
                }
                if ($request->hasFile('file')) {
                    $original_filename = $request->file('file')->getClientOriginalName();
//                    $directory = 'patient/' . Auth::user()->patient->id . '/appointment/' . $request->appointment . '/attachments/' . $request->reportType;
                    $filename = time() . '-' . $original_filename;
                    $request->file->move(public_path('/images/patient-documents'),$filename);
//                    $path = Storage::disk('uploads')->putFileAs($directory, $request->file('file'), $filename);
                    $attachment->file = $filename;
                }
                $attachment->save();
                return redirect()->back()->with(['success' => 'Record added successfully!!!']);
            }
    }


}

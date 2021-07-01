<?php

namespace App\Http\Controllers;

use App\Models\UserVehicle;
use App\Shippment;
use App\ShippmentPackage;
use App\User;
use FontLib\Table\Type\name;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use PDF;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ShippmentController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'ship_date' => ['required', 'string', 'max:255'],
            'sender_name' => ['required', 'string', 'max:255'],
            'sender_address' => ['required', 'string', 'max:255'],
            'receiver_name' => ['required', 'string', 'max:255'],
            'receiver_address' => ['required', 'string', 'max:255'],
//            'package_cost' => ['integer', 'max:255'],
            'vehicle' => ['required', 'string', 'max:255'],
            'vehicle_type' => ['required', 'string', 'max:255'],
            'shipping_fee' => ['required', 'string', 'max:255'],
            'invoice_image' => [ 'max:10000', 'mimes:png,gif,jpeg'],
        ]);
        $shipment=new Shippment;
        $shipment->user_id= auth()->user()->id;
        $shipment->book_as= $request->book_as;
        $shipment->ship_date= $request->ship_date;
        $shipment->ship_time= $request->ship_time;
        $shipment->dilivery_type= $request->dilivery_type;
        $shipment->is_insured= $request->is_insured;
        $shipment->sender_id= $request->sender_name;
        $shipment->sender_address_id= $request->sender_address;
        $shipment->payment_type= $request->payment_type;
        $shipment->show_receiver_info= $request->show_receiver_info;
        $shipment->receiver_id= $request->receiver_name;
        $shipment->receiver_address_id= $request->receiver_address;
        $shipment->shipping_fee= $request->shipping_fee;
        $shipment->total_weight= $request->total_weight;
        $shipment->package_cost= $request->package_cost;
        $shipment->vehicle_type_id= $request->vehicle_type;
        $shipment->vehicle_id= $request->vehicle;
        $shipment->status_id=9;

        if ($request->invoice_image) {
            $invoice_image = time() . '.' . $request->invoice_image->extension();
            $request->invoice_image->move(public_path('images/shipment-invoices'), $invoice_image);
            $shipment->invoice_image=$invoice_image;
        }
        $shipment->save();
        QrCode::size(125)->format('svg')->generate($shipment->id, public_path('images/qrcodes/'.$shipment->id.'.svg'));
                if($request->category_id) {
                    for($i=0; $i<count($request->category_id);$i++) {
                        $package = new ShippmentPackage;
                        $package->shippment_id = $shipment->id;
                        $package->package_category_id = $request->category_id[$i];
                        $package->description = $request->description[$i];
                        $package->quantity = $request->quantity[$i];
                        $package->weight = $request->weight[$i];
                        $package->length = $request->length[$i];
                        $package->width = $request->width[$i];
                        $package->height = $request->height[$i];
                        $package->save();
                    }
                }
        Session::flash('success', 'Shipment created successfully');
        return redirect()->route('shipmentDetail',$shipment->id)->with('success', 'Shippment created successfully');
    }



    public function show($id){
        $shipment= Shippment::where('id',$id)->with('sender.user','receiver.user','status','user','sender.city','sender.state','receiver.city','receiver.state','bids','packages.category')->first();

        return view('user.shipment.show', compact('shipment'));
    }

    public function downloadPdf($id){
        $shipment= Shippment::where('id',$id)->with('sender.user','receiver.user','status','user','sender.city','sender.state','receiver.city','receiver.state')->first();
           view()->share('shipment',$shipment);
            $pdf = PDF::loadView('pdfview');
            return $pdf->download('shipment.pdf');


        return view('pdfview');
    }

    public function shipmentAssign(Request $request)
    {
        if (Auth::user()->hasRole('cracker')){
            $users = User::where('created_by',auth()->user()->id)
            ->join('user_vehicles','user_id','users.id')
            ->whereHas(
                'roles', function($q){
                $q->where('name', 'brocker_driver');
            }
            )
            ->with('vehicle','vehicle_category')
            ->get();

        }
    elseif (Auth::user()->hasRole('company')){
            $users = User::where('created_by',auth()->user()->id)
            ->join('user_vehicles','user_id','users.id')
            ->whereHas(
                'roles', function($q){
                $q->where('name', 'company_driver');
            }
            )
            ->with('vehicle','vehicle_category')
            ->get();

        }
        return response()->json($users);
    }

    public function assignDriver(Request $request){

        $shipment= Shippment::where('id',$request->shipment_id)
                    ->update(['assigned_to'=>$request->driver_id]);
//        dd($shipment);
//            if($shipment){
            return response()->json(['success' =>'Assign Successfully'], 200);

    }
}

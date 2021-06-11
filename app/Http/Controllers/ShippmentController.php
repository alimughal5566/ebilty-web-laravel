<?php

namespace App\Http\Controllers;

use App\Shippment;
use App\ShippmentPackage;
use Illuminate\Http\Request;

class ShippmentController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'ship_date' => ['required', 'string', 'max:255'],
            'sender_name' => ['required', 'string', 'max:255'],
            'sender_address' => ['required', 'string', 'max:255'],
            'receiver_name' => ['required', 'string', 'max:255'],
            'receiver_address' => ['required', 'string', 'max:255'],
            'package_cost' => ['required', 'string', 'max:255'],
            'vehicle' => ['required', 'string', 'max:255'],
            'vehicle_type' => ['required', 'string', 'max:255'],
            'shipping_fee' => ['required', 'string', 'max:255'],
            'invoice_image' => ['required', 'max:10000', 'mimes:png,gif,jpeg'],
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

if($request->category_id) {
    $package = new ShippmentPackage;
    $package->shippment_id = $shipment->id;
    $package->package_category_id = $request->category_id;
    $package->description = $request->description;
    $package->quantity = $request->quantity;
    $package->weight = $request->weight;
    $package->length = $request->length;
    $package->width = $request->width;
    $package->height = $request->height;
    $package->save();
}


        return redirect()->back()->with('success', 'Shippment created successfully');



    }
}

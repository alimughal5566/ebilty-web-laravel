<?php

namespace App\Http\Controllers;



use App\Shippment;

class CustomerController extends Controller
{
    public function index()
    {
        $shipments= Shippment::where('user_id',auth()->user()->id)->orderBy('updated_at','desc')->with('sender.user','receiver.user','status')->paginate('15');
        return view('user.shipment.index', compact('shipments'));
    }
}

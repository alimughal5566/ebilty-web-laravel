<?php

namespace App\Http\Controllers;

use App\Country;
use App\Driver;
use App\Models\Admin\Setting\PackageType;
use App\Models\Admin\Setting\VehicleCategory;
use App\ShipmentArea;
use App\User;
use App\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{

    public function __construct() {
//        dd(Auth::user());
        $this->middleware(['auth','role:customer']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $vehicle_types=VehicleCategory::all();
         $shipment_packages=PackageType::all();
         $countries=Country::wherehas('states')->get();
//         $senders= ShipmentArea::where('created_by',Auth::user()->id)->with('user')->get();

       $senders= UserAddress::where('created_by',auth()->user()->id)->where('form','sender')->with('user')->get();
       $receivers= UserAddress::where('created_by',auth()->user()->id)->where('form','receiver')->with('user')->get();
//        dd($senders);
        return view('user.shipment.add-shipment', compact('vehicle_types','shipment_packages','countries','senders','receivers'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'name1' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        //
    }
}

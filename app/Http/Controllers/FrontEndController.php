<?php

namespace App\Http\Controllers;

use App\Models\Admin\Setting\General_setting;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $sliders = General_setting::where('id','<', 5)->where('status', 1)->get();
        $cards = General_setting::where('id','>', 4)->where('id','<', 9)->get();
        foreach ($sliders as $key => $slider){
            $sliders[$key] = json_decode($slider->content);
        }
        foreach ($cards as $key => $card){
            $cards[$key] = json_decode($card->content);
        }
        return view('index', compact('sliders','cards'));

    }
}

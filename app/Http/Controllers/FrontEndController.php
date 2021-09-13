<?php

namespace App\Http\Controllers;

use App\Models\Admin\Setting\General_setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


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

    public function termcondition () {
        return view ('terms_conditions');
    }

    public function carrier () {
        return view ('carrier');
    }

    public function sendMail(Request $request) {
        //dd($request->all());
        $validator = \Validator::make($request->all(), [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required']
        );
        if ($validator->fails()) {
            return redirect()->route('index')->withInput()->withErrors($validator);
        }
        $name = $request->name;
        $email = $request->email;
        $title = 'Get in Touch';
        $content = $request->message;
        \Mail::send('visitor_email', ['name' => $name, 'email' => $email, 'title' => $title, 'content' => $content], function ($message) use($email)  {
            $message->to('info@ebilty.com')->subject('Get In Touch Mail');
            $message->from($email);
        });
        return redirect()->back()->with('success', 'You have successfully sent an email to the admin!');
    }
    public function saveCarrierForm(Request $request){
//        dd($request->all());
        $validator = \Validator::make($request->all(), [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required',
                'cv' => 'required']
        );
        if ($validator->fails()) {
            return redirect()->route('index')->withInput()->withErrors($validator);
        }
        $name = $request->name;
        $email = $request->email;
        $title = 'Carrier Form';
        $phone = $request->phone;
        $path = '';
        if ($request->hasFile('cv')){
            $name = rand().'.'.$request->cv->getClientOriginalExtension();
            $destinationPath = public_path('/files').$name;
            $request->cv->move($destinationPath, $name);
            $path = $destinationPath;
        }
        \Mail::send('carrier_email', ['name' => $name, 'email' => $email, 'phone' => $phone, 'title' => $title, 'path' => $path, ], function ($message) use($email, $path)  {
            $message->attach($path);
            $message->to('info@ebilty.com')->subject('Carrier Form');
            $message->from($email);
        });
        return redirect()->route('carrier')->with('success', 'You have successfully sent an email to the admin!');
    }
}

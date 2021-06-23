<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Models\Admin\Setting\General_Setting;
use App\Http\Controllers\Controller;
use App\Models\Admin\Setting\Qas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GeneralSettingController extends Controller
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
    public function index(){
        $settings = General_Setting::where('page_name','!=','dashboard')->get();
        return view('admin.setting.general_setting', compact('settings'));
    }
    public function dashboard(){
        $settings = General_Setting::where('page_name','=','dashboard')->get();
        return view('admin.setting.dashboard_setting', compact('settings'));
    }
    public function save_homepage_slider1(Request $request){
        $home_slider1 = General_Setting::where('id', 1)->first();
        $json = json_decode($home_slider1->content);
        $filename = $json->image;
        if($request->image1)
        {
            $file = $request->file('image1');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('setting/sliders/', $filename);
        }
        $array = array(
            'title' => $request->title1,
            'description' => $request->descrip1,
            'image' => 'setting/sliders/'.$filename,
            'button1_title' => $request->button1,
            'button1_link' => $request->button2,
            'button2_title' => $request->button3,
            'button2_link' => $request->button4,
            'status' => $request->status1
        );

        $content = json_encode($array);
        $home_slider1->content = $content;
        $home_slider1->status = 1;
        $home_slider1->update();
        Session::flash('message', 'The slider 1 has been updated');
        return redirect()->back();

    }
    public function save_homepage_slider2(Request $request){
//        dd($request->all());
        $home_slider2 = General_Setting::where('id', 2)->first();
        $filename = '';
        $json = json_decode($home_slider2->content);
        $filename = $json->image;
        if($request->image1)
        {
            $file = $request->file('image2');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('setting/sliders/', $filename);
        }
        $array = array(
            'title' => $request->title2,
            'description' => $request->descrip2,
            'image' => 'setting/sliders/'.$filename,
            'button1_title' => $request->button1,
            'button1_link' => $request->button2,
            'button2_title' => $request->button3,
            'button2_link' => $request->button4,
            'status' => $request->status2
        );

        $content = json_encode($array);
        $home_slider2->content = $content;
        $home_slider2->status = 1;
        $home_slider2->update();
        Session::flash('message', 'The slider 2 has been updated');
        return redirect()->back();

    }
    public function save_homepage_slider3(Request $request){
        $home_slider3 = General_Setting::where('id', 3)->first();
        $filename = '';
        $json = json_decode($home_slider3->content);
        $filename = $json->image;
        if($request->image1)
        {
            $file = $request->file('image3');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('setting/sliders/', $filename);
        }
        $array = array(
            'title' => $request->title3,
            'description' => $request->descrip3,
            'image' => 'setting/sliders/'.$filename,
            'button1_title' => $request->button1,
            'button1_link' => $request->button2,
            'button2_title' => $request->button3,
            'button2_link' => $request->button4,
            'status' => $request->status3
        );

        $content = json_encode($array);
        $home_slider3->content = $content;
        $home_slider3->status = 1;
        $home_slider3->update();
        Session::flash('message', 'The slider 3 has been updated');
        return redirect()->back();

    }
    public function addAdvertisement(Request $request){
        $home_slider3 = new General_Setting;
//        dd($request);
        if($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('setting/advertisements/', $filename);
        }
        $home_slider3->content = $filename;
        $home_slider3->status = 1;
        $home_slider3->section_name = 'advertisement_section';
        $home_slider3->page_name = 'dashboard';
        $home_slider3->save();
        Session::flash('success', 'Add uploaded successfully');
        return redirect()->back();

    }
    public function save_about_us_banner(Request $request){
//        dd($request->all());
        $about = General_Setting::where('id', 5)->first();
        $json = json_decode($about->content);
        $filename = '';
        $filename = $json->banner_image;
//        $filename2 = '';
//        $filename2 = $json->body_image;
        $bannerfilename = $filename;
        if($request->banner_image)
        {
            $file = $request->file('banner_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $bannerfilename =time().'.'.$extension;
            $file->move('setting/about/', $bannerfilename);
        }
//        $bodyfilename = $filename2;
//        if($request->body_image)
//        {
//            $file = $request->file('body_image');
//            $extension = $file->getClientOriginalExtension(); // getting image extension
//            $bodyfilename =time().'.'.$extension;
//            $file->move('setting/about/', $bodyfilename);
//        }
        $array = array(
            'title' => $request->title,
            'tagline' => $request->tagline,
            'banner_image' => 'setting/about/'.$bannerfilename,
//            'body_image' => 'setting/about/'.$bodyfilename,
        );

        $content = json_encode($array);
        $about->content = $content;
        $about->status = 1;
        $about->update();
        Session::flash('message', 'The About Us Page has been updated');
        return redirect()->back();
    }
    public function save_about_us_body(Request $request){
//        dd($request->all());
        $about = General_Setting::where('id', 10)->first();
        $json = json_decode($about->content);
//        $filename = '';
//        $filename = $json->banner_image;
        $filename2 = '';
        $filename2 = $json->body_image;
//        $bannerfilename = $filename;
//        if($request->banner_image)
//        {
//            $file = $request->file('banner_image');
//            $extension = $file->getClientOriginalExtension(); // getting image extension
//            $bannerfilename =time().'.'.$extension;
//            $file->move('setting/about/', $bannerfilename);
//        }
        $bodyfilename = $filename2;
        if($request->body_image)
        {
            $file = $request->file('body_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $bodyfilename =time().'.'.$extension;
            $file->move('setting/about/', $bodyfilename);
        }
        $array = array(
            'title' => $request->title,
//            'tagline' => $request->tagline,
            'details' => $request->details,
//            'banner_image' => 'setting/about/'.$bannerfilename,
            'body_image' => 'setting/about/'.$bodyfilename,
        );

        $content = json_encode($array);
        $about->content = $content;
        $about->status = 1;
        $about->update();
        Session::flash('message', 'The About Us Page has been updated');
        return redirect()->back();
    }
    public function save_homepage_slider4(Request $request){
//        dd($request->all());
        $home_slider4 = General_Setting::where('id', 4)->first();
        $filename = '';
        $json = json_decode($home_slider4->content);
        $filename = $json->image;
        if($request->image4)
        {
            $file = $request->file('image4');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('setting/sliders/', $filename);
        }
        $array = array(
            'title' => $request->title4,
            'description' => $request->descrip4,
            'image' => 'setting/sliders/'.$filename,
            'button1_title' => $request->button1,
            'button1_link' => $request->button2,
            'button2_title' => $request->button3,
            'button2_link' => $request->button4,
            'status' => $request->status4
        );

        $content = json_encode($array);
        $home_slider4->content = $content;
        $home_slider4->status = 1;
        $home_slider4->update();
        Session::flash('message', 'The slider 4 has been updated');
        return redirect()->back();

    }
    public function save_homepage_card1(Request $request){
//        dd($request->all());
        $card = General_Setting::where('id', 6)->first();
        $filename = '';
        $json = json_decode($card->content);
        $filename = $json->icon;
        if($request->icon)
        {
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('setting/card/', $filename);
        }
        $array = array(
            'icon' => 'setting/card/'.$filename,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        );

        $content = json_encode($array);
        $card->content = $content;
        $card->status = 1;
        $card->update();
        Session::flash('message', 'The Card 1 has been updated');
        return redirect()->back();

    }
    public function save_homepage_card2(Request $request){
//        dd($request->all());
        $card = General_Setting::where('id', 7)->first();
        $filename = '';
        $json = json_decode($card->content);
        $filename = $json->icon;
        if($request->icon)
        {
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('setting/card/', $filename);
        }
        $array = array(
            'icon' => 'setting/card/'.$filename,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        );

        $content = json_encode($array);
        $card->content = $content;
        $card->status = 1;
        $card->update();
        Session::flash('message', 'The Card 1 has been updated');
        return redirect()->back();

    }
    public function save_homepage_card3(Request $request){
//        dd($request->all());
        $card = General_Setting::where('id', 8)->first();
        $filename = '';
        $json = json_decode($card->content);
        $filename = $json->icon;
        if($request->icon)
        {
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('setting/card/', $filename);
        }
        $array = array(
            'icon' => 'setting/card/'.$filename,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        );

        $content = json_encode($array);
        $card->content = $content;
        $card->status = 1;
        $card->update();
        Session::flash('message', 'The Card 1 has been updated');
        return redirect()->back();

    }
    public function save_homepage_card4(Request $request){
//        dd($request->all());
        $card = General_Setting::where('id', 9)->first();
        $filename = '';
        $json = json_decode($card->content);
        $filename = $json->icon;
        if($request->icon)
        {
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('setting/card/', $filename);
        }
        $array = array(
            'icon' => 'setting/card/'.$filename,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        );

        $content = json_encode($array);
        $card->content = $content;
        $card->status = 1;
        $card->update();
        Session::flash('message', 'The Card 1 has been updated');
        return redirect()->back();

    }
    public function save_faq_banner(Request $request){
//        dd($request->all());
        $card = General_Setting::where('id', 11)->first();
        $filename = '';
        $json = json_decode($card->content);
        $filename = $json->icon;
        if($request->image)
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('setting/faq/', $filename);
        }
        $array = array(
            'image' => 'setting/faq/'.$filename,
            'title' => $request->title,
            'details' => $request->details,
        );

        $content = json_encode($array);
        $card->content = $content;
        $card->status = 1;
        $card->update();
        Session::flash('message', 'The FAQ has been updated');
        return redirect()->back();

    }
    public function homepage_update_status(){
        $id = $_GET['id'];
        $status = $_GET['status'];
        $type = General_Setting::where('id',$id)->first();
        $type->status = $status;
        $type->update();
        $response = array(
            'status' => 'success'
        );
        return response()->json($response);
    }
    public function make_status_inactive_setting(){
        $id = $_GET['id'];
        $type = General_Setting::where('id',$id)->first();
        $type->status = 0;
        $type->update();
        $response = array(
            'status' => 'success',
            'msg' => 'Unactivated successfully'
        );
        return response()->json($response);
    }
    public function qas(){
        $qases = Qas::all();
        return view('admin.setting.qas', compact('qases'));
    }
    public function add_qas(Request $request){
        $qas = new Qas();
        $qas->question = $request->question;
        $qas->answer = $request->answer;
        $qas->status = $request->status;
        $qas->save();

        $response = array(
            'status' => 'success',
            'msg' => 'Q/A has created successfully',
            'row' => $qas,
        );
        return response()->json($response) ;
    }
    public function edit_qas(){
        $id = $_GET['id'];
        $qas = Qas::where('id',$id)->first();
        return response()->json($qas);
    }
    public function update_qas(Request $request){
//        dd($request->all());
        $qas = Qas::where('id',$_GET['id'])->first();
        $qas->question = $request->question;
        $qas->answer = $request->answer;
        $qas->status = $request->status;
        $qas->update();

        $response = array(
            'status' => 'success',
            'msg' => 'Q/A edited successfully',
            'row' => $qas,
        );
        return response()->json($response) ;
    }
    public function delete_qas(){
        $id = $_GET['id'];
//        dd($id);
        $type = Qas::where('id',$id)->delete();
        $response = array(
            'status' => 'success',
            'msg' => 'Q/A deleted successfully'
        );
        return response()->json($response);
    }
    public function make_status_active_qas(){
        $id = $_GET['id'];
        $type = Qas::where('id',$id)->first();
        $type->status = 1;
        $type->update();
        $response = array(
            'status' => 'success',
            'msg' => 'Q/A activated successfully'
        );
        return response()->json($response);
    }
    public function make_status_inactive_qas(){
        $id = $_GET['id'];
        $type = Qas::where('id',$id)->first();
        $type->status = 0;
        $type->update();
        $response = array(
            'status' => 'success',
            'msg' => 'Q/A Type unactivated successfully'
        );
        return response()->json($response);
    }


}

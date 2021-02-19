<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\ImageUnderconstruct;
use App\Models\Message;
use App\Models\Setting;
use App\Models\Yacht;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $setting=Setting::first();
        $picked=Yacht::select('id','title','image')->limit(2)->inRandomOrder()->get();
        $data= [
            'setting'=> $setting,
            'picked'=> $picked,
            'page'=>'home'
        ];
        return view('home.index',$data);
    }

    public static function getsetting()
    {
        return Setting::first();
    }
    public function yachts($status)
    {
        $datalist=Yacht::where('status',$status)->get();
        return view('home.yachts',['datalist'=>$datalist]);
    }
    public function yachtdetails($id)
    {
        $datalist=Yacht::where('id',$id)->get();
        $data=Yacht::find($id);
        $images=Image::where('yacht_id',$id)->get();
        return view('home.yacht_details',['data'=>$data,'datalist'=>$datalist,'images'=>$images]);
    }
    public function yachtimages($id)
    {
        $images=Image::where('yacht_id',$id)->get();
        return view('home.yacht_images',['images'=>$images]);
    }
    public function underconstruction()
    {
        $datalist=Yacht::all();
        return view('home.underconstruction',['datalist'=>$datalist]);
    }

    public function undercons_images($id)
    {
        $images=ImageUnderconstruct::where('yacht_id',$id)->get();
        return view('home.undercons_images',['images'=>$images]);
    }
    public function underconstructiontr()
    {
        $datalist=Yacht::all();
        return view('home.tr.underconstruction',['datalist'=>$datalist]);
    }

    public function undercons_imagestr($id)
    {
        $images=ImageUnderconstruct::where('yacht_id',$id)->get();
        return view('home.tr.undercons_images',['images'=>$images]);
    }

    public function about()
    {
        return view('home.about');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function sendmessage(Request $request)
    {
        $data=new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();

        return redirect()->route('contact')->with('success','Message sent!');

    }
    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {

        if($request->isMethod('post'))
        {
            $credentials=$request->only('email','password');
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }
            return back()->withErrors(['email'=>'The provided credentials do not match our record.',]);
        }
        else
        {
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    // TR PAGES
    public function indextr()
    {
        $setting=Setting::first();
        $picked=Yacht::select('id','title','image')->limit(2)->inRandomOrder()->get();
        $data= [
            'setting'=> $setting,
            'picked'=> $picked,
            'page'=>'home'
        ];
        return view('home.tr.index',$data);
    }
    public function yachtstr($status)
    {
        $datalist=Yacht::where('status',$status)->get();
        return view('home.tr.yachts',['datalist'=>$datalist]);
    }
    public function yachtdetailstr($id)
    {
        $datalist=Yacht::where('id',$id)->get();
        $data=Yacht::find($id);
        return view('home.tr.yacht_details',['data'=>$data,'datalist'=>$datalist]);
    }
    public function yachtimagestr($id)
    {
        $images=Image::where('yacht_id',$id)->get();
        return view('home.tr.yacht_images',['images'=>$images]);
    }
    public function abouttr()
    {
        return view('home.tr.about');
    }
    public function contacttr()
    {
        return view('home.tr.contact');
    }
}

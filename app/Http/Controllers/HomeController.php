<?php

namespace App\Http\Controllers;

use App\Models\BecomCleaners;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\ImageHeads;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cleaner_company = User::where('status', 'hight')->latest()->paginate();
        $home_service1 = Service::where('id', '1')->get();
        $home_service2 = Service::where('id', '2')->get();
        $bookingCount = Booking::where('user_id','=',Auth::id())->where('status_type','=','Pending')->count();
        $homeimage  = ImageHeads::where('id','=', '1')->get();
        return view('home_layouts.home',compact('bookingCount','homeimage','home_service1','home_service2','cleaner_company'));
    }

    public function services()
    {
        $becom_cleaner = BecomCleaners::get();
        $serviceimage  = ImageHeads::where('id','=', '2')->get();
        $bookingCount = Booking::where('user_id','=',Auth::id())->where('status_type','=','Pending')->count();
        $service = Service::get();
        $service_booking1 = Service::where('id', '1')->get();
        $service_booking2 = Service::where('id', '2')->get();
        return view('home_layouts.services',compact('service','bookingCount','serviceimage'),[
            'service_booking1' => $service_booking1,
            'service_booking2' => $service_booking2,
            'becom_cleaner' => $becom_cleaner,
        ]);
    }

    public function contact()
    {
        $blog = Blog::latest()->paginate(10);
        $contactimage  = ImageHeads::where('id','=', '5')->get();
        $bookingCount = Booking::where('user_id','=',Auth::id())->where('status_type','=','Pending')->count();
        return view('home_layouts.contact',compact('bookingCount','contactimage','blog'));
    }
    public function about()
    {
        $aboutimage  = ImageHeads::where('id','=', '3')->get();
        $bookingCount = Booking::where('user_id','=',Auth::id())->where('status_type','=','Pending')->count();
        return view('home_layouts.about',compact('bookingCount','aboutimage'));
    }
//    public function gallery()
//    {
//        $bookingCount = Booking::where('user_id','=',Auth::id())->where('status_type','=','Pending')->count();
//        return view('home_layouts.gallery',compact('bookingCount'));
//    }
}

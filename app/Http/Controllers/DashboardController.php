<?php

namespace App\Http\Controllers;

use App\Mail\ApprovedMail;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        return view('dashboard');
    }

    public function home_d()
    {
        $status_pending = Booking::where('status_type', 'Pending')->latest()->paginate(10);
        $message = Contact::latest()->paginate(3);
        $userCount = User::with('role')->where('role', 'User')->count();
        $CleanerCount = User::with('role')->where('role', 'Cleaner')->count();
        $allBooking = DB::table('bookings')->count();
        $pending = Booking::where('status_type', 'Pending')->count();
        $approved = Booking::where('status_type', 'Approved')->count();
        $done = Booking::where('status_type', 'Done')->count();
        $rejected = Booking::where('status_type', 'Rejected')->count();
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        return view('dashboard_layout.pages.home_dashboard',compact(('userCount'),
        'CleanerCount',
        'allBooking',
        'pending',
        'approved',
        'done',
        'rejected',
        'noti',
        'message',
        'status_pending',
        ));
    }

    public function pending()
    {
        $message = Contact::latest()->paginate(3);
        $pending = Booking::with('statuses')->where('status_type', 'Pending')->get();
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        return view('dashboard_layout.pages.booking.pending',compact('pending','noti','message'));
    }

    public function edit(Booking $pending){
        $message = Contact::latest()->paginate(3);
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        return view('dashboard_layout.pages.booking.edit_test',compact('pending','noti','message'));
    }

    public function update(Request $request, Booking $pending){

        $input = $request->all();
        $input ['cleaner_id'] =Auth::id();
        $pending->update($input);

        $mailData = [
            'user' => $pending->user,
            'location' => $pending->location,
            'telegram' => $pending->telegram,
            'date' => $pending->date,
            'time' => $pending->time,
            'status_type' => $pending->status_type,
        ];
        $to = [
             'cleaner' => Auth::user()->email,
        ];
        Mail::to('admin@gamil.com')->queue(new ApprovedMail($mailData));
        Mail::to($pending->user->email)->queue(new ApprovedMail($mailData));
        Mail::to($to)->queue(new ApprovedMail($mailData));
        return redirect()->route('pending')
            ->with('success','Cleaner updated successfully');
    }

    public function approved()
    {
        $message = Contact::latest()->paginate(3);
        $approved = Booking::with('statuses')->where('status_type', 'Approved')->get();
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        return view('dashboard_layout.pages.booking.approved',compact('approved','noti','message'));
    }

    public function Booking_Service()
    {
        $message = Contact::latest()->paginate(3);
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        $booking_service = Booking::with('statuses')->where('status_type', 'Rejected')->orWhere('status_type','Done')->get();
        return view('dashboard_layout.pages.booking.Booking_Service',compact('booking_service','noti',$message));
    }


// funtion for create users
//    public function create_users()
//    {
//        return view('dashboard_layout.pages.create_users');
//    }

    public function chart()
    {
        $message = Contact::latest()->paginate(3);
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        return view('dashboard_layout.pages.chartjs',compact('noti','message'));
    }
    public function icon()
    {
        $message = Contact::latest()->paginate(3);
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        return view('dashboard_layout.pages.icon',compact('noti','message'));
    }

    public function blank()
    {
        $message = Contact::latest()->paginate(3);
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        return view('dashboard_layout.pages.samples.blank-page',compact('noti','message'));
    }

    public function p404()
    {
        $message = Contact::latest()->paginate(3);
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        return view('dashboard_layout.pages.samples.error-404',compact('noti','message'));
    }

    public function p500()
    {
        $message = Contact::latest()->paginate(3);
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        return view('dashboard_layout.pages.samples.error-500',compact('noti','message'));
    }

    public function login()
    {
        $message = Contact::latest()->paginate(3);
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        return view('dashboard_layout.pages.samples.login',compact('noti','message'));
    }
    public function register()
    {
        $message = Contact::latest()->paginate(3);
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        return view('dashboard_layout.pages.samples.register',compact('noti','message'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $message = Contact::latest()->paginate(3);
        $contact_admin = Contact::latest()->paginate(20);
        $noti = Booking::where('status_type', '=', 'Pending')->latest()->paginate(3);
        return view('dashboard_layout.pages.contacts.index', compact('contact_admin', 'noti','message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact_admin
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Contact $contact_admin)
    {
        $message = Contact::latest()->paginate(3);
        $noti = Booking::where('status_type', '=', 'Pending')->latest()->paginate(3);
        return view('dashboard_layout.pages.contacts.contact_show', compact('contact_admin','noti','message'));
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\BecomCleaners;
use App\Models\Booking;
use App\Models\Contact;
use Illuminate\Http\Request;

class BecomeCleanerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        $message = Contact::latest()->paginate(3);
        $becom_cleaner = BecomCleaners::latest()->paginate(20);
        return view('become_cleaner.index',compact('becom_cleaner','noti','message'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $message = Contact::latest()->paginate(3);
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        return view('become_cleaner.create',compact('noti','message'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $input = $request->all();
        BecomCleaners::create($input);
        return redirect()->back()
            ->with('success','Cleaner created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BecomCleaners  $becom_cleaner
     * @return \Illuminate\Http\Response
     */
    public function show(BecomCleaners $becom_cleaner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BecomCleaners  $becom_cleaner
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(BecomCleaners $becom_cleaner)
    {
        $message = Contact::latest()->paginate(3);
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        return view('become_cleaner.edit',compact('becom_cleaner','noti','message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BecomCleaners  $becom_cleaner
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, BecomCleaners $becom_cleaner)
    {
        $input = $request->all();
        $becom_cleaner->update($input);
        return redirect()->back()
            ->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BecomCleaners  $becom_cleaner
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(BecomCleaners $becom_cleaner)
    {
        $becom_cleaner->delete();
        return redirect()->back()
            ->with('success','Cleaner deleted successfully');
    }

}

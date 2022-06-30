<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $message = Contact::latest()->paginate(3);
        $service = Service::get();
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        return view('dashboard_layout.pages.service.index',compact('service','noti','message'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $message = Contact::latest()->paginate(3);
        $service = Service::get();
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        return view('dashboard_layout.pages.service.create',compact('service','noti','message'));
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
        if($request->hasFile('image')){
            $path = Storage::disk('s3')->put('Service/image', $request->image);
            $path = Storage::disk('s3')->url($path);
            $input['image'] = $path;
        }
        service::create($input);
        return redirect()->route('service.index')
            ->with('success','Service created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(service $service)
    {
        $message = Contact::latest()->paginate(3);
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        return view('dashboard_layout.pages.service.show',compact('service','noti','message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(service $service)
    {
        $message = Contact::latest()->paginate(3);
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        return view('dashboard_layout.pages.service.edit',compact('service','noti','message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, service $service)
    {
        $input = $request->all();
        if($request->hasFile('image')){
            $path = Storage::disk('s3')->put('Service/image', $request->image);
            $path = Storage::disk('s3')->url($path);
            $input['image'] = $path;
        }
        $service->update($input);
        return redirect()->back()
            ->with('success','Service update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(service $service)
    {
        $service->delete();
        return redirect()->back()
            ->with('success','Cleaner deleted successfully');
    }
}

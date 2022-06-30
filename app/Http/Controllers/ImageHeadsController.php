<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\ImageHeads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageHeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $message = Contact::latest()->paginate(3);
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        $image_head = ImageHeads::get();
        return view('image_head.index',compact('image_head','noti','message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageHeads  $image_head
     */
    public function edit(ImageHeads $image_head)
    {
        $message = Contact::latest()->paginate(3);
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        return view('image_head.edit',compact('image_head','noti','message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImageHeads  $image_head
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,ImageHeads $image_head)
    {
        $input = $request->all();
        if($request->hasFile('image')){
            $path = Storage::disk('s3')->put('Image Heads', $request->image);
            $path = Storage::disk('s3')->url($path);
            $input['image'] = $path;
        }
        $image_head->update($input);
        return redirect()->route('image-head.index')
            ->with('success','Image updated successfully');
    }
}

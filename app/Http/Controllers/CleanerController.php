<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CleanerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $message = Contact::latest()->paginate(3);
        $cleaner = User::with('roles')->where('role', 'Cleaner')->latest()->paginate(15);
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
            return view('dashboard_layout.pages.cleaner.index',compact('cleaner','noti','message'));

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
        return view('dashboard_layout.pages.cleaner.create',compact('noti','message'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'date_of_birth' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'id_card' => ['required'],
            'role' => ['required'],
            'sex' => ['required'],
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($request['password']);
        if($request->hasFile('image')){
            $path = Storage::disk('s3')->put('Cleaner/image', $request->image);
            $path = Storage::disk('s3')->url($path);
            $input['image'] = $path;
        }
        User::create($input);
        return redirect()->back()
            ->with('success','Cleaner created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(User $admin_cleaner)
    {
        $message = Contact::latest()->paginate(3);
        $noti = Booking::where('status_type','=','Pending')->latest()->paginate(3);
        return view('dashboard_layout.pages.cleaner.edit',compact('admin_cleaner','noti','message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $admin_cleaner)
    {
//        $this->validate(request(), [
//            'name' => 'required',
//            'phone' => 'required',
//            'date_of_birth' => 'required',
//            'email' => 'required',
//            'role' => 'required',
//            'sex' => 'required',
//        ]);

        $input = $request->all();
        if($request->hasFile('image')){
            $path = Storage::disk('s3')->put('Cleaner/image', $request->image);
            $path = Storage::disk('s3')->url($path);
            $input['image'] = $path;
        }
        $admin_cleaner->update($input);
        return redirect()->back()
            ->with('success','Cleaner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $cleaner)
    {
        $cleaner->delete();
        return redirect()->back()
            ->with('error','Cleaner deleted successfully');
    }
}

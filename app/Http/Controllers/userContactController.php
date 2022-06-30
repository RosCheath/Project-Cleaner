<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class userContactController extends Controller
{
    public function contacts(Request $request)
    {
        $contacts = New Contact();
        $contacts->to = 'Admin@gmail.com';
        $contacts->name = $request->get('name');
        $contacts->email = $request->get('email');
        $contacts->telegram = $request->get('telegram');
        $contacts->message = $request->get('message');
        $contacts->save();
        $mailData = [
            'name' => $contacts->name,
            'email' => $contacts->email,
            'telegram' => $contacts->telegram,
            'message' => $contacts->message,
        ];
        $send2user = [
          'mail' => $contacts->email,
        ];
        Mail::to('admin@gamil.com')->queue(new ContactMail($mailData));
        Mail::to($send2user)->queue(new ContactMail($mailData));

        return redirect()->back();

    }
}

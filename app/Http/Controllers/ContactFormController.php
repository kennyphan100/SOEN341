<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        //To send an email
        Mail::to('test@test.com')->send(new ContactFormMail($data));

        $request->session()->flash('status', 'The message was sent successfully!');

        return redirect('contact');
    }
}

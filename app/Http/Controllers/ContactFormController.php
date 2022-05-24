<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);
        $contact_form_data = request()->all();
        Mail::to('riktasiddique17@gmail.com')->send(new ContactFormMail($contact_form_data));
        return back()->with('success', 'The Mail Send Successfuly!');
    }
}

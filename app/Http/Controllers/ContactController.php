<?php

namespace App\Http\Controllers;

use App\Mail\AdminContactMail;
use App\Models\Contact;
use App\Mail\ContactMail;
use App\Mail\AdminContactMailContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string'
        ]);

        // Save to database
        $contact = Contact::create($request->all());

        // Send email to user
        Mail::to($request->email)->send(new ContactMail([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]));

        // Send email to admin
        
        Mail::to(env('MAIL_USERNAME'))->send(new AdminContactMail([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]));

        return response()->json([
            'message' => 'Form submitted successfully! Our team will contact you soon.'
        ]);
    }

    public function getContacts()
    {
        return response()->json(Contact::all());
    }


}

<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        // Collect the data
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        // Send the email using the mailable class
        Mail::to('akashmasih7771@gmail.com')->send(new ContactFormMail($data));

        // Return a response to the user
        return back()->with('msg','Thanks for reaching out. Your Message has been sent successfully.');
    }
}

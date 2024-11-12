<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMailer;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'subject' => 'required|string',
        ]);

        $details = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('subject')
        ];

        Mail::send(new ContactMailer($details));

        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}

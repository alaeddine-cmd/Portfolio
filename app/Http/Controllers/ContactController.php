<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
    
        // Send the email
        Mail::raw($request->message, function ($message) use ($request) {
            $message->to('alaeddinelusakula@outlook.fr')
                    ->subject('New Contact Message from ' . $request->name)
                    ->replyTo($request->email);
        });
    
        // Redirect back to #contact
        return redirect()->to(url()->previous() . '#contact')->with('success', 'Message sent successfully!');
    }
    
}

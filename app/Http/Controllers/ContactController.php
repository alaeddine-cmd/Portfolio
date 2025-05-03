<?php

namespace App\Http\Controllers;

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

        $body = "📩 New Contact Message Received\n\n"
            . "👤 Name: {$request->name}\n"
            . "📧 Email: {$request->email}\n\n"
            . "📝 Message:\n{$request->message}";

        Mail::raw($body, function ($message) use ($request) {
            $message->to('alaeddinelusakula@outlook.fr')
                ->subject('📬 New Contact Message from ' . $request->name)
                ->replyTo($request->email);
        });

        return redirect()->to(url()->previous() . '#contact')
            ->with('success', 'Message sent successfully!');
    }
}

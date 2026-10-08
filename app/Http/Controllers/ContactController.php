<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        try {
            Mail::raw($data['message'], function ($mail) use ($data) {
                // Use the configured application "from" address as the SMTP sender
                // and set the user's email as Reply-To. Many SMTP servers reject
                // messages when the From address doesn't match the authenticated account.
                $mail->to('ferjhonlopena9@gmail.com')
                    ->subject($data['subject'])
                    ->from(config('mail.from.address'), config('mail.from.name'))
                    ->replyTo($data['email'], $data['name']);
            });

            return back()->with('success', 'Your message has been sent!');
        } catch (\Exception $e) {
            \Log::error('Error sending email: ' . $e->getMessage());
            return back()->with('error', 'There was an error sending your message. Please try again.');
        }
    }
}

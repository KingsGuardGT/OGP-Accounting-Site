<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255'],
            'message' => ['required','string','max:5000'],
        ]);

        Mail::to(config('mail.from.address'))
            ->send(new ContactMessage($data['name'], $data['email'], $data['message']));

        return back()->with('status', 'Thanks! Your message has been sent.');
    }
}

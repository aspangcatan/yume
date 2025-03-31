<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContactEmail(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'username' => 'nullable|string|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $data = $request->only(['full_name', 'email', 'username', 'phone', 'subject', 'message']);

        Mail::to('tdh.asnaui@gmail.com')->send(new ContactMail($data));

        return response()->json(['success' => 'Email sent successfully!']);
    }
}

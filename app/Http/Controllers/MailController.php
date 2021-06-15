<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function sendMail(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'body' => $request->body
        ];

        Mail::to($request->email)->send(new TestMail($data));
        return back()->with('message', 'Email Sended Sucessfully');
    }
}

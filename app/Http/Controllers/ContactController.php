<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        );

        Mail::to('admin@qualitybrands.co.ke')->send(new ContactFormMail($data));

        return redirect()->route('contact')->with('success_message', 'Your message was sent successfully!');
    }

    // public function quote(Request $request)
    // {
    //     $quote = array(
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'phone' => $request->input('phone'),
    //         'service' => $request->input('service'),
    //         'contactmode' => $request->input('contactmode'),
    //         'message' => $request->input('message')
    //     );

    //     if ($request->hasFile('file')) {
    //         $file = $request->file('file');
    //         $file_name = $file->getClientOriginalName();
    //         $file_path = $file->store('uploads');
    //         $quote['file_name'] = $file_name;
    //         $quote['file_path'] = $file_path;
    //     }

    //     Mail::to('admin@qualitybrands.co.ke')->send(new Quotesub($quote));

    //     return redirect()->route('quote')->with('success_message', 'Your Querry was submitted successfully!');
    // }
}

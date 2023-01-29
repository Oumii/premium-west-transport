<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Forfait;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $forf = Forfait::get();
        return view('contacts')->with('forf', $forf);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        $data = array(
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'message'   =>   $request->message
        );
        Mail::to('test_1@example.com')->send(new SendMail($data));
        return back()->with('success', 'Message sent successfully.');
    }
}

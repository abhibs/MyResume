<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function contact(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',

        ]);

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;


        $contact->save();

        return response([
            'message' => 'Contact Form Submited Successfully',
            'status' => 'success',
            'contact' => $contact,
            'code' => 200
        ], 200);

    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    //

    public function contact()
    {
        return view('front.contact');
    }

    public function store(Request $request)
    {
       $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|digits:10|numeric',
        'message' => 'required'

       ]);

       Contact::create($request->all());
       return redirect()->back()->with(['success' => 'Thankyou for contacting us']);
    }
}

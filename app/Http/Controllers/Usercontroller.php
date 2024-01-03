<?php

namespace App\Http\Controllers;
use App\Models\contact;
use App\Models\port;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    //
    public function index()
    {
        return view('frontend/index');
    }
    public function about()
    {
        return view('frontend/about');
    }
    public function contact()
    {
        return view('frontend/contact');
    }
    public function menu()
    {
        return view('frontend/index');
    }
    public function store(Request $request)
    {
        //echo "<pre>";
        //print_r($request->all());die();
        /*
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'msg' => 'required|text',
        ]);*/
        $contact =new port;
        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->subject = $request['subject'];
        $contact->message = $request['message'];
        $contact->save();
        return redirect('/')->with('success', 'details sended successfully!');
    }
}

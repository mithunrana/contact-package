<?php

namespace Techhelpinfo\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Techhelpinfo\Contact\Models\Contact;
use Techhelpinfo\Contact\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }

    public function send(Request $request){
        //return $request->all();
        Mail::to(config('contact.send_email_to'))->send(new ContactMail($request->message,$request->name,$request->email));
        Contact::create($request->all());
        return redirect('contact');
    }
}



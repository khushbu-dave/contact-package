<?php

namespace Bizcs\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Bizcs\Contact\Mail\ContactMailable;
use Bizcs\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        try{
            $response = Contact::create($request->all());
            if($response)
            {
                Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($request->message,$request->name));
                return redirect()->route('contact')->with('success', 'Your message has been sent successfully');
            }else{
                return redirect()->route('contact')->with('error', 'Something went wrong');
            }
        }catch(\Exception $e){
            return redirect()->route('contact')->with('error', $e->getMessage());
        }
    }
}

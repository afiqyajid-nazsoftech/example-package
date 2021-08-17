<?php

namespace Afiqyajid\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Afiqyajid\Contact\Models\Contact;
use Afiqyajid\Contact\Mail\ContactMailable;

class ContactController extends Controller
{

    public function index()
    {

        return view('contact::contact');

    }

    public function send(Request $request)
    {
        // dd($request->remark);
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->remark, $request->name));
        Contact::create($request->all());
        return redirect(route('contact'));

    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\DriverMail;
use App\Mail\OperatorMail;

class ContactController extends Controller
{
    public function ContactForm(Request $request) {
     Mail::to('web-tutorial@programmer.net')->send(new ContactMail($request->all()));
     return back()->with('success', 'Thanks for contacting us!');
    }

    public function DriverForm(Request $request) {
     Mail::to('web-tutorial@programmer.net')->send(new DriverMail($request->all()));
     return back()->with('success', 'Thanks for contacting us!');
    }

    public function OperatorForm(Request $request) {
     Mail::to('web-tutorial@programmer.net')->send(new OperatorMail($request->all()));
     return back()->with('success', 'Thanks for contacting us!');
    }
}

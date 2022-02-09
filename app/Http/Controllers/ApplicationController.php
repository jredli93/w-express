<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationMail;

class ApplicationController extends Controller
{
    public function ApplicationForm(Request $request) {

     Mail::to('web-tutorial@programmer.net')->send(new ApplicationMail($request->all()));
     return back()->with('success', 'Thanks for contacting us!');

    }
}

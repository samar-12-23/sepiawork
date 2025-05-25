<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Contact(){
        //dd('OOKK');
        return view('contact-us');
    }
}

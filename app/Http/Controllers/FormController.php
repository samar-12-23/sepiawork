<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function Form(){
        //dd('OOKK');
        return view('form');
    }
}

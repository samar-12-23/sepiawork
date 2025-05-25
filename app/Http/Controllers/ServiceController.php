<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function Service(){
        //dd('OOKK');
        return view('Services');
    }

    public function Service_in(){
        //dd('OOKK');
        return view('service-in');
    }

    
}

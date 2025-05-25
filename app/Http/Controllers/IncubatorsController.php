<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncubatorsController extends Controller
{
    public function Incubator(){
        //dd('OOKK');
        return view('incubators');
    }

    public function portfolio1(){
        //dd('OOKK');
        return view('portfolio');
    }

    public function portfolio2(){
        //dd('OOKK');
        return view('portfolio2');
    }

    public function portfolio3(){
        //dd('OOKK');
        return view('portfolio3');
    }
}

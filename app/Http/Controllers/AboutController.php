<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function About(){
        //dd('OOKK');
        return view('about');
    }

    public function Team(){
        //dd('OOKK');
        return view('team');
    }
    
    public function Guide(){
        //dd('OOKK');
        return view('guildeline');
    }

    public function Email(){
        return view('email');
    }

    public function Category(){
        return view('category');
    }

    public function Earnings(){
        return view('earnings');
    }

    public function Collaborators(){
        return view('collaborators');
    }


}

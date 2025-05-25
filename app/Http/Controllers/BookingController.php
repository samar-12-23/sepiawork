<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function Booking(){
        //dd('OOKK');
        return view('bookings');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendBookingController extends Controller
{
    public function booking()
    {
        return view('frontend.booking');
    }
}

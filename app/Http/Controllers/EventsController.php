<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        
        return view('frontend.index');
    }

    public function About(){
        return view('frontend.about');
    }

    public function Events(){
        return view('frontend.events');
    }

    public function Details(){
        return view('frontend.details');
    }

    public function Terms(){
        return view('frontend.terms');
    }

    public function Privacy(){
        return view('frontend.privacy');
    }
}

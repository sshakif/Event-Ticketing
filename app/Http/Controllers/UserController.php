<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;
use App\Models\Applyedjob;

use App\Models\Process;
use App\Models\Brand;
use App\Models\Team;
use App\Models\Job;
use App\Models\Blogpost;
use App\Models\Project;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\About;


use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
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
}


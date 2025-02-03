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
use App\Models\Category;
use App\Models\Event;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{

    public function index()
    {   $get_upcoming_event = Event::where('status' , true)->limit(3)->orderBy('created_at' , 'desc')->get();
        $get_latest_event = Event::where('status' , true)->limit(10)->orderBy('created_at' , 'desc')->get();
        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('frontend.index' , compact('categories' , 'get_latest_event' , 'get_upcoming_event'));
    }

    public function About(){
        return view('frontend.about');
    }

    public function Events(){
        $all_events  =Event::where('status' , true)->orderBy('created_at', 'desc')->get();
        return view('frontend.events' ,compact('all_events') );
    }

    public function Details($id){
        $items = Event::find($id);
        return view('frontend.details' , compact('items'));
    }

    public function Terms(){
        return view('frontend.terms');
    }

    public function Privacy(){
        return view('frontend.privacy');
    }
}


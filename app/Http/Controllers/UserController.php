<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Event;
use App\Models\EventBookingRequest;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{

    public function index()
    {
        $get_upcoming_event = Event::where('status', true)->limit(3)->orderBy('created_at', 'desc')->get();
        $get_latest_event = Event::where('status', true)->limit(10)->orderBy('created_at', 'desc')->get();
        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('frontend.index', compact('categories', 'get_latest_event', 'get_upcoming_event'));
    }

    public function About()
    {
        return view('frontend.about');
    }

    public function Events(Request $request)
    {
        $query = Event::query();
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }
        if ($request->filled('search')) {
            $query->where('title', 'LIKE', "%{$request->search}%")
                ->orWhere('ticket_price', 'LIKE', "%{$request->search}%")
                ->orWhere('event_address', 'LIKE', "%{$request->search}%")
                ->orWhere('event_start_date', 'LIKE', "%{$request->search}%")
                ->orWhere('short_description', 'LIKE', "%{$request->search}%")
                ->orWhere('description', 'LIKE', "%{$request->search}%");
        }
        $all_events  = $query->where('status', true)->orderBy('created_at', 'desc')->get();
        $category_with_number = Category::has('events')->withCount('events')->get();
        return view('frontend.events', compact('all_events', 'category_with_number'));
    }

    public function Details($id)
    {
        $items = Event::find($id);
        return view('frontend.details', compact('items'));
    }

    public function Terms()
    {
        return view('frontend.terms');
    }

    public function Privacy()
    {
        return view('frontend.privacy');
    }


    // ticket request system started
     
    public function Request_ticket(Request $request){
     
        $request->validate([
            'name'=>'required',           
            'participant'=>'required',
            'email'=>'required | email| unique:users',
            'phone'=>'required',
         
        ]);
       $user_info=  $user = new User();
       
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = $request->phone;
        $user->save();
        
        if($user_info){
          $event_info = Event::find($request->event_id);
            
            $Ticke_Request = new EventBookingRequest();
            $Ticke_Request->user_id = $user_info->id;
            $Ticke_Request->event_id = $request->event_id;
            $Ticke_Request->user_name = $user_info->name;
            $Ticke_Request->user_email = $user_info->email;
            $Ticke_Request->user_phone = $request->phone;
            $Ticke_Request->event_date = $event_info->event_start_date;
            $Ticke_Request->event_time = $event_info->event_start_time;
            $Ticke_Request->total_participants = $request->participant;
            $Ticke_Request->total_amount = $request->total_amount;
            $Ticke_Request->created_by = $user_info->id;

            $Ticke_Request->save();
        }
       
        return Redirect::back()->with('success', 'Ticket request successfully!');
    }

}

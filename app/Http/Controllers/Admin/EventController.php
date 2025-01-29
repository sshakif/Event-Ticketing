<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::orderBy('created_at', 'desc')->get();
        $events = Event::orderBy('created_at', 'desc')->get();

        return view('admin.backend.event-management.eventsList', compact('events', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'category_id' => 'required'
        ]);
         
        $ban_img1 = null;
        $ban_img2 = null;
        $ban_img3 = null;
        $slider_img = null;

        if ($request->hasFile('banner_image')) {
            $image = $request->file('banner_image');
            $mime_type = $image->getClientMimeType();
            $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            if (!file_exists(public_path('upload/events'))) {
                mkdir(public_path('upload/events'), 0777, true);
            }
            $image->move(public_path('upload/events'), $imageName);
            $imagePath = 'upload/events/' . $imageName;
            $ban_img1 = $imagePath;
        }

        if ($request->hasFile('banner_image2')) {
            $image = $request->file('banner_image2');
            $mime_type = $image->getClientMimeType();
            $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            if (!file_exists(public_path('upload/events'))) {
                mkdir(public_path('upload/events'), 0777, true);
            }
            $image->move(public_path('upload/events'), $imageName);
            $imagePath = 'upload/events/' . $imageName;
            $ban_img2 = $imagePath;
        }


        if ($request->hasFile('banner_image3')) {
            $image = $request->file('banner_image3');
            $mime_type = $image->getClientMimeType();
            $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            if (!file_exists(public_path('upload/events'))) {
                mkdir(public_path('upload/events'), 0777, true);
            }
            $image->move(public_path('upload/events'), $imageName);
            $imagePath = 'upload/events/' . $imageName;
            $ban_img3 = $imagePath;
        }

        if ($request->hasFile('slider_image')) {
            $image = $request->file('slider_image');
            $mime_type = $image->getClientMimeType();
            $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            if (!file_exists(public_path('upload/events'))) {
                mkdir(public_path('upload/events'), 0777, true);
            }
            $image->move(public_path('upload/events'), $imageName);
            $imagePath = 'upload/events/' . $imageName;
            $slider_img = $imagePath;
        }

        $event = new Event();
        $event->title = $request->title;
        $event->category_id = $request->category_id;
        $event->short_description = $request->short_description;
        $event->description = $request->description;
        $event->ticket_price = $request->ticket_price;
        $event->event_address = $request->event_address;
        $event->map_location = $request->map_location;
        $event->event_start_date = $request->event_start_date;
        $event->event_end_date = $request->event_end_date;
        $event->event_start_time = $request->event_start_time;
        $event->event_end_time = $request->event_end_time;
        $event->banner_image = $ban_img1 ? $ban_img1 : null;
        $event->banner_image2 = $ban_img2 ? $ban_img2: null;
        $event->banner_image3 = $ban_img3 ? $ban_img3 : null;
        $event->slider_image = $slider_img;
        $event->created_by = Auth::user()->id;
        $event->save();

        return redirect()->route('events.list')->with('success', 'Event created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function Show($id)
    {   
        $items = Event::find($id);

        return view('admin.backend.event-management.eventDetails' , compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function Edit(Event $event)
    {
        

        return view('admin.backend.event-management.edit-event');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);

        if ($event) {
            $img1 = $event->banner_image;
            $img2 = $event->banner_image2;
            $img3 = $event->banner_image3;
            $img4 = $event->slider_image;

            if ($img1 && file_exists(public_path($img1))) {
                unlink(public_path($img1));
            }
            if ($img2 && file_exists(public_path($img2))) {
                unlink(public_path($img2));
            }
            if ($img3 && file_exists(public_path($img3))) {
                unlink(public_path($img3));
            }
            if ($img4 && file_exists(public_path($img4))) {
                unlink(public_path($img4));
            }

            $event->delete();

            return redirect()->route('events.list')->with('success', "Category deleted successfully");
        } else {
            return redirect()->route('events.list')->with('error', "Somthing went error during delete");
        }
    }
}

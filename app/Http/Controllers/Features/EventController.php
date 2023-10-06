<?php

namespace App\Http\Controllers\Features;

use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            $events = Event::with('profile')->get();
            return view('components.tables.events_table', compact('events'));
        } else {
            return redirect()->route('user.login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validate = $request->validate([
            'events' => 'required|string|max:12',
            'events_description' => 'required|string|min:12',
            'events_uploaded' => 'required|date',
            'events_images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'personnel_added' => 'required',
        ]);
        if (!$validate) {
            return redirect()->route('user.home')->with('fail', 'Unable to Create Event!');
        }
        $event = new Event();
        $event->events = $validate['events'];
        $event->events_description = $validate['events_description'];
        $event->events_uploaded = $validate['events_uploaded'];
        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->store('images/events', 'public');
            $event->events_images = $picturePath;
        }
        $event->profile_id = $validate['personnel_added'];
        $event->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
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
    public function destroy(Event $event)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        return view('calendar.index');
    }

    public function store(Request $request)
    {
        $event = Event::create([
            'title' => $request->input('title'),
            'category' => $request->input('category'),
            // Add any additional fields you have in the Event model
        ]);

        return response()->json(['message' => 'Event created successfully', 'event' => $event]);
    }

    public function delete(Request $request)
    {
        $eventId = $request->input('event_id');

        Event::findOrFail($eventId)->delete();

        return response()->json(['message' => 'Event deleted successfully', 'event_id' => $eventId]);
    }

}

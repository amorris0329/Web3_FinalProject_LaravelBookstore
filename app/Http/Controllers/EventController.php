<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //
    public function events() {
        $events = Event::all();

        return view('events', ['events' => $events]);
    }

    public function createEvent(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|min:3|max:30',
            'date' => 'required|date|after:today',
            'description' => 'required|string|min:10|max:500',
            'image' => ['required', 'string', 'regex:/\.(png|jpeg)$/i'],
            'imageAlt' => 'required|string|min:10|max:250'
        ]);

        Event::create($validated);

        return redirect()->route('login.employee');
    }

    public function delete(Event $event) {
        $event->delete();

        return redirect()->route('login.employee');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function getEvents()
    {
        return Event::find(1);
    }

    public function addEvent(Request $request)
    {
        $event = Event::find(1);
        $event->events = $request->get('events');
        $event->save();

        return $event;
    }
}

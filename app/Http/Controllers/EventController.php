<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $events = $this->getAllEvents();
        return view('home', [
            'event'=>$events
        ]);
    }

    public function newEvent(Request $request)
    {
        $user = Auth::user();
        $event = new Events;
        $event->event_name = $request['event_name'];
        $event->description = $request['description'];
        $event->start_date = $request['start_date'];
        $event->end_date = $request['end_date'];
        $event->capacity = $request['capacity'];
        $event->users_id = $user['id'];
        $event->save();
        return redirect('home');
    }

    public function getAllEvents()
    {
        $events = Events::all();
        return $events;
    }
}

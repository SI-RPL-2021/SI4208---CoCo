<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\EventsTags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class EventSayaController extends Controller
{
    public function __construct(NotificationController $notifController)
    {
        $this->middleware('auth');
        $this->notifController = $notifController;
    }

    // public function index()
    // {
    //     // $events = $this->getAllEvents();
    //     // return view('event', [
    //     //     'event' => $events
    //     // ]);
    // }

    public function displayImage($id)
    {
        $image = DB::table('images')
            ->where('id', '=', $id)
            ->get();
        $path = $image[0]->url;
        return Storage::get('public/' . $path);
    }

    public function index($id)
    {
        $events = DB::table('events')
            ->where('id', '=', $id)
            ->get();
        $event = $events[0];

        $events_tags = EventsTags::where('events_id', '=', $id)
            ->where('status', '<>', 'D')->get();

        return view('eventSaya', [
            'event_name' => $event->event_name,
            'description' => $event->description,
            'start_date' => $event->start_date,
            'end_date' => $event->end_date,
            'capacity' => $event->capacity,
            'events_tags' => $events_tags,
            'image_id' => $event->images_id,
            'alert' => ''
        ]);
    }

    public function acceptTags(Request $request)
    {
        $events_tag_a = EventsTags::find($request->eventsTagsId);
        $events_tag_a->status = 'A';
        $events_tag_a->save();
        $data = [$events_tag_a->users->id, 'AE', $events_tag_a->events->id];
        $this->notifController->addNotification($data);
        return Redirect::to('eventSaya/' . $events_tag_a->events->id);
    }

    public function declineTags(Request $request)
    {
        $events_tag_a = EventsTags::find($request->eventsTagsId);
        $events_tag_a->status = 'D';
        $events_tag_a->save();
        $data = [$events_tag_a->users->id, 'DE', $events_tag_a->events->id];
        $this->notifController->addNotification($data);
        return $this->index($events_tag_a->events->id);
    }
}

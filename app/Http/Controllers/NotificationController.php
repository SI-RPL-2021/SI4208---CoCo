<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Notifications;
use App\Models\Events;
use App\Models\Users;
use Illuminate\Http\Request;

class NotificationController extends Controller
{

    public function addNotification($data)
    {
        //data[0] selalu user id penerima notifikasi
        $user = Auth::user();
        $notifications = new Notifications;
        // ID penerima notifikasi
        $notifications->users_id = $data[0];
        //data[1] selalu type
        if ($data[1] == 'AE') { //AE Accept Event
            //data[2] untuk AE adalah eventId
            $event = Events::find($data[2]);
            $desc = "Selamat! Kamu telah diterima menjadi kolaborator di Event \"" . $event->event_name . "\" oleh "
                . " <a href=\"{{ url('profileView/" . $user['id'] . "')}}\">" . $user->name . "</a>";
        } else if ($data[1] == 'DE') { //DE Decline Event
            //data[2] untuk DE adalah eventId
            $event = Events::find($data[2]);
            $desc = "Huhu:( Kamu telah ditolak menjadi kolaborator di Event \"" . $event->event_name . "\" oleh "
                . " <a href=\"{{ url('profileView/'" . $user['id'] . "'')}}\">" . $user->name . "</a> ";
        }
        $notifications->description = $desc;
        $notifications->save();
    }

    public function getNotification()
    {
        $id = Auth::user()->id;
        $notifications = Notifications::where('users_id', '=', $id)->get();
        return $notifications;
    }

    public function show()
    {
        return "test";
    }
}

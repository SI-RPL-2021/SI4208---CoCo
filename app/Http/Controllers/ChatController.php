<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    //

    public function inbox(Request $request) {
        $user = Auth::user();
        $chat = new Chat;
        // $chat->inbox= $request['inbox'];
        $chat->inbox= $request->inbox;
        $chat->users_id = $user['id'];
        $chat->save();

        return redirect('chat');
    }
}

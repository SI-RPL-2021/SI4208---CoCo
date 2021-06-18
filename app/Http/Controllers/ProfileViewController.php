<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Events;
use App\Models\Follows;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProfileViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function redirectProfileView($id){
        return Redirect::to("/profileView/diskusi/".$id);
    }

    public function profileView($id) {
        $user = Users::where('id','=',$id)->first();
        $id = $user['id'];
        $name = $user['name'];
        $username = $user['username'];
        $image = $user['images_id'];
        $posts = $this->getPostById($id);

        $following = $user->following()->count();
        $follower = $user->followers()->count();

        $userId = Auth::user()->id;
        $is_following = Follows::where('follower_id', '=', $userId)
                                ->where('following_id', '=', $id)->first() ||
                        $id == Auth::user()->id? true:false;
        return view('profileView', [
            'name' => $name,
            'username' => $username,
            'image' => $image,
            'posts' => $posts,
            'id' => $user->id,
            'following' => $following,
            'follower' => $follower,
            'isFollowing' => $is_following,
            'isDiskusi' => true
        ]);
    }

    public function profileViewEvent($id) {
        $user = Users::where('id','=',$id)->first();
        $id = $user['id'];
        $name = $user['name'];
        $username = $user['username'];
        $image = $user['images_id'];
        $events = $this->getEventsById($id);

        $following = $user->following()->count();
        $follower = $user->followers()->count();

        $userId = Auth::user()->id;
        $is_following = Follows::where('follower_id', '=', $userId)
                                ->where('following_id', '=', $id)->first() ||
                        $id == Auth::user()->id? true:false;
        return view('profileView', [
            'name' => $name,
            'username' => $username,
            'image' => $image,
            'events' => $events,
            'id' => $user->id,
            'following' => $following,
            'follower' => $follower,
            'isFollowing' => $is_following,
            'isDiskusi' => false
        ]);
    }

    public function displayImage($id)
    {
        $image = DB::table('images')
            ->where('id', '=', $id)
            ->get();
        $path = $image[0]->url;
        return Storage::get('public/' . $path);
    }

    public function getPostById($id)
    {
        $posts = Posts::where('users_id', '=', $id)
                        ->orderBy('updated_at', 'DESC')->get();

        return $posts;
    }

    public function getEventsById($id)
    {
        $events = Events::where('users_id', '=', $id)
                        ->orderBy('updated_at', 'DESC')->get();
        return $events;
    }
 	public function follow(Request $request)
    {
        $following_id = $request-input('following_id');
        $idUser = Authuser()-id;
        $user = Usersfind($idUser);
        $user-following()-attach($following_id);
        return $this-profileView($following_id);
    }
}

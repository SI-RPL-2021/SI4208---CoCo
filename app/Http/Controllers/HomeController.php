<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Events;
use App\Models\Events_Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $user = Auth::user();
        $name = $user['name'];
        $username = $user['username'];
        $image = $user['images_id'];
        $posts = $this->getAllPost();
        $events = $this->getAllEvents();
        return view('home', [
            'name'=>$name,
            'username'=>$username,
            'image'=>$image,
            'posts'=>$posts,
            'events'=>$events
        ]);
    }

    public function displayImage($id) {
        $image = DB::table('images')
                    ->where('id','=',$id)
                    ->get();
        $path = $image[0]->url;
        return Storage::get('public/'.$path);
    }

    public function newPost(Request $request) {
        $user = Auth::user();
        $post = new Posts;
        $post->story = $request['story'];
        $post->users_id = $user['id'];
        $post->save();

        return redirect('home');
    }

    public function daftarEvent(){
        $user = Auth::user();
        $events = Events::all();
        $events_tags = new Events_Tags;
        $events_tags->events_id = $events['id'];
        $events_tags->users_id = $user['id'];
        $events_tags->save();

        // return redirect('home');
        echo "Daftar sukses";
    }


    public function getAllPost() {
        $posts = Posts::all();
        return $posts;
    }

    public function getAllEvents()
    {
        $events = Events::all();
        return $events;
    }
    public function adminHome()
    {
        return view('admin/landing_admin');
    }
}

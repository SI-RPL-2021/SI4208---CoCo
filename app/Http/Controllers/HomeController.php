<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Posts;
use App\Models\Events;
use App\Models\Events_Comments;
use App\Models\EventsTags;
use App\Models\Users;
use Hamcrest\Core\Every;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = Users::all();
        $user = Auth::user();
        $name = $user['name'];
        $user_id = $user['id'];
        $username = $user['username'];
        $image = $user['images_id'];
        $posts = $this->getAllPost();
        $events = $this->getAllEvents();
        $comments = Comments::all();
        return view('home', [
            'name' => $name,
            'username' => $username,
            'image' => $image,
            'posts' => $posts,
            'events' => $events,
            'comments' => $comments,
            'users' => $users,
            'user_id' => $user_id
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
    public function deleteComment(Request $request)
    {
        $comment = Comments::find($request->id);
        $comment->delete();

        return redirect()->back();
    }

    public function deleteComment_event(Request $request)
    {
        $comment = Events_Comments::find($request->id);
        $comment->delete();

        return redirect()->back();
    }

    public function newComment_event(Request $request)
    {
        $comment = new Events_Comments;
        $comment->events_id = $request['id'];
        $comment->users_id = $request['user_id'];
        $comment->events_comments = $request['events_comments'];
        $comment->save();


        return redirect()->back();
    }

    public function newComment(Request $request)
    {
        $comment = new Comments;
        $comment->posts_id = $request['id'];
        $comment->users_id = $request['user_id'];
        $comment->comments = $request['comments'];
        $comment->save();

        return redirect('home');
    }

    public function kolaborasi($id)
    {
        $event = Events::find($id);
        $comments = Events_Comments::all();
        $users = Users::all();
        $user = Auth::user();
        $user_id = $user['id'];
        return view('kolaborasi', compact('event', 'comments', 'users', 'user_id'));
    }
    public function newPost(Request $request)
    {
        $user = Auth::user();
        $post = new Posts;
        $post->story = $request['story'];
        $post->users_id = $user['id'];
        $post->save();

        return redirect('home');
    }

    public function daftarEvent(Request $request)
    {
        $user = Auth::user();
        $events_tags = new EventsTags;
        $events_tags->events_id = $request['events_id'];
        $events_tags->users_id = $user['id'];
        $events_tags->save();
 
        echo '<script language="javascript">';
        echo 'alert("Daftar Kolaborasi Sukses!")';
        echo '</script>';
        return redirect('home');
    }


    public function getAllPost()
    {
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

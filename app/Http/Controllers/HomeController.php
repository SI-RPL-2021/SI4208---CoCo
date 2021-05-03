<?php

namespace App\Http\Controllers;

use App\Models\Posts;
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
        return view('home', [
            'name'=>$name,
            'username'=>$username,
            'image'=>$image,
            'posts'=>$posts
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

    public function getAllPost() {
        $posts = Posts::all();
        return $posts;
    }
}

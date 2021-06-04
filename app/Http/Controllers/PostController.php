<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function detail($id) {
        $post = Posts::find($id);
        return view('diskusi',['post'=>$post]);
    }

    public function comment(Request $request, $id) {
        $comment = new Comments;
        $comment->posts_id = $id;
        $comment->comments = $request->comment;
        $comment->users_id = Auth::id();
        $comment->save();
        
        return redirect()->back();
    }
}

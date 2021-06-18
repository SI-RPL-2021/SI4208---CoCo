<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostDeleteController extends Controller
{
    public function index() {
        $post = DB::select('select * from posts');
        return view('stud_delete_view',['posts'=>$post]);
    }
    public function destroy($id) {
        DB::delete('delete from posts where id = ?',[$id]);
        echo "Post deleted successfully.<br/>";
        echo '<a href = "/content_mgt">Click Here</a> to go back.';
    }

}

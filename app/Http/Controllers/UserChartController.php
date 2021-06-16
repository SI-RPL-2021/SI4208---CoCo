<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserChartController extends Controller
{
    public function index() {
        $post = DB::select("SELECT COUNT(*) as jumlah FROM posts");
        $user = DB::select("SELECT COUNT(*) as jumlah1 FROM users");
        return view('admin/dashboard',['post'=>$post],['user'=>$user]);

    }

}

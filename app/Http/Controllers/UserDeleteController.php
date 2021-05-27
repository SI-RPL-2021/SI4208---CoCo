<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserDeleteController extends Controller {
    public function index() {
        $user = DB::select('select * from users');
        return view('stud_delete_view',['users'=>$user]);
    }
    public function destroy($id) {
        DB::delete('delete from users where id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/user_mgt">Click Here</a> to go back.';
    }
}
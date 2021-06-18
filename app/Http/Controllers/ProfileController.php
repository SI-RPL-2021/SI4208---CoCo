<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Images;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        $user = Auth::user();
        return view('profile', [
            'user'=>$user,
            'alert'=>''
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

    public function update()
    {
        $users = DB::select('select * from users');
        return view('stud_edit_view', ['users' => $users]);
    }
    public function show($id)
    {
        $users = DB::select('select * from users where id = ?', [$id]);
        return view('profile', ['users' => $users]);
    }
    public function updateProfile(Request $request)
    {
        $name = $request->input('name');
        $username = $request->input('username');
        $bio = $request->input('bio');
        $id = Auth::user()->id;
        $query = "update users set name='".$name."', username='".$username."', bio='".$bio."'";
        if($request->newImage) {
            $newImage = $request->newImage;
            $imageName = time().''.$newImage->getClientOriginalName();
            $newImage->storeAs('public/profile-images/', $imageName);
            $image = new Images();
            $image->url = 'profile-images/'.$imageName;
            $image->save();
            $query .= ", images_id='".$image->id."'";
        }
        DB::update($query.' where id = ?', [$id]);
        $user = Users::find(Auth::user()->id);
        return view('profile', [
            'user'=>$user,
            'alert'=>'Berhasil Update Data Profil.'
        ]);
    }

    public function getAllPost()
    {
        $users = Users::all();
        return $users;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $users = $this->getAllPost();
        $name = $user['name'];
        $username = $user['username'];
        $email = $user['email'];
        $bio = $user['bio'];
        $image = $user['images_id'];
        return view('profile', [
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'bio' => $bio,
            'image' => $image,
            'users' => $users
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

    /**
     * Update user's profile
     *
     * @param  UpdateProfileRequest $request
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // public function updateProfile(Request $request)
    // {
    //     $user = Auth::user();

    //     $request->user()->updateProfile(
    //         $request->all()
    //     );

    // $user = new Users;
    // $user->name = $request['name'];
    // $user->username = $request['username'];
    // $user->bio = $request['bio'];
    // $user->users_id = $user['id'];
    // $user->save();

    // return redirect('profile');

    // $request->validate([
    //     'nama' => 'required',
    //     'username' => 'required',
    //     'bio' => 'required'
    // ]);
    // $users->update($request->all());
    // return redirect()->route('biodata.index')->with('success','biodata berhasil di update');
    // }

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
    public function edit(Request $request, $id)
    {
        $name = $request->input('name');
        $username = $request->input('username');
        $bio = $request->input('bio');
        /*$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);*/
        /*DB::table('student')->update($data);*/
        /* DB::table('student')->whereIn('id', $id)->update($request->all());*/
        DB::update('update users set name = ?,username=?,bio=? where id = ?', [$name, $username, $bio, $id]);
        echo "Record updated successfully.
        ";
        echo 'Click Here to go back.';
    }

    public function getAllPost()
    {
        $users = Users::all();
        return $users;
    }
}

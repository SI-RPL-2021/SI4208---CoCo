<?php

use App\Http\Controllers\ReportController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\Auth\DeleteController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventSayaController;
use App\Http\Controllers\USerChartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileViewController;
use App\Http\Controllers\UsersController;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportMgtController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

// Route::get('/chat', function () {
//     return view('chat');
// })->name('chat');

Route::get('/eventSaya', function () {
    return view('eventSaya');
})->name('eventSaya');

Route::get('/eventDetail', function () {
    return view('eventDetail');
})->name('eventDetail');

// post detail
Route::get('/diskusi/{id}', "PostController@detail")->name('diskusi');

Route::get('/kolaborasi', function () {
    return view('kolaborasi');
})->name('kolaborasi');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LogoutController::class, 'index'])->name('logout');

Route::group(['middleware' => 'auth'], function () {

    // Home Controller
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/displayImage/{id}', [HomeController::class, 'displayImage'])->whereNumber('id')->name('displayImage');
    Route::post('/newPost', [HomeController::class, 'newPost'])->name('newPost');
    Route::post('/daftarEvent', [HomeController::class, 'daftarEvent'])->name('daftarEvent');

    // Event Controller
    Route::get('/event', [EventController::class, 'index'])->name('event');
    Route::post('/newEvent', [EventController::class, 'newEvent'])->name('newEvent');
    Route::get(
        '/eventSaya/{id}',
        [EventSayaController::class, 'index']
    )->whereNumber('id')->name('eventSaya');
    Route::post('/eventSaya/accept', [EventSayaController::class, 'acceptTags'])->name('eventSaya.accept');
    Route::post('/eventSaya/decline', [EventSayaController::class, 'declineTags'])->name('eventSaya.decline');

    // Profile Controller
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/updateProfile', [ProfileController::class, 'updateProfile'])->name('updateProfile');
    Route::get('/profileView/{id}', [ProfileViewController::class, 'redirectProfileView'])->whereNumber('id')->name('profileView');
    Route::get('/profileView/diskusi/{id}', [ProfileViewController::class, 'profileView'])->whereNumber('id')->name('profileView.diskusi');
    Route::get('/profileView/event/{id}', [ProfileViewController::class, 'profileViewEvent'])->whereNumber('id')->name('profileView.event');

    // Chat Controller
    Route::get('/chat', [ChatController::class, 'inbox'])->name('chat');
    Route::post('/inbox', [ChatController::class, 'inbox'])->name('inbox');

    // Follows
    Route::post('/profileView/follow', [ProfileViewController::class, 'follow'])->name('profileView.follow');
    Route::post('/profileView/unfollow', [ProfileViewController::class, 'unfollow'])->name('profileView.unfollow');

    // Route::get('/admin', function () {
    //     return view('/admin/landing_admin');
    // })->name('admin');

    Route::get('/user_mgt', function () {
        $user = DB::table('users')->get();
        return view('/admin/user_mgt', ['user' => $user]);
    })->name('user_mgt');

    Route::get('delete-records', 'UserDeleteController@index');
    Route::get('delete/{id}', 'UserDeleteController@destroy');

    Route::get('deletep-records', 'PostDeleteController@index');
    Route::get('deletep/{id}', 'PostDeleteController@destroy');

    Route::get('/report_mgt', function () {
        $post = DB::table('posts')->get();
        return view('/admin/report_mgt', ['post' => $post]);
        return view('admin/report_mgt');
    })->name('report_mgt');

    // comment post
    Route::post('/diskusi/{id}/comment', "PostController@comment");

    Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin')->middleware('is_admin');

    Route::get('/dashboard', [UserChartController::class, 'index'])->name('dashboard');

    // Route::get('/dashboard', function () {
    //     return view('admin/dashboard');
    // })->name('dashboard');
















    Route::get('/report_mgt', [ReportMgtController::class, 'index'])->name('report_mgt');

    Route::post('/report', [ReportController::class, 'report'])->name('report');;


    //report content
    Route::get('/report', [ReportController::class, 'index'])->name('report');
});

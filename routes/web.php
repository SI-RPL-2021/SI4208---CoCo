<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Support\Facades\Route;

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

Route::get('/tentang', function(){
    return view('tentang');
})->name('tentang');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LogoutController::class, 'index'])->name('logout');

Route::group(['middleware'=>'auth'], function() {
    
    // Home Controller
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/displayImage/{id}', [HomeController::class, 'displayImage'])->whereNumber('id')->name('displayImage');
    Route::post('/newPost', [HomeController::class, 'newPost'])->name('newPost');

    // Event Controller
    Route::get('/event', [EventController::class, 'index'])->name('event');
    Route::post('/newEvent', [EventController::class, 'newEvent'])->name('newEvent');
});
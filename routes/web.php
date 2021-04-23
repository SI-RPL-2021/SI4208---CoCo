<?php

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
    return view('homepage');
});


// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/registrasi', function () {
//     return view('registrasi');
// });

Route::get('/hal', function () {
    return view('hal');
});

Route::get('/halnew', function () {
    return view('halnew');
});

Route::get('/kolaborasiBuat', function () {
    return view('kolaborasiBuat');
});

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/grocery', 'GroceryController@index')->name('grocery');
Route::post('/grocery', 'GroceryController@index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blank', function () {
    return view('blank');
})->name('blank');

Route::get('/diskusi', function () {
    return view('diskusi');
})->name('diskusi');

Route::get('/event', function () {
    return view('event');
})->name('event');

?>
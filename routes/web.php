<?php

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

Route::get('/homepage', function(){
    return view('homepage');
});

Route::get('/contactus', function(){
    return view('contactus');
});

Route::get('/aboutus', function(){
    return view('aboutus');
});

Route::get('/workwithus', function(){
    return view('workwithus');
});

Route::get('/events', function(){
    return view('events');
});

Route::get('/eventregistration', function(){
    return view('eventregistration');
});
Route::post('/eventregistration', 'WebController@submit');

Route::get('/auth/login', function(){
    return view('/auth/login');
});

Route::get('/auth/register', function(){
    return view('/auth/register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

?>
<?php

use App\Http\Controllers\bbbController;
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
    return view('home');
});

Route::get('/join', function () {
    return view('login-signup');
});


Route::get('/create', function () {
    $controller = new bbbController();
    $attributes = [];


    $attributes['meeting_name'] = 'Test' ;
    $attributes['meeting_id'] = '1' ;
    $attributes['attendee_password'] = '12' ;
    $attributes['moderator_password'] = '43' ;
    $attributes['logout_url'] = 'localhost:8000' ;
    $attributes['maximum_participants'] = '200' ;
    $attributes['record'] = 'true' ;
    $attributes['auto_start_recording'] = 'false' ;
    $attributes['allow_start_stop_recording'] = 'false' ;
    $attributes['meta_message'] = 'This is test';
    $attributes['duration'] = '60' ;
    $attributes['welcome_message'] = 'welcome' ;
    $attributes['moderator_only_message'] = ' moderator message' ;
    $attributes['logo'] = '' ;
    $attributes['mute_on_start'] = 'true' ;
    $attributes['copyrights'] = 'noooooooooo';

    $attributes['banner_color'] = '#000000';
    $attributes['banner_text'] = 'banner text';
    $attributes['password'] = '43';

    // dd($attributes);
    return $controller->joinMeeting($attributes);
});
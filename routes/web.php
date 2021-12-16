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
    return view('home');
});

Route::get('/events', 'App\Http\Controllers\EventsController@getAllEvents')->name('events');
Route::post('/events-searh', 'App\Http\Controllers\EventsController@searchEvents')->name('eventsSearch');
Route::post('/send-mail', 'App\Http\Controllers\EventsController@sendMail')->name('sendMail');

Route::get('/candidate-register', function () {
    return view('register/candidate');
});
Route::get('/employer-register', function () {
    return view('register/employer');
});
Route::post('/candidate-register', 'App\Http\Controllers\CandidateController@insert')->name('candidate-register-post');
Route::get('/candidate-confirmed/{id}', 'App\Http\Controllers\CandidateController@confirmedEmail');
Route::post('/candidate-register-confirmed', 'App\Http\Controllers\CandidateController@confirmed')->name('candidate-register-post-confirmed');

//Routes Employer
Route::post('/employer-register', 'App\Http\Controllers\EmployerController@insert')->name('employer-register-post');
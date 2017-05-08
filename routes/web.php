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
    return view('welcome');
})->name('home');
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/profile', 'HomeController@profile');
Route::post('/send', 'MailController@send');
Route::get('/webteam', 'WebteamController@index');
Route::post('subscriber', 'SubscriberController@store')->name('subscriber');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::middleware('admin.user')->get('/mail', 'AdminController@getMail');
    Route::middleware('admin.user')->post('/mail/send', 'AdminController@postMail');
});

Route::group(['prefix' => 'teacher'], function() {
    Route::get('/', 'TeachersController@index');
    Route::get('/login', 'TeacherLoginController@ShowLogin');
    Route::post('/login', 'TeacherLoginController@PostLogin');
    Route::get('/register', 'TeacherLoginController@ShowRegister');
    Route::post('/register', 'TeacherLoginController@PostRegister');
});

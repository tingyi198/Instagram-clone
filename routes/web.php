<?php
use App\Mail\NewUserWelcomeMail;

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


Auth::routes();


Route::get('/', 'PostsController@index');

Route::get('/mail', function () {
    // return view('emails.welcome_email');
    return new NewUserWelcomeMail();
});

Route::get('/p/create', 'PostsController@create');

Route::post('/p', 'PostsController@store');

Route::get('/p/{post}', 'PostsController@show');

Route::get('/profile/{user}', 'profilesController@index')->name('profile.show');

// show the edit profile page
Route::get('/profile/{user}/edit', 'profilesController@edit')->name('profile.edit');

// update profile
Route::patch('/profile/{user}', 'profilesController@update')->name('profile.update');

Route::post('/follow/{user}', 'FollowsController@store');

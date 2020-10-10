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
    return view('vichayan');
});

Route::get('/auth.login', function(){
    return view('auth.login');
});

Route::get('/auth.register', function(){
    return view('auth.register');
});

Route::get('/terms', function(){
    return view('terms');
});

Route::get('/privacy', function(){
    return view('privacy');
});

Route::get('/support', function(){
    return view('suport');
});

Route::get('/disclaimer', function(){
    return view('disclaimer');
});


Route::get('/forgetpassword', function(){
    return view('forgetpassword');
});

Route::get('/pages.vichayan-dashboard', function(){
    return view('pages.vichayan-dashboard');
});

Route::get('/pages.work', function(){
    return view('pages.work');
});

Route::get('/pages.bookmark', function(){
    return view('pages.bookmark');
});

Route::get('/pages.appreciations', function(){
    return view('pages.appreciations');
});

Route::get('/pages.Insights', function(){
    return view('pages.Insights');
});

Route::get('/pages.draft', function(){
    return view('pages.draft');
});

Route::get('/pages.updates', function(){
    return view('pages.updates');
});

Route::get('/pages.chat', function(){
    return view('pages.chat');
});

Route::get('/pages.updateprofile', function(){
    return view('pages.updateprofile');
});

Route::get('/pages.search', function(){
    return view('pages.search');
});

Route::get('/pages.publications', function(){
    return view('pages.publications');
});

Route::get('/pages.statuspageshow', function(){
    return view('pages.statuspageshow');
});

Route::get('/pages.table', function(){
    return view('pages.table');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('vichayan');
//Route::get('/pages.vichayan-dashboard', 'HomeController@index');
//Route::post('/signup', 'Auth\RegisterController@register')->name('signin');


## Create status
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::post('/posts/store', 'PostController@store')->name('posts.store');

//Route::resource('postshow', 'Api\UserStatusJoinTableControlle@postshow')->name('post');
Route::get('/pages.statuspageshow', 'PostController@postshow');
Route::get('/pages.table', 'PostController@tabledata');

## create Like
Route::get('/post', 'LikeController@index');
Route::post('/like','LikeController@postLikePost')->name('like');



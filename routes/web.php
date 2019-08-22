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


Route::namespace('Frontend')->group(function(){
    Route::get('/', 'FrontendController@welcome')->name('welcome');
    Route::get('/blog', 'FrontendController@blog')->name('blog');
});

Auth::routes();

Route::namespace('Auth')->group(function () {
    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::delete('/profile', 'UserController@destroy')->name('destroy');
});

Route::resource('posts', 'PostController');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/test', 'TestController')->name('test');

// Route::redirect('/here', 'https://www.google.com.pk', 301);

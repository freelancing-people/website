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

Route::get('/conference', function () {
    return view('conference');
});

Route::group(['namespace' => 'Website'], function () {
    Route::resource('interviews', 'InterviewsController');
    Route::resource('articles', 'ArticlesController');
    Route::resource('services', 'ServicesController');

    Route::get('/', 'HomeController@show');
    Route::get('/developer', 'HomeController@developer');
    Route::get('/designer', 'HomeController@designer');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('interviews', 'InterviewsController');
});


Route::get('/conference/thank-you', function () {
    return view('conference_thank_you');
});

Route::get('/thank-you', function () {
    return view('email_course_thank_you');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

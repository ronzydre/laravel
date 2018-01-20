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

Route::get('/', 'PostController@index')->name('home');
Route::get('/post/create', 'PostController@create');
Route::post('/post', 'PostController@store');
Route::post('/post/{post}/comments', 'CommentController@store');
Route::get('/post/{post}', 'PostController@show' );
Route::get('/post/tags/post/{post}', 'PostController@show' );
Route::get('/post/tags/{tag}', 'TagController@index' );

Route::get('/register', 'RegistrationController@create' );
Route::post('/register', 'RegistrationController@store' );
Route::get('/login', 'SessionController@create');
Route::post('/login', 'SessionController@store' );

Route::get('/logout', 'SessionController@destroy' );
Route::get('/contact', 'ContactController@create');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

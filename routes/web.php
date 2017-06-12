<?php

use App\Task;

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
    $name = 'hello wold';
    return view('welcome', compact('name'));
});

Route::get('/about/', function () {
    $name = 'about';
    return view('about', compact('name'));
});


Route::get('/', 'PostsController@index')->name('home');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/posts/edit/{id}', 'PostsController@edit');

Route::patch('/posts/update/{id}', 'PostsController@update');

Route::get('/delete/{id}', 'PostsController@delete');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

Route::get('/contactus','RegistrationController@contact');

Route::post('/contactus', 'MailController@send');






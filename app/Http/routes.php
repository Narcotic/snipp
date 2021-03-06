<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */
Route::get('auth/login', [
    'as' => 'auth.login', 'uses' => 'Auth\AuthController@getLogin',
]);

// Authentication routes...
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Snippet
Route::resource('snippet', 'SnippetController');

// Api Snippet
Route::resource('api/snippets', 'ApiSnippetController');



// Default route
Route::get('/', function () {
    return redirect('/snippet');
});

// Default route
Route::get('/home', function () {
    return redirect('/snippet');
});

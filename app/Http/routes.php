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

Route::get('/', function () {
    session_start();
    if(empty($_SESSION['username']))
    {
        $flag=0;
        return view ('Login', compact('flag'));
    }
    else
    {
        return redirect('/Menu');
    }

});
Route::post('Login', 'LoginController@UserAuthentication');
Route::get('Menu','LoginController@Menu');
Route::get('Logout','System@Logout');
Route::get('Registration','PostsController@posts');
Route::post('RequestRegister','FormController@RequestRegister');

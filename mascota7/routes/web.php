<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
 

use App\User;
use App\mascota;

Route::get('/', function () {
  $datos=mascota::orderBy('Id_Mascota', 'desc')
		->take(3)
		->get();
    return view('welcome')->with(['datos'=> $datos]);
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/user','Users');
Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');


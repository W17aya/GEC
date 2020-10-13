<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', 'HomeController@index')-> name('home');

Auth::routes();

Route::get('/Users/{user}/edit','UserController@edit')
->middleware('can:update,user');

Route::patch('/users/{user}','HomeController@update')
->middleware('can:update,user');

Route::delete('/users/{users}', 'HomeController@destroy')
->middleware('can:delete,user');
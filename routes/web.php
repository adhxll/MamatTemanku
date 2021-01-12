<?php

use App\Http\Controllers\VocabController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/categories/{id}', 'CategoryController@show');

Route::get('/categories/{id}/learn', 'VocabController@show');
<?php

use App\Http\Controllers\VocabController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//whichever route in this Sgroup can only access it if they log in
//otherwise they will be redirected to login page
Route::middleware(['auth'])->group(function(){
    Route::get('/categories/{id}', 'CategoryController@show');
    Route::get('/categories/{id}/learn', 'VocabController@show');
    Route::post('/learned', 'TrainController@changeStatus');
    Route::get('/categories/{id}/test', 'TestController@show');
    Route::post('/checkAnswer', 'TestController@changeStatus');
    Route::get('/rapor', 'RaporController@show');
    Route::post('/rapordetail', 'RaporController@detail');
});
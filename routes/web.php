<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->route('home');
});

Auth::routes();

Route::middleware('auth')->group(function(){    
    Route::resource('user', 'UserController');
    Route::resource('parking_lot', 'Parking_lotController');
    Route::resource('parking_spot', 'Parking_spotController');
    Route::resource('parking_history', 'Parking_historyController');

    Route::get('/home', 'HomeController@index')->name('home');

    Route::put('parking_spot/{parking_spot}/state', 'Parking_spotController@changeState')->name('parking_spot.state');
});

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
    return view('auth/login');
});

Route::resource('user', 'UserController');
Route::resource('parking_lot', 'Parking_lotController');
Route::resource('parking_spot', 'Parking_spotController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

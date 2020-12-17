<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/schedule', function () {
    return view('components.scheduleList');
});

// For development purpose
Route::get('/test', function() {
    return view('transaction');
});

Route::get('/transaction', 'RentalTransactionController@getTransactionbyUserId');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/rent/{id}/zoom', 'ZoomController@create')->name('createZoom');

Route::get('/calendar/data', 'RentalTransactionController@calendar');
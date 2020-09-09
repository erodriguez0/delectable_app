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
    return view('welcome');
});

Auth::routes();

Route::get('/reserve', 'ReserveController@index')->name('reserve');

Route::prefix('account')->group(function () {
    Route::get('/', 'AccountController@index')->name('account');
    Route::get('/orders', 'AccountController@orders')->name('orders');
});

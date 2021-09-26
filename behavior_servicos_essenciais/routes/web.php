<?php

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

Route::get('/log', 'ServiceController@log')->name('services.log');
Route::get('/session', 'ServiceController@session')->name('services.session');
Route::get('/email', 'ServiceController@email')->name('services.email');
Route::get('/email-queue', 'ServiceController@email-queue')->name('services.email-queue');
Route::resource('services', 'ServiceController');

Route::get('/', function () {
    return view('welcome');
});

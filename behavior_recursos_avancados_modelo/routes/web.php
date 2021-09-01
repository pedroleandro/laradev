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

/**
+--------+-----------+------------------------+-----------------+------------------------------------------------+--------------+
| Domain | Method    | URI                    | Name            | Action                                         | Middleware   |
+--------+-----------+------------------------+-----------------+------------------------------------------------+--------------+
|        | GET|HEAD  | /                      |                 | Closure                                        | web          |
|        | POST      | address                | address.store   | App\Http\Controllers\AddressController@store   | web          |
|        | GET|HEAD  | address                | address.index   | App\Http\Controllers\AddressController@index   | web          |
|        | GET|HEAD  | address/create         | address.create  | App\Http\Controllers\AddressController@create  | web          |
|        | GET|HEAD  | address/{address}      | address.show    | App\Http\Controllers\AddressController@show    | web          |
|        | PUT|PATCH | address/{address}      | address.update  | App\Http\Controllers\AddressController@update  | web          |
|        | DELETE    | address/{address}      | address.destroy | App\Http\Controllers\AddressController@destroy | web          |
|        | GET|HEAD  | address/{address}/edit | address.edit    | App\Http\Controllers\AddressController@edit    | web          |
|        | GET|HEAD  | api/user               |                 | Closure                                        | api,auth:api |
|        | GET|HEAD  | users                  | users.index     | App\Http\Controllers\UserController@index      | web          |
|        | POST      | users                  | users.store     | App\Http\Controllers\UserController@store      | web          |
|        | GET|HEAD  | users/create           | users.create    | App\Http\Controllers\UserController@create     | web          |
|        | GET|HEAD  | users/{user}           | users.show      | App\Http\Controllers\UserController@show       | web          |
|        | PUT|PATCH | users/{user}           | users.update    | App\Http\Controllers\UserController@update     | web          |
|        | DELETE    | users/{user}           | users.destroy   | App\Http\Controllers\UserController@destroy    | web          |
|        | GET|HEAD  | users/{user}/edit      | users.edit      | App\Http\Controllers\UserController@edit       | web          |
+--------+-----------+------------------------+-----------------+------------------------------------------------+--------------+
 */

Route::resource('users', 'UserController');
Route::resource('address', 'AddressController');

Route::get('/', function () {
    return view('welcome');
});

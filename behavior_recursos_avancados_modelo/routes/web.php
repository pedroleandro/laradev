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
+--------+-----------+----------------------------+--------------------+-------------------------------------------------+--------------+
| Domain | Method    | URI                        | Name               | Action                                          | Middleware   |
+--------+-----------+----------------------------+--------------------+-------------------------------------------------+--------------+
|        | GET|HEAD  | /                          |                    | Closure                                         | web          |
|        | GET|HEAD  | address                    | address.index      | App\Http\Controllers\AddressController@index    | web          |
|        | POST      | address                    | address.store      | App\Http\Controllers\AddressController@store    | web          |
|        | GET|HEAD  | address/create             | address.create     | App\Http\Controllers\AddressController@create   | web          |
|        | DELETE    | address/{address}          | address.destroy    | App\Http\Controllers\AddressController@destroy  | web          |
|        | PUT|PATCH | address/{address}          | address.update     | App\Http\Controllers\AddressController@update   | web          |
|        | GET|HEAD  | address/{address}          | address.show       | App\Http\Controllers\AddressController@show     | web          |
|        | GET|HEAD  | address/{address}/edit     | address.edit       | App\Http\Controllers\AddressController@edit     | web          |
|        | GET|HEAD  | api/user                   |                    | Closure                                         | api,auth:api |
|        | POST      | categories                 | categories.store   | App\Http\Controllers\CategoryController@store   | web          |
|        | GET|HEAD  | categories                 | categories.index   | App\Http\Controllers\CategoryController@index   | web          |
|        | GET|HEAD  | categories/create          | categories.create  | App\Http\Controllers\CategoryController@create  | web          |
|        | DELETE    | categories/{category}      | categories.destroy | App\Http\Controllers\CategoryController@destroy | web          |
|        | PUT|PATCH | categories/{category}      | categories.update  | App\Http\Controllers\CategoryController@update  | web          |
|        | GET|HEAD  | categories/{category}      | categories.show    | App\Http\Controllers\CategoryController@show    | web          |
|        | GET|HEAD  | categories/{category}/edit | categories.edit    | App\Http\Controllers\CategoryController@edit    | web          |
|        | GET|HEAD  | posts                      | posts.index        | App\Http\Controllers\PostController@index       | web          |
|        | POST      | posts                      | posts.store        | App\Http\Controllers\PostController@store       | web          |
|        | GET|HEAD  | posts/create               | posts.create       | App\Http\Controllers\PostController@create      | web          |
|        | GET|HEAD  | posts/{post}               | posts.show         | App\Http\Controllers\PostController@show        | web          |
|        | PUT|PATCH | posts/{post}               | posts.update       | App\Http\Controllers\PostController@update      | web          |
|        | DELETE    | posts/{post}               | posts.destroy      | App\Http\Controllers\PostController@destroy     | web          |
|        | GET|HEAD  | posts/{post}/edit          | posts.edit         | App\Http\Controllers\PostController@edit        | web          |
|        | GET|HEAD  | users                      | users.index        | App\Http\Controllers\UserController@index       | web          |
|        | POST      | users                      | users.store        | App\Http\Controllers\UserController@store       | web          |
|        | GET|HEAD  | users/create               | users.create       | App\Http\Controllers\UserController@create      | web          |
|        | PUT|PATCH | users/{user}               | users.update       | App\Http\Controllers\UserController@update      | web          |
|        | GET|HEAD  | users/{user}               | users.show         | App\Http\Controllers\UserController@show        | web          |
|        | DELETE    | users/{user}               | users.destroy      | App\Http\Controllers\UserController@destroy     | web          |
|        | GET|HEAD  | users/{user}/edit          | users.edit         | App\Http\Controllers\UserController@edit        | web          |
+--------+-----------+----------------------------+--------------------+-------------------------------------------------+--------------+
 */

Route::resource('users', 'UserController');
Route::resource('address', 'AddressController');
Route::resource('posts', 'PostController');
Route::resource('categories', 'CategoryController');

Route::get('/', function () {
    return view('welcome');
});

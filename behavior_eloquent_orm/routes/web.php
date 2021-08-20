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

Route::get('/', function () {
    return view('welcome');
});

/**
+--------+-----------+-------------------+---------------+---------------------------------------------+--------------+
| Domain | Method    | URI               | Name          | Action                                      | Middleware   |
+--------+-----------+-------------------+---------------+---------------------------------------------+--------------+
|        | GET|HEAD  | /                 |               | Closure                                     | web          |
|        | GET|HEAD  | api/user          |               | Closure                                     | api,auth:api |
|        | GET|HEAD  | posts             | posts.index   | App\Http\Controllers\PostController@index   | web          |
|        | POST      | posts             | posts.store   | App\Http\Controllers\PostController@store   | web          |
|        | GET|HEAD  | posts/create      | posts.create  | App\Http\Controllers\PostController@create  | web          |
|        | GET|HEAD  | posts/{post}      | posts.show    | App\Http\Controllers\PostController@show    | web          |
|        | PUT|PATCH | posts/{post}      | posts.update  | App\Http\Controllers\PostController@update  | web          |
|        | DELETE    | posts/{post}      | posts.destroy | App\Http\Controllers\PostController@destroy | web          |
|        | GET|HEAD  | posts/{post}/edit | posts.edit    | App\Http\Controllers\PostController@edit    | web          |
+--------+-----------+-------------------+---------------+---------------------------------------------+--------------+
 */

Route::resource('posts', 'PostController');

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
+--------+-----------+----------------------+---------------+---------------------------------------------+--------------+
| Domain | Method    | URI                  | Name          | Action                                      | Middleware   |
+--------+-----------+----------------------+---------------+---------------------------------------------+--------------+
|        | GET|HEAD  | /                    |               | Closure                                     | web          |
|        | GET|HEAD  | api/user             |               | Closure                                     | api,auth:api |
|        | GET|HEAD  | posts                | posts.index   | App\Http\Controllers\PostController@index   | web          |
|        | POST      | posts                | posts.store   | App\Http\Controllers\PostController@store   | web          |
|        | GET|HEAD  | posts/bin            | posts.bin     | App\Http\Controllers\PostController@bin     | web          |
|        | GET|HEAD  | posts/create         | posts.create  | App\Http\Controllers\PostController@create  | web          |
|        | GET|HEAD  | posts/{post}         | posts.show    | App\Http\Controllers\PostController@show    | web          |
|        | PUT|PATCH | posts/{post}         | posts.update  | App\Http\Controllers\PostController@update  | web          |
|        | DELETE    | posts/{post}         | posts.destroy | App\Http\Controllers\PostController@destroy | web          |
|        | DELETE    | posts/{post}/delete  | posts.delete  | App\Http\Controllers\PostController@delete  | web          |
|        | GET|HEAD  | posts/{post}/edit    | posts.edit    | App\Http\Controllers\PostController@edit    | web          |
|        | GET|HEAD  | posts/{post}/restore | posts.restore | App\Http\Controllers\PostController@restore | web          |
+--------+-----------+----------------------+---------------+---------------------------------------------+--------------+
 */

Route::get('posts/bin', 'PostController@bin')->name('posts.bin');
Route::get('posts/{post}/restore', 'PostController@restore')->name('posts.restore');
Route::delete('posts/{post}/delete', 'PostController@delete')->name('posts.delete');
Route::resource('posts', 'PostController');

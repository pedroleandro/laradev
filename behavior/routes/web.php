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

Route::view('/form', 'form');

//Route::get($uri, $callback);
//Route::post($uri, $callback);
//Route::put($uri, $callback);
//Route::patch($uri, $callback);
//Route::delete($uri, $callback);
//Route::options($uri, $callback);

/**
 * passo a passo:
 * 1. Criar um controlador. php artisan make:controller _Controller
 * 2. Definir rota. Route::verbo('/uri', 'Controlador@metodo');
 * 3. Implementar o método.
 * 4. INteragir com a camada de visualização.
 */

Route::get('/users/1', 'UserController@index');
Route::get('/getData', 'UserController@getData');
Route::post('/postData', 'UserController@postData');


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

/**
 * Qual o objetivo de cada método:
 *
 * GET: utilizado para obter dados do servidor sem alterar o estado do recurso.
 *      quando um formulário GET é disparados, os dados ficam presentes na url.
 *
 * POST: utilizado para enviar dados ao servidor.
 *      os dados ficam no corpo da requisição (request) e não não url.
 *
 * PUT: utilizado para editar os dados no servidor, ou seja,
 *      será atualizado todos os recursos de um objeto, e
 *      caso não exista, o método cria um novo objeto com esses recursos.
 *
 * PATCH: utilizado apenas para atualizar um recurso do objeto.
 */

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

/**
 * GET
 */
Route::get('/users/1', 'UserController@index');
Route::get('/getData', 'UserController@get');

/**
 * POST
 */
Route::post('/getPost', 'UserController@post');

/**
 * PUT
 */
Route::put('/users/1', 'UserController@put');

/**
 * PATCH
 */
Route::patch('/users/1', 'UserController@patch');

/**
 * MATCH
 */
Route::match(['put', 'patch'], '/users/2', 'UserController@match');

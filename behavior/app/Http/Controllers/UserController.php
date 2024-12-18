<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    public function index()
    {
        return "<h1>Listagem do usuário com o código 1</h1>";
    }

    public function get()
    {
        return "<h1>Disparou ação de GET</h1>";
    }

    public function post(Request $request)
    {
        var_dump($request);
        return "<h1>Disparou ação de POST</h1>";
    }

    public function put(Request $request)
    {
        var_dump($request);
        return "<h1>Disparou ação de PUT</h1>";
    }

    public function patch(Request $request)
    {
        var_dump($request);
        return "<h1>Disparou ação de PATCH</h1>";
    }

    public function match(Request $request)
    {
        var_dump($request);
        return "<h1>Disparou ação de MATCH = [PUT/PATCH]</h1>";
    }

    public function destroy()
    {
        return "<h1>Disparou ação de DELETE</h1>";
    }

    public function any()
    {
        return "<h1>Disparou ação de ANY</h1>";
    }

    public function comments(Request $request, $id, $comment = null)
    {
        echo "<h1>UserController@comments</h1>";
        var_dump($id, $comment, $request);
    }

    public function inspect()
    {
        $route = Route::current();
        $name = Route::currentRouteName();
        $action = Route::currentRouteAction();

        var_dump(
            $route,
            $name,
            $action
        );
    }
}

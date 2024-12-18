<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $users = DB::table('users')
//            ->selectRaw('users.id, users.name, users.email, CASE WHEN users.status = 1 THEN "ATIVO" ELSE "BLOQUEADO" END status')
//            ->simplePaginate(100);
//
//        foreach ($users as $user){
//            echo "#{$user->id} Nome: {$user->name} Status: {$user->status}<br>";
//        }
//
//        echo $users->links();

        $users = DB::table('users')
            ->selectRaw('users.id, users.name, users.email, CASE WHEN users.status = 1 THEN "ATIVO" ELSE "BLOQUEADO" END status')
            ->paginate(100);

        foreach ($users as $user){
            echo "#{$user->id} Nome: {$user->name} Status: {$user->status}<br>";
        }

        echo $users->links();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

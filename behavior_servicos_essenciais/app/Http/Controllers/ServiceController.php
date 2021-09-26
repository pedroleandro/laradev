<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    public function session()
    {
        session([
            'course' => 'Laravel Developer'
        ]);

        session()->put('name', 'Pedro Leandro');

//        echo session('name') . "</br>";

//        echo session('student', function () {
//            session()->put('student', 'Pedro Leandro');
//            return session('student');
//        });

//        echo "</br>" . session()->get('name');

        //session()->push('time', 'Pedro Leandro');

        ///Receber e deletar a key
//        $student = session()->pull('student');
//        echo "</br>" . $student;

//        session()->forget('name');

        //session()->flush();

//        if (session()->has('course')) {
//            echo "</br>" . "O curso selecionado foi " . session()->get('course');
//        }

//        if (session()->exists('course')) {
//            echo "</br>" . "Esse curso existe";
//        } else {
//            echo "</br>" . "Esse curso não existe";
//        }

//        session()->flash('message', 'Bem vindo a UpInside!');
//        session()->reflash();

        var_dump(session()->all());
    }

    public function log()
    {
        Log::error("Teste de mensagem de log");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        var_dump("Olá, Mundo!");
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

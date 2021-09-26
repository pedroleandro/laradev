<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeLaraDev;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function files()
    {
        $files = Storage::files();
        $allFiles = Storage::allFiles();

//        Storage::makeDirectory('public/students');

        $directories = Storage::directories();
        $allDirectories = Storage::allDirectories();

//        Storage::makeDirectory('public/course');

//        Storage::deleteDirectory('public/course');

//        Storage::disk('public')->put('upinside.txt', 'O melhor curso de laravel do mercado.');
//        Storage::put('upinside-treinamentos.txt', 'O melhor curso de laravel do mercado.');

//        echo Storage::get('upinside-treinamentos.txt');

//        var_dump($files, $allFiles, $directories, $allDirectories);

//        return Storage::download('upinside-treinamentos.txt');

//        if(Storage::exists('upinside-treinamentos.txt')){
//            echo "O arquivo existe";
//        }else{
//            echo "O arquivo não existe";
//        }

//        echo Storage::size('upinside-treinamentos.txt') . "</br>";
//        echo Storage::lastModified('upinside-treinamentos.txt');

//        Storage::prepend('upinside-treinamentos.txt', 'UpInside Treinamentos');
//        Storage::append('upinside-treinamentos.txt', 'Vem estudar com a gente');

//        Storage::copy('upinside-treinamentos.txt', 'public/upinside-treinamentos.txt');
//        Storage::move('upinside-treinamentos.txt', 'public/upinside-treinamentos.txt');
//        Storage::delete('public/upinside-treinamentos.txt');

    }

    public function emailQueue()
    {
        $user = new \stdClass();
        $user->name = "Pedro Leandro";
        $user->email = "pedro.leandrog@gmail.com";

        $order = new \stdClass();
        $order->type = "billet";
        $order->due_at = "2019-01-10";
        $order->value = 697;

        \App\Jobs\WelcomeLaraDev::dispatch($user, $order)->delay(now()->addSecond(15));
    }

    public function email()
    {
        $user = new \stdClass();
        $user->name = "Pedro Leandro";
        $user->email = "pedro.leandrog@gmail.com";

        $order = new \stdClass();
        $order->type = "billet";
        $order->due_at = "2019-01-10";
        $order->value = 697;

//        var_dump($user, $order);

//        Mail::send(new WelcomeLaraDev());
        return (new WelcomeLaraDev($user, $order));
    }

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrchestratedVision extends Controller
{
    public function course()
    {
        return view('front.course');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $user = new \stdClass();
        $user->name = "Pedro Leandro";
        $user->birth = "1997-06-28";
        $user->email = "pedro.leandrog@gmail.com";

        $courses = [
            [
                "id" => 1,
                "name" => "Laravel Developer",
                "tutor" => "Gustavo Web"
            ],
            [
                "id" => 2,
                "name" => "Bootstrap Builder",
                "tutor" => "Gustavo Web"
            ],
            [
                "id" => 3,
                "name" => "Fullstack PHP Developer",
                "tutor" => "Robson V Leite"
            ]
        ];

        $alert = "<div style='background-color: red;'>Teste</div>";

        return view('front.home', [
            'user' => $user,
            'alert' => $alert,
            'courses' => $courses
        ]);
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

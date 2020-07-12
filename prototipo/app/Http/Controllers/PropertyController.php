<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        return view('property/index');
    }

    public function create()
    {
        return view('property/create');
    }

    public function store()
    {

    }
}

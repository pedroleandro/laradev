<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = DB::select("SELECT * FROM properties");
        return view('property/index')->with('properties', $properties);
    }

    public function show($name)
    {
        $property = DB::select("SELECT * FROM properties WHERE name = ?", [$name]);

        if (!empty($property)) {
            return view('property/show')->with('properties', $property);
        } else {
            return redirect()->action('PropertyController@index');
        }
    }

    public function create()
    {
        return view('property/create');
    }

    public function store(Request $request)
    {
        $propertySlug = $this->setName($request->title);

        $property = [
            $request->title,
            $propertySlug,
            $request->description,
            $request->rental_price,
            $request->sale_price
        ];

        DB::insert("INSERT INTO properties (title, name, description, rental_price, sale_price) VALUES (?, ?, ?, ?, ?)", $property);
        return redirect()->action('PropertyController@index');
    }

    public function edit($name)
    {
        $property = DB::select("SELECT * FROM properties WHERE name = ?", [$name]);

        if (!empty($property)) {
            return view('property/edit')->with('properties', $property);
        } else {
            return redirect()->action('PropertyController@index');
        }
    }

    public function update(Request $request, $id)
    {
        $propertySlug = $this->setName($request->title);

        $property = [
            $request->title,
            $propertySlug,
            $request->description,
            $request->rental_price,
            $request->sale_price,
            $id
        ];

        DB::update("UPDATE properties SET title = ?, name = ?, description = ?, rental_price = ?, sale_price = ? WHERE id = ?", $property);
        return redirect()->action('PropertyController@index');
    }

    private function setName($title)
    {
        $propertySlug = str_slug($title);

        $properties = DB::select("SELECT * FROM properties");

        $c = 0;
        foreach ($properties as $property) {
            if (str_slug($property->title) === $propertySlug) {
                $c++;
            }
        }

        if ($c > 0) {
            $propertySlug = $propertySlug . "-" . $c;
        }

        return $propertySlug;
    }

}

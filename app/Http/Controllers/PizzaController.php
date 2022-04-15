<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name', 'desc')->get();
        // $pizzas = Pizza::where('type', 'hawaiian')->get();
        $pizzas = Pizza::latest()->get();

        return view('pizzas', [
            'pizzas' => $pizzas,
            'name'   => request('name'),
            'age'    => request('age')
        ]);
    }


    public function show($id)
    {
        return view('details', [
            'id' => $id
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index()
    {
        $ingredients = Ingredient::all();

        return view('ingredients.index', compact('ingredients'));
    }

    public function create()
    {

        return view('ingredients.create');
    }

    public function store(Ingredient $ingredient, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'supplier' => 'required',
            'cost' => 'required'
        ]);

        Ingredient::create($data);
        return redirect()->route('ingredients.index');
    }

    public function show(Ingredient $ingredient)
    {
        return view('ingredients.show', compact('ingredient'));
    }

    public function edit(Ingredient $ingredient)
    {

        return view('ingredients.edit', compact('ingredient'));
        return redirect()->route('ingredients.index');
    }

    public function update(Request $request, Ingredient $ingredient)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'supplier' => 'required',
            'cost' => 'required'
        ]);

        $ingredient->name = $required->name;
        $ingredient->brand = $required->brand;
        $ingredient->supplier = $required->supplier;
        $ingredient->cost = $required->cost;
        $ingredient->save();

        return redirect()->route('ingredients.index');
    }

    public function destroy(Ingredient $ingredient)
    {
        $ingredient->delete();

        return back();
    }
}

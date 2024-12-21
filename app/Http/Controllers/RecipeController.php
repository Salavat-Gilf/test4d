<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();

        // Возвращаем представление с объявлениями
        return view ('index', ['recipes' => $recipes]);
    }

    public function create()
    {
        return view('create');
    }    
    public function store(Request $request){
        Recipe::create
        ([
            'name'=>$request->name,
            'category'=>$request->category,
            'recipe_text'=>$request->recipe_text,

            
        ]);
        return view('index');
    }
}

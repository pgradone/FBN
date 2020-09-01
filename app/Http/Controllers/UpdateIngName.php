<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateIngName extends Controller
{
    public function index(Request $request)
    {
        DB::table('ingredients_names') -> where('ingredient_id', $request -> ingId) -> where('language_id', $request -> langId) -> update(['name' => $request -> name]);
    }
}

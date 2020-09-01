<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UpdateIngName extends Controller
{
    public function index(Request $request)
    {
        DB::table('ingredients_names') -> where([
            ['ingredient_id', '=', $request -> ingId],
            ['language_id', '=', $request -> langId],
        ]) -> update(['name' => $request -> name]);
        //echo $request -> langId . "hello" . $request -> ingId . $request -> name;
    }
}

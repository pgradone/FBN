<?php

namespace App\Http\Controllers;
// add this to access the DB methods!

use App\Foodgroup;
use App\FoodgroupName;
use Illuminate\Support\Facades\DB;

// add model Ingredient created with eloquent

use App\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $ingredients = Ingredient::paginate(10);
    // var_dump($ingredients);
    return view('ingredients', ['ingredients' => $ingredients]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    // get to the screen to add a 'new ingredient'
    return view('create-ingredient');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    // insert the new book into the DB
    DB::insert('INSERT INTO ingredients(origin, nutriscore, picture) VALUES(?, ?, ?, ?)', [$request->origin, $request->nutriscore, $request->picture, $request->foodgroup_id]);
    // then show the (updated) list right after that
    return redirect('/ingredients');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    // EDIT the ingredient
    // edit one book with eloquent
    $ingredients =  Ingredient::where('id', $id)->get();
    $foodgroupnames =  FoodgroupName::where('language_id', 2)->get();
    $foodgroups = Foodgroup::get();
    // $foodgroups = DB::table('foodgroups')->get(); 
    $currentIngredient = $ingredients[0];
    // $currentIngredient = Ingredient::where('id', $id)->get();
    // dd($foodgroupnames);
    // dd($foodgroups);
    // dd($ingredients);
    dd($currentIngredient);
    // fill the form with data to edit
    return view('update-ingredient', ['ingredient' => $currentIngredient]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    // $ingredient = Ingredient::find($id);
    //dd($request);

    Ingredient::where('id', $id)
          ->update(['origin' => $request->origin, 'nutriscore' => $request->nutriscore, 'picture' => $request->picture, 'foodgroup_id' => $request->foodgroup_id]);
        // show the list again
        return redirect('/ingredients');
  }

  /*
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    // delete a specific book, classic way
    // DB::delete('DELETE FROM books WHERE id = ? ', [$id]);
    // delete using eloquent:
    $deletedRows = Ingredient::where('id', $id)->delete();
    // and back to the ingredients list
    return redirect('/ingredients');
  }

}

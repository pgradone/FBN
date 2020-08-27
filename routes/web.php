<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
  return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/about', function () {
  return view('about');
});

Route::get('/recipes', function () {
  return view('recipes');
});

Route::get('/blog', function () {
  return view('blog');
});
Route::get('/faq', function () {
  return view('faq');
});

Route::get('/home', 'HomeController@index')->name('home');

// ***========*** INGREDIENTS CRUD ***==============0
// read
Route::get('ingredients', 'IngredientController@index');
// edit record for update
Route::get('ingredients/edit/{id}', 'IngredientController@edit')->name('ingredients.edit');
// actually update the edited record
Route::put('ingredients/edit/{id}', 'IngredientController@update');
// Delete one specific record :
Route::delete('/ingredients/delete/{id}', 'IngredientController@destroy');

// Route::resource('ingredients', 'IngredientController');

// ***========*** General Posts CRUD ***==============0
Route::resource('posts', 'PostController');

Route::get('/home', 'HomeController@index')->name('home');

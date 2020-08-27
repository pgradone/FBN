<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::logout();

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

Route::get('/ingredients', function () {
  return view('ingredients');
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
  
  // *********** route all CRUD THROUGH Middleware ??? ********************
  // check for logged in user *** FAB - **********************
  Route::middleware(['auth'])->group(function () {
    // ========== POST CRUD by FABALLA =================
    // show new post form
    Route::get('new-post', 'PostController@create');
    // save new post
    Route::post('new-post', 'PostController@store');
    // edit post form
    Route::get('edit/{id}', 'PostController@edit');
    // update post
    Route::post('update', 'PostController@update');
    // delete post
    Route::get('delete/{id}', 'PostController@destroy');
    // display user's all posts
    Route::get('my-all-posts', 'UserController@user_posts_all');
    // display user's drafts
    Route::get('my-drafts', 'UserController@user_posts_draft');
    // add comment
    Route::post('comment/add', 'CommentController@store');
    // delete comment
    Route::post('comment/delete/{id}', 'CommentController@destroy');
});
<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', 'PostController@index');
//Route::get('/home', ['as' => 'home', 'uses' => 'PostController@index']);

//authentication
// Route::resource('auth', 'Auth\AuthController');
// Route::resource('password', 'Auth\PasswordController');
Route::get('/logout', 'UserController@logout');
Route::group(['prefix' => 'auth'], function () {
    Auth::routes();
});

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes(['verify' => true]);

Route::get('/about', function () {
    return view('about');
});

Route::get('/recipes', function () {
    return view('recipes');
});

Route::get('/blog', 'PostController@index');

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/ingredients', function () {
    return view('ingredients');
});

//Route::get('/home', 'HomeController@index')->name('home');

// ***========*** INGREDIENTS CRUD ***==============0

Route::resource('ingredients', 'IngredientController');

// read
Route::get('ingredients', 'IngredientController@index');
// edit record for update
Route::get('ingredients/edit/{id}', 'IngredientController@edit')->name('ingredients.edit');
// actually update the edited record
Route::put('ingredients/edit/{id}', 'IngredientController@update');
// Delete one specific record :

Route::delete('/ingredients/delete/{id}', 'IngredientController@destroy')->name('ingredients.delete');

// ***========*** INGREDIENTS NAMES CRUD ***==============0

Route::resource('ingredientNames', 'IngredientsNameController');

// actually update the edited record
Route::get('ingredientNames/update/{ingredient_id}/{language_id}', 'IngredientsNameController@update');

// ***========*** General Posts CRUD ***==============0
Route::resource('posts', 'PostController');

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

//users profile
Route::get('user/{id}', 'UserController@profile')->where('id', '[0-9]+');
// display list of posts
Route::get('user/{id}/posts', 'UserController@user_posts')->where('id', '[0-9]+');
// display single post
// Route::get('/{slug}', ['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');
Route::get('/blog/{id}', 'PostController@show');
Route::get('/edit/blog/{id}', 'PostController@edit');
Route::get('/', function(){
    return 'hellooo';
});

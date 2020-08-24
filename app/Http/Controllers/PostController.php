<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index()
  {
    //fetch 5 posts from database which are active and latest
    $posts = Posts::where('active', 1)->orderBy('created_at', 'desc')->paginate(5);
    //page heading
    $title = 'Latest Posts';
    //return home.blade.php template from resources/views folder
    return view('home')->withPosts($posts)->withTitle($title);
  }
}

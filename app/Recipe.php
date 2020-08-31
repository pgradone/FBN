<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

class Recipe extends Post
{
  public function __construct()
  {
    $this->post_type_id = 6;
  }
}

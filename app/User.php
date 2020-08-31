<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class User extends Authenticatable implements AuthenticatableContract, CanResetPasswordContract
{
  // use Authenticatable, CanResetPassword;

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'users';
// class User extends Authenticatable implements MustVerifyEmail {
//     use Notifiable;
// 
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'email', 'password'];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = ['password', 'remember_token'];

  // user has many posts
  public function posts()
  {
    return $this->hasMany('App\Posts', 'author_id');
  }

  // user has many comments
  public function comments()
  {
    return $this->hasMany('App\Comments', 'from_user');
  }

  public function language() {
      return $this->hasOne('App\Language');
  }

  // any user role should be able to post
  public function can_post()
  {
    // $role = $this->role;
    // if ($role == 'author' || $role == 'admin') {
      return true;
    // }
    // return false;
  }

  public function is_admin()
  {
    $role = $this->role;
    if ($role == 'admin') {
      return true;
    }
    return false;
  }
}


<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

      /**
   * The database table used by the model.
   *
   * @var string
   */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function can_manage()
    {
        // can manage if it is admin, collaborator or moderator
        $role_id = $this->role_id;
        if ($role_id == 1 || $role_id == 3 || $role_id == 4) {
            return true;
        }
        return false;
    }

    // user has many posts
  public function posts()
  {
    return $this->hasMany('App\Posts', 'author_id');
  }

  // user has many comments
  public function comments()
  {
    return $this->hasMany('App\Comments');
  }

  public function language() {
      return $this->hasOne('App\Language');
  }

  public function role() {
      return $this->hasOne('App\Role');
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
    if ($role === 1) {
      return true;
    }
    return false;
  }

}

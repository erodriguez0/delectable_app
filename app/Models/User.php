<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    protected $table = 'User';
    public $timestamps = true;
    protected $fillable = array('first_name', 'last_name', 'username', 'email');
    protected $hidden = array('id', 'password');

}

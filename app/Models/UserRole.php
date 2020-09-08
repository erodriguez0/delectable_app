<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{

    protected $table = 'user_role';
    public $timestamps = true;
    protected $guarded = array('user_id');
    protected $hidden = array('id', 'user_id');

}

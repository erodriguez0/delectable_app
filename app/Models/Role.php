<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $table = 'role';
    public $timestamps = true;
    protected $hidden = array('id');

}

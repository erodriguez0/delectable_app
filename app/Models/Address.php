<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    protected $table = 'address';
    public $timestamps = true;
    protected $fillable = array('address', 'address2', 'locality', 'province', 'postcode', 'country');
    protected $visible = array('address', 'address2', 'locality', 'province', 'postcode', 'country');
    protected $hidden = array('id', 'user_id');

}

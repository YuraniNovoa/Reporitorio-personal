<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{

    protected $table='users';
    protected $fillable=['id','names','lastnames','email','profile_picture','gender','birth_date'];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class liststudent extends Model
{
    protected $table = 'listuser';

    protected $fillable = ['name','age','address',
        'telephone'];
}

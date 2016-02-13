<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $table = 'visitor';

    protected $fillable = ['name', 'email', 'phone', 'occupation'];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use SoftDeletes;
    protected $table = 'animais';
}

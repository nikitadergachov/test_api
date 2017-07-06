<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topping extends Model
{
    protected $table = 'toppings';

    protected $fillable = [
        'name',

    ];
}

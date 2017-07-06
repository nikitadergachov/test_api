<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderedCoffeeTopping extends Model
{
    protected $table = 'ordered_coffee_toppings';

    protected $fillable = [
        'ordered_coffee_id',
        'topping_id',
    ];


}

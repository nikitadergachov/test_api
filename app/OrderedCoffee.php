<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderedCoffee extends Model
{
    protected $table = 'ordered_coffee';

    protected $fillable = [
        'coffee_id',
        'order_id',
    ];

    /**
     * Получить все топинги данного
     * кофе в заказае
     */
    public function toppingItems()
    {
        return $this->hasMany('App\Comment');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'bayer_name',
        'value',
    ];

    /**
     * Получить все еденицы кофе в заказе
     */
    public function orderedItems()
    {
        return $this->hasMany('App\OrderedCoffee');
    }
}

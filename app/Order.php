<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'bayer_name';

    protected $fillable = [
        'name',
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

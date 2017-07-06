<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderedCoffeeToppingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordered_coffee_toppings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ordered_coffee_id')->unsigned();
            $table->integer('topping_id')->unsigned();
            $table->timestamps();

            $table->foreign('ordered_coffee_id')
                ->references('id')
                ->on('ordered_coffee');
            $table->foreign('topping_id')
                ->references('id')
                ->on('toppings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

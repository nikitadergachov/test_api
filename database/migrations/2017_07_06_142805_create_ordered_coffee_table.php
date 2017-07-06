<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderedCoffeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordered_coffee', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('coffee_id')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->timestamps();

            $table->foreign('coffee_id')
                ->references('id')
                ->on('coffee');
            $table->foreign('order_id')
                ->references('id')
                ->on('orders');
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->bigIncrements('id_cart');
            $table->unsignedBigInteger('transaction_id');
            $table->foreign('transaction_id')->references('id_transaction')->on('transaction');
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id_item')->on('item');
            $table->string('quantity', 20);
            $table->string('total_item',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_cart');
    }
}

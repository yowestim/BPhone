<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->bigIncrements('id_transaction');
            $table->string('total', 20);
            $table->string('address', 60);
            $table->unsignedBigInteger('user_id');
	        $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id_item')->on('item');
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
        Schema::dropIfExists('transaction');
    }
}

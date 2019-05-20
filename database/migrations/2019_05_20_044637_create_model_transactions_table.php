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
            $table->string('jumlah')->index();
            $table->string('alamat');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('user');
            $table->integer('id_item')->unsigned();
            $table->foreign('id_item')->references('id')->on('item');
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

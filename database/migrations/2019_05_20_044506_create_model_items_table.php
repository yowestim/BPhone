<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->bigIncrements('id_item');
            $table->string('item_name', 50)->index();
            $table->string('item_total', 50);
            $table->string('item_price', 50);
            $table->string('item_status', 50);
            $table->string('item_description', 50);
            $table->integer('id_color')->unsigned();
            $table->foreign('id_color')->references('id')->on('color');
            $table->integer('id_merk')->unsigned();
            $table->foreign('id_merk')->references('id')->on('merk');
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
        Schema::dropIfExists('item');
    }
}

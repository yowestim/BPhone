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
            $table->string('item_name', 50);
            $table->string('item_total', 50);
            $table->string('item_price', 50);
            $table->string('item_status', 50);
            $table->string('item_description', 500);
            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id')->references('id_color')->on('color');
            $table->unsignedBigInteger('merk_id');
            $table->foreign('merk_id')->references('id_merk')->on('merk');
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

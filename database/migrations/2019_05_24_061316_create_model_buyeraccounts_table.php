<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelBuyeraccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyeraccount', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('account_name', 50);
            $table->string('address', 50);
            $table->string('phone_number', 50);
            $table->string('email', 50);
            $table->string('username_account', 50);
            $table->string('password_account', 50);
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
        Schema::dropIfExists('model_buyeraccounts');
    }
}

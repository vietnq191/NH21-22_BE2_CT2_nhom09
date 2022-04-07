<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersWish extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_wish', function (Blueprint $table) {
            $table->bigInteger('user_id');
            $table->bigInteger('product_id');
            $table->string('product_name', 150);
            $table->double('product_price');
            $table->string('product_img');
            $table->integer('quantity');
            $table->double('total_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_wish');
    }
}

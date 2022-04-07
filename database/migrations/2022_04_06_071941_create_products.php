<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->bigInteger('type_id');
            $table->double('price');
            $table->string('image1', 150);
            $table->string('image2', 150);
            $table->string('image3', 150);
            $table->string('image4', 150);
            $table->text('description');
            $table->text('infomation');
            $table->double('weight');
            $table->timestamp('created_at');
            $table->timestamp('exp');
            $table->integer('sales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

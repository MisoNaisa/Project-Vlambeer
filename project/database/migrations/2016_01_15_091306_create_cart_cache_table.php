<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartCacheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_cache', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('products')->nullable();
            $table->string('ip_address', '15')->nullable();
            $table->integer('is_bought')->nullable();
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
        Schema::drop('cart_cache');
    }
}

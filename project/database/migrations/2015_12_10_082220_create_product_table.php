<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id')->length(10)->unsigned();
            $table->string('name',50);
            $table->longText('description');
            $table->decimal('price',10,2);
            $table->string('category', 50);
            $table->string('color', 50);
            $table->string('size', 50);
            $table->tinyInteger('sale')->nullable();
            $table->integer('sale_percentage')->length(20)->nullable();
            $table->decimal('sale_price',10,2)->nullable();
            $table->integer('stock')->length(20);
            $table->text('img');
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
        Schema::drop('product');
    }
}

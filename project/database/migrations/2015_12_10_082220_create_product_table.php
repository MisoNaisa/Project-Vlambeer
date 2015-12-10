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
            $table->increments('product_id')->length(10)->unsigned();
            $table->string('product_name',50);
            $table->longText('product_description');
            $table->decimal('product_price',10,2);
            $table->tinyInteger('product_sale')->nullable();
            $table->integer('product_sale_percentage')->length(20)->nullable();
            $table->integer('stock')->length(20);
            $table->text('product_img');
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

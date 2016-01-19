<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->increments('invoice_id')->length(10)->unsigned();
            $table->integer('order_id')->unsigned();
            $table->date('end_invoice_date');
            $table->date('date_of_invoice');
            $table->dateTime('paid');
            $table->timestamps();
        });

        Schema::table('invoice', function($table) {
            $table->foreign('order_id')->references('id')->on('order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('invoice');
    }
}

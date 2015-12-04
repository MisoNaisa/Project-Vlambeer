<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->integer('id');
            $table->string('game_name', 50);
            $table->text('game_background_img')->nullable();
            $table->text('game_background_video')->nullable();
            $table->text('regular_payment_link')->nullable();
            $table->text('steam_payment_link')->nullable();
            $table->text('ios_payment_link')->nullable();
            $table->text('psn_payment_link')->nullable();
            $table->text('android_payment_link')->nullable();
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
        Schema::drop('games');
    }
}

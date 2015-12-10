<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('user_id')->length(10)->unsigned();
            $table->string('email', 60)->unique();
            $table->string('password', 60);
            $table->string('role', 60);
            $table->string('first_name', 60);
            $table->string('last_name', 60);
            $table->string('insertion', 60)->nullable();
            $table->string('address', 60);
            $table->string('housenumber', 10);
            $table->string('zipcode', 15);
            $table->string('city', 60);
            $table->string('phonenumber', 60);
            $table->date('date_of_birth');
            $table->string('country', 60);
            $table->tinyInteger('newsletter');
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
        Schema::drop('user');
    }
}

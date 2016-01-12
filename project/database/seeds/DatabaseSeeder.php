<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         $this->call(GamesTableSeeder::class);
         $this->call(ProductTableSeeder::class);
         $this->call(UsersTableSeeder::class);

        Model::reguard();
    }
}

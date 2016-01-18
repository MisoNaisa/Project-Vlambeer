<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email'             => 'admin@vlambeer.com',
            'password'          => bcrypt('admin'),
            'role'              => 'admin',
            'first_name'        => 'admin',
            'last_name'         => 'admin',
            'insertion'         => '',
            'address'           => 'admin',
            'housenumber'       => '22',
            'zipcode'           => '1234AB',
            'city'              => 'somewhere',
            'phonenumber'       => '0612345678',
            'date_of_birth'     => '01-02-1985',
            'country'           => 'Netherlands'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name'		=>	'SedirUser',
        	'email'		=>	'user@sedir.org.pe',
        	'password'	=>	bcrypt('$sedir$'),
        ]);
    }
}

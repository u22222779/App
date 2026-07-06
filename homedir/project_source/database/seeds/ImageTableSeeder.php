<?php

use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
        	'nombre'		=>	'noticia_default.png',
        	'noticia_id'	=>	'1',
        ]);
    }
}

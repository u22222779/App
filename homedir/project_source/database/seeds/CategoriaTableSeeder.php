<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database;

class CategoriaTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('categorias')->insert([
        	'nombre'	=>	'Otros',
        ]);
    }
}

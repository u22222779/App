<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database;

class NoticiasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('noticias')->insert([
        	'titulo'		=>	'Primera Noticia por defecto',
        	'content'		=>	'Contenido de la noticia por defectoLorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam voluptatum consequuntur nesciunt earum, expedita tempora nostrum rerum repudiandae minus praesentium, porro doloremque deleniti corporis! Accusantium mollitia sint illo molestias consectetur.',
        	'imagen'		=>	'noticia_default.png',
        	'categoria_id'	=>	'1',
        ]);
    }
}
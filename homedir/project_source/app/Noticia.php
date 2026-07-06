<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = "noticias";

    protected $fillable = ['titulo','content','categoria_id','imagen'];

    public function categoria(){
    	return $this->belongsTo('App\Categoria');
    }

    public function scopeSearch($query,$titulo){
    	return $query->where('titulo','like','%'. $titulo .'%');
    }

}

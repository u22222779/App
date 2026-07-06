<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";

    protected $fillable = ['nombre','noticia_id'];

    public function noticia(){
    	return $this->belongsTo('App\Noticia');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Http\Requests;
use App\Noticia;
use App\Categoria;
use Hashids;

class WebController extends Controller
{
    public function inicio(){
    	$noticias = Noticia::orderBy('created_at','DESC')->take(4)->get()->all();
    	return view('welcome')->with('noticias',$noticias);
    }

    public function noticia($id){        
        $id = Hashids::decode($id)[0];
    	$noticia = Noticia::find($id);
        return view('noticias.noticia')->with('noticia',$noticia);
    }

    public function titulares(){
    	$noticias = Noticia::orderBy('created_at','DESC')->paginate(5);
        return view('noticias.titulares')->with('noticias',$noticias);
    }

    public function nosotros(){
        $noticias = Noticia::orderBy('created_at','DESC')->take(3)->get()->all();
        return view('secciones.somos')->with('noticias',$noticias);
    }

    public function actividad(){
        //$categoria = Categoria::where('nombre','like','actividad')->get();
        //$noticias = Noticia::where('categoria_id','like',$categoria[0]->id)->orderBy('created_at','DESC')->take(6)->get()->all();
        return view('secciones.actividad');//->with('noticias',$noticias);
    }

    public function cultura(){
        $noticias = Noticia::orderBy('created_at','DESC')->take(5)->get()->all();
        return view('secciones.cultura')->with('noticias',$noticias);
    }

    public function contacto(Request $request){
        $mensaje = null;
        $data = ['nombre'   =>  $request->nombre,
                'email'     =>  $request->email,
                'telefono'  =>  $request->telefono,
                'mensaje'   =>  $request->mensaje];
        if($request->mensaje){
            Mail::send('emails.contacto',$data,function ($m){
                //$m->from('contacto@sedir.org.pe','Página web');
                $m->to('mouzionsolutions@gmail.com','Informes Sedir')->subject('Web Sedir');
            });
            $mensaje = 'Mensaje enviado con éxito';
        }
        return view('secciones.contacto')->with('mensaje',$mensaje);
    }
        //
        
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use App\Categoria;
use App\Http\Requests;
use File;
use Hashids;

class NoticiaController extends Controller
{
    public function index(Request $request){        
    	$noticias = Noticia::search($request->titulo)->orderBy('created_at','DESC')->paginate(5);
    	return view('noticias.index')->with('noticias',$noticias);
    }

    public function create(){
        $categorias = Categoria::all();    
    	return view('noticias.registrar')->with('categorias', $categorias);
    }

    public function store(Request $request){

        $new_noticia = new Noticia($request->all());
        if($request->file('imagen')){
            $file = $request->file('imagen');
            $name = 'noticia_' . time() . '.' . $file->getClientOriginalExtension();
            $path = '/home/sedirorg/public_html' . '/images/noticias/';
            $file->move($path,$name);
            $new_noticia->imagen = $name;            
        }else{
            $new_noticia->imagen = 'noticia_default.png';
        }
        $new_noticia->save();
        return redirect()->route('noticias.mostrar' , Hashids::encode($new_noticia->id));
    }

    public function mostrar($id){
        $id = Hashids::decode($id)[0];
        $noticia = Noticia::find($id);
        return view('noticias.mostrar')->with('noticia',$noticia);
    }

    public function edit($id){
        $id = Hashids::decode($id)[0];
        $noticia = Noticia::find($id);        
        $categorias = Categoria::all();
        return view('noticias.edit')->with(['noticia'=>$noticia,'categorias'=>$categorias]);
    }

    public function update(Request $request, $id){    
        //  $id = Hashids::decode($id)[0];
        $noticia = Noticia::find($id);
        $noticia->titulo  =   $request->titulo;
        $noticia->content  =   $request->content;
        $noticia->categoria_id = $request->categoria_id;

        if($request->file('imagen')){
            //Eliminar la imagen actual
            if($noticia->imagen != 'noticia_default.png'){
                $path = '/home/sedirorg/public_html' . '/images/noticias/'.$noticia->imagen;
                File::delete($path);
            }
            //Colocar la nueva imagen
            $file = $request->file('imagen');
            $name = 'noticia_' . time() . '.' . $file->getClientOriginalExtension();
            $path = '/home/sedirorg/public_html' . '/images/noticias/';
            $file->move($path,$name);
            $noticia->imagen=$name;
        }
        $noticia->save();

        return redirect()->route('noticias.mostrar' , Hashids::encode($noticia->id) );    
    }

    public function destroy($id){
        $id = Hashids::decode($id)[0];
        $noticia = Noticia::find($id);
        
        if(isset($noticia->imagen))
        {
            if($noticia->imagen != 'noticia_default.png'){
                $path = '/home/sedirorg/public_html' . '/images/noticias/'.$noticia->imagen;
                File::delete($path);
            }
        }

        $noticia->delete();
        return redirect()->route('noticias.index');
    }
}
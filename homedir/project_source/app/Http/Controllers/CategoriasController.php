<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Hashids;

class CategoriasController extends Controller
{
    public function index(Request $request){
    	$categorias = Categoria::search($request->nombre)->orderBy('id','ASC')->paginate(5);
    	return view('categorias.index')->with('categorias',$categorias);
    }

    public function create(){
    	return view('categorias.registrar');
    }

    public function store(Request $request){
    	$new_categoria = new Categoria($request->all());
        $new_categoria->save();
        //return redirect()->route('categorias.mostrar' , Hashids::encode($new_categoria->id));
        return redirect()->route('categorias.index');
    }

    public function mostrar($id){
        $id = Hashids::decode($id)[0];
        $categoria = Categoria::find($id);
        return view('categorias.mostrar')->with('categoria',$categoria);
    }

    public function edit($id){
        $id = Hashids::decode($id)[0];
        $categoria = Categoria::find($id);
        return view('categorias.edit')->with('categoria',$categoria);
    }

    public function update(Request $request, $id){
        $categoria = Categoria::find($id);
        $categoria->nombre  =   $request->nombre;
        $categoria->save();
        //return redirect()->route('categorias.mostrar' , Hashids::encode($categoria->id));
        return redirect()->route('categorias.index');
    }

    public function destroy($id){
        $id = Hashids::decode($id)[0];
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect()->route('categorias.index');
    }
}
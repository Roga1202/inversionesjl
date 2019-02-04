<?php

namespace App\Http\Controllers;

use App\Http\Requests\create_categoria_request;
use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    
    public function getindex(){
        $categoria = Categoria::orderBy('CA_ID','DESC')->paginate(15);
        return view('categoria.index',[
            'categorias' => $categoria,
        ]);
    }

    public function getcrear_categoria(){
        return view('categoria.crear_categoria');
    }

    
    public function postcrear_categoria(create_categoria_request $request){
        $categoria = Categoria::create([
            'CA_nombre' => $request->input('name'),
        ]);

        $message = 'Categoria Guardada';
        $evento = 'Create';
        return redirect('/home')->with([
            'message' => $message,
            'evento' => $evento,
        ]);
    }

    
    public function geteditar_categoria($id){
        $categoria = Categoria::query()->where('CA_ID', '=', $id)->first();
        return view('categoria.modificar_categoria',[
            'categoria' => $categoria,
        ]);
    }

    
    public function posteditar_categoria(create_categoria_request $request,$id){
        $categoria = Categoria::findorfail($id);
        $categoria->CA_nombre= $request->input('name');
        $categoria->save();
        
        $message = 'Categoria modificada';
        $evento = 'Update';
        return redirect('/home')->with([
            'message' => $message,
            'evento' => $evento,
        ]);
    }

    
    
    public function geteliminar_categoria($id){

        $categoria = Categoria::find($id);
        $categoria->destroy($id);

        $message = 'Categoria eliminada';
        $evento = 'Delete';
        return redirect('/home')->with([
            'message' => $message,
            'evento' => $evento,
        ]);
    }
    
    public function getver_categoria(){
        return view('index_cliente');
    }
}

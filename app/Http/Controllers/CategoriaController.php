<?php

namespace App\Http\Controllers;

use App\Http\Requests\create_categoria_request;
use Illuminate\Http\Request;
use App\categoria;

class CategoriaController extends Controller
{
    
    public function getcrear_categoria(){
        return view('categoria.crear_categoria');
    }

    
    public function postcrear_categoria(create_categoria_request $request){
        $result = "error";

        $errors= [];

        $categoria = categoria::create([
            'CA_nombre' => $request->input('name'),
        ]);

        $result = "ok";
        return view('categoria.crear_categoria',[
            'result' => $result,
        ]);
    }

    
    public function geteditar_categoria($id){
        $categoria = categoria::query()->where('CA_ID', '=', $id)->first();
        return view('categoria.modificar_categoria',[
            'categoria' => $categoria,
        ]);
    }

    
    public function posteditar_categoria(create_categoria_request $request,$id){
        $categoria = categoria::findorfail($id);
        $categoria->CA_nombre= $request->input('name');
        $categoria->save();
        if($categoria){
            $message = 'Categoria modificada';
        }
        return redirect('/home')->with(compact('message'));
    }

    
    
    public function geteliminar_categoria($id){

        $categoria = categoria::find($id);
        $categoria->destroy($id);

        if($categoria){
            $message = 'Categoria eliminada';
        }
        return redirect('/home')->with(compact('message'));
    }
    
    public function getver_categoria(){
        return view('index_cliente');
    }
}
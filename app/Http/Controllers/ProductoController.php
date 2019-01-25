<?php

namespace App\Http\Controllers;

use App\Http\Requests\create_producto_request;
use Illuminate\Http\Request;
use App\producto;
use App\categoria;
use App\Http\Requests\updated_producto_request;

class productoController extends Controller
{
    
    public function getcrear_producto(){
        $categorias= Categoria::query()->orderBy('CA_ID', 'asc')->get();

        
        return view('producto.crear_producto',[
            'categorias'=>$categorias,
        ]);
    }

    
    public function postcrear_producto(create_producto_request $request){
        $producto = producto::create([
            'PR_nombre' => $request->input('name'),
            'PR_presentacion' => $request->input('presentacion'),
            'PR_unidad' => $request->input('unidad'),
            'PR_precio' => $request->input('precio'),
            'CA_ID' => $request->input('categoria'),
        ]);
        $message = "Producto Guardado";
        $evento = 'Create';
        return redirect('/home')->with([
            'message' => $message,
            'evento' => $evento,
            ]);
        }

    
    public function geteditar_producto($id){
        $categorias= categoria::query()->orderBy('CA_ID', 'asc')->get();
        $producto = producto::query()->where('PR_ID', '=', $id)->first();
        return view('producto.modificar_producto',[
            'producto' => $producto,
            'categorias' => $categorias,
        ]);
    }

    
    public function posteditar_producto(updated_producto_request $request,$id){
        $producto = producto::findorfail($id);
        $producto->PR_nombre= $request->input('name');
        $producto->PR_presentacion= $request->input('presentacion');
        $producto->PR_unidad= $request->input('unidad');
        $producto->PR_precio= $request->input('precio');
        $producto->CA_ID= $request->input('categoria');
        $producto->save();

        $message = 'Producto modificado';
        $evento = 'Update';
        return redirect('/home')->with([
            'message' => $message,
            'evento' => $evento,
            ]);
    }

    
    
    public function geteliminar_producto($id){

        $producto = producto::find($id);
        $producto->destroy($id);

        $message = 'Producto eliminado';
        $evento = 'Delete';
        return redirect('/home')->with([
            'message' => $message,
            'evento' => $evento,
            ]);
    }
    
    public function getver_producto(){
        return view('index_cliente');
    }
}

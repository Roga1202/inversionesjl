<?php

namespace App\Http\Controllers;

use App\categoria;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function getindex(){
        return view('index');
    }

    public function gethome(){
        $categoria = Categoria::paginate(15);
        return view('home',[
            'categorias' => $categoria,
        ]);
    }

    public function gethome_categoria(){
        return view('index_categoria');
    }

    public function gethome_cliente(){
        return view('index_cliente');
    }

    public function gethome_producto(){
        return view('index_producto');
    }

    public function gethome_factura(){
        return view('index_factura');
    }

}

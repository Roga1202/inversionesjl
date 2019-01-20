<?php

namespace App\Http\Controllers;

use App\producto;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function getindex(){
        return view('index');
    }

    public function prueba(){
        return view('prueba');
    }

    public function gethome(){
        $producto = producto::paginate(15);
        return view('home',[
            'productos' => $producto,
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

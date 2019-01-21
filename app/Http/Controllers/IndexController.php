<?php

namespace App\Http\Controllers;

use App\producto;
use App\estado;
use App\ciudad;
use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{
    //

    public function getindex(){
        return view('index');
    }

    public function prueba(){
        $ciudades= ciudad::query()->orderBy('CI_ID', 'asc')->get();
        $estados= DB::table('estado')->groupBy('CI_nombre')->get();
        return view('prueba',[
            // 'ciudades' => $ciudades,
            'estados' => $estados,
        ]);
        return view('prueba')->with('$estados',$estados);
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

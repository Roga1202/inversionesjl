<?php

namespace App\Http\Controllers;

use App\producto;
use App\estado;
use App\ciudad;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function getindex(){
        return view('index');
    }

    public function prueba(){
        $estados = estado::all()->pluck('ES_nombre','ES_ID');
        return view('prueba',[
            'estados' => $estados, 
        ]);
    }

    public function getciudades($id){
        $ciudades = ciudad::where('ES_ID',$id)->pluck('CI_ID','CI_nombre');
        return json_encode($ciudades);
    }

    public function getestados($id){
        $estado = estado::where('ES_ID',$id)->pluck('ES_ID','ES_nombre');
        return json_encode($estado);
    }

    public function gethome(){
        $productos = producto::paginate(15);
        return view('home',[
            'productos' => $productos,
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

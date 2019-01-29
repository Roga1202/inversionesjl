<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Estado;
use App\Ciudad;
use App\Cliente;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function getindex(){
        return view('index');
    }

    public function prueba(){
        $estados = Estado::all()->pluck('ES_nombre','ES_ID');
        return view('prueba',[
            'estados' => $estados, 
        ]);
    }

    public function getciudades($id){
        $ciudades = Ciudad::where('ES_ID',$id)->pluck('CI_ID','CI_nombre');
        return json_encode($ciudades);
    }

    public function getestado($id){
        $estado = Cliente::find($id)->estado;
        return json_encode($estado);
    }

    public function getciudad($id){
        $ciudad = Cliente::find($id)->ciudad;
        return json_encode($ciudad);
    }

    public function getproducto($id){
        $producto = Producto::find($id);
        return json_encode($producto);
    }

    public function gethome(){
        $productos = Producto::paginate(15);
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

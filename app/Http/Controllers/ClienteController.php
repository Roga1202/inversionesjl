<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estado;

class ClienteController extends Controller
{
    
    public function getcrear_cliente(){
        $estados = estado::all()->pluck('ES_nombre','ES_ID');
        return view('cliente.crear_cliente',[
            'estados' => $estados, 
        ]);
    }

    
    public function postcrear_cliente(){



        
        return view('index_cliente');
    }

    
    public function geteditar_cliente(){
        return view('index_cliente');
    }

    
    public function posteditar_cliente(){
        return view('index_cliente');
    }

    
    
    public function geteliminar_cliente(){
        return view('index_cliente');
    }
    //
}

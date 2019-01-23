<?php

namespace App\Http\Controllers;

use App\Http\Requests\create_cliente_request;
use Illuminate\Http\Request;
use App\estado;
use App\cliente;

class ClienteController extends Controller
{
    
    public function getcrear_cliente(){
        $estados = estado::all()->pluck('ES_nombre','ES_ID');
        return view('cliente.crear_cliente',[
            'estados' => $estados, 
        ]);
    }

    
    public function postcrear_cliente(create_cliente_request $request){
        $cliente = cliente::create([
            'CL_primer_nombre' => $request->input('primer_nombre'),
            'CL_otro_nombre' => $request->input('otro_nombre'),
            'CL_primer_apellido' => $request->input('primer_apellido'),
            'CL_otro_apellido' => $request->input('otro_apellido'),
            'CL_CI' => $request->input('ci'),
            'CL_telefono' => $request->input('telefono'),
            'CL_direccion' => $request->input('direccion'),
            'CL_correo' => $request->input('correo'),
            'CL_empresa_envio' => $request->input('empresa_envio'),
            'CL_estado' => $request->input('estado'),
            'CL_ciudad' => $request->input('ciudad'),
        ]);


        $message = 'Cliente Guardada';
        $evento = 'Create';
        return redirect('/home')->with([
            'message' => $message,
            'evento' => $evento,
            ]);
    }

    
    public function geteditar_cliente(){
        return view('index_cliente');
    }

    
    public function posteditar_cliente(){
        return view('index_cliente');
    }

    
    
    public function geteliminar_cliente($id){

        $cliente = cliente::find($id);
        $cliente->destroy($id);

        $message = 'Cliente eliminada';
        $evento = 'Delete';
        return redirect('/home')->with([
            'message' => $message,
            'evento' => $evento,
            ]);
    }
    //
}

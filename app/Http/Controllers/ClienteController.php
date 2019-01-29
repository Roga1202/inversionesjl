<?php

namespace App\Http\Controllers;

use App\Http\Requests\create_cliente_request;
use App\Http\Requests\updated_cliente_request;
use Illuminate\Http\Request;
use App\Estado;
use App\Cliente;

class ClienteController extends Controller
{
    
    public function getcrear_cliente(){
        $estados = Estado::all()->pluck('ES_nombre','ES_ID');
        return view('cliente.crear_cliente',[
            'estados' => $estados, 
        ]);
    }

    
    public function postcrear_cliente(create_cliente_request $request){
        $cliente = Cliente::create([
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

    
    public function geteditar_cliente($id){
        $cliente = Cliente::query()->where('CL_ID', '=', $id)->first();
        $estados = Estado::all()->pluck('ES_nombre','ES_ID');
        return view('cliente.modificar_cliente',[
            'estados' => $estados, 
            'cliente' => $cliente, 
        ]);
    }

    
    public function posteditar_cliente(updated_cliente_request $request,$id){
        $cliente = Cliente::findorfail($id);
        $cliente->CL_primer_nombre= $request->input('primer_nombre');
        $cliente->CL_otros_nombres= $request->input('otro_nombre');
        $cliente->CL_primer_apellido= $request->input('primer_apellido');
        $cliente->CL_otros_apellidos= $request->input('otro_apellido');
        $cliente->CL_CI= $request->input('ci');
        $cliente->CL_telefono= $request->input('telefono');
        $cliente->CL_direccion= $request->input('direccion');
        $cliente->CL_correo= $request->input('correo');
        $cliente->CL_empresa_envio= $request->input('empresa_envio');
        $cliente->CL_estado= $request->input('estado');
        $cliente->CL_ciudad= $request->input('ciudad');
        $cliente->save();

        $message = 'Cliente modificado';
        $evento = 'Update';
        return redirect('/home')->with([
            'message' => $message,
            'evento' => $evento,
            ]);
    }

    
    
    public function geteliminar_cliente($id){

        $cliente = Cliente::find($id);
        $cliente->destroy($id);

        $message = 'Cliente eliminada';
        $evento = 'Delete';
        return redirect('/home')->with([
            'message' => $message,
            'evento' => $evento,
            ]);
    }

    public function getcliente($id){
        $cliente = Cliente::find($id);
        return $cliente;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ClienteRepository;
use App\Http\Requests;

class FacturaController extends Controller
{


    private $_clientRepo;

    public function __CONSTRUCT(ClienteRepository $clienteRepo){
        $this->_clienteRepo = $clienteRepo;
    }

    public function findCliente(Request $req)
    {
        return $this->_clienteRepo
                    ->findByName($req->input('q'));
    }
    
    public function getcrear_factura(){
        return view('factura.crear_factura',[
        ]);
    }

    
    public function postcrear_factura(create_factura_request $request){
        $factura = factura::create([
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


        $message = 'factura Guardada';
        $evento = 'Create';
        return redirect('/home')->with([
            'message' => $message,
            'evento' => $evento,
            ]);
    }

    
    public function geteditar_factura($id){
        $factura = factura::query()->where('CL_ID', '=', $id)->first();
        $estados = estado::all()->pluck('ES_nombre','ES_ID');
        return view('factura.modificar_factura',[
            'estados' => $estados, 
            'factura' => $factura, 
        ]);
    }
    
    public function geteliminar_factura($id){

        $factura = factura::find($id);
        $factura->destroy($id);

        $message = 'factura eliminada';
        $evento = 'Delete';
        return redirect('/home')->with([
            'message' => $message,
            'evento' => $evento,
            ]);
    }
    //
}

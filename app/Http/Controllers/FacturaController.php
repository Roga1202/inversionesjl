<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ClienteRepository;
use App\Repositories\ProductoRepository;
use App\Http\Requests\create_factura_request;
use App\Http\Requests;

class FacturaController extends Controller
{


    private $_clienteRepo;
    private $_productoRepo;

    public function __CONSTRUCT(
        ClienteRepository $clienteRepo,
        ProductoRepository $productoRepo ){
            $this->_clienteRepo = $clienteRepo;
            $this->_productoRepo = $productoRepo;
    }

    public function findCliente(Request $req)
    {
        return $this->_clienteRepo
                    ->findByName($req->input('q'));
    }

    public function findProducto(Request $req)
    {
        return $this->_productoRepo
                    ->findByName($req->input('q'));
    }
    
    public function getcrear_factura(){
        return view('factura.crear_factura',[
        ]);
    }

    
    public function postcrear_factura(create_factura_request $req){
        $data = (object)[
            'CL_ID' => $req->input('cliente_id'),
            'FA_precio_neto' => $req->input('subTotal'),
            'FA_IVA' => $req->input('iva'),
            'FA_precio_total' => $req->input('total'),
            'detalles' => $req->input('detalles'),
        ];
        var_dump($data);
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

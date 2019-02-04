<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ClienteRepository;
use App\Repositories\ProductoRepository;
use App\Repositories\FacturaRepository;
use App\Http\Requests\create_factura_request;
use App\Http\Requests;
use PDF;
use App\Factura;
use App\Cliente;
use App\Estado;
use App\Ciudad;

class FacturaController extends Controller
{


    private $_clienteRepo;
    private $_productoRepo;
    private $_facturaRepo;

    public function __CONSTRUCT(
        ClienteRepository $clienteRepo,
        ProductoRepository $productoRepo,
        FacturaRepository $facturaRepo 
        )
        {
            $this->_clienteRepo = $clienteRepo;
            $this->_productoRepo = $productoRepo;
            $this->_facturaRepo = $facturaRepo;
    }

    public function getindex(){

        $factura = Factura::orderBy('FA_ID','DESC')->paginate(15);
        return view('factura.index',[
            'facturas' => $factura,
        ]);
    }
    
    public function getdetalle($id){

        return view('factura.detalle_factura',[
            'model' => $this->_facturaRepo->get($id),
        ]);
    }

    public function getpdf($id){

        $model = $this->_facturaRepo->get($id);
        
        $id_cliente=$model->CL_ID;

        $cliente = Cliente::find($id_cliente);

        $id_estado= $cliente['CL_estado'];
        $id_ciudad= $cliente['CL_ciudad'];

        $estado = Estado::find($id_estado);
        $ciudad = Ciudad::find($id_ciudad);

        $estado = $estado['ES_nombre'];
        $ciudad = $ciudad['CI_nombre'];

        
        
        
        $factura_name = sprintf('comprobante-%s.pdf', str_pad ($model->FA_ID, 7, '0', STR_PAD_LEFT));
        $pdf = PDF::loadView('factura.pdf', [
            'model' => $model,
            'estado' => $estado,
            'ciudad' => $ciudad
        ]);
        return $pdf->download($factura_name);
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
            'detalles' => [],
        ];

        foreach ($req->input('detalles') as $d) {
            $data->detalles[] = (object)[
                'PR_ID'             => $d['id'],
                'DF_cantidad'       => $d['cantidad'],
                'DF_precio'         => $d['precio'],
                'DF_precio_total'   => $d['total']
            ];
        }

        return $this->_facturaRepo->save($data);
    }

    
    public function geteliminar_factura($id){

        $factura = factura::find($id);
        $factura->destroy($id);

        $message = 'Factura eliminada';
        $evento = 'Delete';
        return redirect('/home')->with([
            'message' => $message,
            'evento' => $evento,
            ]);
    }
    //
}

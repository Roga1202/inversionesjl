<?php

namespace App\Repositories;

use App\Factura;
use App\Detalle_factura;
use DB;

class InvoiceRepository {
    private $model;
    
    public function __construct(){
        $this->model = new Factura();
    }

    public function get($id) {
        return $this->model->find($id);
    }

    public function getAll() {
        return $this->model->orderBy('id', 'desc')->get();
    }


    public function save($data) {
        $return = (object)[
            'response' => false
        ];
        try {
            DB::beginTransaction();
            $this->model->CL_ID = $data->CL_ID;
            $this->model->FA_precio_neto = $data->FA_precio_neto;
            $this->model->FA_IVA = $data->FA_IVA;
            $this->model->FA_precio_total = $data->FA_precio_total;
            $this->model->save();
            $detalles = [];
            foreach($data->detalles as $d) {
                $obj = new Detalle_factura;
                $obj->PR_ID = $d->id;
                $obj->DF_cantidad = $d->cantidad;
                $obj->DF_precio = $d->precio;
                $detalles[] = $obj;
            }
            $this->model->detalles()->saveMany($detalles);
            $return->response = true;
            DB::commit();
        } catch (\Exception $e){
            DB::rollBack();
        }
        return json_encode($return);
    }
}
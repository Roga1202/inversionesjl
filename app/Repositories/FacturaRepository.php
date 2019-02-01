<?php

namespace App\Repositories;

use App\Factura;
use App\Detalle_factura;
use DB;

class FacturaRepository {
    private $model;
    
    public function __construct(){
        $this->model = new Factura();
    }

    public function get($id) {
        return $this->model->find($id);
    }

    public function getAll() {
        return $this->model->orderBy('FA_ID', 'desc')->get();
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
                $obj->PR_ID = $d->PR_ID;
                $obj->DF_cantidad = $d->DF_cantidad;
                $obj->DF_precio = $d->DF_precio;
                $obj->DF_precio_total = $d->DF_precio_total;
                $detalle[] = $obj;
            }
            $this->model->detalle_factura()->saveMany($detalle);
            $return->response = true;
            $return->id = $this->model->FA_ID;
            DB::commit();
        } catch (\Exception $e){
            dd($e);
            DB::rollBack();
        }
        return json_encode($return);
    }
}
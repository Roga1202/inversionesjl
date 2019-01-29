<?php
namespace App\Repositories;

use App\Cliente;


class ClienteRepository {
    private $model;
    
    public function __construct(){
        $this->model = new Cliente();
    }
    public function findByName($q) {
        return $this->model->where('CL_primer_nombre', 'like', "%$q%")
                           ->get();
    }
}

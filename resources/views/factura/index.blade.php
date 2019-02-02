@extends('layouts.app')
@section('head')
    <title>Inversionesjl-Producto</title>
@endsection
@section('block')

<div class="container">
    <div class="row">
        <div class="col-md-9" style="align:center;">
            <h2 class="page-header">
                Comprobantes
            </h2>

            <a class="btn btn-danger btn-lg btn-block" href="/factura/crear">Nuevo comprobante</a>

            <table class="table table-striped" style="size:auto;">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th style="width:100px;" class="text-right">CI</th>
                        <th style="width:100px;" class="text-right">IVA</th>
                        <th style="width:160px;" class="text-right">Sub Total</th>
                        <th style="width:160px;" class="text-right">Total</th>
                        <th style="width:180px;" class="text-right">Creado</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($model as $m)
                    <tr>
                        <td>
                <a href="/factura/detalle/{{$m->FA_ID}}" style="color:white;  size:10px;"class="btn btn-primary btn-xs"  >
                                {{ $m->cliente->CL_primer_nombre }} {{ $m->cliente->CL_primer_apellido }}</a>
                        </td>
                        <td class="text-right">{{$m->cliente->CL_CI}}</td>
                        <td class="text-right">$ {{number_format($m->FA_IVA, 2)}}</td>
                        <td class="text-right">$ {{number_format($m->FA_precio_neto, 2)}}</td>
                        <td class="text-right">$ {{number_format($m->FA_precio_total, 2)}}</td>
                        <td class="text-right">{{ $m->FA_inicio  }}</td>
                        <td class="text-right">
                            <a class="btn btn-success btn-block btn-xs"  href="{{ url('factura/pdf/' . $m->FA_ID) }}">
                                <i class="fa fa-file-pdf-o" ></i> Descargar
                            </a>
                            
                            <a class="btn btn-primary btn-block btn-xs"  href="#">
                                <i class="fa fa-file-pdf-o" ></i> Eliminar
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- LOL CREA UNA PAGINACIÓN... DESPUES DE TANTO SE ALMACENAN EN LA OTRA.
        SI PUEDE // SI NO ELIMINA ESTE CODIGO
          
        <div class="container" style="text-align:auto;">                
            <ul class="pagination pagination-lg" >
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
            </ul>
        </div> 
                       -->
       
    </div>
        
    </div>
    
</div>

@endsection

@section('script')
@endsection
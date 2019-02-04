@extends('layouts.app')
@section('head')
    <title>Inversionesjl-Producto</title>
@endsection
@section('block')

<div class="container">
    <div class="row">
        <div class="col-md-9" style="align:center;">
            <h2 class="page-header">
                Comprobantes <span class="glyphicon glyphicon-print"></span>
            </h2>

            <a class="btn btn-danger btn-lg btn-block" href="/factura/crear">Crear Nuevo comprobante</a>

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
                    @foreach ($facturas as $factura)
                    <tr>
                        <td>
                <a href="/factura/detalle/{{$factura->FA_ID}}" style="color:white;  size:10px;"class="btn btn-primary btn-xs"  >
                                {{ $factura->cliente->CL_primer_nombre }} {{ $factura->cliente->CL_primer_apellido }}</a>
                        </td>
                        <td class="text-right">{{$factura->cliente->CL_CI}}</td>
                        <td class="text-right">$ {{number_format($factura->FA_IVA, 2)}}</td>
                        <td class="text-right">$ {{number_format($factura->FA_precio_neto, 2)}}</td>
                        <td class="text-right">$ {{number_format($factura->FA_precio_total, 2)}}</td>
                        <td class="text-right">{{ $factura->FA_inicio  }}</td>
                        <td class="text-right">
                        <form action="/factura/eliminar/{{$factura['FA_ID']}}" method="GET" >
                            {{ csrf_field() }}
                            <a class="btn btn-success btn-block btn-xs"  href="{{ url('factura/pdf/' . $factura->FA_ID) }}">
                                <i class="fa fa-file-pdf-o" ></i> Descargar
                            </a>
                            
                            <a class="btn btn-primary btn-block btn-xs"  href="/factura/eliminar/{{$factura['FA_ID']}}">
                                <i class="fa fa-file-pdf-o" ></i> Eliminar
                            </a>
                        </td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            @if (count($facturas))
            <div class="mt-2 mx-auto">
                {{ $facturas->links('pagination::bootstrap-4') }}    
            </div>
            @endif
        </div>
        
    </div>
    
</div>

@endsection

@section('script')
@endsection

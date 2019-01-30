@extends('layouts.app')

@section('block')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">
                Comprobante # {{ str_pad ($model->FA_ID, 7, '0', STR_PAD_LEFT) }}
            </h2>

            <div class="well well-sm">
                <div class="row">
                    <div class="col-xs-4">
                    <input class="form-control typeahead" type="text" readonly value="{{ $model->cliente->CL_primer_nombre}} {{$model->cliente->CL_primer_apellido}}" />
                    </div>
                    <div class="col-xs-2">
                        <input class="form-control" type="text" readonly value={{ $model->cliente->CL_CI}} />
                    </div>
                    <div class="col-xs-2">
                        <input class="form-control" type="text" readonly value={{ $model->cliente->estado->ES_nombre}} />
                    </div>
                    <div class="col-xs-2">
                        <input class="form-control" type="text" readonly value={{$model->cliente->ciudad->CI_nombre}} />
                    </div>
                    <div class="col-xs-2">
                        <input class="form-control" type="text" readonly value={{$model->cliente->CL_direccion}}/>
                    </div>

                </div>
            </div>

            <hr />

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Producto</th>
                    <th style="width:100px;">Presentacion</th>
                    <th style="width:100px;">Unidad</th>
                    <th style="width:100px;"></th>
                    <th style="width:100px;">Cantidad</th>
                    <th style="width:100px;">P.U</th>
                    <th style="width:100px;">Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($model->detalle_factura as $d)
                <tr>
                    <td colspan="">{{$d->producto->PR_nombre}}</td>
                    <td colspan="" class="text-right">{{$d->producto->PR_presentacion}}</td>
                    <td colspan="" class="text-right">{{$d->producto->PR_unidad}}</td>
                    <td colspan="" class="text-right"></td>
                    <td colspan="" class="text-right">{{$d->DF_cantidad}}</td>
                    <td colspan="" class="text-right">$ {{number_format($d->DF_precio, 2)}}</td>
                    <td colspan="" class="text-right">$ {{number_format($d->DF_precio_total, 2)}}</td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="6" class="text-right"><b>IVA</b></td>
                    <td class="text-right">$ {{ number_format($model->FA_IVA, 2) }}</td>
                </tr>
                <tr>
                    <td colspan="6" class="text-right"><b>Sub Total</b></td>
                    <td class="text-right">$ {{ number_format($model->FA_precio_neto, 2) }}</td>
                </tr>
                <tr>
                    <td colspan="6" class="text-right"><b>Total</b></td>
                    <td class="text-right">$ {{ number_format($model->FA_precio_total, 2) }}</td>
                </tr>
                </tfoot>
            </table>

        </div>
    </div>
</div>
@endsection
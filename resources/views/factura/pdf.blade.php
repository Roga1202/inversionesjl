<html>
    <head>
        <style>
            .header{background:#eee;color:#444;border-bottom:1px solid #ddd;padding:10px;}
            .client-detail{background:#ddd;padding:10px;}
            .client-detail th{text-align:left;}
            .items{border-spacing:0;}
            .items thead{background:#ddd;}
            .items tbody{background:#eee;}
            .items tfoot{background:#ddd;}
            .items th{padding:10px;}
            .items td{padding:10px;}
            h1 small{display:block;font-size:16px;color:#888;}
            table{width:100%;}
            .text-right{text-align:right;}
        </style>
    </head>
    <body>

    <div class="header">
        <h1>
            Comprobante # {{ str_pad ($model->FA_ID, 7, '0', STR_PAD_LEFT) }}
            <small>
                Emitido el {{ $model->FA_inicio }}
            </small>
        </h1>
    </div>
    <table class="client-detail">
        <tr>
            <th style="width:100px;">
                Cliente
            </th>
            <td>{{ $model->cliente->CL_primer_nombre }} {{ $model->cliente->CL_primer_apellido }}</td>
        </tr>
        <tr>
            <th>Cedula</th>
            <td>{{ $model->cliente->CL_CI }}</td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td>{{ $model->cliente->address }}</td>
        </tr>
    </table>

    <hr />

    <table class="items">
        <thead>
            <tr>
                <th class="text-left">Producto</th>
                <th class="text-right" style="width:100px;">Presentacion</th>
                <th class="text-right" style="width:100px;">Unidad</th>
                <th class="text-right" style="width:100px;"></th>
                <th class="text-right" style="width:100px;">Cantidad</th>
                <th class="text-right" style="width:100px;">P.U</th>
                <th class="text-right" style="width:100px;">Total</th>
            </tr>
        </thead>
        <tbody>
        @foreach($model->detalle_factura as $d)
            <tr>
                <td>{{$d->producto->PR_nombre}}</td>
                <td class="text-right">{{$d->producto->PR_presentacion}}</td>
                <td class="text-right">{{$d->producto->PR_unidad}}</td>
                <td class="text-right"></td>
                <td class="text-right">{{$d->DF_cantidad}}</td>
                <td class="text-right">$ {{number_format($d->DF_precio, 2)}}</td>
                <td class="text-right">$ {{number_format($d->DF_precio_total, 2)}}</td>
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
    </body>
</html>
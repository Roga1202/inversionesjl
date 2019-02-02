
    <html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css">
        <style>
            .header{background:white;color:#444;border-bottom:1px solid #ddd;padding:10px;}
            .client-detail{background:#EAEAEA;padding:10px;}
            .client-detail th{text-align:left;}
            .items{border-spacing:0;}
            .items thead{background:#EAEAEA;}
            .items tbody{background:white;}
            .items tfoot{background:white;}
            .items th{padding:10px; text-align: center;}
            .items td{padding:10px;}
            h1 small{display:block;font-size:16px;color:#888;}
            table{width:100%;}
            .text-right{text-align:right;}
        </style>
    </head>
    <body>

    <div class="header">
        <h1 style="text-align: center;">
            Comprobante de venta # {{ str_pad ($model->FA_ID, 7, '0', STR_PAD_LEFT) }}
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

    <table class="items" >
        <thead>
            <tr class="table table-bordered">
                <th class="class="table table-bordered"" >Producto</th>
                <th class="text-right" style="width:100px;">Presentacion</th>
                <th class="text-right" style="width:100px;">Unidad</th>
                <th class="text-right" style="width:100px;"></th>
                <th class="text-right" style="width:100px;">Cantidad</th>
                <th class="text-right " style="width:100px;">P.U</th>
                <th class="text-right" style="width:100px;">Total</th>
            </tr>
        </thead>
        <tbody>
        @foreach($model->detalle_factura as $d)
            <tr class="table table-bordered">
                <td>{{$d->producto->PR_nombre}}</td>
                <td class="text-right">{{$d->producto->PR_presentacion}}</td>
                <td class="text-right" >{{$d->producto->PR_unidad}}</td>
                <td class="text-right"></td>
                <td class="text-right">{{$d->DF_cantidad}}</td>
                <td class="text-right" style="text-align:justify;">$ {{number_format($d->DF_precio, 2)}}</td>
                <td class="text-right" style="text-align:justify;">$ {{number_format($d->DF_precio_total, 2)}}</td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr class="table table-bordered">
            <td colspan="6" class="text-right" ><b>IVA</b></td>
            <td style="text-align:justify;">$ {{ number_format($model->FA_IVA, 2) }}</td>
        </tr>
        <tr class="table table-bordered">
            <td colspan="6" class="text-right"><b>Sub Total</b></td>
            <td class="text-right" style="text-align:justify;">$ {{ number_format($model->FA_precio_neto, 2) }}</td>
        </tr>
        <tr class="table table-bordered">
            <td colspan="6" class="text-right"><b>Total</b></td>
            <td class="text-right" style="text-align:justify;">$ {{ number_format($model->FA_precio_total, 2) }}</td>
        </tr>
        </tfoot>
    </table>
<br>
 <hr />

<br>
<div class="client-detail" style="text-align: center ">
    <small>
                Recortar para Envios
            </small>
    <h1> Comprobante de Envio</h1>
</div>
 <table class="items" style="text-align: center, auto; font-size: 30px;">
        <tr>
            <th style="text-align:justify;">
                Nombre
            </th>
            <td> Aqui va lo que tu sabes </td>y>
        </tr>
        <tr>
            <th style="text-align:justify;">Cedula</th>
           <td> Aqui va lo que tu sabes </td>
        </tr>
        <tr>
            <th style="text-align:justify;">Telefono</th>
           <td> Aqui va lo que tu sabes </td>
        </tr>
         <tr>
            <th style="text-align:justify;">Empresa de envio</th>
           
           <td> Aqui va lo que tu sabes </td>
        
        </tr>
         <tr>
            <th style="text-align:justify;">Ciudad</th>
            <td> Aqui va lo que tu sabes </td>
        </tr>
         <tr>
            <th style="text-align:justify;">Dirección</th>
           <td> Aqui va lo que tu sabes </td>
        </tr>
    </table>
    </body>
</html>
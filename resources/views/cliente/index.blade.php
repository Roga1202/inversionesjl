@extends('layouts.app')


@section('block')

<div class="container">
    <div class="row">
        <div class="col-md-9" style="align:center;">
            <h2 class="page-header">
                Clientes <span class="glyphicon glyphicon-user"></span>
            </h2>

            <a class="btn btn-primary btn-lg btn-block" href="/cliente/crear">Crear Nuevo Cliente</a>

            <table class="table table-striped" style="size:auto;">
                <thead>
                    <tr>
                        <th style="" class="text-center">ID</th>
                        <th style="" class="text-center">Nombre</th>
                        <th style="" class="text-center">C.I</th>
                        <th style="" class="text-center">Actualizar</th>
                        <th style="" class="text-center">Eliminar</th>

                    </tr>
                </thead>
                <tbody>
                @foreach ($clientes as $cliente)
                    <tr class="table table-striped" style="size:auto;">
                        <td class="text-center">{{ $cliente['CL_ID'] }}</td>
                        <td class="text-center">{{ $cliente['CL_primer_nombre'] }} {{ $cliente['CL_primer_apellido'] }}</td>
                        <td class="text-center">{{ $cliente['CL_CI'] }}</td>
                        <form action="/cliente/eliminar/{{$cliente['CL_ID']}}" method="GET" >
                        {{ csrf_field() }}
                        <td class="text-center"> <a href="/cliente/actualizar/{{$cliente['CL_ID']}}" class="btn btn-info btn-sm">Actualizar</a> </td>

                        <td class="text-center"><button type="submit" class='btn btn-danger btn-sm'>Eliminar</button></td>
                        </form>
                   
                    </tr>
                        
            @endforeach
                </tbody>

            </table>
            @if (count($clientes))
        <div class="mt-2 mx-auto">
            {{ $clientes->links('pagination::bootstrap-4') }}    
        </div>
        @endif
          
        </div>
        
    </div>
    
</div>

@endsection
@extends('layouts.app')


@section('block')
    <div class="container">
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">CI</th>
                <th scope="col">Actualizar</th>
                <th scope="col">Eliminar</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr>
                    <td scope="row">{{ $cliente['CL_ID'] }}</td>
                    <td scope="row">{{ $cliente['CL_primer_nombre'] }} {{ $cliente['CL_primer_apellido'] }}</td>
                    <td scope="row">{{ $cliente['CL_CI'] }}</td>
                    <form action="/cliente/eliminar/{{$cliente['CL_ID']}}" method="POST" >
                        {{ csrf_field() }}
                    <td><a href="/cliente/actualizar/{{$cliente['CL_ID']}}" class="btn btn-primary btn-sm">Actualizar</a></td>
                    <td><button type="submit" class='btn btn-danger btn-sm'>Eliminar</button></td>
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
@endsection

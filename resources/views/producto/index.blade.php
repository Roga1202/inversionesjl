@extends('layouts.app')


@section('block')
    <div class="container">
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Actualizar</th>
                <th scope="col">Eliminar</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <tr>
                    <td scope="row">{{ $producto['PR_ID'] }}</td>
                    <td scope="row">{{ $producto['PR_nombre'] }}</td>
                    <td scope="row">{{ $producto['PR_precio'] }}</td>
                    <form action="/producto/eliminar/{{$producto['PR_ID']}}" method="POST" >
                        {{ csrf_field() }}
                    <td><a href="/producto/actualizar/{{$producto['PR_ID']}}" class="btn btn-primary btn-sm">Actualizar</a></td>
                    <td><button type="submit" class='btn btn-danger btn-sm'>Eliminar</button></td>
                    </form>
                    </tr>
            @endforeach
            </tbody>
        </table>
        @if (count($productos))
        <div class="mt-2 mx-auto">
            {{ $productos->links('pagination::bootstrap-4') }}    
        </div>
        @endif
    </div>
@endsection

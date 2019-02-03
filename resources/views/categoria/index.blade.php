@extends('layouts.app')


@section('block')

<div class="container">
    <div class="row">
        <div class="col-md-9" style="align:center;">
            <h2 class="page-header">
                Categorias <span class="glyphicon glyphicon-level-up"></span>
            </h2>

            <a class="btn btn-primary btn-lg btn-block" href="/categoria/crear">Crear Nueva Categoria</a>

            <table class="table table-striped" style="size:auto;">
                <thead>
                    <tr>
                        <th style="" class="text-center">ID</th>
                        <th style="" class="text-center">Nombre</th>
                        <th style="" class="text-center">Actualizar</th>
                        <th style="" class="text-center">Eliminar</th>

                    </tr>
                </thead>
                <tbody>
                     @foreach ($categorias as $categoria)
                    <tr class="table table-striped" style="size:auto;">
                        
                        <td class="text-center">{{ $categoria['CA_ID'] }}</td>
                        <td class="text-center">{{ $categoria['CA_nombre'] }}</td>
                        <form action="/categoria/eliminar/{{$categoria['CA_ID']}}" method="POST" >
                        {{ csrf_field() }}
                        <td class="text-center"> <a href="/categoria/actualizar/{{$categoria['CA_ID']}}" class="btn btn-info btn-sm">Actualizar</a> </td>

                        <td class="text-center"><button type="submit" class='btn btn-danger btn-sm'>Eliminar</button></td>
                        </form>
                   
                    </tr>
                    @endforeach
                </tbody>

            </table>
            @if (count($categorias))
        <div class="mt-2 mx-auto">
            {{ $categorias->links('pagination::bootstrap-4') }}    
        </div>
        @endif
            <div class="mt-2 mx-auto">
            
            </div>
          
        </div>
        
    </div>
    
</div>


@endsection

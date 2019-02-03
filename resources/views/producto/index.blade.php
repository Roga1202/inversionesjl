@extends('layouts.app')


@section('block')


<div class="container">
    <div class="row">
        <div class="col-md-9" style="align:center;">
            <h2 class="page-header">
               Productos <span class="glyphicon glyphicon-baby-formula"></span>
            </h2>

            <a class="btn btn-primary btn-lg btn-block" href="/producto/crear">Añadir Producto</a>

            <table class="table table-striped" style="size:auto;">
                <thead>
                    <tr>
                        <th style="" class="text-center">ID</th>
                        <th style="" class="text-center">Nombre</th>
                        <th style="" class="text-center">Precio</th>
                        <th style="" class="text-center">Actualizar</th>
                        <th style="" class="text-center">Eliminar</th>

                    </tr>
                </thead>
                <tbody>
                @foreach ($productos as $producto)
                    <tr class="table table-striped" style="size:auto;">
                        <td class="text-center">{{ $producto['PR_ID'] }}</td>
                        <td class="text-center">{{ $producto['PR_nombre'] }}</td>
                        <td class="text-center">{{ $producto['PR_precio'] }}</td>
                        <form action="/producto/eliminar/{{$producto['PR_ID']}}" method="POST" >
                        {{ csrf_field() }}
                        <td class="text-center"> <a href="/producto/actualizar/{{$producto['PR_ID']}}" class="btn btn-info btn-sm">Actualizar</a> </td>

                        <td class="text-center"><button type="submit" class='btn btn-danger btn-sm'>Eliminar</button></td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>

            </table>
          
     
          
        </div>
        
    </div>
    
</div>



    <div class="container">
  
        @if (count($productos))
        <div class="mt-2 mx-auto">
            {{ $productos->links('pagination::bootstrap-4') }}    
        </div>
        @endif
    </div>
@endsection

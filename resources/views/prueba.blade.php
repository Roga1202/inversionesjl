@extends('layouts.app')
  @section('head')
    <title>Inversiones JL</title>
  @endsection
  @section('block')
  
  @if(session('message') and session('evento'))
    @if (session('evento') == 'Create')
      <div class="alert alert-success" role="alert">
        {{ session('message') }}
      </div>
    @endif
    @if (session('evento') == 'Update')
      <div class="alert alert-primary" role="alert">
        {{ session('message') }}
      </div>
    @endif 
    @if(session('evento') == 'Delete')
      <div class="alert alert-danger" role="alert">
        {{ session('message') }}
      </div> 
    @endif
  @endif

  <div class="container">
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Actualizar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($productos as $producto)
          <tr>
            <td scope="row">{{ $producto['PR_ID'] }}</td>
            <td scope="row">{{ $producto['PR_nombre'] }}</td>
            <form action="producto/eliminar/{{$producto['PR_ID']}}" method="POST" >
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
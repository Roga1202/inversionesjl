@extends('layouts.app')
  @section('head')
    <title>Inversiones JL</title>
  @endsection
  @section('block')
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
          @foreach ($categorias as $categoria)
            <tr>
                <td scope="row">{{ $categoria['CA_ID'] }}</td>
                <td scope="row">{{ $categoria['CA_nombre'] }}</td>
                    <form action="/categoria/eliminar/{{$categoria['CA_ID']}}" method="POST" >
                  {{ csrf_field() }}
                <td><a href="/categoria/actualizar/{{$categoria['CA_ID']}}" class="btn btn-primary btn-sm">Actualizar</a></td>
                <td><button type="submit" class='btn btn-danger btn-sm'>Eliminar</button></td>
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
  </div>
  @endsection
@extends('layouts.app')
@section('head')
    <title>Inversionesjl-Categoria</title>
@endsection
@section('block')
    <h2><center>Categoria</center></h2>
    <form name="agregar_categoria" class="form-horizontal" enctype="multipart/form-data" autocomplete="off" action="/categoria/actualizar/{{$categoria['CA_ID']}}" method="post">
        {{ csrf_field() }}
        
        <input type="hidden" name="id" id="id" value="{{ $categoria['CA_ID'] }}">
        <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-">
                    <input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" id="name" name="name" value="{{ $categoria['CA_nombre'] }}" >
                    @if ($errors->has('name'))
                        @foreach ($errors->get('name') as $error)
                            <div class="invalid-feedback">{{ $error }}</div>   
                        @endforeach
                    @endif
                </div>
        </div>

        <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <a href="/" class="btn btn-default">Regresar</a>
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </div>
            </div>
    </form>
@endsection
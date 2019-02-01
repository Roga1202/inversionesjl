@extends('layouts.app')
@section('head')
    <title>Inversionesjl-Categoria</title>
@endsection
@section('block')
    <form name="agregar_categoria" class="form-horizontal" enctype="multipart/form-data" autocomplete="off" action="/categoria/actualizar/{{$categoria['CA_ID']}}" method="post">
        {{ csrf_field() }}
    <input type="hidden" name="id" id="id" value="{{ $categoria['CA_ID'] }}">
    <div class="col-md-9" style="padding:10px; margin: 30px;">
    <h2 style="align: auto;">Categoria</h2>
        <!-- no se toca -->
        {{ csrf_field() }}

            <div class="input-group">
                   <div class="col-md-9" text-align="center">
                        <!-- no se toca los if , si modificas dejar el if en la class -->
                        <div class="input-group" >
                                <span class="input-group-addon"><i class="glyphicon glyphicon-retweet"></i></span>
                                <input type="text"  class="form-control @if($errors->has('name')) is-invalid @endif" id="name" name="name" value="{{ $categoria['CA_nombre'] }}" >
                    @if ($errors->has('name'))
                        @foreach ($errors->get('name') as $error)
                            <div class="invalid-feedback">{{ $error }}</div>   
                        @endforeach
                    @endif</div>

                        <br>
                    </div>

                    
                    <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="/home" class="btn btn-danger">Regresar</a>
                        <input type="submit" class="btn btn-primary" value="Guardar">
                    </div>
                </div>

                
            </div>

          
    </form>
    </div>
@endsection
@extends('layouts.app')
@section('head')
    <title>Inversionesjl-Categorias</title>
@endsection
@section('block')
    @isset($errors)
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                Error al guardar la categoria
            </div>
        @endif
    @endisset
    <div class="col-md-9" style="padding:10px; margin: 30px;">
    <h2 style="align: auto;">Categoria</h2>
    <form name="agregar_categoria" class="form-horizontal" enctype="multipart/form-data" autocomplete="off" action="/categoria/crear" method="post" style="align: center, auto;">
        <!-- no se toca -->
        {{ csrf_field() }}

            <div class="input-group">
                   <div class="col-md-9" text-align="center">
                        <!-- no se toca los if , si modificas dejar el if en la class -->
                        <div class="input-group" >
                                <span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>
                                <input type="text"class="form-control @if($errors->has('name')) is-invalid @endif" id="name" name="name"  placeholder="Ingresa el Nombre de la Categoria" required autocomplete="off">
                            </div>  
                       
                       <!-- no se toca -->
                        @if ($errors->has('name'))
                            @foreach ($errors->get('name') as $error)
                                <div class="invalid-feedback">{{ $error }}</div>   
                            @endforeach
                        @endif
                        <!-- hasta aqui -->
                        <br>
                    </div>

                    
                    <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="/categoria/index" class="btn btn-danger">Regresar</a>
                        <input type="submit" class="btn btn-primary" value="Guardar">
                    </div>
                </div>

                
            </div>

          
    </form>
    </div>
@endsection
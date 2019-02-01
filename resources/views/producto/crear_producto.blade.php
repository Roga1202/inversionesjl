@extends('layouts.app')
@section('head')
    <title>Inversionesjl-Producto</title>
@endsection
@section('block')
    @isset($errors)
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                Error al guardar la producto
            </div>
        @endif
    @endisset
    <div class="col-md-9" style="text-align:center,auto; padding:10px; margin: 30px;">
    <h2 style="text-align:center, auto;">Producto</h2>
    <form name="agregar_producto" class="form-horizontal" enctype="multipart/form-data" autocomplete="off" action="/producto/crear" method="post">
            {{ csrf_field() }}

            <div class="form-group">

            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-tint"></i></span>
                                <input  for="name" type="text" class="form-control @if($errors->has('name')) is-invalid @endif" id="name" name="name"  placeholder="Nombre del producto">
                                @if ($errors->has('name'))
                            @foreach ($errors->get('name') as $error)
                                <div class="invalid-feedback">{{ $error }}</div>   
                            @endforeach
                        @endif
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-screenshot"></i></span>
                                <input for="presentacion" type="number" class="form-control @if($errors->has('presentacion')) is-invalid @endif" id="presentacion" name="presentacion"  placeholder="Tamaño o Presentación" required autocomplete="off">
                                @if ($errors->has('presentacion'))
                         @foreach ($errors->get('presentacion') as $error)
                             <div class="invalid-feedback">{{ $error }}</div>   
                         @endforeach
                             @endif
                     </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-equalizer"></i></span>
                                <input for="unidad" type="text"  class="form-control @if($errors->has('unidad')) is-invalid @endif" id="unidad" name="unidad"  placeholder="Unidad" required autocomplete="off">
                                @if ($errors->has('unidad'))
                        @foreach ($errors->get('unidad') as $error)
                            <div class="invalid-feedback">{{ $error }}</div>   
                        @endforeach
                             @endif
                         
                     </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                                <input for="precio" type="number" class="form-control @if($errors->has('precio')) is-invalid @endif" id="precio" name="precio"  placeholder="Precio" required autocomplete="off">
                                @if ($errors->has('precio'))
                        @foreach ($errors->get('precio') as $error)
                         <div class="invalid-feedback">{{ $error }}</div>   
                        @endforeach
                             @endif
                     </div>

                <div class="input-group">  
                <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                <select class="form-control @if($errors->has('categoria')) is-invalid @endif" id="categoria" name="categoria" >
                    @if ($errors->has('categoria'))
                        @foreach ($errors->get('categoria') as $error)
                            <div class="invalid-feedback">{{ $error }}</div>   
                        @endforeach
                    @endif
                    @if (isset($categorias))
							@foreach($categorias as $categoria)
							<option value="{{ $categoria->CA_ID }}">{{ $categoria->CA_ID }}.-{{ $categoria->CA_nombre }}</option>
							@endforeach
						@endif
						@if (empty($categorias))
							<option value="">No hay categorias creadas</option>
						@endif
                                </select>
                            </div> 
            </div>
            <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <a href="/home" class="btn btn-danger">Regresar</a>
                        <input type="submit" class="btn btn-primary" value="Guardar">
                    </div>
                </div>
    </form>
</div>
@endsection
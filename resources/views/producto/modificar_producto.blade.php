@extends('layouts.app')
@section('head')
    <title>Inversionesjl-Producto</title>
@endsection
@section('block')
    <h2><center>Producto</center></h2>
    <form name="modificar_producto" class="form-horizontal" enctype="multipart/form-data" autocomplete="off" action="/producto/actualizar/{{ $producto['PR_ID'] }}" method="post">
        {{ csrf_field() }}

        <input type="hidden" name="id" id="id" value="{{ $producto['PR_ID'] }}">

            <div class="form-group">
                       <label for="name" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-">
                    <input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" id="name" name="name" value="{{ $producto['PR_nombre'] }}">
                        @if ($errors->has('name'))
                            @foreach ($errors->get('name') as $error)
                                <div class="invalid-feedback">{{ $error }}</div>   
                            @endforeach
                        @endif
                    </div>
            </div>

            <div class="form-group">
                <label for="presentacion" class="col-sm-2 control-label">Presentacion</label>
             <div class="col-sm-">
                 <input type="number" class="form-control @if($errors->has('presentacion')) is-invalid @endif" id="presentacion" name="presentacion" value="{{ $producto['PR_presentacion'] }}">
                 @if ($errors->has('presentacion'))
                     @foreach ($errors->get('presentacion') as $error)
                         <div class="invalid-feedback">{{ $error }}</div>   
                     @endforeach
                 @endif
             </div>
            </div>

            <div class="form-group">
                <label for="unidad" class="col-sm-2 control-label">Unidad</label>
             <div class="col-sm-">
                 <input type="text" class="form-control @if($errors->has('unidad')) is-invalid @endif" id="unidad" name="unidad" value="{{ $producto['PR_unidad'] }}">
                 @if ($errors->has('unidad'))
                     @foreach ($errors->get('unidad') as $error)
                         <div class="invalid-feedback">{{ $error }}</div>   
                     @endforeach
                 @endif
             </div>
            </div>

            <div class="form-group">
                <label for="precio" class="col-sm-2 control-label">Precio</label>
             <div class="col-sm-">
                 <input type="number" class="form-control @if($errors->has('precio')) is-invalid @endif" id="precio" name="precio" value="{{ $producto['PR_precio'] }}">
                 @if ($errors->has('precio'))
                     @foreach ($errors->get('precio') as $error)
                         <div class="invalid-feedback">{{ $error }}</div>   
                     @endforeach
                 @endif
             </div>
            </div>

            <div class="form-group">
                <label for="categoria" class="col-sm-2 control-label">Categoria</label>
				<div class="col-sm-10">
					<select class="selectpicker @if($errors->has('categoria')) is-invalid @endif" id="categoria" name="categoria">
                        @if ($errors->has('categoria'))
                            @foreach ($errors->get('categoria') as $error)
                                <div class="invalid-feedback">{{ $error }}</div>   
                            @endforeach
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
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="/" class="btn btn-default">Regresar</a>
                        <input type="submit" class="btn btn-primary" value="Guardar">
                    </div>
                </div>
    </form>
@endsection

@section('script')
    <script>
        $(function(){
            var value_categories= '<?php echo $producto['CA_ID'];?>'
            $("#categoria").val(value_categories)
        });
    </script>
@endsection
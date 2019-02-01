@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ asset('assets/css/tabla.css') }}">
@endsection

@section('block')
    @isset($errors)
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                Error al guardar la categoria
            </div>
        @endif
    @endisset
    @isset($result)
        <div class="alert alert-success" role="alert">
            Categoria Guardada
        </div>
    @endisset
         

    <div class="container-fluid text-center" class="form-group">    
        <div class="row content" style="text-aling:center;">
            <div class="col-md-6 text-left"> 
                <div class="container" class="contenido" id="contenido" >
                    <div class="col-md-6" >
                        <form name="agregar_cliente" class="form-horizontal" enctype="multipart/form-data" autocomplete="off" action="/cliente/crear" method="post">
                            {{ csrf_field() }}
                            <h2 style="text-align: center;color: black;">Agregar Cliente</h2>
                            <h3 style="color: black">Datos del nuevo cliente</h3>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="primer_nombre" name="primer_nombre" type="text" class="form-control @if($errors->has('primer_nombre')) is-invalid @endif" placeholder="Primer nombre" required autocomplete="off">
                                @if ($errors->has('primer_nombre'))
                                    @foreach ($errors->get('primer_nombre') as $error)
                                        <div class="invalid-feedback">{{ $error }}</div>   
                                    @endforeach
                                @endif
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="otro_nombre" name="otro_nombre" type="text" class="form-control @if($errors->has('otro_nombre')) is-invalid @endif" placeholder="Otros nombres" required autocomplete="off">
                                @if ($errors->has('otro_nombre'))
                                    @foreach ($errors->get('otro_nombre') as $error)
                                        <div class="invalid-feedback">{{ $error }}</div>   
                                    @endforeach
                                @endif
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="primer_apellido" name="primer_apellido" type="text" class="form-control @if($errors->has('primer_apellido')) is-invalid @endif" placeholder="Primer apellido" required autocomplete="off">
                                @if ($errors->has('primer_apellido'))
                                    @foreach ($errors->get('primer_apellido') as $error)
                                        <div class="invalid-feedback">{{ $error }}</div>   
                                    @endforeach
                                @endif
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="otro_apellido" name="otro_apellido" type="text" class="form-control @if($errors->has('otro_apellido')) is-invalid @endif" placeholder="Segundo apellido" required autocomplete="off">
                                @if ($errors->has('otro_apellido'))
                                    @foreach ($errors->get('otro_apellido') as $error)
                                        <div class="invalid-feedback">{{ $error }}</div>   
                                    @endforeach
                                @endif
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                                <input id="ci" name="ci" type="number" class="form-control @if($errors->has('ci')) is-invalid @endif" placeholder="Cedula de identidad o número de partida" required autocomplete="off">
                                @if ($errors->has('ci'))
                                    @foreach ($errors->get('ci') as $error)
                                        <div class="invalid-feedback">{{ $error }}</div>   
                                    @endforeach
                                @endif
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                <input id="telefono" name="telefono" type="number" class="form-control @if($errors->has('telefono')) is-invalid @endif" placeholder="Número de telefono" required autocomplete="off">
                                @if ($errors->has('telefono'))
                                    @foreach ($errors->get('telefono') as $error)
                                        <div class="invalid-feedback">{{ $error }}</div>   
                                    @endforeach
                                @endif
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                                <input id="direccion" name="direccion" type="text" class="form-control @if($errors->has('direccion')) is-invalid @endif" placeholder="Direccion de envio" required autocomplete="off">
                                @if ($errors->has('direccion'))
                                    @foreach ($errors->get('direccion') as $error)
                                        <div class="invalid-feedback">{{ $error }}</div>   
                                    @endforeach
                                @endif
                            </div>


                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input id="correo" name="correo" type="email" class="form-control @if($errors->has('correo')) is-invalid @endif" placeholder="Correo Electronico" required autocomplete="off">
                                @if ($errors->has('correo'))
                                    @foreach ($errors->get('correo') as $error)
                                        <div class="invalid-feedback">{{ $error }}</div>   
                                    @endforeach
                                @endif
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-send"></i></span>
                                <input id="empresa_envio" name="empresa_envio" type="text" class="form-control @if($errors->has('empresa_envio')) is-invalid @endif" placeholder="Empresa de Envio" required autocomplete="off">
                                @if ($errors->has('empresa_envio'))
                                    @foreach ($errors->get('empresa_envio') as $error)
                                        <div class="invalid-feedback">{{ $error }}</div>   
                                    @endforeach
                                @endif
                            </div>

                           

                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker">
                                </i></span><select class="form-control @if($errors->has('estado')) is-invalid @endif" name="estado" id="estado">
                                @if ($errors->has('estado'))
                                    @foreach ($errors->get('estado') as $error)
                                        <div class="invalid-feedback">{{ $error }}</div>   
                                    @endforeach
                                @endif
                                <option value="">Selecciona tu estado</option>
                                        @if (isset($estados))
                                            @foreach ($estados as $id => $nombre)
                                                <option value="{{$id}}">{{$nombre}}</option>
                                            @endforeach
                                        @endif
                                        @if (empty($estados))
                                            <option value="">No hay estados creados o no se cargaron</option>
                                        @endif
                                    </select>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                                <select class="form-control @if($errors->has('ciudad')) is-invalid @endif" name="ciudad" id="ciudad" for="ciudad">
                                    @if ($errors->has('ciudad'))
                                        @foreach ($errors->get('ciudad') as $error)
                                            <div class="invalid-feedback">{{ $error }}</div>   
                                        @endforeach
                                    @endif
                                    <option value="">Selecciona tu ciudad</option>
                                    @if (isset($estados))
                                        @foreach ($estados as $id => $nombre)
                                            <option value="{{$id}}">{{$nombre}}</option>
                                        @endforeach
                                    @endif
                                    @if (empty($estados))
                                        <option value="">No hay estados creados o no se cargaron</option>
                                    @endif
                                </select>
                            </div>


                            <div id="completo" style="text-align:center;">
                                <br>
                                <button type="submit" class="btn btn-primary">Registrar</button>
                                <a href="/home" style="color:white;"><button type="button" class="btn btn-danger">salir sin guardar</button></a>
                               <p><br></p> 
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

                         

@endsection

@section('script')
 <script>
     $(function(){
        $('select[name="estado"]').on('change', function(){
            var ES_ID = $(this).val();
            if(ES_ID){
                $.ajax({
                    url: '/ciudades/'+ES_ID,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data){

                        $('select[name="ciudad"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="ciudad"]')
                            .append('<option value="'+value+'">'+key + '</option>')
                        });
                    }
                })
            } else{
                $('select[name="ciudad"]').empty();
            }
        });
    });
 </script>
 @endsection
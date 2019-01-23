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
    <div class="container-fluid text-center">    
        <div class="row content">
            <div class="col-sm-8 text-left"> 
                <div class="container" class="contenido" id="contenido">
                    <div class="col-md-12">
                        <form name="agregar_cliente" class="form-horizontal" enctype="multipart/form-data" autocomplete="off" action="/cliente/crear" method="post">
                            {{ csrf_field() }}
                            <h2 style="text-align: center;color: black;">Agregar Cliente</h2>
                            <h3 style="color: black">Datos del nuevo cliente</h3>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="primer_nombre" name="primer_nombre" type="text" class="form-control" placeholder="Primer nombre" required autocomplete="off">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="otro_nombre" name="otro_nombre" type="text" class="form-control" placeholder="Otros nombres" required autocomplete="off">
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="primer_apellido" name="primer_apellido" type="text" class="form-control" placeholder="Primer apellido" required autocomplete="off">
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="otro_apellido" name="otro_apellido" type="text" class="form-control" placeholder="Segundo apellido" required autocomplete="off">
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
                                <input id="ci" name="ci" type="text" class="form-control" name="a_cedula" placeholder="Cedula de identidad o número de partida" required autocomplete="off">
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                <input id="telefono" name="telefono" type="text" class="form-control" placeholder="Número de telefono" required autocomplete="off">
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                                <input id="direccion" name="direccion" type="text" class="form-control" placeholder="Direccion de envio" required autocomplete="off">
                            </div>


                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input id="correo" name="correo" type="email" class="form-control" placeholder="Correo Electronico" required autocomplete="off">
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-send"></i></span>
                                <input id="empresa_envio" name="empresa_envio" type="text" class="form-control" placeholder="Empresa de Envio" required autocomplete="off">
                            </div>


                            <div id="form-group">
                                <label for="estado">Selecciona tu estado</label>
                                <select name="estado" id="estado">
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


                            <div id="form-group">
                            <label for="estado">Selecciona tu ciudad</label>
                            <select name="ciudad" id="ciudad">
                            <option value="">Selecciona tu ciudad</option>
                            </select>
                            </div>
                                
                            <div id="completo">
                                <br>
                                <button type="submit" class="btn btn-primary">Registrar</button>
                                <a href="/home">salir sin guardar</a>
                            </div>
                        </form>
                    </div>
                <br>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
 <script>
     $(document).ready(function(){
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
@extends('layouts.app')

@section('block')
<select id="opciones">
        <option value ="1">Casa</option>
        <option value ="2">Auto</option>
        <option value ="3">Moto</option>
        <option value ="0">Seleccione un elemento</option>
        <option value ="4">Castillo</option>
        <option value ="5">Mall</option>
        <option value ="6">Avión</option>
        </select>
        <script
          src="https://code.jquery.com/jquery-3.2.0.min.js"
          integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I="
          crossorigin="anonymous">
        </script>
        <script>
        //Esta es la función que una vez se cargue el documento será gatillada.
        $(function(){
            var value_categories= 2

            $("#opciones").val(value_categories)
        });
    </script>
@endsection

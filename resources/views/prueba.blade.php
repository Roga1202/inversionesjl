@extends('layouts.app')

@section('block')


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
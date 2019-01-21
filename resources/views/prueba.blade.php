@extends('layouts.app')

@section('block')

    <div id="form-group">
        <select name="estado" id="estado" class="form-control input-lg dynamic" data-dependent="ES_ID">
            <option value="">Selecciona el estado</option>
            @foreach ($estados as $estado)
                <option value="{{$estado->ES_ID}}">{{$estado->ES_nombre}}</option>
            @endforeach
        </select>
    </div>

    <div id="form-group">
        <select name="ciudad" id="ciudad" class="form-control input-lg dynamic" data-dependent="CI_ID">
            <option value="">Selecciona el estado</option>
            {{-- @foreach ($ciudades as $ciudad) --}}
                {{-- <option value="{{$ciudad['CI_ID']}}">{{$estado['CI_nombre']}}</option> --}}
            {{-- @endforeach --}}
        </select>
    </div>

    {{ csrf_field() }}

@endsection

@section('script')

    <script>

        $(document).ready(function(){

        $('.dynamic').change(function(){
        if($(this).val() != '')
        {
        var select = $(this).attr("id");
        var value = $(this).val();
        var dependent = $(this).data('dependent');
        var _token = $('input[name="_token"]').val();
        $.ajax({
        url:"{{ route('prueba.fetch') }}",
        method:"POST",
        data:{select:select, value:value, _token:_token, dependent:dependent},
        success:function(result)
        {
            $('#'+dependent).html(result);
        }

        })
        }
        });

        $('#country').change(function(){
        $('#state').val('');
        $('#city').val('');
        });

        $('#state').change(function(){
        $('#city').val('');
        });


        });
    </script>

@endsection
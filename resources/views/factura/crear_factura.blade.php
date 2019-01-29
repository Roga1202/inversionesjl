@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('bower_components/EasyAutocomplete/dist/easy-autocomplete.min.css')}}">
    <meta name="csrf-token" content="<?php echo csrf_token() ?>"/>
@endsection

@section('block')
 <factura></factura>
@endsection

@section('script')
    <script src="{{ asset('components/factura.tag') }}" type= "riot/tag"></script>
    <script>
        $(function(){
            riot.mount('factura');
        });
    </script>
    <script src="{{asset('bower_components/EasyAutocomplete/dist/jquery.easy-autocomplete.min.js')}}"></script>
    <script src="{{ asset('bower_components/riot/riot.min.js') }}"></script>
    <script src="{{ asset('bower_components/riot/riot+compiler.min.js') }}"></script>
    <script src="{{ asset('assets/js/ini.js') }}"></script>
    <script>
        function baseUrl(url) {
            return '{{url('')}}/' + url;
        }
    </script>
@endsection
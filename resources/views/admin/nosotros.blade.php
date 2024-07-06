@extends('adminlte::page')

@section('title', 'Nosotros')

@section('content_header')
    <h1>PaginaWeb: Nosotros</h1>
@stop

@section('content')
{{--     @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    --}}

   tal cosa nosotros
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Nosotros !");
    </script>
@stop

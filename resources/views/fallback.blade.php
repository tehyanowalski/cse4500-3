@extends('adminlte::page')

@section('title', 'Error')

@section('content_header')
    <h1>404</h1>
@stop

@section('content')
    <p>Oops. This page is unavailable.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Error'); </script>
@stop

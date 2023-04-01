@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{ $menu->name }}</h1>
@stop

@section('content')
    <p>{{ $menu->name }}</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop
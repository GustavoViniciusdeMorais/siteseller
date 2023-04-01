@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Menu</h1>
@stop

@section('content')
    <p>Gestão de Menus</p>

    @foreach ($menus as $menu)
        <div class="card">
            <div class="card-header">
                <a href="{{route('show-menu', ['id' => $menu->id])}}">
                    {{$menu->name}}
                </a>
            </div>
            <div class="card-body">
                
            </div>
        </div>
    @endforeach
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop
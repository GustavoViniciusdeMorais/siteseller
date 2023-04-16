@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Gestão de Menus</h1>
@stop

@section('content')
    
    <a class="btn btn-primary btn-block" href="{{route('create-menu')}}">
        Cadastrar Menu
    </a>
    <br>

    @foreach ($menus as $menu)
        <div class="card">
            <div class="card-header">
                <a href="{{route('show-menu', ['id' => $menu->id])}}">
                    {{$menu->name}}
                </a>
                <select name="status" id="">
                    @foreach ($statusOptions as $option)
                        <option value=""
                            {{ $menu->status ==  $option ? 'selected' : ''}}
                        >
                            {{$option}}
                        </option>
                    @endforeach
                </select>
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
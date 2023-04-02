@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{ $menu->name }}</h1>
@stop

@section('content')

    @foreach ($menu->items as $item)
        <input type="text" name="{{ $item->id }}" value="{{ $item->name }}"
            class="form-control">
    @endforeach

    </ul>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop
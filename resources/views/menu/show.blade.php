@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{ $menu->name }}</h1>
@stop

@section('content')
    <ul>
    @foreach ($menu->items as $item)
        <li>
            <a href="{{ route('show-post', ['url' => $item->post->url]) }}">
                {{ $item->post->title }}
            </a>
        </li>
    @endforeach

    </ul>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop
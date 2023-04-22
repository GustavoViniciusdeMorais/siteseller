@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{ $menu->name }}</h1>
@stop

@section('content')

    <input type="text" id="menuId" value="{{$menu->id}}" hidden>

    <select id="posts" class="form-control">
        <option value="">Vincule uma página</option>
        @foreach ($posts as $post)
            <option value="{{$post->id}}">{{$post->title}}</option>        
        @endforeach
    </select>

    <ul class="posts-list">
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
    @include('includes.selectPostInLine')
    @include('includes.removePostFromMenu')
@stop
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Template</h1>
@stop

@section('content')
    @foreach ($templates as $template)
        <div class="card">
            <div class="card-header">
                <a href="{{route('edit-template', ['id' => $template->id])}}">
                    {{$template->name}}
                </a>
            </div>
            <div class="card-body">
                Site title: {{ $template->title }}
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
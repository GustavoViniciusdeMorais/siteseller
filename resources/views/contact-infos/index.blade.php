@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Informações de Contato</h1>
@stop

@section('content')

    @include('includes.messages')

    <form method="POST" action="{{ route('contact-update') }}">
        @csrf
        @method('PUT')

        @foreach ($contactInfos as $info)
            <label for=""> {{$info->name}} </label>
            <input type="text" name="{{$info->type}}" value="{{$info->value}}" class="form-control">
            <br>
        @endforeach

        <button class="btn btn-primary btn-block">
            Salvar
        </button>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')

    @include('includes.messages')

    <br>
    <div class="card">
        <div class="card-header">
            <h5>Cadastrar Menu</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('store-menu') }}">
                @csrf

                <input type="text" name="name" class="form-control" placeholder="Nome">
                <br>

                <select id="posts" class="form-control">
                    <option value="">Vincule uma página</option>
                    @foreach ($posts as $post)
                        <option value="{{$post->id}}">{{$post->title}}</option>        
                    @endforeach
                </select>
                
                <br>
                <div id="pages"></div>

                <br>
                <button class="btn btn-primary btn-block">
                    Salvar
                </button>
            </form>
        </div>
        <div class="card-footer"></div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    @include('includes.selectPosts')
@stop
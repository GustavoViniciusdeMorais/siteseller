@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
    <br>
    <div class="card">
        <div class="card-header">
            <h5>Cadastrar Menu</h5>
        </div>
        <div class="card-body">
            <form action="">
                <input type="text" name="name" class="form-control" placeholder="Nome">
                <br>

                <select id="posts" name="post_id" class="form-control">
                    <option value="">Vincule uma página</option>
                    @foreach ($posts as $post)
                        <option value="{{$post->id}}">{{$post->title}}</option>        
                    @endforeach
                </select>

                <div class="menu-items"></div>

            </form>
        </div>
        <div class="card-footer"></div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop
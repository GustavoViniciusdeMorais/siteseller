@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crie uma página</h1>
@stop

@section('content')
    <form method="POST" action="{{ route('store-post') }}">
        @csrf
        @method('POST')

        <div class="card">
            
            <div class="card-header">
                <input type="text" name="title" value="" placeholder="Nome da página" class="form-control">
            </div>

            <div class="card-body">
                <textarea name="content" class="form-control" rows="10" cols="3" placeholder="Conteúdo">
                
                </textarea>
            </div>

            <div class="card-footer">
                <button class="btn btn-primary btn-block">
                    Salvar
                </button>
            </div>
        </div>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop
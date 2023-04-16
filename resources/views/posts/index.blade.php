@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Páginas</h1>
@stop

@section('content')
    <div class="container py-1 h-100">
        
        <a href="{{ route('create-post') }}" class="btn btn-primary btn-block">
            Criar Página
        </a>

        <table class="table table-responsive-sm table-striped">
            <caption>Páginas</caption>
            <thead class="thead-dark">
                <tr>
                    <th>Título</th>
                    <th>Link</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($posts))
                    @foreach ($posts as $post)
                        <tr>
                            <td>
                                <a href="{{ route('show-post', ['url' => $post->url]) }}">
                                    {{ $post->title }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('show-customer-post', ['name' => $post->url]) }}">
                                    {{ $post->url }}
                                </a>
                            </td>
                            <td>
                                {{ $post->created_at }}
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop
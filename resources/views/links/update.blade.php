@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Links</h1>
@stop

@section('content')

    @include('includes.messages')

    <div class="container py-1 h-100">
        <div-card>
            <div class="card-header"></div>
            <div class="card-body">
                <form method="POST" action="{{ route('update-links') }}">
                    @csrf
                    @method('PUT')

                    @foreach ($links as $link)
                        
                        <label for="">
                            {{ ucfirst($link->type) }}
                        </label>
                        <input type="text" name="{{$link->type}}" value="{{$link->value}}" class="form-control"/>


                    @endforeach

                    <br>
                    <button class="btn btn-primary btn-block">
                        Save
                    </button>

                </form>
            </div>
        </div-card>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop
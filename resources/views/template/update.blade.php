@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Update Template Info</h1>
@stop

@section('content')

    @include('includes.messages')

    <div class="container py-1 h-100">
        <div-card>
            <div class="card-header"></div>
            <div class="card-body">
                <form method="POST" action="{{ route('update-template', ['id' => $template->id]) }}">
                    @csrf
                    @method('PUT')

                    <label for="">
                        Name
                    </label>
                    <input type="text" name="name" value="{{$template->name}}" class="form-control"/>

                    <label for="">
                        Title
                    </label>
                    <input type="text" name="title" value="{{$template->title}}" class="form-control"/>

                    <input type="hidden" name="path" value="{{$template->path}}" class="form-control"/>

                    <button>
                        Save
                    </button>
                </form>
            </div>
            <div class="card-footer"></div>
        </div-card>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop
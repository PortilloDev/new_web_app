@extends('adminlte::page')

@section('title', 'Admin Panel')

@section('content_header')
    <h1>Crear nuevo skill</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.skills.store']) !!}
            
            @include('admin.skill.partials.form')
            
            {!! Form::submit('Crear skill', ['class' => 'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop

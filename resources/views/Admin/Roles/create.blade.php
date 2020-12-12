@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{env('APP_NAME')}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Crea Tu Nuevo Rol</h1>
        </div>
        <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store']) !!}
            @include('admin.Roles.partials._form')
                {!! Form::submit('Crear Rol', ['class' => 'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
        </div>
        <div class="card-footer">
            <p class="text-center">Ahora tu rol sera Creado</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('/css/admin_custom.css')}}">
@stop

@section('js')
    <script> console.log('create rol'); </script>
@stop

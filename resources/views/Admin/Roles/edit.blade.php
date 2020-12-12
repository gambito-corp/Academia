@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{env('APP_NAME')}}</h1>
@stop

@section('content')
    @include('admin.includes._alert')
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Edita Tu Rol {{$role->name}}</h1>
        </div>
        <div class="card-body">

            {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}
            @include('admin.Roles.partials._form')
            {!! Form::submit('Editar Rol', ['class' => 'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
        </div>
        <div class="card-footer">
            <p class="text-center">Ahora tu rol sera Actualizado</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('/css/admin_custom.css')}}">
@stop

@section('js')
    <script> console.log('create rol'); </script>
@stop

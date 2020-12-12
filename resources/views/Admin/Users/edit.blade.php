@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{env('APP_NAME')}}</h1>
@stop

@section('content')
    @include('admin.includes._alert')
    <div class="card">
        <div class="card-header">
            <h5 class="text-center">Edita el Usuario {{$usuario->name}}</h5>
        </div>
        <div class="card-body">
            <h5>Lista de Roles</h5>
            {!! Form::model($usuario, ['route' => ['admin.users.update', $usuario], 'method' =>'put']) !!}
            @foreach($roles as $role)
                <div>
                    <label>
                        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                        {{$role->name}}
                    </label>
                </div>
            @endforeach
            {!! Form::submit('Asignar Rol', ['class' => 'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
        </div>
        <div class="card-footer">
            <p class="text-center">Ahora tu Usuario sera Editado</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('/css/admin_custom.css')}}">
@stop

@section('js')
    <script> console.log('Edit User'); </script>
@stop

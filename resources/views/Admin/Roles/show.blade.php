@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{env('APP_NAME')}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">
                Vista central del rol {{$role->name}}
            </h1>
        </div>
        <div class="card-body">
            <h2>Tiene Los Siguientes Permisos</h2>
            <hr>
            @foreach($role->getAllPermissions() as $permiso)
            <p>Nombre: {{$permiso->name}}</p>
            @endforeach
        </div>
        <div class="card-footer media">
            @isset($previo)
                <a href="{{route('admin.roles.show', $previo)}}" class="text-left mr-5"><i class="fas fa-fw fa-arrow-left text-dark mr-2"></i> Rol Previo {{$previo->name}}</a>
            @endisset
            <div class="media-body">
               <a href="{{route('admin.roles.edit', $role)}}" class="text-center btn btn-outline-info btn-block px-5">Editemos Este Rol</a>
            </div>
            @isset($next)
                <a href="{{route('admin.roles.show', $next)}}" class="text-right ml-5">Rol Proximo {{$next->name}}<i class="fas fa-fw fa-arrow-right text-dark ml-2"></i></a>
            @endisset
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('show rol'); </script>
@stop

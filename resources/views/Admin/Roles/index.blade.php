@extends('adminlte::page')

@section('title', env('APP_NAME'))

@section('content_header')
    <h1>Lista de Roles</h1>
@stop

@section('content')
    @include('admin.includes._alert')
    <div class="card">
        @if(count($roles) > 0)
            <div class="card-header">
                <a href="{{route('admin.roles.create')}}" class="btn btn-success"> Crear un Rol Mas </a>
            </div>
        @endif
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($roles as $rol)
                    <tr>
                        <td>{{$rol->id}}</td>
                        <td><a href="{{route('admin.roles.show', $rol)}}">{{$rol->name}}</a></td>
                        <td class="d-inline-block">
{{--                            @dump($rol)--}}
                            <a class="btn btn-outline-info btn-sm d-inline-block mr-2" href="{{route('admin.roles.edit', $rol)}}"><i class="fas fa-fw fa-edit"></i></a>
                            <form action="{{route('admin.roles.destroy', $rol->id)}}" method="post" class="d-inline-block">
                                @csrf @method('delete')
                                <button type="submit" class="btn btn-outline-danger btn-sm d-inline-block" value="">
                                    <i class="fas fa-fw fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center"><a href="{{route('admin.roles.create')}}" class="btn btn-success">NO HAY ROLES CREADOS, PORFAVOR CREA ROLES</a></td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop

@push('css')
    <link rel="stylesheet" href="{{asset('css/admin_custom.css')}}">
@endpush

@push('js')
    <script> console.log('index rol'); </script>
@endpush


@extends('adminlte::page')

@section('title', env('APP_NAME'))

@section('content_header')
    <h1>Lista de Usuarios</h1>
@stop

@section('content')
    @include('admin.includes._alert')
    <livewire:admin.users-index/>
@stop

@push('css')
    <link rel="stylesheet" href="{{asset('css/admin_custom.css')}}">
@endpush

@push('js')
    <script> console.log('Index Users'); </script>
@endpush


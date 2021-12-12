@extends('adminlte::page')

@section('title', 'Blog J2Fotográfos')

@section('content_header')
 <div class="card">
        <div class="card-body">
           <h1>LISTA DE USUARIOS</h1>
        </div>
    </div>
   
@stop

@section('content')
    @livewire('admin.users-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
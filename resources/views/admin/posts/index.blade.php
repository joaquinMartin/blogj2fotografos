@extends('adminlte::page')

@section('title', 'Blog J2Fotográfos')

@section('content_header')
<div class="card">
        <div class="card-body">
             {{-- @can('admin.posts.create') --}}
            <a class="btn btn-info btn-sm float-right mt-1" href="{{ route('admin.posts.create') }}">Nuevo Post</a>
            
   {{--  @endcan  --}}
            <h1>LISTADO DE POSTS</h1>
        </div>
    </div>
    

    
  
@stop

@section('content')

    @if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
    @endif

    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
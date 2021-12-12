@extends('adminlte::page')

@section('title', 'Blog J2Fotográfos')

@section('content_header')
<div class="card">
    <div class="card-body">
    
        <h1>CREAR ROL</h1>
    </div>
</div>
  
@stop

@section('content')
@if(session('info'))
    <div class="alert alert-success">
        {{ session('info') }}
    </div>
    @endif
  <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store']) !!}
           
            @include('admin.roles.parte.formulario')
          
                 {!! Form::submit('Crear Rol', ['class' => 'btn btn-primary']) !!}
        {!! Form::close()!!}
        </div>
  </div>
@stop


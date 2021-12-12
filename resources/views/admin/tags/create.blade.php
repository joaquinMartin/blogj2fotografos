@extends('adminlte::page')

@section('title', 'Blog J2Fotográfos')

@section('content_header')
<div class="card">
    <div class="card-body">
    
        <h1>CREAR ETIQUETA</h1>
    </div>
</div>
   
@stop

@section('content')
    <div class="card">
        <div class ="card-body">
    
            {!! Form::open(['route' => 'admin.tags.store']) !!}
              
            @include('admin.tags.parte.formulario')

                {!! Form::submit('Crear etiqueta', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}

        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset ('vendor\jQuery-Plugin-stringToSlug-1.3\jquery.stringToSlug.min.js') }}" ></script>
    <script>
        $(document).ready( function() {
        $("#name").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space: '-'
        });
            });
    </script>
@endsection

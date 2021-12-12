@extends('adminlte::page')

@section('title', 'Blog J2Fotográfos')

@section('content_header')
<div class="card">
        <div class="card-body">
            <h1>CREAR NUEVO POST</h1>
        </div>
    </div>
@stop

@section('content')
    @if (session('info'))
    <div class="alert alert-success">
    {{session('info')}}
    </div> 
@endif
   <div class="card">
       <div class="card-body">
           {!! Form::open(['route' => 'admin.posts.store', 'autocomplete'=>'off', 'files'=> true]) !!}
            {{-- para que el post se le añada al usuario que lo crea --}}
           {!! Form::hidden('user_id', auth()->user()->id) !!}
          @include('admin.posts.parte.formulario')
        
            {!! Form::submit('Crear post', ['class' => 'btn btn-primary']) !!}

            {!!  Form::close() !!}
       </div>
   </div>
@stop

@section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
   
   <style>
       .image-wrapper{
           position: relative;
           padding-bottom: 56.25%;
       }

       .image-wrapper img{
           position: absolute;
           object-fit:cover;
           width: 100%;
           height: 100%;
       }

    </style>

@stop

@section('js')
    <script src="{{ asset ('vendor\jQuery-Plugin-stringToSlug-1.3\jquery.stringToSlug.min.js') }}" ></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script> 
    
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
            });
        });
  
    ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );

    ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );


        //Cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("imagenes").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }

</script>

@endsection


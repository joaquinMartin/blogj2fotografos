@extends('adminlte::page')

@section('title', 'Blog J2Fotográfos')

@section('content_header')
 <div class="card">
        <div class="card-body">
             @can('admin.tags.create')
            <a class="btn btn-info btn-sm float-right mt-1" href="{{ route('admin.tags.create') }}">Nueva Etiqueta</a>
            
    @endcan 
            <h1>LISTADO DE ETIQUETAS</h1>
        </div>
    </div>

@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div> 
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tags as $tag )
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name }}</td>
                            <td width="10px">
                                @can('admin.tags.edit')
                                <a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit', $tag) }}"> Editar</a>
                                @endcan
                            </td>
                            <td width="10px">
                               
                                @can('admin.tags.destroy')
                                    <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        
                                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                    </form>


                               @endcan 
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>

            </table>
        </div>
    
    </div>


@stop
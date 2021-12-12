@extends('adminlte::page')

@section('title', 'Blog J2Fotográfos')

@section('content_header')
   
     <div class="card">
        <div class="card-body">
           
            <a class="float-right mt-1 btn btn-info btn-sm" href="{{route('admin.roles.create')}}">Nuevo rol</a>
            <h1>LISTA DE ROLES</h1>
        </div>
    </div>
@stop
   
@section('content')
 
    <div class="card">
        <div class="card-body">
        
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                   
                    @foreach ($roles as $role)
                        <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        <td width="10px">
                            
                            <a href="{{ route('admin.roles.edit', $role)}}" class="btn btn-sm btn-primary">Editar</a>
                        </td>
                        <td width="10px">
                            
                            <form action="{{ route('admin.roles.destroy', $role)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
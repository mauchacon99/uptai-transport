


@extends('admin.layout')

@component('shared._breadcrumb')
     @slot('title', 'Usuarios')
     @slot('description', 'home')
     @slot('state', 'table')@endcomponent 
      
@section('content')
    <div class="card">
        <div class="card-header card-default">
            <div class="float-right mt-10">
                @role('admin')
                <a href="" class="btn btn-secondary box-shadow btn-icon"><i class="fas fa-file-download"></i> Imprimir listado en PDF</a>
                <a href="{{ route('users.create')}}" class="btn btn-primary box-shadow btn-icon"><i class="fa fa-plus"></i> Nuevo Usuario</a>
                @endrole
            </div>
            Usuarios
            <p class="text-muted"> Listado de usuarios con acceso al panel administrativo del  <br>  Portal Web Concequim de Venezuela </br>
        </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th> Rol </th>
                        @role('admin')
                        <th>auditar</th>
                        <th>acciones</th>  
                        <th>status</th>  
                        @endrole               
                    </tr>
                    </thead>
                <tbody>
					 @each('users._row', $users, 'user') 
                </tbody>
             </table>
            </div>
    </div>
@endsection
 
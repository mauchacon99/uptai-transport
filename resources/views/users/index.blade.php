

@extends('admin.layout')

@component('shared._breadcrumb')
     @slot('title', 'Usuarios')
     @slot('description', 'home')
     @slot('state', 'table')@endcomponent 
      
@section('content')
    <div class="card">
        <div class="card-header card-default">
            <div class="float-right mt-10">
                <a href="{{ route('users.create')}}" class="btn btn-primary btn-rounded box-shadow btn-icon"><i class="fa fa-plus"></i> Nuevo Usuario</a>
            </div>
            Usuarios
            <p class="text-muted"> Listado de usuarios con acceso al sistema de transporte del  UPTAI</p>
        </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th> Rol </th>
                        <th>auditar</th>
                        <th>acciones</th>  
                        <th>status</th>                  
                    </tr>
                    </thead>
                <tbody>
					 @each('users._row', $users, 'user') 
                </tbody>
             </table>
            </div>
    </div>
@endsection
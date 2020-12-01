 

@extends('admin.layout')
@component('shared._breadcrumb')
     @slot('title', 'Actividades')
     @slot('description', 'home')
     @slot('state', 'table')
@endcomponent 
      
@section('content')
    <div class="card">
        <div class="card-header card-default">
            <div class="float-right mt-10">
            </div>
            Acitividades Realizadas Usuario {{$user->name}} {{$user->surname }} 
            <p class="text-muted"> </p>
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
				@each('bitacora._row', $activity, 'activity') 
                </tbody>
             </table>
            </div>
    </div>
@endsection
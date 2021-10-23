@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Actividades')
@endcomponent 
      
@section('content')
    <div class="card">
        <div class="card-header card-default">
            Actividades de Usuarios
            <p class="text-muted"> Listado de actividades ejecutada por usuarios en el Sistema de Transporte UPTAI</p>
    <div>
       
    </div>
        </div>
            <div class="card-body">
               <table class="table">
                <thead>
                <tr>
                    <th>Tipo Accion</th>
                    <th>Usuario</th>
                    <th>Modulo </th>
                    <th>Description</th>
                    <th>Fecha y hora</th>
                    <th>Direccion IP</th>
                 </tr>
                </thead>
                <tbody>
                    @each('bitacora._row', $activities, 'activity')
                </tbody>
             </table>
            </div>
    </div>
 @endsection

 

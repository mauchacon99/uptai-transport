
@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Conductores')
@endcomponent 
      
@section('content')
    <div class="card">
        <div class="card-header card-default">
            <div class="float-right mt-10">
                <a href="javascript: void(0);" class="btn btn-primary btn-rounded box-shadow btn-icon"><i class="fa fa-plus"></i> Nuevo Conductor</a>
            </div>
            Conductores
            <p class="text-muted"> Listado de conductores del departamento de transporte</p>
        </div>
            <div class="card-body">
                <table class="table">
                <thead>
                <tr>
                    <th>C.I</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Sexo</th>
                    <th>Edad</th>
                    <th>Telefono</th>
                </tr>
                </thead>
                <tbody>
                    @each('drivers._row', $drivers, 'driver')
                </tbody>
            </table>
            </div>
    </div>
@endsection
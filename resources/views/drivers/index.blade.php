
@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Conductores')
@endcomponent 
      
@section('content')
    <div class="card">
        <div class="card-header card-default">
            <div class="float-right mt-10">
                @can('drivers.create' )
                    <a href=""  target="_blank"  class="btn btn-secondary box-shadow btn-icon"><i class="fas fa-file-download"></i> Imprimir Listado PDF</a>
                    <a href="{{ route('drivers.create') }}" class="btn btn-primary box-shadow btn-icon"><i class="fa fa-plus"></i> Nuevo Conductor</a>
                @endcan
            </div>
            Conductores
            <div class="PDF">
            </div>
            <p class="text-muted">
                Listado de conductores del departamento de transporte de Concequim de Venezuela</p>
                <div>
                </div>
                </div>
                    <div class="card-body">
                        <table class="table datatables" data-page-length='5' >
                        <thead>
                        <tr>
                    <th data-class-name="priority">C.I</th>
                    <th> Nombre</th>
                    <th> Apellido</th>
                    <th> Sexo</th>
                    <th> Fecha de Nacimiento </th>
                    <th> Telefono</th>
                    <th> Accion</th>
                </tr>
                </thead>
                <tbody>
                    @each('drivers._row', $drivers, 'driver')
                </tbody>
             </table>
            </div>
    </div>
@endsection
 
 
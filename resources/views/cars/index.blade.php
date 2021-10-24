
@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Autobuses')
@endcomponent 
      
@section('content')
    <div class="card">
        <div class="card-header card-default">
            <div class="float-right mt-10">
                <a href="{{ route('cars.create') }}" class="btn btn-primary box-shadow btn-icon"><i class="fa fa-plus"></i> Nuevo Autobuses</a>
            </div>
                Vehiculos
            <p class="text-muted"> Listado de autobuses del departamento de transporte</p>
        </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nro Control </th>
                        <th>Placa</th>
                        <th>Color</th>
                        <th>Año</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Detalles</th>
                        <th>Salidas</th>
                        <th> Choferes </th>
                     
                        <th>Action</th>
                     
                             <th>Status</th>
                       
                    </tr>
                    </thead>
                <tbody>
                    @each('cars._row', $cars, 'car')
                </tbody>
                </table>
            </div>
    </div>
@endsection 
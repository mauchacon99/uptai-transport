
@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Salida de Vehiculos')
@endcomponent 
@section('content')
    <div class="card">
        <div class="card-header card-default">
            
            <div class="float-right mt-10">
                <a href="{{ route('pdf.general', 'carsExits') }}"  target="_blank"  class="btn btn-secondary box-shadow btn-icon"><i class="fas fa-file-download"></i> Imprimir Listado PDF</a>
                <a href="{{ route('carsexit.create') }}" class="btn btn-primary box-shadow btn-icon"><i class="fa fa-plus"></i> Publicar Salida </a>
            </div>
            Salida de vehiculos 
            <p class="text-muted"> Listado de salidas del servicio de transporte de Concequim de Venezuela</p>

    <div>
      
    </div>
        </div>
            <div class="card-body">
                <table class="table">
                <thead>
                <tr>
                    <th> NRO Control </th>
                    <th> Circuito o Ruta </th>
                    <th> Fecha de Salida</th>
                    <th> Autobus </th>
                    <th> Conductor</th>
                    <th> Detalles</th>
                     <th>Accion</th>
                </tr>
                </thead>
                <tbody>
                    @each('carsExits._row', $exits, 'exit')
                </tbody>
             </table>
            </div>
    </div>
@endsection

 
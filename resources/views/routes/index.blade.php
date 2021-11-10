@extends('admin.layout')

@component('shared._breadcrumb')
     @slot('title', 'Rutas')
      @slot('description', 'home')
      @slot('state', 'tabla')@endcomponent 
      
@section('content')
    <div class="card">
        <div class="card-header card-default">
            <div class="float-right mt-10">
                @hasanyrole('editor|admin')
                <a href="{{ route('pdf.general', 'routes') }}" target="_blank" class="btn btn-secondary box-shadow btn-icon"><i class="fas fa-file-download"></i> Imprimir Listado PDF</a>
                <a href="{{ route('routes.create') }}" class="btn btn-primary box-shadow btn-icon"><i class="fa fa-plus"></i> Nuevas Rutas</a>
                @endhasanyrole
            </div>
            Rutas
            <p class="text-muted"> Listado de rutas que cumple el servicio de transporte de la empresa</p>
        </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Km</th>
                        <th>Ciudades</th>
                        <th>Referencia</th>
                        <th>Paradas</th>
                        <th>Autobuses</th>
                        <th>Conductores</th>
                    </tr>
                    </thead>
                <tbody>
                  @each('routes._row', $routes, 'route')
                </tbody>
             </table>
            </div>
    </div>
@endsection
 
 
@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Localidades o Ciudades')
@endcomponent 
      
@section('content')
    <div class="card">
        <div class="card-header card-default">
            <div class="float-right mt-10">
                @hasanyrole('editor|admin')
                    <a href="{{ route('pdf.general', 'address') }}" target="_blank" class="btn btn-secondary box-shadow btn-icon"><i class="fas fa-file-download"></i> Imprimir Listado PDF</a>
                    <a href="{{ route('address.create') }}" class="btn btn-primary box-shadow btn-icon"><i class="fa fa-plus"></i> Nueva Ciudad</a>
                @endhasanyrole
            </div>
            Ciudades
            <p class="text-muted"> Listado de ciudades para la creacion de rutas</p>
        </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Ciudad</th>
                        <th>Parroquia</th>
                        <th>Municipio</th>
                        <th>Estado</th>
                        <th>Ver Paradas</th>
                        @hasanyrole('editor|admin')
                        <th> Acciones </th>
                        @endhasanyrole
                    </tr>
                    </thead>
                    <tbody>
                        @each('address._row', $Addreses, 'address')
                    </tbody>
                 </table>
            </div>
    </div>
 @endsection

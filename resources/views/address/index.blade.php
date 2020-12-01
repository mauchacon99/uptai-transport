@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Localidades o Ciudades')
@endcomponent 
      
@section('content')
    <div class="card">
        <div class="card-header card-default">
            <div class="float-right mt-10">
                <a href="{{ route('address.create') }}" class="btn btn-primary btn-rounded box-shadow btn-icon"><i class="fa fa-plus"></i> Nueva Ciudad</a>
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
                </tr>
                </thead>
                <tbody>
                    @each('address._row', $Addreses, 'address')
                 </tbody>
             </table>
            </div>
    </div>
@endsection
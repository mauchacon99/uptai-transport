@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Conductores - Autobuses')
@endcomponent 
      
@section('content')
    <div class="card">
        <div class="card-header card-default justify-content-between">
            Reporte del uso de autobuses por el conductor {{ $driver->name }} {{ $driver->surname }} C.I {{$driver->identity }}
            <div class="row justify-content-end">
                <a  
                href="{{ route('pdf.details',  ['id' => $driver->id, 'action' => 'route-drivers-file' ])}}" 
                target="_blank"      
                class="btn btn-secondary box-shadow btn-icon"
                >
                    <i class="fas fa-file-download"> </i> 
                    Imprimir Listado PDF
                </a>
            </div>
        <div>
     </div>
        </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Km</th>
                            <th>Ciudades</th>
                            <th>Autobus</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($exits as $exit)
                                <tr>
                                <td> {{ $exit->routes->km   }} Km  </td>
                                <td> 
                                    {{ $exit->routes->addresesExit->name}} -
                                    {{ $exit->routes->addresesIntermediate->name }}  -       	
                                    {{ $exit->routes->addresesDestination->name}}
                                </td>
                                <td>
                                    {{ $exit->cars->plate}}
                                </td>
                                <td>
                                    {{$exit->details->date_exit}}
                                </td>
                                    <td>
                                    {{ $exit->details->time_exit}}
                                </td>
                                
                                </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection
 
 

@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Salida de Vehiculos')
@endcomponent 
@section('content')
    <div class="card">
        <div class="card-header card-default">
            
            Salida del autobus con numero de control <strong>#{{ $cars->number }} </strong> con placa {{ $cars->plate}}
            <p class="text-muted"> Listado de salidas de vehiculo del departamento de transporte UPTAI</p>

    <div>
      
    </div>
        </div>
            <div class="card-body">
                <table class="table display table-striped table-bordered cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th> km</th>
                    <th> Ruta</th>
                    <th> Conductor</th>
                    <th> Fecha</th>
                </tr>
                </thead>
                <tbody>
                     @foreach ($exits as $exit)
                        <tr>
                         <td> {{ $exit->routes->km   }} Km  </td>
				         <td> 
				         	{{ $exit->routes->addresesExit->name}}
							{{ $exit->routes->addresesIntermediate->name }}       	
							{{ $exit->routes->addresesDestination->name}}
				          </td>
				          <td>
				          	{{ $exit->drivers->name}}
				          	{{ $exit->drivers->surname}}
				          </td>
				          <td>
				          	{{$exit->details->date_exit}}
				          </td>
                        </tr>
               		 @endforeach
                </tbody>
             </table>
            </div>
    </div>
@endsection
 
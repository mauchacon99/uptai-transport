@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Conductores - Autobuses')
@endcomponent 
      
@section('content')
    <div class="card">
        <div class="card-header card-default">
            Reporte del uso de autobuses del conductor {{$driver->name}} {{$driver->surname}} C.I {{$driver->identity}}
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
 
 
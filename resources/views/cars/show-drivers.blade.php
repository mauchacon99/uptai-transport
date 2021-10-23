@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Conductores-Rutas')
@endcomponent 
      
@section('content')
    <div class="card">
        <div class="card-header card-default">
             
            <p class="text-muted"> Listado de conductores que han trabajado o circulado en la ruta actual en el Autobus control {{ $cars->number}} con placa {{$cars->plate}}</p>
    <div>
     </div>
        </div>
            <div class="card-body">
                <table class="table datatables" data-page-length='5' >
                <thead>
                <tr>
                    <th data-class-name="priority">C.I</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Placa Bus</th>
                    <th>Fecha salida</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($exits as $exit)
                        <tr>
		                    <td> {{ $exit->drivers->identity }} </td>
		                    <td> {{ $exit->drivers->name   }} </td>
					        <td> {{ $exit->drivers->surname}} </td>
					        <td> @upper($exit->cars->plate)	  </td>
				            <td> {{ $exit->details->date_exit}} </td>
                        </tr>
                @endforeach
                </tbody>
             </table>
            </div>
    </div>
@endsection
 
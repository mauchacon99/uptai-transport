 
 
@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Autobuses - Rutas')
@endcomponent 
      
@section('content')
    <div class="card">
        <div class="card-header card-default">
            <em> Ruta:   
            {{ $route->addresesExit->name}} -
            {{ $route->addresesDestination->name}}
            </em>
            <p class="text-muted"> Listado de autobuses, el cual han asistido la ruta actual</p>
        <div>
     </div>
        </div>
            <div class="card-body">
                <table class="table">
                <thead>
                    <tr>
                        <th>Numero</th>
                        <th>Placa</th>
                        <th>Color</th>
                        <th>Año</th>
                        <th>CI Conductor</th>
                        <th>Fecha</th>
                     </tr>
                </thead>
                <tbody>
                 @foreach ($exits as $exit)
                        <tr>
                            <td>{{ $exit->cars->number}}</td>
                            <td> @upper($exit->cars->plate)</td> 
                            <td>{{ $exit->cars->color }}</td>
                            <td>{{ $exit->cars->year }}</td>
                            <td>C.I {{ $exit->drivers->identity}}</td>
                            <td>{{ $exit->created_at}}</td>

                        </tr>
                @endforeach
                </tbody>
             </table>
            </div>
    </div>
@endsection
 
 
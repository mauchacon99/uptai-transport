
 
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
                        <th>Numero</th>
                        <th>Placa</th>
                        <th>Color</th>
                        <th>Año</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                     </tr>
                </thead>
                <tbody>
                 @foreach ($exits as $exit)
                        <tr>
                            <td>{{ $exit->cars->number}}</td>
                            <td>{{ $exit->cars->plate }}</td>
                            <td>{{ $exit->cars->color }}</td>
                            <td>{{ $exit->cars->year }}</td>
                            <td>{{ $exit->cars->tradeMarks->description}}</td>
                            <td>{{ $exit->cars->model->description }}</td>
                        </tr>
                @endforeach
                </tbody>
             </table>
            </div>
    </div>
@endsection 
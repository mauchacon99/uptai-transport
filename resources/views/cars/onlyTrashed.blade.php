@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Autobuses')
@endcomponent 
      
@section('content')
    <div class="card">
        <div class="card-header card-default">
                Vehiculos
            <p class="text-muted"> Listado de autobuses del departamento de transporte</p>
        </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nro Control </th>
                        <th>Placa</th>
                        <th>reciclar</th>
                         
                    </tr>
                    </thead>
                <tbody>
                     @foreach ($cars as $car)

                        <tr>
                            <td>{{ $car->number}}</td>
                            <td>{{ $car->plate }}</td>
                            <td>  
                                <form action="{{ route('cars.test')}}" method="POST">
                                    {!! @csrf_field() !!}
                                    <input type="hidden" name="id" value="{{$car->id}}">
                                       <button type="submit" class="btn btn-danger btn-circle"><span class="fas fa-refresh"></span></button>
                                </form>
                 			</td>
                        </tr>
                	@endforeach
                </tbody>
                </table>
            </div>
    </div>
@endsection
 
 
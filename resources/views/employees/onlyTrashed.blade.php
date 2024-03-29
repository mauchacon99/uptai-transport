
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
                        <th> Nombre </th>
                        <th>Placa</th>
                        <th>reciclar</th>
                        <th>eliminar</th>
                    </tr>
                    </thead>
                <tbody>
                     @foreach ($employees as $employee)

                        <tr>
                            <td> {{ $employee->name }} {{ $employee->surname }} </td>
                            <td> {{ $employee->identity }}</td>
                            <td>  
                                <form action="{{ route('empleados.restore')}}" method="POST">
                                    {!! @csrf_field() !!}
                                    <input type="hidden" name="id" value="{{$employee->id}}">
                                       <button type="submit" class="btn btn-info btn-circle"><span class="fas fa-refresh"></span></button>
                                </form>
                 			</td>
                             <td>
                                <form action="{{  route('empleados.remove') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{$employee->id}}">
                                    {{-- {{ method_field('DELETE')}} --}}
                                    <button type="submit" class="btn btn-danger btn-circle"><span class="fas fa-trash-alt "></span></button>
                                </form>
                             </td>
                        </tr>
                	@endforeach
                </tbody>
                </table>
            </div>
    </div>
@endsection

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
                        <th> Ciudad </th>
                        <th> Parroquia </th>
                        <th> Municipio </th>
                        <th> Estado </th>
                        <th> Restore </th> 
                        <th> Eliminar </th> 
                    </tr>
                    </thead>
                <tbody>
                    @foreach ($Addreses as $address)
                        <tr>
                            <td>{{ $address->name }} </td>
                            <td>{{ $address->parishes->name }} </td>
                            <td>{{ $address->Municipalities->name }} </td>
                            <td>{{ $address->states->name }} </td>
                            <td>  
                                <form action="{{ route('address.restore')}}" method="POST">
                                    {!! @csrf_field() !!}
                                    <input type="hidden" name="id" value="{{$address->id}}">
                                       <button type="submit" class="btn btn-info btn-circle"><span class="fas fa-refresh"></span></button>
                                </form>
                 			</td>
                            <td>
                                <form action="{{  route('address.forceDelete')  }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{$address->id}}">
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
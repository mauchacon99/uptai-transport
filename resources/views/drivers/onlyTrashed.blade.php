@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Conductores')
@endcomponent 
      
@section('content')
    <div class="card">
        <div class="card-header card-default">
            Conductores
            <div class="pdf">
            </div>
            <p class="text-muted"> Listado de conductores del departamento de transporte</p>
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
                </tr>
                </thead>
                <tbody>
                     @foreach ($drivers as $driver)

                        <tr>
                            <td>{{ $driver->identity}}</td>
                            <td>{{ $driver->name }} {{ $driver->surname }}</td>
                            <td>  
                                <form action="{{ route('drivers.restore')}}" method="POST">
                                    {!! @csrf_field() !!}
                                    <input type="hidden" name="id" value="{{$driver->id}}">
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

 
 
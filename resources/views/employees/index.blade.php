
@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Empleados')
@endcomponent 
      
@section('content')
    <div class="card">
        <div class="card-header card-default">
            <div class="float-right mt-10">
                <a href="{{ route('empleados.create') }}" class="btn btn-primary btn-rounded box-shadow btn-icon"><i class="fa fa-plus"></i> Nuevo Empleado</a>
            </div>
            Empleados
            <div class="pdf">
            </div>
            <p class="text-muted"> Listado de Empleados del departamento de transporte</p>
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
                    <th>Sexo</th>
                    <th>Edad</th>
                    <th>Telefono</th>
                    <th>Cargo</th>
                    <th> Direccion </th>
                    <th>Accion</th>
                </tr>
                </thead>
                <tbody>
                    @each('employees._row', $employees, 'employee')
                </tbody>
             </table>
            </div>
    </div>
@endsection
 

@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Empleados')
@endcomponent 
      
@section('content')
    <div class="card">
        <div class="card-header card-default">
            <div class="float-right mt-10">
                @role('admin')
                    <a href="{{ route('pdf.general', 'employees') }}" target="_blank" class="btn btn-secondary box-shadow btn-icon"><i class="fas fa-file-download"></i> Imprimir Listado PDF</a>
                    <a href="{{ route('empleados.create') }}" class="btn btn-primary box-shadow btn-icon"><i class="fa fa-plus"></i> Nuevo Empleado</a>
                @endrole
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
                    @role('admin')
                        <th>Accion</th>
                    @endrole
                </tr>
                </thead>
                <tbody>
                    @each('employees._row', $employees, 'employee')
                </tbody>
             </table>
            </div>
    </div>
@endsection
 
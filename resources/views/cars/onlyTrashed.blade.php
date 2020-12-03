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
@section('head-assets')

        <!-- DataTables -->
        <link href="{{ asset( 'admin/lib/datatables/jquery.dataTables.min.css' ) }}" rel="stylesheet" type="text/css">
        <link href="{{ asset( 'admin/lib/datatables/responsive.bootstrap.min.css' ) }}" rel="stylesheet" type="text/css">
         <link href="{{ asset( 'admin/lib/datatables/buttons.dataTables.css' ) }}" rel="stylesheet" type="text/css">
         
     
@endsection


@section('footer-assets')


    <!-- Datatables-->
    <script src="{{ asset( 'admin/lib/datatables/jquery.dataTables.min.js' ) }}"></script>
    <script src="{{ asset( 'admin/lib/datatables/dataTables.responsive.min.js' ) }}"></script>

    <script src="{{ asset( 'admin/lib/datatables/dataTables.buttons.min.js' ) }}"></script>
    <script src="{{ asset( 'admin/lib/datatables/jszip.min.js' ) }}"></script>
    <script src="{{ asset( 'admin/lib/datatables/pdfmake.min.js' ) }}"></script>
    <script src="{{ asset( 'admin/lib/datatables/vfs_fonts.js' ) }}"></script>
    <script src="{{ asset( 'admin/lib/datatables/buttons.html5.min.js' ) }}"></script>
    <script>
           
     $('.table').DataTable( {
         ordering: true,
        "scrollCollapse": true,
        "paging":         true,
        dom: '<B>frtipl',
        keys: true,
        buttons: [
            {
                extend: 'pdfHtml5',
                text: '<span class="fas fa-file-pdf fa-2x"></span>',
                titleAttr: 'Exportar a pdf',
                className: 'btn btn-primary',
                "sPdfMessage": "Conductores del Sistema de transporte"
            },
            {
                extend: 'excelHtml5',
                text: '<span class="fas fa-file-excel fa-2x"></span>',
                titleAttr: 'Exportar a excel',
                className: 'btn btn-danger'
            }
        ],
        select: true,
        language: {
            search: "<h4>Buscar:</h4>",
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla ",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "buttons": {
            "copy": "Copiar",
            "colvis": "Visibilidad"
            },
        }
    });
    </script>



@endsection

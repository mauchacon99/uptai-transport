
 
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
                    dom: 'Bfrtilp',
                    responsive:true,
                    buttons: [
                        {
                            extend: 'pdfHtml5',
                            text: '<span class="fas fa-file-pdf"></span>',
                            titleAttr: 'Exportar a pdf',
                            className: 'btn btn-success'
                        },
                        {
                            extend: 'excelHtml5',
                            text: '<span class="fas fa-file-excel"></span>',
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
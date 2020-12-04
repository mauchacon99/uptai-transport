@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Actividades')
@endcomponent 
      
@section('content')
    <div class="card">
        <div class="card-header card-default">
            Actividades de Usuarios
            <p class="text-muted"> Listado de actividades ejecutada por usuarios en el Sistema de Transporte UPTAI</p>
    <div>
       
    </div>
        </div>
            <div class="card-body">
               <table class="table">
                <thead>
                <tr>
                    <th>Tipo Accion</th>
                    <th>Usuario</th>
                    <th>Modulo </th>
                    <th>Description</th>
                    <th>Fecha y hora</th>
                    <th>Direccion IP</th>
                 </tr>
                </thead>
                <tbody>
                    @each('bitacora._row', $activities, 'activity')
                </tbody>
             </table>
            </div>
    </div>
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


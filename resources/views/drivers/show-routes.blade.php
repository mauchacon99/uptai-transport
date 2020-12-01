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
                        <th>Km</th>
                        <th>Ciudades</th>
                        <th>Autobus</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                     </tr>
                </thead>
                <tbody>
                 @foreach ($exits as $exit)
                        <tr>
                         <td> {{ $exit->routes->km   }} Km  </td>
				         <td> 
				         	{{ $exit->routes->addresesExit->name}} -
							{{ $exit->routes->addresesIntermediate->name }}  -       	
							{{ $exit->routes->addresesDestination->name}}
				          </td>
				          <td>
				          	{{ $exit->cars->plate}}
				          </td>
				          <td>
				          	{{$exit->details->date_exit}}
				          </td>
				            <td>
				          	{{ $exit->details->time_exit}}
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
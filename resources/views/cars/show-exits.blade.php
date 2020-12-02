
@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Salida de Vehiculos')
@endcomponent 
@section('content')
    <div class="card">
        <div class="card-header card-default">
            
            Salida del autobus con numero de control <strong>#{{ $cars->number }} </strong> con placa {{ $cars->plate}}
            <p class="text-muted"> Listado de salidas de vehiculo del departamento de transporte UPTAI</p>

    <div>
      
    </div>
        </div>
            <div class="card-body">
                <table class="table display table-striped table-bordered cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th> km</th>
                    <th> Ruta</th>
                    <th> Conductor</th>
                    <th> Fecha</th>
                </tr>
                </thead>
                <tbody>
                     @foreach ($exits as $exit)
                        <tr>
                         <td> {{ $exit->routes->km   }} Km  </td>
				         <td> 
				         	{{ $exit->routes->addresesExit->name}}
							{{ $exit->routes->addresesIntermediate->name }}       	
							{{ $exit->routes->addresesDestination->name}}
				          </td>
				          <td>
				          	{{ $exit->drivers->name}}
				          	{{ $exit->drivers->surname}}
				          </td>
				          <td>
				          	{{$exit->details->date_exit}}
				          </td>
                        </tr>
               		 @endforeach
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
        dom: 'Bfrtip',
        keys: true,
        buttons: [
            {
                extend: 'pdf',
                text: '<span class="fas fa-file-pdf fa-2x"></span>',
                titleAttr: 'Exportar a pdf',
                className: 'btn btn-primary',
                title: "Salida del autobus con numero de control #{{ $cars->number }} con placa {{ $cars->plate}} ",
                footer:true
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


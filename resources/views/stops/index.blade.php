@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Paradas')
@endcomponent 
      
@section('content')
    <div class="card">
        <div class="card-header card-default">
            <div class="float-right mt-10">
                <a data-toggle="modal" data-target="#ModalCreateStop" class="btn btn-primary btn-rounded box-shadow btn-icon"><i class="fa fa-plus"></i> Nueva Parada</a>
            </div>
            Parada Ciuda o direccion  {{ $address->name}}
            <div class="pdf">
            </div>
            <p class="text-muted"> Listado de Paradas de la Ciudad</p>
    <div>
     </div>
        </div>
            <div class="card-body">
                <table class="table datatables" data-page-length='5' >
                <thead>
                <tr>
                    <th data-class-name="priority">Nombre</th>
                    <th> Accion</th>
                    {{-- @if(Auth::user()->roleUser->role->id == 1) --}}
					<th>Estatus</th>
					{{-- @endif --}}
                </tr>
                </thead>
                <tbody>
                    @each('stops._row', $stops, 'stop')
                </tbody>
             </table>
            </div>
    </div>

<div class="modal fade" id="ModalCreateStop" tabindex="-1" role="dialog" aria-labelledby="ModalCarsLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalCarsLabel">Crear Parada a Ciudad {{ $address->name}} </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('stops.store', $address)}}" method="POST">
      	{!! @csrf_field() !!}
	      <div class="modal-body">
	      	 <div class="col-md-12 @if($errors->has('name')) has-error ?? has-success  @endif">
	            <input 
	            type="text" 
	            name="name"
	             id="name" 
	             placeholder="Ingrese direccion de Parada o Nombre" 
	             class="form-control"
	             value=""
	             >

	            @if($errors->has('name'))
	             <div class="text-danger">{{ $errors->first('name')}}</div>
	            @endif
	        </div>
	        </div>
	        <div class="modal-footer">
	        	 <button type="submit" class="btn btn-primary"> Insertar</button>
	        	 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        </div>
	      </div>
  	  </form>
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
@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Paradas')
@endcomponent 
      
@section('content')
    <div class="card">
        <div class="card-header card-default">
          @hasanyrole('editor|admin')
            <div class="float-right mt-10">
                <a data-toggle="modal" data-target="#ModalCreateStop" class="btn btn-primary box-shadow btn-icon"><i class="fa fa-plus"></i> Nueva Parada</a>
            </div>
          @endhasanyrole
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
                    @hasanyrole('editor|admin')
                      <th> Accion</th>
                      <th>Estatus</th>
                    @endhasanyrole
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
 
 
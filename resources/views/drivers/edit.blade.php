@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Conductores')
      @slot('description', 'Editar')
      @slot('state', 'Form')
@endcomponent 
 

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header card-default">
                Actualizar informacion del conductor
            </div>
            <div class="card-body">
                <form action="{{ route('drivers.update', $drivers) }}" method="POST" class="user">
                    {{ method_field('PUT')}}
                      @include('drivers._fields')
                    <br>
                    <div clas="form-group">
                        <div class="row">
                            <div class="col-md-6" >
                                 <a href="{{ URL::previous() }}" class="btn btn-danger btn-user btn-block">Cancelar</a>  
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-user btn-block ">
                                    Actualizar
                                 </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
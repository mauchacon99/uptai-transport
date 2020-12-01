 @extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'ciudad')
      @slot('description', 'Crear')
      @slot('state', 'Form')
@endcomponent 
 

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header card-default">
                Ingrese datos de nueva ciudad para conformar tus rutas
            </div>
            <div class="card-body">
                <form action="" method="POST" class="user">
                      @include('address._fields')
                    <br>
                    <div clas="form-group">
                        <div class="row">
                            <div class="col-md-6" >
                                 <a href="{{ URL::previous() }}" class="btn btn-danger btn-user btn-block">Cancelar</a>  
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-user btn-block ">
                                    Insertar
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
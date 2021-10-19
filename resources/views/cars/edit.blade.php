@extends('admin.layout')

@component('shared._breadcrumb')
      @slot('title', 'Autobuses')
      @slot('description', 'Crear')
      @slot('state', 'Form')
@endcomponent 
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header card-default">
                Ingrese la informacion del nuevo conductor
            </div>
            <div class="card-body">
                <form action="{{ route('cars.update', $cars) }}" method="POST" class="user">
                	  {{ method_field('PUT')}}
                      @include('cars._fields')
                    <br>
                    <div clas="form-group">
                        <div class="row"> <?php

                        ?>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
        crossorigin="anonymous">
</script>

<script type="text/javascript">


  
$(document).ready(function () {
    console.log('EDI.JS')
    $('body').on('change', '#trade_marks_id', function (event) {
            $.ajax({
                type: "get",
                url: 'modelos/'+ $(this).val(),
                success:function(data) {
                
                    $('#models_id').empty();
                     
                $.each(data, function() {
                    $('#models_id').append("<option value='" + this.id + "'>" + this.description + "</option>");
                });
            } 
        });   
    });          

});
</script>
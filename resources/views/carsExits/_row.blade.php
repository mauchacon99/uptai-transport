
    <tr>
      <td>
        {{$exit->cars->number}}
      </td>
		     <td> 
           	{{ $exit->routes->addresesExit->name}} -
      			{{ $exit->routes->addresesIntermediate->name }}  -       	
      			{{ $exit->routes->addresesDestination->name}}
         </td>
         <td>
            {{ $exit->details->date_exit}}
         </td>
         <td>
  	        <a data-toggle="modal" data-target="#modalCars_{{$exit->cars->id}}" class="">
  	            <i class="fas fa-bus fa-2x " style="color:blue"></i>
  	        </a> 
         </td>
         <td>
   			    <a  data-toggle="modal" data-target="#modalDrivers_{{$exit->drivers->id}}" class="">
  	            <i class="fas fa-user fa-2x" style="color:black"></i>
  	        </a>         	 
         </td>
         <td>
         			<a  data-toggle="modal" data-target="#modalDetails_{{$exit->details->id}}" data-toggle="modal" data-target="#exampleModal" class="">
        	            <i class="fas fa-clipboard fa-2x" style="color:green"></i>
        	     </a>         	 
         </td>
         <td>
         	   <button type="submit" class="btn btn-danger btn-circle"><span class="fas fa-trash-alt "></span></button>
               <button type="submit" class="btn btn-success btn-circle"><span class="fas fa-user-edit "></span>
              </button>
         </td>
    </tr>

<div class="modal fade" id="modalDrivers_{{$exit->drivers->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalCarsLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalCarsLabel">Conductor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		        Cedula   : {{$exit->drivers->identity}}
		        <br>
		        Nombre   : {{$exit->drivers->name}}
		        <br>
		        Apellido : {{$exit->drivers->surname}}
		         <br>
		        Sexo :    {{$exit->drivers->sex}}
		         <br>
		        Telefono: {{$exit->drivers->phone}}
        </div>
        <div class="modal-footer">
        	<h5 style="color:blue">
        		<a href=""> Ver todas las salidas del actual Conductor </a>
        	</h5>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalCars_{{$exit->cars->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalCarsLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalCarsLabel">Autobus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		        Placa:       {{$exit->cars->plate}}
		        <br>
		        Nro de Bus:  {{$exit->cars->number}}
		        <br>
		        Cant Puestos:{{$exit->cars->chairs}}
		         <br>
		        Color:       {{$exit->cars->color}}
		         <br>
		        Año:         {{$exit->cars->year}}
        </div>
        <div class="modal-footer">
 			<h5 style="color:blue">
        		<a href=""> Ver todas las salidas del actual Autobus </a>
        	</h5>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalDetails_{{$exit->details->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalCarsLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalCarsLabel">Detalles </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	 		<i class="fas fa-clock" style="color:blue">
		       </i>
		       Hora de Salida: {{$exit->details->time_exit}} 
		       <br>
		       <i class="fas fa-clock" style="color:blue"></i>
		        Hora de Retorno: {{$exit->details->time_entry}}

        </div>
        <div class="modal-footer">
        </div>
    </div>
  </div>
</div>
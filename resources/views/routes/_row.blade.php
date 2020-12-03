<tr>
        <td> 
            {{ $route->km }} Km  
        </td>
        <td> 
         	{{ $route->addresesExit->name}} 
    			-{{ $route->addresesIntermediate->name }}-       	
    			{{ $route->addresesDestination->name}}
        </td>
        <td>
            <a data-toggle="modal" data-target="#modalreference_{{$route->id}}" class="">
        	   <i class="fas fa-map-marked-alt fa-2x" style="color: green;"></i>
            </a> 
    	</td>
    	<td>
            <a data-toggle="modal" data-target="#modalstop_{{$route->id}}" class="">
                <i class="fas fa-hand-paper fa-2x" style="color: red;"></i>
            </a>
     	</td>
        <td>
            <a href="{{ route('routes.showCars', $route) }}" style="color:blue">
                    <i class="fas fa-bus fa-2x"></i>
            </a>
        </td>
     
        <td>
          <a href="{{ route('routes.showDrivers', $route)}}">
            <i class="fas fa-user-circle fa-2x" style="color: #A349A4" ></i>
          </a>
    	</td>
</tr>
 

 <div class="modal fade" id="modalreference_{{$route->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalCarsLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalCarsLabel">Autobus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
               <i class="fas fa-store-alt" style="color:blue">
               </i>
               {{$route->addresesExit->name}}: {{$route->addresesExit->starting_point}} 
               <br>
                <i class="fas fa-store-alt" style="color:blue">
               </i>
               {{$route->addresesIntermediate->name}}: {{$route->addresesIntermediate->starting_point}} 
               <br>
                <i class="fas fa-store-alt" style="color:blue">
               </i>
               {{$route->addresesDestination->name}}: {{$route->addresesDestination->starting_point}} 
               <br>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalstop_{{$route->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalCarsLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalCarsLabel">Paradas </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

                <h4> {{$route->addresesExit->name}}</h4>
                @each('routes._stop', $route->addresesExit->stops, 'stops')
                <h4> {{$route->addresesIntermediate->name}}</h4>
                @each('routes._stop', $route->addresesIntermediate->stops, 'stops')
                <h4> {{$route->addresesDestination->name}}</h4>
                @each('routes._stop', $route->addresesDestination->stops, 'stops')

        </div>
        <div class="modal-footer">
        </div>
    </div>
  </div>
</div>


{!! @csrf_field() !!}
 <div class="form-group">
    <div class="row">
       
        <div class="col-md-4 @if($errors->has('drivers_id')) has-error ?? has-success  @endif">
            <select name="drivers_id" class="form-control"  id="drivers_id">
                  <option value=""> Seleccione Conductor</option>
              @foreach($drivers as $driver)
                  <option value="{{ $driver->id }}"{{ old('drivers_id') == $driver->id ? ' selected' : ''}}> {{ $driver->name }} {{ $driver->surname }}</option>
              @endforeach
       		</select>  
        </div>
        <div class="col-md-4 @if($errors->has('routes_id')) has-error ?? has-success  @endif">
            <select name="routes_id" class="form-control"  id="routes_id">
                  <option value=""> Seleccione Ruta</option>
              @foreach($routes as $route)
                  <option value="{{ $route->id }}"{{ old('route_id') == $route->id ? ' selected' : ''}}> 	{{ $route->addresesExit->name}} 
    				-{{ $route->addresesIntermediate->name }}-       	
    				 {{ $route->addresesDestination->name}}
    			   </option>
              @endforeach
       		</select>  
        </div>
        <div class="col-md-4 @if($errors->has('cars_id')) has-error ?? has-success  @endif">
            <select name="cars_id" class="form-control"  id="cars_id">
                  <option value=""> Seleccione Autobus</option>
              @foreach($cars as $car)
                  <option value="{{ $car->id }}"{{ old('cars_id') == $cars->id ? ' selected' : ''}}> 	NRO CONTROL {{ $car->number }}  - PLACA {{ $car->plate }} 
    			   </option>
              @endforeach
       		</select>  
        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
        crossorigin="anonymous">
</script>
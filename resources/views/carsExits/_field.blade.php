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
                  <option value="{{ $car->id }}"{{ old('cars_id') == $car->id ? ' selected' : ''}}> 	NRO CONTROL {{ $car->number }}  - PLACA {{ $car->plate }} 
    			   </option>
              @endforeach
       		</select>  
        </div>
    </div>
    <br>
    <div class="row">
    	 <div class="col-md-12 @if($errors->has('description')) has-error ?? has-success  @endif">
	            <input 
	                type="description" 
	                name="description" 
	                id="description" 
	                placeholder=" Motivo de Salida" 
	                class="
	                form-control
	                "
	                value="{{ old('description') }}"
	            >
	            @if($errors->has('description'))
	                 <div class="text-danger">{{ $errors->first('description')}}</div>
	            @endif    
        </div>
       	<div class="col-md-3 @if($errors->has('description')) has-error ?? has-success  @endif">
            <label> Fecha de Retorno</label>
            <input 
                type="date" 
                name="description" 
                id="description" 
                placeholder=" Motivo de Salida" 
                class="
                form-control
                "
                value="{{ old('description') }}"
            >
            @if($errors->has('description'))
                 <div class="text-danger">{{ $errors->first('description')}}</div>
	            @endif    
	    </div>
	    <div class="col-md-3 @if($errors->has('description')) has-error ?? has-success  @endif">
	        <label> Hora de Retorno</label>
	        <input 
	            type="time" 
	            name="description" 
	            id="description" 
	            placeholder=" Motivo de Salida" 
	            class="
	            form-control
	            "
	            value="{{ old('description') }}"
	        >
	        @if($errors->has('description'))
	             <div class="text-danger">{{ $errors->first('description')}}</div>
	        @endif    
	    </div>
	    <div class="col-md-3 @if($errors->has('description')) has-error ?? has-success  @endif">
	        <label> Fecha de Salida</label>
	        <input 
	            type="date" 
	            name="description" 
	            id="description" 
	            placeholder=" Motivo de Salida" 
	            class="
	            form-control
	            "
	            value="{{ old('description') }}"
	        >
	        @if($errors->has('description'))
	             <div class="text-danger">{{ $errors->first('description')}}</div>
	        @endif    
	    </div>
	    <div class="col-md-3 @if($errors->has('description')) has-error ?? has-success  @endif">
	        <label> Hora de Salida</label>
	        <input 
	            type="time" 
	            name="description" 
	            id="description" 
	            placeholder=" Motivo de Salida" 
	            class="
	            form-control
	            "
	            value="{{ old('description') }}"
	        >
	        @if($errors->has('description'))
	             <div class="text-danger">{{ $errors->first('description')}}</div>
	        @endif    
	    </div>
    </div>
 </div>
 	<h4> Configurar publicacion <a class="btn btn-dark text-white btn-circle ">
                    <i class="fas fa-gears"></i>
                </a></h4>
 <div class="form-group">
    <div class="row">
       	<div class="col-md-6 @if($errors->has('description')) has-error ?? has-success  @endif">
            <label> Fecha de Publicar</label>
            <input 
                type="date" 
                name="description" 
                id="description" 
                placeholder=" Motivo de Salida" 
                class="
                form-control
                "
                value="{{ old('description') }}"
            >
            	@if($errors->has('description'))
                 <div class="text-danger">{{ $errors->first('description')}}</div>
	            @endif    
	    </div>
	    <div class="col-md-6 @if($errors->has('description')) has-error ?? has-success  @endif">
	        <label> Hora de Publicacion</label>
	        <input 
	            type="time" 
	            name="description" 
	            id="description" 
	            placeholder=" Motivo de Salida" 
	            class="
	            form-control
	            "
	            value="{{ old('description') }}"
	        >
	        @if($errors->has('description'))
	             <div class="text-danger">{{ $errors->first('description')}}</div>
	        @endif    
	    </div>
    </div>
 </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
        crossorigin="anonymous">
</script>
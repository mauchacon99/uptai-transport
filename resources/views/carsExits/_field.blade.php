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
                  <option value="{{ $route->id }}"{{ old('route_id') == $route->id ? ' selected' : ''}}> 	
					 {{ $route->addresesExit->name}} 
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
    	 <div class="col-md-12 mt-3 @if($errors->has('description')) has-error ?? has-success  @endif">
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
       	<div class="col-md-3 mt-4 @if($errors->has('date_exit')) has-error ?? has-success  @endif">
            <label> Fecha de Retorno</label>
            <input 
                type="date" 
                name="date_exit" 
                id="date_exit" 
                class="
                form-control
                "
                value="{{ old('date_exit') }}"
            >
            @if($errors->has('date_exit'))
                 <div class="text-danger">{{ $errors->first('date_exit')}}</div>
	    	@endif    
	    </div>
	    <div class="col-md-3 mt-4 @if($errors->has('time_entry')) has-error ?? has-success  @endif">
	        <label> Hora de Retorno</label>
	        <input 
	            type="time" 
	            name="time_entry" 
	            id="time_entry" 
	            placeholder=" Motivo de Salida" 
	            class="
	            form-control
	            "
	            value="{{ old('time_entry') }}"
	        >
	        @if($errors->has('time_entry'))
	             <div class="text-danger">{{ $errors->first('time_entry')}}</div>
	        @endif    
	    </div>
	    <div class="col-md-3 mt-4 @if($errors->has('date_exit')) has-error ?? has-success  @endif">
	        <label> Fecha de Salida</label>
	        <input 
	            type="date" 
	            name="date_exit" 
	            id="date_exit" 
	            class="
	            form-control
	            "
	            value="{{ old('date_exit') }}"
	        >
	        @if($errors->has('date_exit'))
	             <div class="text-danger">{{ $errors->first('date_exit')}}</div>
	        @endif    
	    </div>
	    <div class="col-md-3 mt-4 @if($errors->has('time_exit')) has-error ?? has-success  @endif">
	        <label> Hora de Salida</label>
	        <input 
	            type="time" 
	            name="time_exit" 
	            id="time_exit" 
	            placeholder=" Motivo de Salida" 
	            class="
	            form-control
	            "
	            value="{{ old('time_exit') }}"
	        >
	        @if($errors->has('time_exit'))
	             <div class="text-danger">{{ $errors->first('time_exit')}}</div>
	        @endif    
	    </div>
    </div>
 </div>
 	<h4 clas="mt-4"> Configurar publicacion 
		 <a class="btn btn-lg btn-white text-dark">
            <i class="fas fa-gears fa-lg">
			</i>
        </a>
	</h4>
 <div class="form-group">
    <div class="row">
       	<div class="col-md-6 @if($errors->has('date_public')) has-error ?? has-success  @endif">
            <label> Fecha de Publicar</label>
            <input 
                type="date" 
                name="date_public" 
                id="date_public" 
                class="
                form-control
                "
                value="{{ old('date_public') }}"
            >
            	@if($errors->has('date_public'))
                 <div class="text-danger">{{ $errors->first('date_public')}}</div>
	            @endif    
	    </div>
	    <div class="col-md-6 @if($errors->has('time_public')) has-error ?? has-success  @endif">
	        <label> Hora de Publicacion</label>
	        <input 
	            type="time" 
	            name="time_public" 
	            id="time_public" 
	            placeholder=" Motivo de Salida" 
	            class="
	            form-control
	            "
	            value="{{ old('time_public') }}"
	        >
	        @if($errors->has('time_public'))
	             <div class="text-danger">{{ $errors->first('time_public')}}</div>
	        @endif    
	    </div>
    </div>
 </div>

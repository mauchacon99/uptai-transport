{!! @csrf_field() !!}
 <div class="form-group">
    <div class="row">
        <div class="col-md-6 @if($errors->has('name')) has-error ?? has-success  @endif">
            <input 
                type="name" 
                name="name" 
                id="name" 
                placeholder=" Nombre de la ciudad" 
                class="
                form-control
                "
                value="{{ old('name', $address->name) }}"
            >
            @if($errors->has('name'))
                 <div class="text-danger">{{ $errors->first('name')}}</div>
            @endif    
        </div>
        <div class="col-md-6 @if($errors->has('starting_point')) has-error ?? has-success  @endif">
            <input 
                type="name" 
                name="starting_point" 
                id="starting_point" 
                placeholder="Sitios de entrada y salida - referencia" 
                class="
                form-control
                "
                value="{{ old('name', $address->starting_point) }}"
            >
            @if($errors->has('starting_point'))
                 <div class="text-danger">{{ $errors->first('starting_point')}}</div>
            @endif    
        </div>
    </div>
</div>

<div clas="form-group">
    <div class="row">
        <div class="col-md-4 @if($errors->has('states_id')) has-error ?? has-success  @endif">
            <select name="states_id" class="form-control"  id="states_id">
                  <option value=""> Selecione Estado</option>
              @foreach($states as $state)
                  <option value="{{ $state->id }}"{{ old('states_id') == $state->id ? ' selected' : ''}}> {{ $state->name }}</option>
                
              @endforeach
       		</select>  
        </div>
        @if($errors->has('states_id'))
            <div class="text-danger">{{ $errors->first('states_id')}}</div>
        @endif
        <div class="col-md-4 @if($errors->has('municipalities_id')) has-error ?? has-success  @endif">
                <select name="municipalities_id" id="municipalities_id"class="form-control">
                    <option value=""> Selecione un Municipio</option>
                 
                </select>
        </div>
        @if($errors->has('municipalities_id'))
            <div class="text-danger">{{ $errors->first('municipalities_id')}}</div>
        @endif
        <div class="col-md-4 @if($errors->has('parishes_id')) has-error ?? has-success  @endif">
                <select name="parishes_id" id="parishes_id"class="form-control">
                    <option value=""> Selecione un Parroquia</option>
                </select>
        </div>
        @if($errors->has('models'))
            <div class="text-danger">{{ $errors->first('parishes_id')}}</div>
        @endif
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
        crossorigin="anonymous">
</script>
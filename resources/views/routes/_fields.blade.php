 {!! @csrf_field() !!}
<div clas="form-group">
    <div class="row">
    	 <div class="col-md-6 @if($errors->has('km')) has-error ?? has-success  @endif">
                <input 
                type="text" 
                name="km" 
                id="km" 
                placeholder="Kilometros" 
                class="
                form-control
                "
                value="{{ old('km', $drivers->km) }}"
                >
                @if($errors->has('km'))
                     <div class="text-danger">{{ $errors->first('km')}}</div>
                @endif    
        </div>
        <div class="col-md-6 @if($errors->has('addreses_exit_id')) has-error ??     has-success  @endif">

                <select name="addreses_exit_id" id="addreses_exit_id"class="form-control">
                <option value=""> Seleccion Direccion de Salida </option>
                 @foreach($Addreses as $city)
                  <option value="{{ $city->id }}"{{ old('addreses_exit_id') == $city->id ? ' selected' : ''}}> {{ $city->name }}</option>
                 @endforeach
                </select>
        </div>
            @if($errors->has('addreses_exit_id'))
                <div class="text-danger">{{ $errors->first('addreses_exit_id')}}</div>
            @endif
    </div>
    <br>
    <div class="row">
        <div class="col-md-6 @if($errors->has('addreses_intermediate_id')) has-error ?? has-success  @endif">
                <select name="addreses_intermediate_id" id="addreses_intermediate_id"class="form-control">
                <option value=""> Seleccion Direccion Intermedia</option>
                 @foreach($Addreses as $city)
                  <option value="{{ $city->id }}"{{ old('addreses_intermediate_id') == $city->id ? ' selected' : ''}}> {{ $city->name }}</option>
                 @endforeach
                </select>
        </div>
        @if($errors->has('addreses_intermediate_id'))
            <div class="text-danger">{{ $errors->first('addreses_intermediate_id')}}</div>
        @endif
        
        <div class="col-md-6 @if($errors->has('addreses_destination_id')) has-error ?? has-success  @endif">

                <select name="addreses_destination_id" id="addreses_destination_id"class="form-control">
                    <option value=""> Seleccion Direccion Destino o Retorno</option>
                 @foreach($Addreses as $city)
                  <option value="{{ $city->id }}"{{ old('addreses_destination_id') == $city->id ? ' selected' : ''}}> {{ $city->name }}</option>
                 @endforeach
                </select>

        </div>
        @if($errors->has('addreses_destination_id'))
            <div class="text-danger">{{ $errors->first('addreses_destination_id')}}</div>
        @endif
    </div>
</div>
